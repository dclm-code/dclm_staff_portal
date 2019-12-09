<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\Staff;
use App\Imports\StaffsImport;
use Auth;

class StaffController extends Controller
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
        if ($this->currentUser()->role == 'admin'
            || $this->currentUser()->role == 'cs'
        ) {
            $staff = Staff::all();
        } elseif ($this->currentUser()->role == 'line head') {
            $staff = Staff::where(
                'department_id',
                $this->currentUser()['details']->department_id
            )->get();
        } else {
            $staff = Staff::where('user_id', $this->currentUser()->id)->get();
        }
        if ($request->wantsJson()) {
            return $staff;
        } else {
            return view('staff.staff', compact('staff'));
        }

    }

    public function create()
    {
        $next_of_kins = \App\NextOfKin::all();
        $grade_levels = \App\GradeLevel::all();
        $qualifications = \App\Qualification::all();
        return view(
            'staff.create', compact(
                'next_of_kins', 'grade_levels', 'qualifications'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Staff::create($request->all());
        if ($request->wantsJson()) {
            return response()->json(
                ["info"=>"Staff successfully created."], 200
            );
        } else {
            $info = "Staff successfully created";
            $staff = Staff::all();
            return view('staff.staff', compact('info', 'staff'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Staff $staff)
    {
        if ($request->wantsJson()) {
            return $staff;
        } else {
            return view('staff.view', compact('staff'));
        }
    }

    public function edit(Staff $staff)
    {
        $next_of_kins = \App\NextOfKin::all();
        $grade_levels = \App\GradeLevel::all();
        $qualifications = \App\Qualification::all();
        return view(
            'staff.edit', compact('next_of_kins', 'grade_levels', 'qualifications')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $staff->update($request->all());
        if ($request->wantsJson()) {
            return response()->json(['info' => 'Staff successfully updated.'], 200);
        } else {
            $info = "Staff successfully updated.";
            $staff = Staff::all();
            return view('staff.staff', compact('info', 'staff'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Staff $staff)
    {
        $staff->delete();
        if ($request->wantsJson()) {
            return response()->json(['info' => 'Staff  deleted successfully.'], 200);
        } else {
            $info = "Staff  deleted successfully.";
            return view('staff.staff', compact('info'));
        }
    }

    public function getFile()
    {
        return view('staff.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new StaffImport, request()->file('staff_file'));
        return redirect('staff.staff');
    }



    /**
     * Add Business Logic function below here.
     *
     * Do not delete anything above.
     * Neither should you add anything above.
     * In other to keep every neat and functional.
     *
     * Happy coding...
     */

}
