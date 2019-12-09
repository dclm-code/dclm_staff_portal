@extends('layouts.bulma')
@section('title', 'creating new group_lga')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('group_lgas.store') }}" class="form container" method="POST" enctype="multipart/form-data">
    @csrf

    <h1 class="title is-3">ADD GROUP LGA</h1>
    
    <div class="field">
        <label class="label">State</label>
        <div class="select" style="width:100%;">
            <select id="state_id" name="state_id" class="input @error('state_id') is-invalid @enderror" >
                <option value="-1">Select State </option>
                @foreach($states as $state)
                <option value="{{$state->id}}">{{$state->state}}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="field">
        <label class="label">Region</label>
        <div class="select" style="width:100%;">
            <select id="region_id" name="region_id" class="input @error('region_id') is-invalid @enderror" >
                <option value="-1">Select Region </option>
                @foreach($regions as $region)
                <option value="{{$region->id}}">{{$region->region}}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="field">
        <label class="label">Local Govt Name </label>
        <div class="control">
            <input id="local_govt_name" name="local_govt_name" class="input @error('local_govt_name') is-invalid @enderror" value="{{ old('local_govt_name', $group_lga->local_govt_name ?? '') }}" type="text"  required>
            @error('local_govt_name')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Local Govt Code </label>
        <div class="control">
            <input id="local_govt_code" name="local_govt_code" class="input @error('local_govt_code') is-invalid @enderror" value="{{ old('local_govt_code', $group_lga->local_govt_code ?? '') }}" type="text"  required>
            @error('local_govt_code')
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