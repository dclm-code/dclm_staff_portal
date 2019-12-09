@extends('layouts.bulma')
@section('title', 'creating new admin')
@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="list">
        <li class="list-item"><strong>USER_ID</strong>:&nbsp;{{ $staff->user_id }}</li>
        <li class="list-item"><strong>STAFF_NUMBER</strong>:&nbsp;{{ $staff->staff_number }}</li>
        <li class="list-item"><strong>FIRST_NAME</strong>:&nbsp;{{ $staff->first_name }}</li>
        <li class="list-item"><strong>MIDDLE_NAME</strong>:&nbsp;{{ $staff->middle_name }}</li>
        <li class="list-item"><strong>SURNAME</strong>:&nbsp;{{ $staff->surname }}</li>
        <li class="list-item"><strong>GENDER</strong>:&nbsp;{{ $staff->gender }}</li>
        <li class="list-item"><strong>DATE_OF_BIRTH</strong>:&nbsp;{{ $staff->date_of_birth }}</li>
        <li class="list-item"><strong>DATE_OF_EMPLOYMENT</strong>:&nbsp;{{ $staff->date_of_employment }}</li>
        <li class="list-item"><strong>MARITAL_STATUS</strong>:&nbsp;{{ $staff->marital_status }}</li>
        <li class="list-item"><strong>HOME_ADDRESS</strong>:&nbsp;{{ $staff->home_address }}</li>
        <li class="list-item"><strong>NEXT_OF_KIN_ID</strong>:&nbsp;{{ $staff->next_of_kin_id }}</li>
        <li class="list-item"><strong>GRADE_LEVEL_ID</strong>:&nbsp;{{ $staff->grade_level_id }}</li>
        <li class="list-item"><strong>QUALIFICATION_ID</strong>:&nbsp;{{ $staff->qualification_id }}</li>
    </div>
@endsection
