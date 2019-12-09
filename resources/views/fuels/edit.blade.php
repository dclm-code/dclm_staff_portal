@extends('layouts.bulma')
@section('title', 'Editing Fuel')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('fuels.update',$fuel->id) }}" class="form container" method="PUT" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <h1 class="title is-3">EDIT FUEL</h1>
    
    <div class="field">
        <label class="label">Department</label>
        <div class="select" style="width:100%;">
            <select id="department_id" name="department_id" class="input @error('department_id') is-invalid @enderror" >
                <option value="-1">Select Department </option>
                @foreach($departments as $department)
                <option value="{{$department->id}}">{{$department->department}}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="field">
        <label class="label">Model</label>
        <div class="control">
            <input id="model" name="model" class="input @error('model') is-invalid @enderror" value="{{ old('model', $fuel->model ?? '') }}" type="text"  required>
            @error('model')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Plate</label>
        <div class="control">
            <input id="plate" name="plate" class="input @error('plate') is-invalid @enderror" value="{{ old('plate', $fuel->plate ?? '') }}" type="text"  required>
            @error('plate')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Milage</label>
        <div class="control">
            <input id="milage" name="milage" class="input @error('milage') is-invalid @enderror" value="{{ old('milage', $fuel->milage ?? '') }}" type="number" >
            @error('milage')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Litre</label>
        <div class="control">
            <input id="litre" name="litre" class="input @error('litre') is-invalid @enderror" value="{{ old('litre', $fuel->litre ?? '') }}" type="number" >
            @error('litre')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Admin</label>
        <div class="control">
            <input id="admin" name="admin" class="input @error('admin') is-invalid @enderror" value="{{ old('admin', $fuel->admin ?? '') }}" type="text" >
            @error('admin')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Audit</label>
        <div class="control">
            <input id="audit" name="audit" class="input @error('audit') is-invalid @enderror" value="{{ old('audit', $fuel->audit ?? '') }}" type="text" >
            @error('audit')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Store</label>
        <div class="control">
            <input id="store" name="store" class="input @error('store') is-invalid @enderror" value="{{ old('store', $fuel->store ?? '') }}" type="text" >
            @error('store')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Dispenser</label>
        <div class="control">
            <input id="dispenser" name="dispenser" class="input @error('dispenser') is-invalid @enderror" value="{{ old('dispenser', $fuel->dispenser ?? '') }}" type="text" >
            @error('dispenser')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Litre Dispensed </label>
        <div class="control">
            <input id="litre_dispensed" name="litre_dispensed" class="input @error('litre_dispensed') is-invalid @enderror" value="{{ old('litre_dispensed', $fuel->litre_dispensed ?? '') }}" type="number" >
            @error('litre_dispensed')
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