@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>DOCUMENT_TYPE_ID</strong>:&nbsp;{{ $document->document_type_id }}</li>
        <li class="list-item"><strong>FILEPATH</strong>:&nbsp;{{ $document->filepath }}</li>
        <li class="list-item"><strong>USER_ID</strong>:&nbsp;{{ $document->user_id }}</li>
    </div>
@endsection
