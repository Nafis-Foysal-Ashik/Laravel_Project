<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create New Account</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css"> </head>
<body>
  <div class="container-fluid d-flex flex-column h-100 p-0"> <div class="bg-image"></div> <div class="content d-flex justify-content-center align-items-center h-100"> <div class="card shadow-lg p-5 bg-white rounded"> <div class="text-center mb-4">
          <h1 class="display-4 font-weight-bold text-primary">Task Management System</h1> </div>

        <form action="{{ route('registerUser') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group mb-3"> <label for="fullname" class="form-label">Full Name</label> <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Your Full Name" required>
          </div>
          <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your E-mail" required>
          </div>

          <div class="form-group mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number" required>
          </div>

          <div class="form-group mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Address" required>
          </div>

          <div class="form-group mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" placeholder="Enter Your Gender" required>
          </div>

          <div class="form-group mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter your Date of Birth" required>
          </div>

          <div class="form-group mb-3">
            <label for="picture" class="form-label">Upload Picture</label>
            <input type="file" name="picture" class="form-control">
            @error('picture')
              <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
          </div>



          <div class="form-group mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="text-center mt-3">
            <button type="submit" name="register" class="btn btn-primary">Sign Up</button> </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
