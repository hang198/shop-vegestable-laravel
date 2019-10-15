@extends('master')
@section('content')
<form method="post" action="{{ route('logout') }}">
    @csrf
    <h2>Bạn có muốn đăng xuất khỏi hệ thống ?</h2>
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
    @endsection
