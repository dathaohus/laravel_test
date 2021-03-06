<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="signin">
        <form method = "POST" action="{{url('/signin')}}" style="width: 60%;">
            @csrf
            <h3 style="text-align: center"><b>Signin</b></h3>
            <br>
            <div class="row">
                <label for="email" class="col-sm-4 col-form-label"><b>Email</b></label><br>
                <input type="text" id = "email" class = "col-sm-7 form-control" name = "email" placeholder = "Enter your email..">
            </div>
            <br>
            <div class="row">
                <label for="password" class="col-sm-4 col-form-label"><b>Password</b></label><br>
                <input id="password" type="password" class="col-sm-7 form-control" name="password" placeholder = "Enter your password..">
            </div>
            <br>
            <div class="form-group justify-content-center">
                <div class="btn-signup" style="text-align: center" >
                    <button type="submit" class="btn btn-outline-dark">
                        Signin
                    </button>
                </div>
            </div>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
</div>
</body>
</html>
