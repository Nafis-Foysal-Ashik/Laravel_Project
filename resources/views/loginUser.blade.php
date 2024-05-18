<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container-fluid d-flex flex-column h-100 p-0">
    <div class="bg-image"></div>

    <div class="content d-flex justify-content-center align-items-center h-100">
      <div class="card shadow-lg p-5 bg-white rounded">
        <h1 class="text-center mb-4">Login</h1>

        @if(session('error'))
          <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('loginUser') }}">
          @csrf <div class="form-group mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
            @error('password')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

  /* Add custom styles for text (optional) */
  h1 {
    font-family: sans-serif; /* Change font family */
    font-weight: bold; /* Add bold weight */
  }

  .form-label {
    font-weight: bold; /* Bold labels */
  }
</style>
