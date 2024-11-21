@extends('master')

@section('content')

<h2>User Edit</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <label for="name">Name</label>
    <input type="email" name="name" value="{{ $user->name }}">
    <label for="email">Email</label>
    <input type="text" name="email" value="{{ $user->email }}">
    <button type="submit">Update</button>
</form>

@endsection