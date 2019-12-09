@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>GRADE_LEVEL_CODE</strong>:&nbsp;{{ $grade_level->grade_level_code }}</li>
        <li class="list-item"><strong>GRADE_LEVEL_NAME</strong>:&nbsp;{{ $grade_level->grade_level_name }}</li>
    </div>
@endsection
