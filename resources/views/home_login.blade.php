@extends('app')

@section('content')
    <div class="card border-light mt-2">
        <div class="card-body">

            <h4>Login</h4>

            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form method="post" action="">
                @csrf

                <div class="mb-3 mt-2">
                    <label for="email">Email</label>
                    <input required type="email" class="form-control" id="email" name="email" placeholder="enter your email">
                </div>

                <div class="mb-3">
                    <label for="password">Password</label>
                    <input required type="password" id="password" name="password" class="form-control" placeholder="enter your password">
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>

        </div>
    </div>

@endsection
