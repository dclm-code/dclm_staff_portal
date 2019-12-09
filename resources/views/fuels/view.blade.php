@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>USER_ID</strong>:&nbsp;{{ $fuel->user_id }}</li>
        <li class="list-item"><strong>DEPARTMENT_ID</strong>:&nbsp;{{ $fuel->department_id }}</li>
        <li class="list-item"><strong>MODEL</strong>:&nbsp;{{ $fuel->model }}</li>
        <li class="list-item"><strong>PLATE</strong>:&nbsp;{{ $fuel->plate }}</li>
        <li class="list-item"><strong>MILAGE</strong>:&nbsp;{{ $fuel->milage }}</li>
        <li class="list-item"><strong>LITRE</strong>:&nbsp;{{ $fuel->litre }}</li>
        <li class="list-item"><strong>ADMIN</strong>:&nbsp;{{ $fuel->admin }}</li>
        <li class="list-item"><strong>AUDIT</strong>:&nbsp;{{ $fuel->audit }}</li>
        <li class="list-item"><strong>STORE</strong>:&nbsp;{{ $fuel->store }}</li>
        <li class="list-item"><strong>DISPENSER</strong>:&nbsp;{{ $fuel->dispenser }}</li>
        <li class="list-item"><strong>LITRE_DISPENSED</strong>:&nbsp;{{ $fuel->litre_dispensed }}</li>
    </div>
@endsection
