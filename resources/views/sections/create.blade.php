@extends('layouts.bulma')
@section('title', 'creating new section')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('sections.store') }}" class="form container" method="POST" enctype="multipart/form-data">
    @csrf

    <h1 class="title is-3">ADD SECTION</h1>
    
    <div class="field">
        <label class="label">Section Code </label>
        <div class="control">
            <input id="section_code" name="section_code" class="input @error('section_code') is-invalid @enderror" value="{{ old('section_code', $section->section_code ?? '') }}" type="text"  required>
            @error('section_code')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Section Name </label>
        <div class="control">
            <input id="section_name" name="section_name" class="input @error('section_name') is-invalid @enderror" value="{{ old('section_name', $section->section_name ?? '') }}" type="text"  required>
            @error('section_name')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Group Lga</label>
        <div class="select" style="width:100%;">
            <select id="group_lga_id" name="group_lga_id" class="input @error('group_lga_id') is-invalid @enderror" >
                <option value="-1">Select Group Lga </option>
                @foreach($group_lgas as $group_lga)
                <option value="{{$group_lga->id}}">{{$group_lga->group_lga}}</option>
                @endforeach
            </select>
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