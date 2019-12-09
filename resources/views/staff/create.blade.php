@extends('layouts.bulma')
@section('title', 'creating new staff')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('staff.store') }}" class="form container" method="POST" enctype="multipart/form-data">
    @csrf

    <h1 class="title is-3">ADD STAFF</h1>
    
    <div class="field">
        <label class="label">Staff Number </label>
        <div class="control">
            <input id="staff_number" name="staff_number" class="input @error('staff_number') is-invalid @enderror" value="{{ old('staff_number', $staff->staff_number ?? '') }}" type="text"  required>
            @error('staff_number')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">First Name </label>
        <div class="control">
            <input id="first_name" name="first_name" class="input @error('first_name') is-invalid @enderror" value="{{ old('first_name', $staff->first_name ?? '') }}" type="text"  required>
            @error('first_name')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Middle Name </label>
        <div class="control">
            <input id="middle_name" name="middle_name" class="input @error('middle_name') is-invalid @enderror" value="{{ old('middle_name', $staff->middle_name ?? '') }}" type="text" >
            @error('middle_name')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Surname</label>
        <div class="control">
            <input id="surname" name="surname" class="input @error('surname') is-invalid @enderror" value="{{ old('surname', $staff->surname ?? '') }}" type="text"  required>
            @error('surname')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Marital Status </label>
        <div class="control">
            <input id="marital_status" name="marital_status" class="input @error('marital_status') is-invalid @enderror" value="{{ old('marital_status', $staff->marital_status ?? '') }}" type="text"  required>
            @error('marital_status')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Home Address </label>
            <div class="control">
                <textarea id="home_address" name="home_address" class="textarea @error('home_address') is-invalid @enderror" >{{ old('home_address', $staff->home_address ?? '') }}</textarea>
            </div>
        </div>
    
    <div class="field">
        <label class="label">Next Of Kin</label>
        <div class="select" style="width:100%;">
            <select id="next_of_kin_id" name="next_of_kin_id" class="input @error('next_of_kin_id') is-invalid @enderror" >
                <option value="-1">Select Next Of Kin </option>
                @foreach($next_of_kins as $next_of_kin)
                <option value="{{$next_of_kin->id}}">{{$next_of_kin->next_of_kin}}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="field">
        <label class="label">Grade Level</label>
        <div class="select" style="width:100%;">
            <select id="grade_level_id" name="grade_level_id" class="input @error('grade_level_id') is-invalid @enderror" >
                <option value="-1">Select Grade Level </option>
                @foreach($grade_levels as $grade_level)
                <option value="{{$grade_level->id}}">{{$grade_level->grade_level}}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="field">
        <label class="label">Qualification</label>
        <div class="select" style="width:100%;">
            <select id="qualification_id" name="qualification_id" class="input @error('qualification_id') is-invalid @enderror" >
                <option value="-1">Select Qualification </option>
                @foreach($qualifications as $qualification)
                <option value="{{$qualification->id}}">{{$qualification->qualification}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="field is-grouped">
        <p class="control">
            <button type="submit" class="button is-primary">
                Submit
            </button>
        </p>
        <p class="control">
            <button type="reset" class="button is-light">
                Clear
            </button>
        </p>
    </div>
</form>
@endsection