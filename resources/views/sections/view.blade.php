@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>SECTION_CODE</strong>:&nbsp;{{ $section->section_code }}</li>
        <li class="list-item"><strong>SECTION_NAME</strong>:&nbsp;{{ $section->section_name }}</li>
        <li class="list-item"><strong>GROUP_LGA_ID</strong>:&nbsp;{{ $section->group_lga_id }}</li>
    </div>
@endsection
