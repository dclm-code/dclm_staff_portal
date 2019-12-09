@extends('layouts.bulma')
@section('title', 'creating new document_type')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('document_types.store') }}" class="form container" method="POST" enctype="multipart/form-data">
    @csrf

    <h1 class="title is-3">ADD DOCUMENT TYPE</h1>
    
    <div class="field">
        <label class="label">Type</label>
        <div class="control">
            <input id="type" name="type" class="input @error('type') is-invalid @enderror" value="{{ old('type', $document_type->type ?? '') }}" type="text"  required>
            @error('type')
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