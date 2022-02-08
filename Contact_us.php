<?php include "header.php";?>

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
                                <input type="text" class="form-control" id="firstname" name="fname" Required>
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
    
<?php include "footer.php";?>