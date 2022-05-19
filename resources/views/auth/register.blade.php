@extends('layouts.auth.app')

@section('style_css')
  <link rel="stylesheet" href="{{ asset('/styles/css/sign-up.css') }}" />
@endsection

@section('content')
    <section class="sign-up mx-auto pt-lg-100 pb-lg-100 pt-30 pb-47" id="register">
        <div class="container mx-auto">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="pb-50">
                    <a class="navbar-brand" href="../index.html">
                        <img src="images/himanitro/icon-hima.png" class="icon" height="60" width="60"/>
                    </a>
                </div>
                <h2 class="text-4xl fw-bold color-palette-1 mb-10">Sign Up</h2>
                <p class="text-lg color-palette-1 m-0">Sign up your account with us</p>
                <div class="pt-50">
                    <label for="username" class="form-label text-lg fw-medium color-palette-1 mb-10">Username</label>
                    <input type="text" 
                        class="form-control rounded-pill text-lg @error('username') is-invalid @enderror" 
                        id="username" 
                        name="username"
                        value="{{ old('username') }}" 
                        aria-describedby="username"
                        placeholder="Enter your username"
                        autocomplete="username"  
                        v-model="username"  
                        autofocus
                    >
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="pt-30">
                    <label for="name" class="form-label text-lg fw-medium color-palette-1 mb-10">Full Name</label>
                    <input 
                        type="text" 
                        class="form-control rounded-pill text-lg" 
                        id="name" 
                        name="name"
                        value="{{ old('name') }}" 
                        aria-describedby="name" 
                        placeholder="Enter your name"
                        autocomplete="name"  
                        v-model="name"  
                        autofocus
                    >
                </div>
                <div class="pt-30">
                    <label for="email" class="form-label text-lg fw-medium color-palette-1 mb-10">Email
                        Address</label>
                    <input 
                        type="email" 
                        class="form-control rounded-pill text-lg @error('email') is-invalid @enderror" 
                        id="email" 
                        name="email"
                        aria-describedby="email" 
                        value="{{ old('email') }}" required 
                        placeholder="Enter your email address"
                        autocomplete="email" 
                        @change="checkForEmailAvailability()"
                        :class="{ 'is-invalid': this.email_unavailable }"
                        v-model="email"
                    >
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="pt-30">
                    <label for="password" class="form-label text-lg fw-medium color-palette-1 mb-10">Password</label>
                    <input 
                        type="password" 
                        class="form-control rounded-pill text-lg @error('password') is-invalid @enderror" 
                        id="password" 
                        name="password"
                        aria-describedby="password" 
                        placeholder="Your password"
                        required 
                        autocomplete="new-password"
                    >
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="pt-30">
                    <label for="password" class="form-label text-lg fw-medium color-palette-1 mb-10">Konfirm Password</label>
                    <input 
                        type="password_confirm" 
                        class="form-control rounded-pill text-lg" 
                        id="password-confirm" 
                        name="password_confirmation"
                        aria-describedby="password" 
                        placeholder="Your confirm password"

                        required 
                        autocomplete="new-password"
                    >
                </div>
                <div class="button-group d-flex flex-column mx-auto pt-50">
                    <button 
                        type="submit" 
                        class="btn btn-sign-up fw-medium text-lg text-white rounded-pill mb-16"
                        {{-- href="{{ route('profile') }}" --}}
                        :disabled="this.email_unavailable"
                    >
                        Continue
                    </button>
                    <!-- <button type="submit" class="btn btn-sign-up fw-medium text-lg text-white rounded-pill mb-16"
                        role="button">Continue</button> -->
                    <a class="btn btn-sign-in fw-medium text-lg color-palette-1 rounded-pill" href="{{ route('login') }}"
                        role="button">Sign
                        In</a>
                </div>
            </form>
        </div>
    </section>
    <div class="container"style="display: none;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style_js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        Vue.use(Toasted);
        var register = new Vue({
            el: "#register",
            mounted() {
                AOS.init();
            },
            methods:{
                checkForEmailAvailability: function(){
                    var self = this;
                    axios.get('{{ route('api-register-check') }}', {
                        params:{
                            email:this.email
                        }
                    })
                        .then(function (response) {
                            if(response.data == 'Available'){
                                self.$toasted.show(
                                    "Email Anda tersedia! Silahkan lanjut langkah selanjutnya", {
                                        position: "top-center",
                                        className: "rounded",
                                        duration: 1000,
                                    }
                                );
                                self.email_unavailable = false;
                            } else{
                                self.$toasted.error(
                                    "Maaf, tampaknya email sudah terdaftarpada sistem kami", {
                                        position: "top-center",
                                        className: "rounded",
                                        duration: 1000,
                                    }
                                );
                                self.email_unavailable = true;
                            }
                            // handle success
                            console.log(response);
                        });
                }
            },
            data()    
            {
                return{
                    name: "Alvito Aditya",
                    email: "alvitooooo@gmail.com",
                    username: "alvitooadty"
                }
            },
        });
    </script>
@endsection
