@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>USER_ID</strong>:&nbsp;{{ $promotion->user_id }}</li>
        <li class="list-item"><strong>DATE_OF_LAST_PROMOTION</strong>:&nbsp;{{ $promotion->date_of_last_promotion }}</li>
        <li class="list-item"><strong>PREVIOUS_POSITION</strong>:&nbsp;{{ $promotion->previous_position }}</li>
        <li class="list-item"><strong>CURRENT_POSITION</strong>:&nbsp;{{ $promotion->current_position }}</li>
    </div>
@endsection
