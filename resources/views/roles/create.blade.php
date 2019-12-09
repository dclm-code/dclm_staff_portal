@extends('layouts.bulma')
@section('title', 'creating new role')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('roles.store') }}" class="form container" method="POST" enctype="multipart/form-data">
    @csrf

    <h1 class="title is-3">ADD ROLE</h1>
    
    <div class="field">
        <label class="label">Role</label>
        <div class="control">
            <input id="role" name="role" class="input @error('role') is-invalid @enderror" value="{{ old('role', $role->role ?? '') }}" type="text"  required>
            @error('role')
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