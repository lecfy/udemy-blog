@extends('app')

@section('content')

    <div class="card border-light mt-2">
        <div class="card-body">

            <h4>Sign Up</h4>

            <form method="post" action="">
                @csrf

                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="please enter your name">
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="please enter your email">
                </div>

                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="please enter your password">
                </div>

                <button type="submit" class="btn btn-secondary">Sign up</button>

            </form>

        </div>
    </div>

@endsection
