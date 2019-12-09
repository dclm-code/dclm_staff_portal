@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>COUNTRY_ID</strong>:&nbsp;{{ $state->country_id }}</li>
        <li class="list-item"><strong>STATE_CODE</strong>:&nbsp;{{ $state->state_code }}</li>
        <li class="list-item"><strong>STATE_NAME</strong>:&nbsp;{{ $state->state_name }}</li>
    </div>
@endsection
