@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>STAFF_ID</strong>:&nbsp;{{ $leafe->staff_id }}</li>
        <li class="list-item"><strong>RELIEVER</strong>:&nbsp;{{ $leafe->reliever }}</li>
        <li class="list-item"><strong>DAYS_REQUESTED</strong>:&nbsp;{{ $leafe->days_requested }}</li>
        <li class="list-item"><strong>BALANCE_OF_LEAVE</strong>:&nbsp;{{ $leafe->balance_of_leave }}</li>
        <li class="list-item"><strong>PUBLIC_HOLIDAY</strong>:&nbsp;{{ $leafe->public_holiday }}</li>
        <li class="list-item"><strong>BASICS</strong>:&nbsp;{{ $leafe->basics }}</li>
        <li class="list-item"><strong>ALLOWANCE</strong>:&nbsp;{{ $leafe->allowance }}</li>
        <li class="list-item"><strong>DATE_RESUME</strong>:&nbsp;{{ $leafe->date_resume }}</li>
        <li class="list-item"><strong>ENTITLED</strong>:&nbsp;{{ $leafe->entitled }}</li>
    </div>
@endsection
