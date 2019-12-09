@extends('layouts.bulma')
@section('title', 'creating new department')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('departments.store') }}" class="form container" method="POST" enctype="multipart/form-data">
    @csrf

    <h1 class="title is-3">ADD DEPARTMENT</h1>
    
    <div class="field">
        <label class="label">Department Code </label>
        <div class="control">
            <input id="department_code" name="department_code" class="input @error('department_code') is-invalid @enderror" value="{{ old('department_code', $department->department_code ?? '') }}" type="text"  required>
            @error('department_code')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Department Name </label>
        <div class="control">
            <input id="department_name" name="department_name" class="input @error('department_name') is-invalid @enderror" value="{{ old('department_name', $department->department_name ?? '') }}" type="text"  required>
            @error('department_name')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Section</label>
        <div class="select" style="width:100%;">
            <select id="section_id" name="section_id" class="input @error('section_id') is-invalid @enderror" >
                <option value="-1">Select Section </option>
                @foreach($sections as $section)
                <option value="{{$section->id}}">{{$section->section}}</option>
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