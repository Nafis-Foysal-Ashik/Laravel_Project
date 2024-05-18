<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create New Account</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container-fluid d-flex flex-column h-100 p-0">
    <div class="bg-image"></div>

    <div class="content d-flex justify-content-center align-items-center h-100">
      <div class="card shadow-lg p-5 bg-white rounded">
        <div class="text-center mb-4">
          <h1 class="display-4 font-weight-bold text-primary">Task Management System</h1>
        </div>

        @if (session()->has('success'))
          <div class="alert alert-success">
            <p>{{ session()->get('success') }}</p>
          </div>
        @endif
        @if(Session::has('msg'))
          <div class="alert alert-danger">{{ Session::get('msg') }}</div>
        @endif

        <form action="{{ route('loginUser') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
          </div>
          <div class="form-group mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
          </div>
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Sign In</button>
          </div>
          <br>
          <div class="text-center mt-3">
            <div class="h6 text-muted">Don't have any account?</div>
            <a href="{{ route('registerPage') }}" class="btn btn-primary">Register</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<style>
  body {
    background-color: #f5f5f5; /* Fallback color */
  }

  .bg-image {
    /* Set background image URL and styles here */
    background-image: url("path/to/your/image.jpg");
    background-size: cover;
    background-position: center;
    opacity: 0.3; /* Adjust opacity as needed */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .content {
    z-index: 1; /* Ensure content is displayed on top of background image */
  }

  .card {
    border-radius: 10px; /* Add rounded corners */
  }

  .btn-primary {
    transition: background-color 0.3s ease; /* Add hover effect */
  }

  .btn-primary:hover {
    background-color: #0d6efd!important; /* Change hover color */
  }
</style>
