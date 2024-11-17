<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">
  <div style="heigh:100vh;">
    <div class="row h-100 m-0">
      <div class="card w-50 my-auto mx-auto">
        <div class="card-header bg-white border-0 py-3">
          <h1 class="display-4 fw-bold text-center text-primary">LOGIN<i class="fa-solid fa-right-from-bracket ms-2"></i></h1>
        </div>
        <div class="card-body">
          <form action="../actions/login.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="USERNAME" class="form-control mb-2" required autofocus>

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="PASSWORD" class="form-control mb-5" required>

            <button type="submit" class="btn btn-primary w-100 mb-3">Log in</button>
          </form>
          <!-- <button type="button" class="btn btn-danger mx-auto text-center" data-bs-toggle="modal" data-bs-target="#exampleModal"> -->
            <div class="row justify-content-center align-items-center">
              <div class="col-auto">
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Create new account</button>
              </div>
            </div>
         
          
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                
                <div class="modal-body">
                  <h1 class="display-4 fw-bold text-danger text-center" >
                    <i class="fa-solid fa-user-plus me-2"></i>REGISTRATION
                  </h1>
                  <form action="../actions/register.php" method="post">
                    <div class="row">
                      <div class="col-6">
                        <div class="mb-3">
                          <label for="first-name" class="form-label">First Name</label>
                          <input type="text" name="first_name" id="first-name" class="form-control" required autofocus>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="mb-3">
                          <label for="last-name" class="form-label">Last Name</label>
                          <input type="text" name="last_name" id="last-name" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="username" class="username">Username</label>
                      <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="formal-label">Password</label>
                      <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                      <button type="submit" class="btn btn-danger w-100" name="btn_register">Register</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>