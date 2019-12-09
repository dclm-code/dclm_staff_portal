@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>STATE_ID</strong>:&nbsp;{{ $group_lga->state_id }}</li>
        <li class="list-item"><strong>REGION_ID</strong>:&nbsp;{{ $group_lga->region_id }}</li>
        <li class="list-item"><strong>LOCAL_GOVT_NAME</strong>:&nbsp;{{ $group_lga->local_govt_name }}</li>
        <li class="list-item"><strong>LOCAL_GOVT_CODE</strong>:&nbsp;{{ $group_lga->local_govt_code }}</li>
    </div>
@endsection
