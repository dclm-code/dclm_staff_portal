@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>TYPE</strong>:&nbsp;{{ $document_type->type }}</li>
    </div>
@endsection
