@extends('layouts.bulma')
@section('title', 'creating new state')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('states.store') }}" class="form container" method="POST" enctype="multipart/form-data">
    @csrf

    <h1 class="title is-3">ADD STATE</h1>
    
    <div class="field">
        <label class="label">Country</label>
        <div class="select" style="width:100%;">
            <select id="country_id" name="country_id" class="input @error('country_id') is-invalid @enderror" >
                <option value="-1">Select Country </option>
                @foreach($countries as $country)
                <option value="{{$country->id}}">{{$country->country}}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="field">
        <label class="label">State Code </label>
        <div class="control">
            <input id="state_code" name="state_code" class="input @error('state_code') is-invalid @enderror" value="{{ old('state_code', $state->state_code ?? '') }}" type="text"  required>
            @error('state_code')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">State Name </label>
        <div class="control">
            <input id="state_name" name="state_name" class="input @error('state_name') is-invalid @enderror" value="{{ old('state_name', $state->state_name ?? '') }}" type="text"  required>
            @error('state_name')
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