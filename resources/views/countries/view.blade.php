@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>COUNTRY_CODE</strong>:&nbsp;{{ $country->country_code }}</li>
        <li class="list-item"><strong>COUNTRY_NAME</strong>:&nbsp;{{ $country->country_name }}</li>
    </div>
@endsection
