@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>SENDER</strong>:&nbsp;{{ $message->sender }}</li>
        <li class="list-item"><strong>RECEIVER</strong>:&nbsp;{{ $message->receiver }}</li>
        <li class="list-item"><strong>SUBJECT</strong>:&nbsp;{{ $message->subject }}</li>
        <li class="list-item"><strong>MESSAGE</strong>:&nbsp;{{ $message->message }}</li>
        <li class="list-item"><strong>DATE_SENT</strong>:&nbsp;{{ $message->date_sent }}</li>
        <li class="list-item"><strong>DATE_READ</strong>:&nbsp;{{ $message->date_read }}</li>
        <li class="list-item"><strong>REPLIED</strong>:&nbsp;{{ $message->replied }}</li>
        <li class="list-item"><strong>READSTATE</strong>:&nbsp;{{ $message->readstate }}</li>
        <li class="list-item"><strong>DELETED</strong>:&nbsp;{{ $message->deleted }}</li>
        <li class="list-item"><strong>FORWARDED</strong>:&nbsp;{{ $message->forwarded }}</li>
        <li class="list-item"><strong>FORWARDEDTO</strong>:&nbsp;{{ $message->forwardedto }}</li>
    </div>
@endsection
