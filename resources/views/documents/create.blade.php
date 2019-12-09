@extends('layouts.bulma')
@section('title', 'creating new document')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('documents.store') }}" class="form container" method="POST" enctype="multipart/form-data">
    @csrf

    <h1 class="title is-3">ADD DOCUMENT</h1>
    
    <div class="field">
        <label class="label">Document Type</label>
        <div class="select" style="width:100%;">
            <select id="document_type_id" name="document_type_id" class="input @error('document_type_id') is-invalid @enderror" >
                <option value="-1">Select Document Type </option>
                @foreach($document_types as $document_type)
                <option value="{{$document_type->id}}">{{$document_type->document_type}}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="field">
        <label class="label">Filepath</label>
        <div class="control">
            <input id="filepath" name="filepath" class="input @error('filepath') is-invalid @enderror" value="{{ old('filepath', $document->filepath ?? '') }}" type="text"  required>
            @error('filepath')
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