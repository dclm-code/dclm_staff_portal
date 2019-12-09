@extends('layouts.bulma')
@section('title', 'Editing Promotion')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('promotions.update',$promotion->id) }}" class="form container" method="PUT" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <h1 class="title is-3">EDIT PROMOTION</h1>
    
    <div class="field">
        <label class="label">Previous Position </label>
        <div class="control">
            <input id="previous_position" name="previous_position" class="input @error('previous_position') is-invalid @enderror" value="{{ old('previous_position', $promotion->previous_position ?? '') }}" type="text" >
            @error('previous_position')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Current Position </label>
        <div class="control">
            <input id="current_position" name="current_position" class="input @error('current_position') is-invalid @enderror" value="{{ old('current_position', $promotion->current_position ?? '') }}" type="text" >
            @error('current_position')
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