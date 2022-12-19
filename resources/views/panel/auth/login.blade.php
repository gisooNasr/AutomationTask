<!doctype html>
<html lang="en">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets/panel/css/style.css')}}">
<script src="{{asset('assets/panel/js/sweetalert.min.js')}}"></script>

<body class="img js-fullheight" style="background-image: url('{{asset('assets/panel/images/bg.jpg')}}');">
@include('layouts.blocks.erros')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">فرم  ورود</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <form action="{{url('/login')}}" method="POST" class="signin-form">
                        @csrf
                        <div class="form-group">
                            <input name="email" type="text" class="form-control" placeholder="Username" value="{{old('email')}}" >
                        </div>
                        <div class="form-group">
                            <input name="password" id="password-field" type="password" class="form-control" placeholder="Password"  >
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">ورود </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('assets/panel/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/panel/js/popper.js')}}"></script>
<script src="{{asset('assets/panel/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/panel/js/main.js')}}"></script>

</body>
</html>

