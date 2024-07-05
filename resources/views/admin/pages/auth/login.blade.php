@extends('admin.layouts.blank')

@section('title', 'Login')

@section('content')
    <section class="content-main d-flex justify-content-between align-items-center" style="height: 100vh;">
        <div class="card mx-auto card-login" style="min-width: 400px;">

            <div class="card-body">
                <h4 class="card-title mb-4">Sign in</h4>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <input class="form-control" placeholder="Email" type="email" name="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> <!-- form-group// -->
                    <div class="mb-3">
                        <input class="form-control" placeholder="Password" type="password" name="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> <!-- form-group// -->
                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary w-100"> Login </button>
                    </div> <!-- form-group// -->
                </form>
            </div>
        </div>
    </section>
@endsection
