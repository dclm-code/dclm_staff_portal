@extends('layouts.bulma')
@section('title', 'Editing Leave_remark')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('leave_remarks.update',$leave_remark->id) }}" class="form container" method="PUT" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <h1 class="title is-3">EDIT LEAVE REMARK</h1>
    
    <div class="field">
        <label class="label">Hod Remark </label>
        <div class="control">
            <input id="hod_remark" name="hod_remark" class="input @error('hod_remark') is-invalid @enderror" value="{{ old('hod_remark', $leave_remark->hod_remark ?? '') }}" type="text" >
            @error('hod_remark')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Cs Remark </label>
        <div class="control">
            <input id="cs_remark" name="cs_remark" class="input @error('cs_remark') is-invalid @enderror" value="{{ old('cs_remark', $leave_remark->cs_remark ?? '') }}" type="text" >
            @error('cs_remark')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Admin Remark </label>
        <div class="control">
            <input id="admin_remark" name="admin_remark" class="input @error('admin_remark') is-invalid @enderror" value="{{ old('admin_remark', $leave_remark->admin_remark ?? '') }}" type="text" >
            @error('admin_remark')
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