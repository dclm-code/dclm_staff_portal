@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>STAFF_ID</strong>:&nbsp;{{ $recommendation->staff_id }}</li>
        <li class="list-item"><strong>COMMENTS</strong>:&nbsp;{{ $recommendation->comments }}</li>
        <li class="list-item"><strong>DATE_RECOMMENDED</strong>:&nbsp;{{ $recommendation->date_recommended }}</li>
        <li class="list-item"><strong>DATE_EFFECTED</strong>:&nbsp;{{ $recommendation->date_effected }}</li>
    </div>
@endsection
