@extends('layouts.bulma')
@section('title', 'Editing Leafe')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('leaves.update',$leafe->id) }}" class="form container" method="PUT" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <h1 class="title is-3">EDIT LEAFE</h1>
    
    <div class="field">
        <label class="label">Staff Id </label>
        <div class="control">
            <input id="staff_id" name="staff_id" class="input @error('staff_id') is-invalid @enderror" value="{{ old('staff_id', $leafe->staff_id ?? '') }}" type="number" >
            @error('staff_id')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Reliever</label>
        <div class="control">
            <input id="reliever" name="reliever" class="input @error('reliever') is-invalid @enderror" value="{{ old('reliever', $leafe->reliever ?? '') }}" type="number" >
            @error('reliever')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Days Requested </label>
        <div class="control">
            <input id="days_requested" name="days_requested" class="input @error('days_requested') is-invalid @enderror" value="{{ old('days_requested', $leafe->days_requested ?? '') }}" type="number" >
            @error('days_requested')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Balance Of Leave </label>
        <div class="control">
            <input id="balance_of_leave" name="balance_of_leave" class="input @error('balance_of_leave') is-invalid @enderror" value="{{ old('balance_of_leave', $leafe->balance_of_leave ?? '') }}" type="number" >
            @error('balance_of_leave')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Public Holiday </label>
        <div class="control">
            <input id="public_holiday" name="public_holiday" class="input @error('public_holiday') is-invalid @enderror" value="{{ old('public_holiday', $leafe->public_holiday ?? '') }}" type="number" >
            @error('public_holiday')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Basics</label>
        <div class="control">
            <input id="basics" name="basics" class="input @error('basics') is-invalid @enderror" value="{{ old('basics', $leafe->basics ?? '') }}" type="number" >
            @error('basics')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Allowance</label>
        <div class="control">
            <input id="allowance" name="allowance" class="input @error('allowance') is-invalid @enderror" value="{{ old('allowance', $leafe->allowance ?? '') }}" type="number" >
            @error('allowance')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Entitled</label>
        <div class="control">
            <input id="entitled" name="entitled" class="input @error('entitled') is-invalid @enderror" value="{{ old('entitled', $leafe->entitled ?? '') }}" type="number" >
            @error('entitled')
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