<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 form validation example - ItSolutionStuff.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
  
        <h1>Laravel 8 form validation example</h1>
   
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
   
        <form action="" method="post" action="{{ action('HomeController@store') }}">
  
            @csrf
  
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Name" :value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
   
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Password" :value="{{ old('password') }}">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
    
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email" :value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
   
            <div class="form-group">
                    <input type="submit" name="send" value="Submit" class="btn btn-dark">
            </div>

        </form>
    </div>
</body>
</html>