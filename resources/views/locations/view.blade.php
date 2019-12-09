@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>USER_ID</strong>:&nbsp;{{ $location->user_id }}</li>
        <li class="list-item"><strong>DEPARTMENT_ID</strong>:&nbsp;{{ $location->department_id }}</li>
        <li class="list-item"><strong>SECTION_ID</strong>:&nbsp;{{ $location->section_id }}</li>
        <li class="list-item"><strong>WORK_LGA_ID</strong>:&nbsp;{{ $location->work_lga_id }}</li>
        <li class="list-item"><strong>RESIDENTIAL_LGA_ID</strong>:&nbsp;{{ $location->residential_lga_id }}</li>
    </div>
@endsection
