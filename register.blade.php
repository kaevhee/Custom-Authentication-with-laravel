<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>custom authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <!-- <a href="/login">Login</a> -->

    <div class="container">
        <div class="row">
           <div class=".col.md.4.col.md.offset.4" style ="margin-top:20px;">
               <h4>Registration</h4><br>

                <form action="{{route('register-user')}}" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif

                    @if(Session::has('oh no...'))
                    <div class=" alert alert-danger">{{Session::get('oh no...')}}</div>
                    @endif
                    @csrf()
               <div class="form-group">
                   <label for="name">Full Name</label><br>
                   <input type="text" name="name"value ="{{old('name')}}"><br>
                   <span class="text-danger">@error('name') {{$message}}@enderror</span><br>

                   <label for="email">Email Address</label><br>
                   <input type="text" name="email" value ="{{old('email')}}"><br>
                   <span class="text-danger">@error('email') {{$message}}@enderror</span><br>

                   <label for="password">Password</label><br>
                   <input type="password" name="password" value ="{{old('password')}}"><br>
                   <input  class ="btn btn-block btn-primary" type="submit" value="Register"><br>
                   <span class="text-danger">@error('password') {{$message}}@enderror</span><br>
                   
                   <br>
                 <a href='login'>New User!! login here.</a>
                </form>
           </div>
     </div>
 </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>