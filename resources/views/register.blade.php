<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if(session('status'))
                    <h5 class="alert alert-primary">{{ session('status') }}</h5>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3>Register</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.register')}}" method="POST">
                            @csrf
                            <label for="">Name</label>
                            <div class="form-floating mb-3">   
                            <input type="text" class="form-control" id="floatingInput" name="name">
                            </div>
                            <label for="">Email</label>
                            <div class="form-floating mb-3">   
                            <input type="email" class="form-control" id="floatingInput" name="email">
                            </div>
                            <label for="">Password</label>
                            <div class="form-floating mb-3">   
                            <input type="password" class="form-control" id="floatingInput" name="password">
                            </div>
                            <label for="">Confirm-Password</label>
                            <div class="form-floating mb-3">   
                            <input type="password" class="form-control" id="floatingInput" name="cf_password">
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                            <a href="{{ route('login') }}" class="btn btn-danger float-end">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>