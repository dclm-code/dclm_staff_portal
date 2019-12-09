@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>STAFF_ID</strong>:&nbsp;{{ $discipline->staff_id }}</li>
        <li class="list-item"><strong>COMMENTS</strong>:&nbsp;{{ $discipline->comments }}</li>
        <li class="list-item"><strong>DISCIPLINE_DATE</strong>:&nbsp;{{ $discipline->discipline_date }}</li>
        <li class="list-item"><strong>DATE_RESTORED</strong>:&nbsp;{{ $discipline->date_restored }}</li>
    </div>
@endsection
