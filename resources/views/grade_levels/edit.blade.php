@extends('layouts.bulma')
@section('title', 'Editing Grade_level')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('grade_levels.update',$grade_level->id) }}" class="form container" method="PUT" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <h1 class="title is-3">EDIT GRADE LEVEL</h1>
    
    <div class="field">
        <label class="label">Grade Level Code </label>
        <div class="control">
            <input id="grade_level_code" name="grade_level_code" class="input @error('grade_level_code') is-invalid @enderror" value="{{ old('grade_level_code', $grade_level->grade_level_code ?? '') }}" type="text"  required>
            @error('grade_level_code')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Grade Level Name </label>
        <div class="control">
            <input id="grade_level_name" name="grade_level_name" class="input @error('grade_level_name') is-invalid @enderror" value="{{ old('grade_level_name', $grade_level->grade_level_name ?? '') }}" type="text"  required>
            @error('grade_level_name')
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