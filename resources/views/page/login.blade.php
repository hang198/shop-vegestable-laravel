@extends('master')
@section('content')
    <div class="container">

    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a  class="btn btn-black" href="/redirect/facebook">Login with Facebook</a>
    </form>


    </div>
    @endsection
