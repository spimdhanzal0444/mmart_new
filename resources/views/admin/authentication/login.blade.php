<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @includeIf('admin.layout.css')
    <style>
        .message, .error {
            position: absolute;
            top: 9px;
            right: 27px;
            min-width: 269px;
            padding: 0 7px;
        }
        .message h3 {
            font-size: 13px;
            font-weight: normal;
            color: #fff;
            margin-bottom: 0;
            padding: 13px 0;
            text-align: center;
            background: #ff0000b3;
            border-radius: 4px;
        }
        .error h3{
            font-size: 13px;
            font-weight: normal;
            color: #fff;
            margin-bottom: 0;
            padding: 13px 0;
            text-align: center;
            background: #ff0000b3;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
   <div class="row">
       <div class="col-6 offset-3  mt-5">
           <div class="card">
               <form action="{{route('login.post')}}" method="POST" class="needs-validation was-validated" novalidate="">
                   @csrf
                   <div class="card-header">
                       <div class="login_title">
                           <div class="admin">
                               <h4 class="lead">Admin Login</h4>
                           </div>
                           <div class="error">
                               @if (\Session::has('error'))
                                   <h3 class="error_mess">{!! \Session::get('error') !!}</h3>
                               @endif
                           </div>
                       </div>
                   </div>
                   <div class="card-body">
                       <div class="form-group row">
                           <label class="col-sm-3 col-form-label">Your Name</label>
                           <div class="col-sm-9">
                               <input type="email" name="email" placeholder="Email" class="form-control" required="">
                               <div class="invalid-feedback">
                                   What's your email?
                               </div>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label class="col-sm-3 col-form-label">Email</label>
                           <div class="col-sm-9">
                               <input type="password" name="password" placeholder="Password" class="form-control" required="">
                               <div class="invalid-feedback">
                                   What's your password?
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="card-footer text-center">
                       <input type="submit" value="Login" class="btn btn-primary">
                   </div>
               </form>
           </div>
       </div>
   </div>
</div>
@includeIf('admin.layout.js')
</body>
</html>
