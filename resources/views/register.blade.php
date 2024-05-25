@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5">Registration Form <a href="{{route('loginroute')}}">Go to Login Page</a></h1>
    <form method="POST" action="/user">
        @csrf
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" name="fullname" class="form-control" id="fullname" placeholder="">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="">
        </div>
        <div class="mb-3">
        <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control pass" aria-describedby="passwordHelpBlock">
        </div>
        <div class="mb-3">
        <label for="cpassword" class="form-label">Confirm Password</label>
            <input type="password" name="cpassword" id="cpassword" class="form-control cpass" aria-describedby="passwordHelpBlock">
        </div>
        <input type="submit" onclick="return abhi()" class="btn btn-primary"/>
    </form>
    <script>
        //this is js code / client side
        function abhi(){

            //get the password value
            var p = document.querySelector('.pass').value;

            console.log('p>>',p);

            //get the cpassword value
            //check both and
            var cp = document.querySelector('.cpass').value;

            console.log('cp>>',cp);

            if(p == cp){
                return true
            }else{
                alert('password and confirm password does not match');
            }
            //if equal return true

            //else return false

            return false;
        }
    </script>
@endsection