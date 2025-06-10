@if(session('error'))
  
    @push('js')
    <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Something went wrong!",
        footer: '<a href="#">Why do I have this issue?</a>'
        });
    </script>

    @endpush
@endif
@extends('layout.appadm')

@section('contentlogin')
<div class="theme-loader">
    <div class="loader-track">
        <div class="preloader-wrapper">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
          
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
          
            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->

  <section class="login-block">
      <!-- Container-fluid starts -->
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                      <form class="md-float-material form-material" action="{{ url('proses_login') }}" method="POST">
                        @csrf

                          <div class="text-center">
                              <img src="{{ asset('images/LOGO_SMK.png')}}" width="100" alt="logo.png">
                          </div>
                          <div class="auth-box card">
                              <div class="card-block">
                                  <div class="row m-b-20">
                                      <div class="col-md-12">
                                          <h3 class="text-center">Sign In</h3>
                                      </div>
                                  </div>
                                  <div class="form-group form-primary">
                                      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                      <span class="form-bar"></span>
                                      <label class="float-label">Username</label>

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                  </div>
                                  <div class="form-group form-primary">
                                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                                      <span class="form-bar"></span>
                                      <label class="float-label">Password</label>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                  </div>
                                  
                                  <div class="row m-t-30">
                                      <div class="col-md-12">
                                          <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">{{ __('Login') }}</button>
                                      </div>
                                  </div>
                                  <hr/>
                                  <div class="row">
                                      <div class="col-md-10">
                                          
                                      </div>
                                      
                                      </div>
                                  </div>
                                  @if(session('error'))
                                        <div class="alert alert-danger">
                                            <b>Opps!</b> {{session('error')}}
                                        </div>
                                    @endif
                              </div>
                          </div>
                      </form>
                      <!-- end of form -->
              </div>
              <!-- end of col-sm-12 -->
          </div>
          <!-- end of row -->
      </div>
      <!-- end of container-fluid -->
  </section>

 
@endsection


