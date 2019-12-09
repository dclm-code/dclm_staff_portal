@extends('layouts.bulma')
@section('title', 'Editing Country')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('countries.update',$country->id) }}" class="form container" method="PUT" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <h1 class="title is-3">EDIT COUNTRY</h1>
    
    <div class="field">
        <label class="label">Country Code </label>
        <div class="control">
            <input id="country_code" name="country_code" class="input @error('country_code') is-invalid @enderror" value="{{ old('country_code', $country->country_code ?? '') }}" type="text"  required>
            @error('country_code')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Country Name </label>
        <div class="control">
            <input id="country_name" name="country_name" class="input @error('country_name') is-invalid @enderror" value="{{ old('country_name', $country->country_name ?? '') }}" type="text"  required>
            @error('country_name')
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