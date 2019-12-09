<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\Promotion;
use App\Imports\PromotionsImport;
use Auth;

class PromotionController extends Controller
{
    /**
     * Return the currently login user
     * An instance of App\User model
     * @return App\User
     */
    protected function currentUser()
    {
        return Auth::guard('api')->user() ?? Auth::user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $promotions = Promotion::all();
        if($request->wantsJson()){
            return $promotions;

        }else{
            return view('promotions.promotion', compact('promotions'));
        }
    }

    public function create(){
            return view('promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Promotion::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Promotion successfully created."
            ], 201);
        }else{
            $info = "Promotion successfully created";
            $promotions = Promotion::all();
            return view('promotions.promotion',compact('info','promotions'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promotion $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Promotion $promotion)
    {
        if($request->wantsJson()){
            return $promotion;
        }else{
            return view('promotions.view', compact('promotion'));
        }
    }

    public function edit(Promotion $promotion){
        return view('promotions.edit',compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promotion $promotion)
    {
            $promotion->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Promotion successfully updated.'], 200);
        }else{
            $info = "Promotion successfully updated.";
            $promotions = Promotion::all();
            return view('promotions.promotion',compact('info','promotions'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Promotion $promotion)
    {
            $promotion->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Promotion  deleted successfully.'], 200);
        }else{
            $info = "Promotion  deleted successfully.";
            return view('promotions.promotion', compact('info'));
        }
    }

    public function getFile()
    {
        return view('promotions.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new PromotionsImport, request()->file('promotion_file'));
        return redirect('promotions.promotion');
    }



    /**
     *
     * Add Business Logic function below here.
     *
     * Do not delete anything above.
     * Neither should you add anything above.
     * In other to keep every neat and functional.
     *
     * Happy coding...
     *
     */

}
