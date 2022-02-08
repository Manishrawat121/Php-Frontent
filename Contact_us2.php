<?php include "header2.php";?>
    <!--Contact us -->

    <div class="container pt-3 " style="background-color: #FF3600;">
            <h3 class="text-center">Contact us</h3>
            <h6 class="center">We will be happy to answer your questions.<br>
                Fill out the form and we will get back to you shortly.
            </h6>
            <div class="container bg-light">

                <form action="contactus_data.php"  method="post" enctype="multipart/form-data ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="fname" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lname" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email"
                                    aria-describedby="emailHelp" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Mobile" class="form-label">Mobile</label>
                                <input type="number" class="form-control" id="Mobile" name="mobile" required>
                            </div>
                        </div>
                        <div>
                            <label class="form-check-label" for="exampleCheck1" required>Anything Else That Can Help Us With Your
                                Request? (Optional)</label>
                        </div>
                        <div class="12">
                            <div class="mb-3">
                                <textarea class="form-control" id="comment" rows="3" placeholder="comment" name="comment"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class=".btn-col ">Submit</button>
                </form>
            </div>
            <div class="working">
                <h6 class="text-center pt-5">SUBSCRIBE OUR NEWSLETTER</h6>
                <button type="button" class="btn btn-link"></button>
            </div>
        </div>


<!-- Footer-->

<div class="container py-5">
<footer class="bd-footer py-2 mt-2  bg-light">
    <div class="row">
      <div class="col-lg-3 mb-3">
      <div class="card">
                    <img src="Images/logo (1).png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Shadow Technology is the growing IT company offering Web and other IT
                            services in Gurugram.</p>
                        <p class="card-text"><i class="fad fa-map-marker-check"></i> Sec 49, Gurgaon</p>
                        <p class="card-text"><i class="fas fa-mobile-alt"></i>+91 97177-55870</p>
                        <p class="card-text"><i class="fas fa-envelope"></i>info@shadowtechnology.in</p>
                        <p class="card-text">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-linkedin-in"></i>
                            <i class="fab fa-instagram"></i>
                        </p>
                    </div>
                </div>
      </div>
      <div class="col-6 col-lg-2 offset-lg-1 mb-3">
        
      </div>
      <div class="col-6 col-lg-2 mb-3">
      <h5>Quick links</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="About_us.php">About Us</a></li>
          <li class="mb-2"><a href="Contact_us">Contact Us</a></li>
          <li class="mb-2"><a href="">Our Services</a></li>
          <li class="mb-2"><a href="">Career</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
       
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>Usefull links</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="">Term of use</a></li>
          <li class="mb-2"><a href="">Privacy policy</a></li>
          <li class="mb-2"><a href="">Cookies</a></li>
          <li class="mb-2"><a href="">Help</a></li>
          <li class="mb-2"><a href="">FAQs</a></li>
        </ul>
      </div>
    </div>
    </footer>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>