@extends('layout.master')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid"
        alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="POST" action="{{route('postLogin')}}">
          @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">

            <input type="email"  class="form-control form-control-lg" name="email" 
            placeholder="Email Adresi" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" class="form-control form-control-lg" name="password" 
            placeholder="Şifreniz" />
          </div>


          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <a class="btn btn-success" href="{{route('getRegister')}}" role="button" style="margin: 10px; font-size: 23px;">Kayıt Ol</a>

          </div>

        </form>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>

</section>



@endsection
