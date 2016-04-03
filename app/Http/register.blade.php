@extends('main')
@section('content')
    <div class="container">
        <form class="form-register">
            <h2 class="form-register-heading"> Register New Account </h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" input="inputRegisterEmail" class="form-control" placeholder="Email Address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" input="inputRegisterPassword" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    </form>
    
    </div>

@endsection
