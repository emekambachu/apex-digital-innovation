@extends('layouts.main2')

@section('title')
    Admin Login
@endsection

@section('content')

    <!--/ Contact -->
    <section id="contact" class="contact section-padding bg-gradient">
        <div class="container-fluid">
            <div class="container">
                <div class="heading text-center">
                    <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                        <h6 class="sub-title">Admin Login</h6>
                        <h2 class="title text-white">Admin Login</h2>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        @include('includes.alerts')
                        <form method="POST" action="{{ route('admin-login') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="text" class="form-control animated @error('username') is-invalid @enderror"
                                   data-animation="fadeInUpShorter" data-animation-delay="0.8s" name="username"
                                   placeholder="Username">

                            <input type="password" class="form-control animated @error('password') is-invalid @enderror"
                                   data-animation="fadeInUpShorter" data-animation-delay="0.9s"
                                   name="password" placeholder="Password">

                            <button type="submit" class="btn btn-lg btn-gradient-purple btn-glow animated"
                                    data-animation="fadeInUpShorter" data-animation-delay="1.1s">Login</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--/ Contact -->
@endsection
