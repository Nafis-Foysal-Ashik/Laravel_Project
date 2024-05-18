<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Account</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional CSS styles can be added here */
    </style>
</head>
<body>
    <div class="bg-dark">
        <div class="container py-3">
            <div class="h1 text-white">
                <marquee behavior="slide" direction="left">Task Management System</marquee>
            </div>
        </div>
    </div>
    <section class="contact spad">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4">
                        <h2>Log In Customer Account</h2>
                    </div>
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        <p>{{ session()->get('success') }}</p>
                    </div>
                    <form action="/customerloginUser" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <!-- Uncomment the following lines if you want to include a file input -->
                        <!-- <div class="form-group">
                            <input type="file" class="form-control-file" name="file" required>
                        </div> -->
                        <div class="text-center">
                            <button type="submit" name="register" class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS (optional, only needed if you require Bootstrap JavaScript features) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
