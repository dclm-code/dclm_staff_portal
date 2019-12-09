@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>HOD_REMARK</strong>:&nbsp;{{ $leave_remark->hod_remark }}</li>
        <li class="list-item"><strong>CS_REMARK</strong>:&nbsp;{{ $leave_remark->cs_remark }}</li>
        <li class="list-item"><strong>ADMIN_REMARK</strong>:&nbsp;{{ $leave_remark->admin_remark }}</li>
    </div>
@endsection
