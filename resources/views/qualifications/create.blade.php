@extends('layouts.bulma')
@section('title', 'creating new qualification')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('qualifications.store') }}" class="form container" method="POST" enctype="multipart/form-data">
    @csrf

    <h1 class="title is-3">ADD QUALIFICATION</h1>
    
    <div class="field">
        <label class="label">Qualification Code </label>
        <div class="control">
            <input id="qualification_code" name="qualification_code" class="input @error('qualification_code') is-invalid @enderror" value="{{ old('qualification_code', $qualification->qualification_code ?? '') }}" type="text"  required>
            @error('qualification_code')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Qualification Name </label>
        <div class="control">
            <input id="qualification_name" name="qualification_name" class="input @error('qualification_name') is-invalid @enderror" value="{{ old('qualification_name', $qualification->qualification_name ?? '') }}" type="text"  required>
            @error('qualification_name')
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