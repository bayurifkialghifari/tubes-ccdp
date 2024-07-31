@extends('layouts.auth')
@section('title')
    Login
@endsection
@section('content')
    <div class="container d-flex flex-column">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    <div class="text-center mt-4">
                        <h1 class="h2">Welcome back!</h1>
                        <p class="lead">
                            Sign in to your account to continue
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-3">
                                <form method="POST" action="{{ url('/login') }}">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        @component('components.atoms.input', [
                                            'type'=> 'email', 
                                            'name' => 'email', 
                                            'placeholder' => 'Enter your email'
                                        ])    
                                        @endcomponent

                                        @component('components.molecules.input-error', ['input' => 'email'])
                                        @endcomponent
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        @component('components.atoms.input', [
                                            'type'=> 'password', 
                                            'name' => 'password', 
                                            'placeholder' => 'Enter your password'
                                        ])    
                                        @endcomponent

                                        @component('components.molecules.input-error', ['input' => 'password'])
                                        @endcomponent
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <button type="submit" class="btn btn-primary float-end">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection