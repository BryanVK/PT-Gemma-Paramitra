@extends('layout')
@section('content')
<h1 style="text-align: center">Tambah Data</h1>
@if(session()->has('message'))
    <p>{{ session()->get('message') }}</p>
@endif
<form action="{{ route('form.store') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @if($errors->has('name'))
            <small class="error">{{ $errors->first('name') }}</small>
        @endif
    </div>
    <div class="group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}">
        @if($errors->has('email'))
            <small class="error">{{ $errors->first('email') }}</small>
        @endif
        <div class="group">
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
            @if($errors->has('email'))
                <small class="error">{{ $errors->first('phone') }}</small>
            @endif
        </div>
        <div class="group">
            <label for="company">Company</label>
            <input type="text" id="company" name="company" value="{{ old('company') }}">
            @if($errors->has('company'))
                <small class="error">{{ $errors->first('company') }}</small>
            @endif
        </div>
        <div class="group">
            <label for="industry">Industry</label>
            <input type="industry" id="industry" name="industry" value="{{ old('industry') }}">
            @if($errors->has('industry'))
                <small class="error">{{ $errors->first('industry') }}</small>
            @endif
        </div>
        <div class="message">
            <label for="message">Message</label>
            <input type="message" id="message" name="message" value="{{ old('message') }}">
            @if($errors->has('industry'))
                <small class="message">{{ $errors->first('message') }}</small>
            @endif
        </div>
    </div>
    <div class="group">
        <a href="{{ route('form.index') }}">Batal</a>
        <button class="save">Simpan</button>
    </div>
</form>
@endsection