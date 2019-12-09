@extends('layouts.bulma')
@section('title', 'creating new leave_approval')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('leave_approvals.store') }}" class="form container" method="POST" enctype="multipart/form-data">
    @csrf

    <h1 class="title is-3">ADD LEAVE APPROVAL</h1>
    
    <div class="field">
        <label class="label">Days Approved </label>
        <div class="control">
            <input id="days_approved" name="days_approved" class="input @error('days_approved') is-invalid @enderror" value="{{ old('days_approved', $leave_approval->days_approved ?? '') }}" type="number" >
            @error('days_approved')
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