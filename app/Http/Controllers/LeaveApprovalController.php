<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\LeaveApproval;
use App\Imports\LeaveApprovalsImport;
use Auth;

class LeaveApprovalController extends Controller
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
        $leave_approvals = LeaveApproval::all();
        if($request->wantsJson()){
            return $leave_approvals;

        }else{
            return view('leave_approvals.leave_approval', compact('leave_approvals'));
        }
    }

    public function create(){
            return view('leave_approvals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            LeaveApproval::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Leave_approval successfully created."
            ], 201);
        }else{
            $info = "Leave_approval successfully created";
            $leave_approvals = LeaveApproval::all();
            return view('leave_approvals.leave_approval',compact('info','leave_approvals'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LeaveApproval $leave_approval
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, LeaveApproval $leave_approval)
    {
        if($request->wantsJson()){
            return $leave_approval;
        }else{
            return view('leave_approvals.view', compact('leave_approval'));
        }
    }

    public function edit(LeaveApproval $leave_approval){
        return view('leave_approvals.edit',compact('leave_approval'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LeaveApproval  $leave_approval
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LeaveApproval $leave_approval)
    {
            $leave_approval->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Leave_approval successfully updated.'], 200);
        }else{
            $info = "Leave_approval successfully updated.";
            $leave_approvals = LeaveApproval::all();
            return view('leave_approvals.leave_approval',compact('info','leave_approvals'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LeaveApproval  $leave_approval
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, LeaveApproval $leave_approval)
    {
            $leave_approval->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Leave_approval  deleted successfully.'], 200);
        }else{
            $info = "Leave_approval  deleted successfully.";
            return view('leave_approvals.leave_approval', compact('info'));
        }
    }

    public function getFile()
    {
        return view('leave_approvals.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new Leave_approvalsImport, request()->file('leave_approval_file'));
        return redirect('leave_approvals.leave_approval');
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
