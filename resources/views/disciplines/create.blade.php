@extends('layouts.bulma')
@section('title', 'creating new discipline')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('disciplines.store') }}" class="form container" method="POST" enctype="multipart/form-data">
    @csrf

    <h1 class="title is-3">ADD DISCIPLINE</h1>
    
    <div class="field">
        <label class="label">Staff</label>
        <div class="select" style="width:100%;">
            <select id="staff_id" name="staff_id" class="input @error('staff_id') is-invalid @enderror" >
                <option value="-1">Select Staff </option>
                @foreach($staffs as $staff)
                <option value="{{$staff->id}}">{{$staff->staff}}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="field">
        <label class="label">Comments</label>
            <div class="control">
                <textarea id="comments" name="comments" class="textarea @error('comments') is-invalid @enderror" >{{ old('comments', $discipline->comments ?? '') }}</textarea>
            </div>
        </div>
    
    <div class="field">
        <label class="label">Discipline Date </label>
        <div class="control">
            <input id="discipline_date" name="discipline_date" class="input @error('discipline_date') is-invalid @enderror" value="{{ old('discipline_date', $discipline->discipline_date ?? '') }}" type="text" >
            @error('discipline_date')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Date Restored </label>
        <div class="control">
            <input id="date_restored" name="date_restored" class="input @error('date_restored') is-invalid @enderror" value="{{ old('date_restored', $discipline->date_restored ?? '') }}" type="text" >
            @error('date_restored')
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