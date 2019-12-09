@extends('layouts.bulma')
@section('title', 'creating new next_of_kin')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('next_of_kins.store') }}" class="form container" method="POST" enctype="multipart/form-data">
    @csrf

    <h1 class="title is-3">ADD NEXT OF KIN</h1>
    
    <div class="field">
        <label class="label">Name</label>
        <div class="control">
            <input id="name" name="name" class="input @error('name') is-invalid @enderror" value="{{ old('name', $next_of_kin->name ?? '') }}" type="text"  required>
            @error('name')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Mobile Phone </label>
        <div class="control">
            <input id="mobile_phone" name="mobile_phone" class="input @error('mobile_phone') is-invalid @enderror" value="{{ old('mobile_phone', $next_of_kin->mobile_phone ?? '') }}" type="text"  required>
            @error('mobile_phone')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Home Phone </label>
        <div class="control">
            <input id="home_phone" name="home_phone" class="input @error('home_phone') is-invalid @enderror" value="{{ old('home_phone', $next_of_kin->home_phone ?? '') }}" type="text" >
            @error('home_phone')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Office Phone </label>
        <div class="control">
            <input id="office_phone" name="office_phone" class="input @error('office_phone') is-invalid @enderror" value="{{ old('office_phone', $next_of_kin->office_phone ?? '') }}" type="text" >
            @error('office_phone')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Home Address </label>
            <div class="control">
                <textarea id="home_address" name="home_address" class="textarea @error('home_address') is-invalid @enderror" >{{ old('home_address', $next_of_kin->home_address ?? '') }}</textarea>
            </div>
        </div>
    
    <div class="field">
        <label class="label">Postal Address </label>
            <div class="control">
                <textarea id="postal_address" name="postal_address" class="textarea @error('postal_address') is-invalid @enderror" >{{ old('postal_address', $next_of_kin->postal_address ?? '') }}</textarea>
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