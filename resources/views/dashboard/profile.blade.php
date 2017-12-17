@extends('layouts.app')

@section('content')
	<br>
    <h1>My Profile</h1>
    <table class="table table-stripped">
    	<tr>
    		<td>Name</td>
    		<td>{{ Auth::user()->name }}</td>
    	</tr>
    	<tr>
    		<td>email</td>
    		<td>{{ Auth::user()->email }}</td>
    	</tr>
    </table>
    <br>
    <a href="/profile/edit/"><button class="btn btn-primary">Edit Profile</button></a>
	<a href="/profile/passwordreset"><button class="btn btn-primary">Change Password</button></a>
@endsection