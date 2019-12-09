@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>DEPARTMENT_CODE</strong>:&nbsp;{{ $department->department_code }}</li>
        <li class="list-item"><strong>DEPARTMENT_NAME</strong>:&nbsp;{{ $department->department_name }}</li>
        <li class="list-item"><strong>SECTION_ID</strong>:&nbsp;{{ $department->section_id }}</li>
    </div>
@endsection
