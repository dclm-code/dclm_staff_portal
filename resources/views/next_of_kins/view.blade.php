@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>NAME</strong>:&nbsp;{{ $next_of_kin->name }}</li>
        <li class="list-item"><strong>MOBILE_PHONE</strong>:&nbsp;{{ $next_of_kin->mobile_phone }}</li>
        <li class="list-item"><strong>HOME_PHONE</strong>:&nbsp;{{ $next_of_kin->home_phone }}</li>
        <li class="list-item"><strong>OFFICE_PHONE</strong>:&nbsp;{{ $next_of_kin->office_phone }}</li>
        <li class="list-item"><strong>HOME_ADDRESS</strong>:&nbsp;{{ $next_of_kin->home_address }}</li>
        <li class="list-item"><strong>POSTAL_ADDRESS</strong>:&nbsp;{{ $next_of_kin->postal_address }}</li>
    </div>
@endsection
