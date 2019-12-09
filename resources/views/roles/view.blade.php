@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>ROLE</strong>:&nbsp;{{ $role->role }}</li>
    </div>
@endsection
