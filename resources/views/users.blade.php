<!-- resources/views/home.blade.php -->
@extends('layouts.main')

@section('title', 'Users Page')

@section('content')
<center>
    <h2>This is the Users Page</h2>
    <p>Welcome to the Laravel application.</p>
</center>

<ul>
@foreach ($users as $user)
        <li>{{ $user['name'] }}</li>
     <li>{{ $user->email }}</li>
      <li>{{ $user->id }}</li>

@endforeach
</ul>
@endsection
