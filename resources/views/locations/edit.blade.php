@extends('layouts.bulma')
@section('title', 'Editing Location')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('locations.update',$location->id) }}" class="form container" method="PUT" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <h1 class="title is-3">EDIT LOCATION</h1>
    
    <div class="field">
        <label class="label">Department Id </label>
        <div class="control">
            <input id="department_id" name="department_id" class="input @error('department_id') is-invalid @enderror" value="{{ old('department_id', $location->department_id ?? '') }}" type="number" >
            @error('department_id')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Section Id </label>
        <div class="control">
            <input id="section_id" name="section_id" class="input @error('section_id') is-invalid @enderror" value="{{ old('section_id', $location->section_id ?? '') }}" type="number" >
            @error('section_id')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Work Lga Id </label>
        <div class="control">
            <input id="work_lga_id" name="work_lga_id" class="input @error('work_lga_id') is-invalid @enderror" value="{{ old('work_lga_id', $location->work_lga_id ?? '') }}" type="number" >
            @error('work_lga_id')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Residential Lga Id </label>
        <div class="control">
            <input id="residential_lga_id" name="residential_lga_id" class="input @error('residential_lga_id') is-invalid @enderror" value="{{ old('residential_lga_id', $location->residential_lga_id ?? '') }}" type="number" >
            @error('residential_lga_id')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
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