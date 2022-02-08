<?php include "header.php"; ?>
    <!--Form -->


<section class="vh-100" style="background-color: #FF3600;">
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 ">
                <form action="login_success.php" method="post" enctype="multipart/form-data">
                <h3 class="mb-3 text-center">Log in</h3>

                <div class="mb-3">
                <label for="Username" class="form-label" >Username</label>
                <input type="email" name="username" class="form-control" id="username" placeholder="Enter username"  required>
            </div>

                <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password"  placeholder="Enter password"  required>
            </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php include "footer.php";?>