@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>QUALIFICATION_CODE</strong>:&nbsp;{{ $qualification->qualification_code }}</li>
        <li class="list-item"><strong>QUALIFICATION_NAME</strong>:&nbsp;{{ $qualification->qualification_name }}</li>
    </div>
@endsection
