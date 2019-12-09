<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\LeaveRemark;
use App\Imports\LeaveRemarksImport;
use Auth;

class LeaveRemarkController extends Controller
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
        $leave_remarks = LeaveRemark::all();
        if($request->wantsJson()){
            return $leave_remarks;

        }else{
            return view('leave_remarks.leave_remark', compact('leave_remarks'));
        }
    }

    public function create(){
            return view('leave_remarks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            LeaveRemark::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Leave_remark successfully created."
            ], 201);
        }else{
            $info = "Leave_remark successfully created";
            $leave_remarks = LeaveRemark::all();
            return view('leave_remarks.leave_remark',compact('info','leave_remarks'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LeaveRemark $leave_remark
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, LeaveRemark $leave_remark)
    {
        if($request->wantsJson()){
            return $leave_remark;
        }else{
            return view('leave_remarks.view', compact('leave_remark'));
        }
    }

    public function edit(LeaveRemark $leave_remark){
        return view('leave_remarks.edit',compact('leave_remark'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LeaveRemark  $leave_remark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LeaveRemark $leave_remark)
    {
            $leave_remark->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Leave_remark successfully updated.'], 200);
        }else{
            $info = "Leave_remark successfully updated.";
            $leave_remarks = LeaveRemark::all();
            return view('leave_remarks.leave_remark',compact('info','leave_remarks'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LeaveRemark  $leave_remark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, LeaveRemark $leave_remark)
    {
            $leave_remark->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Leave_remark  deleted successfully.'], 200);
        }else{
            $info = "Leave_remark  deleted successfully.";
            return view('leave_remarks.leave_remark', compact('info'));
        }
    }

    public function getFile()
    {
        return view('leave_remarks.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new Leave_remarksImport, request()->file('leave_remark_file'));
        return redirect('leave_remarks.leave_remark');
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
