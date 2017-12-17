@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <br><br>
     <div class="row">
	  <div class="col-lg-6">
	    <img class="img-circle" src="/img/profile0.jpg" width="150" height="150">
	    <h2>Giovan Isa Musthofa</h2>
	    <p><a class="btn btn-default" href="https://giovanism.github.io/" target="_blank" role="button">View portfolio &raquo;</a></p>
	  </div>
	  <div class="col-lg-6">
	    <img class="img-circle" src="/img/profile1.jpg" alt="Generic placeholder image" width="150" height="150">
	    <h2>Nicolaus Christian Gozali</h2>
	    <p><a class="btn btn-default" href="https://nicolauscg.github.io/" target="_blank" role="button">View portfolio &raquo;</a></p>
	  </div>
	</div>
@endsection

