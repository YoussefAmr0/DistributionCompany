@extends('layouts.app')
@section('content')

    <div class="row">
    <div class="back col-md-6">
    <img src="/login.png" alt="">
   </div>
   <div class="log-form col-md-6"> 
   <form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
    <span class="text-secondary">Forget Password?</span>
    <button type="button" class="btn text-primary" data-toggle="modal"
      data-target="#exampleModalScrollable"> Reset Password
    </button>
</div>
    <button type="submit" class="login-btn btn-primary">login</button>
    <div class="mb-3">
        <span class="text-secondary">Don’t have any account? </span>
        <button type="button" class="btn text-primary" data-toggle="modal"
          data-target="#exampleModalScrollable">Create Account
        </button>
    </div>
  </form>
</div>
   </div>
@endsection