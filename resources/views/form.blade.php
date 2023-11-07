<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <form action="{{ route('register') }}" method="post">
        @csrf 
        {{-- <pre>
            @php
            print_r($errors-> all());   
            @endphp
        </pre> --}}
    <div class="container">
        <h1 class="text-center"> Registration</h1>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="" aria-describedby="HelpId" value="{{ old('name') }}">
            <span class="text-danger">
                @error('name')
                {{ $message }}
                @enderror
            </span>
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="" aria-describedby="HelpId">
            <span class="text-danger">
                @error('email')
                {{ $message }}
                @enderror
            </span>
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" name="password" class="form-control" id="" aria-describedby="HelpId">
            <span class="text-danger">
                @error('password')
                {{ $message }}
                @enderror
            </span>
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1"> Confirm Password</label>
            <input type="password" name=" password_confirmation" class="form-control" id="" aria-describedby="HelpId">
            <span class="text-danger">
                @error('password_confirmation')
                {{ $message }}
                @enderror
            </span>
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</body>
</html>