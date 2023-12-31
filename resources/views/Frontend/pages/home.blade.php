@extends('Frontend.layouts.main')

@section('content-wrapper')
    <div class="row my-lg-5">
      <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0 float-md-end" src="https://img.freepik.com/free-vector/women-climacteric-concept_23-2148671594.jpg?w=900&t=st=1687495455~exp=1687496055~hmac=dcc7cb41123c843d5ab3dc2b1ad96f953de6c2ade1faae2d56c2ef84013f5629" alt="..." /></div>
        <div class="col-sm-6 my-lg-5 my-5">
            <div class="my-lg-5">
                <h4 class="text-custom">Jauhkan Diri dari Kanker Serviks</h4>
                <p class="text-custom-2">
                    Secara global, kanker serviks menjadi kanker paling umum ke-4 diantara para wanita 
                    dengan estimasi sebesar 604.000 kasus baru dan kematian sebanyak 342.000 jiwa pada tahun 2020.
                    Sebagian besar kanker serviks (lebih dari 95%) disebabkan oleh human papillomavirus (HPV). 
                    Tetapi tingkat cakupan vaksin HPV sangat rendah saat ini (bahkan di beberapa negara maju) menjadikan
                    skrining rutin sebagai agenda penting yang harus dilakukan para wanita 
                    untuk mengetahui kondisi kesehatan seksual mereka.
                    Jadi, tunggu apalagi? 
                    Periksa sekarang juga! 
                </p>
                <a href="{{ URL::to('diagnosa') }}" class="btn btn-custom"><i class="fas fa-play-circle me-1"></i> Mulai
                    Periksa</a>
            </div>
        </div>
        {{-- <div class="col-sm-6 my-lg-5 px-lg-5">
            <div class="card mx-lg-5 login-session">
                <div class="card-body">
                    <h4 class="card-title text-center text-custom mb-4">Login Admin</h4>
                    @if (session()->has('error'))
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </symbol>
                            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                            </symbol>
                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </symbol>
                        </svg>
                        <div class="alert alert-danger alert-dismissible d-flex align-items-center fade show" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" />
                            </svg>
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ URL::to('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label text-custom">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                                name="username">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password"
                                class="form-label text-custom @error('password') is-invalid @enderror">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label text-custom" for="remember">Remember
                                Me</label>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-custom-2 fw-bold"><i
                                    class="fa-solid fa-right-to-bracket me-1"></i>
                                Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
