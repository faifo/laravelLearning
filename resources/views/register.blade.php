 @extends('main')
 @section('css')
 <link href="login.css" rel="stylesheet">
 @endsection
 @section('content')
    <div class="container">
        <form class="form-signin">
            <h2 class="form-signin-heading">Register new account<h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Passwrod</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>
    </div>
@endsection
