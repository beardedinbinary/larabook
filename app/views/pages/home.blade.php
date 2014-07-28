@extends('layouts.default')

@section('content')


<div class="jumbotron">
        <h1>Welcome To Larabook</h1>
        <p>Welcom to the premier place to talk about Laravel with others. Why don't you sign up to see what all the fuss is about? </p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
        {{ link_to_route('register_path', 'Sign Up!', null, ['class' => 'btn btn-lg btn-primary'] )}}
        </p>
      </div>

@stop
