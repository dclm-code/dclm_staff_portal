<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\Recommendation;
use App\Imports\RecommendationsImport;
use Auth;

class RecommendationController extends Controller
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
        $recommendations = Recommendation::all();
        if($request->wantsJson()){
            return $recommendations;

        }else{
            return view('recommendations.recommendation', compact('recommendations'));
        }
    }

    public function create(){
            return view('recommendations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Recommendation::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Recommendation successfully created."
            ], 201);
        }else{
            $info = "Recommendation successfully created";
            $recommendations = Recommendation::all();
            return view('recommendations.recommendation',compact('info','recommendations'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recommendation $recommendation
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Recommendation $recommendation)
    {
        if($request->wantsJson()){
            return $recommendation;
        }else{
            return view('recommendations.view', compact('recommendation'));
        }
    }

    public function edit(Recommendation $recommendation){
        return view('recommendations.edit',compact('recommendation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recommendation  $recommendation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recommendation $recommendation)
    {
            $recommendation->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Recommendation successfully updated.'], 200);
        }else{
            $info = "Recommendation successfully updated.";
            $recommendations = Recommendation::all();
            return view('recommendations.recommendation',compact('info','recommendations'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recommendation  $recommendation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Recommendation $recommendation)
    {
            $recommendation->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Recommendation  deleted successfully.'], 200);
        }else{
            $info = "Recommendation  deleted successfully.";
            return view('recommendations.recommendation', compact('info'));
        }
    }

    public function getFile()
    {
        return view('recommendations.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new RecommendationsImport, request()->file('recommendation_file'));
        return redirect('recommendations.recommendation');
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
