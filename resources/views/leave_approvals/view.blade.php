@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>DAYS_APPROVED</strong>:&nbsp;{{ $leave_approval->days_approved }}</li>
        <li class="list-item"><strong>CS_APPROVAL</strong>:&nbsp;{{ $leave_approval->cs_approval }}</li>
        <li class="list-item"><strong>HOD_APPROVAL</strong>:&nbsp;{{ $leave_approval->hod_approval }}</li>
        <li class="list-item"><strong>ADMIN_APPROVAL</strong>:&nbsp;{{ $leave_approval->admin_approval }}</li>
    </div>
@endsection
