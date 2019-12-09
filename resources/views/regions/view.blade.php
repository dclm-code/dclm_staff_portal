@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>REGION_CODE</strong>:&nbsp;{{ $region->region_code }}</li>
        <li class="list-item"><strong>REGION_NAME</strong>:&nbsp;{{ $region->region_name }}</li>
        <li class="list-item"><strong>STATE_ID</strong>:&nbsp;{{ $region->state_id }}</li>
    </div>
@endsection
