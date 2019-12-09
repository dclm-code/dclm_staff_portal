@extends('layouts.bulma')
@section('title', 'creating new region')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('regions.store') }}" class="form container" method="POST" enctype="multipart/form-data">
    @csrf

    <h1 class="title is-3">ADD REGION</h1>
    
    <div class="field">
        <label class="label">Region Code </label>
        <div class="control">
            <input id="region_code" name="region_code" class="input @error('region_code') is-invalid @enderror" value="{{ old('region_code', $region->region_code ?? '') }}" type="text"  required>
            @error('region_code')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Region Name </label>
        <div class="control">
            <input id="region_name" name="region_name" class="input @error('region_name') is-invalid @enderror" value="{{ old('region_name', $region->region_name ?? '') }}" type="text"  required>
            @error('region_name')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">State</label>
        <div class="select" style="width:100%;">
            <select id="state_id" name="state_id" class="input @error('state_id') is-invalid @enderror" >
                <option value="-1">Select State </option>
                @foreach($states as $state)
                <option value="{{$state->id}}">{{$state->state}}</option>
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