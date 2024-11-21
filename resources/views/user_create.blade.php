@extends('master')

@section('content')

<h2>User Create</h2>

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" value="">
    <label for="email">Email</label>
    <input type="email" name="email" value="">
    <label for="password">Password</label>
    <input type="password" name="password" value="">
    <button type="submit">Create</button>
</form>

@endsection