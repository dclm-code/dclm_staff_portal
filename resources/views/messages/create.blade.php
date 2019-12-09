@extends('layouts.bulma')
@section('title', 'creating new message')
@section('sidebar')
@parent
@endsection
@section('content')
<form action="{{ route('messages.store') }}" class="form container" method="POST" enctype="multipart/form-data">
    @csrf

    <h1 class="title is-3">ADD MESSAGE</h1>
    
    <div class="field">
        <label class="label">Sender</label>
        <div class="select" style="width:100%;">
            <select id="sender" name="sender" class="input @error('sender') is-invalid @enderror" >
                <option value="-1">Select Sender</option>
                @foreach($senders as $sender)
                <option value="{{$sender->id}}">{{$sender->sender}}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="field">
        <label class="label">Receiver</label>
        <div class="select" style="width:100%;">
            <select id="receiver" name="receiver" class="input @error('receiver') is-invalid @enderror" >
                <option value="-1">Select Receiver</option>
                @foreach($receivers as $receiver)
                <option value="{{$receiver->id}}">{{$receiver->receiver}}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="field">
        <label class="label">Subject</label>
        <div class="control">
            <input id="subject" name="subject" class="input @error('subject') is-invalid @enderror" value="{{ old('subject', $message->subject ?? '') }}" type="text"  required>
            @error('subject')
            <span class="notification is-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="field">
        <label class="label">Message</label>
            <div class="control">
                <textarea id="message" name="message" class="textarea @error('message') is-invalid @enderror" >{{ old('message', $message->message ?? '') }}</textarea>
            </div>
        </div>
    
    <div class="field">
        <label class="label">Forwardedto</label>
        <div class="select" style="width:100%;">
            <select id="forwardedto" name="forwardedto" class="input @error('forwardedto') is-invalid @enderror" >
                <option value="-1">Select Forwardedto</option>
                @foreach($forwardedtos as $forwardedto)
                <option value="{{$forwardedto->id}}">{{$forwardedto->forwardedto}}</option>
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