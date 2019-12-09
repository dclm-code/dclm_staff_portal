@extends('layouts.bulma')
@section('title', 'creating new recommendation')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('recommendations.store') }}" class="form container" method="POST" enctype="multipart/form-data">
    @csrf

    <h1 class="title is-3">ADD RECOMMENDATION</h1>
    
    <div class="field">
        <label class="label">Staff Id </label>
        <div class="control">
            <input id="staff_id" name="staff_id" class="input @error('staff_id') is-invalid @enderror" value="{{ old('staff_id', $recommendation->staff_id ?? '') }}" type="number" >
            @error('staff_id')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Comments</label>
            <div class="control">
                <textarea id="comments" name="comments" class="textarea @error('comments') is-invalid @enderror" >{{ old('comments', $recommendation->comments ?? '') }}</textarea>
            </div>
        </div>
    
    <div class="field">
        <label class="label">Date Recommended </label>
        <div class="control">
            <input id="date_recommended" name="date_recommended" class="input @error('date_recommended') is-invalid @enderror" value="{{ old('date_recommended', $recommendation->date_recommended ?? '') }}" type="text" >
            @error('date_recommended')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Date Effected </label>
        <div class="control">
            <input id="date_effected" name="date_effected" class="input @error('date_effected') is-invalid @enderror" value="{{ old('date_effected', $recommendation->date_effected ?? '') }}" type="text" >
            @error('date_effected')
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