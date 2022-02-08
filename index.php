<?php 
    require 'connection.php';
    $form = "SELECT * FROM `home_sec`";
    $queri = mysqli_query($connect,$form);
    $data = mysqli_fetch_array($queri);
?>
<?php
    require 'connection.php';
    $banner  = "SELECT * FROM `home_banner`";
    $home = mysqli_query($connect,$banner);
    
    while($temp  = mysqli_fetch_array($home)){
        $rr[] = $temp['photo'];
        $idd[] =$temp['id'];
        $r1  = $idd[0];

}
        $img1 = $rr[0];
        $img2 = $rr[1];
        $img3 = $rr[2];
     
?>
<?php include "header.php";?>

    <!--slider  -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                    
                <!-- <img src="Images/It.png" class="d-block w-100" alt="..."> -->
                
                <img src="../img/<?php echo $img1; ?>" alt="Los Angeles" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/<?php echo $img2; ?>" alt="Los Angeles" class="d-block" style="width:100%">
                <!-- <img src="Images/trends.png" class="d-block w-100" alt="..."> -->
            </div>
            <div class="carousel-item">
                <img src="../img/<?php echo $img3; ?>" alt="Los Angeles" class="d-block" style="width:100%">
                <!-- <img src="Images/ui.png" class="d-block w-100" alt="..."> -->
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <section>
        <div class="container-fluid p-5">
            <!-- tagline-->
            <div class="row">
                <h3 class="blockquote text-center text-dark"><?php echo $data['title']; ?></h3>
            </div>
            <div class="row container-fluid p-2">
                <h6 class=" text-center "> <?php echo $data['desc']; ?> </h6>
                <div class="d-flex justify-content-center container-fluid p-3">
                    <button type="button" class="btn btn-readmore" text-center>Read more
                        <i class="fa fa-angle-double-right"></i></button>
                </div>
            </div>
            <div class="row pt-3 pb-4">
                <div class="col-md-4 mb-3">
                    <h3 class="blockquote text-center">SERVICES</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type
                        and scrambled it to make a type specimen book.</p>
                    <button type="button" class="btn btn-readmore" text-center>Get a Free Quation</button>
                </div>
                <div class="col-md-8">
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body h-100">
                                <img src="Images\icon\Group 1.png" class="rounded-circle mx-auto d-block" >
                                    <h5 class="card-title fs-6">Website Designing</h5>
                                    <p class="card-text">
                                        We help our clients build and bring digital products and services 
                                    </p><br>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body h-100">
                                <img src="Images\icon\Group 2.png" class="rounded-circle mx-auto d-block" >
                                    <h5 class="card-title fs-6">Website Development</h5>
                                    <p class="card-text">
                                        We help our clients for website development in Wordpress
                                    </p>
                                    <a href="#">Read More <i class="fa fa-angle-double-right"></i> </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body h-100">
                                <img src="Images\icon\Group 3.png" class="rounded-circle mx-auto d-block" >
                                <h5 class="card-title fs-6">SEO & Online Marketing </h5>
                                    <p class="card-text">
                                        We help our clients build and bring digital products and services
                                    </p>
                                    <a href="#">Read More <i class="fa fa-angle-double-right"></i> </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body h-100">
                                <img src="Images\icon\Group 4.png" class="rounded-circle mx-auto d-block" >
                                <h5 class="card-title fs-6">Website Promotion</h5>
                                    <p class="card-text">
                                        There are various search engines which show us the relative results
                                    </p> 
                                    <a href="#">Read More <i class="fa fa-angle-double-right"></i> </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body h-100">
                                <img src="Images\icon\Group 5.png" class="rounded-circle mx-auto d-block" >
                                <h5 class="card-title fs-6">Software Development</h5>
                                    <p class="card-text">
                                    Every business needs a good website to enter into the competitive
                                    </p> 
                                    <a href="#">Read More <i class="fa fa-angle-double-right"></i> </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body h-100">
                                <img src="Images\icon\Group 6.png" class="rounded-circle mx-auto d-block" >
                                <h5 class="card-title fs-6">Mobile App</h5>
                                    <p class="card-text">
                                    Shadow Technology has vast experience in mobile app development
                                    </p> 
                                    <a href="#">Read More <i class="fa fa-angle-double-right"></i> </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row" pt-3 pb-4>
            <div class="col-md-5">
                <img src="Images/Mask Group 46.png" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-7">
                <h3>INDIA'S MOST TRUSTED</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised.
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised.
                </p>
            </div>
        </div>

        <br>

        <div class="container-fluid  pt-3 pb-4 btn-col  text-white">
            <h4 class="text-center text-white mt-2">OUR WORKING PROCESS</h4>
            <div class="container">
				<div class="row mb-3">
					<div class="col"><img src="Images/progress/idea.png" class="rounded-circle" alt="...">Idea</div>
					<div class="col"><img src="Images/progress/design.png" class="rounded-circle" alt="...">Design</div>
					<div class="col"><img src="Images/progress/development.png" class="rounded-circle" alt="...">Development</div>
					<div class="col"><img src="Images/progress/test.png" class="rounded-circle" alt="...">Test</div>
					<div class="col"><img src="Images/progress/deploy.png" class="rounded-circle" alt="...">Deploy</div>
				</div>
			</div>
            <p class="text-center text-white">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centurised.
            </p>
        </div>

    <div>
        <div class="row mb-3 mt-4">
            <h3 class="text-center text-dark">IMPRESSIVE PORTFOLIO</h3>
                <div class="col-sm-3"></div>
                <div class="col-sm-3"><h6 class="text-center">Website</h6></div>
                <div class="col-sm-3"><h6 class="text-center">Application</h6></div>
                <div class="col-sm-3"></div>
        </div>


			<div class="row row-cols-1 row-cols-md-3 g-4">
			  <div class="col">
				<div class="card h-100">
				  <img src="Images/Mask Group 1.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Ecommerce Website</h5>
					</div>
				</div>
			  </div>
			  <div class="col">
				<div class="card h-100">
				  <img src="Images/Mask Group 2.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Ecommerce Website</h5>
					
				  </div>
				</div>
			  </div>
			  <div class="col">
				<div class="card h-100">
				  <img src="Images/Mask Group 1.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Ecommerce Website</h5>
				  </div>
				</div>
			  </div>
			  <div class="col">
				<div class="card h-100">
				  <img src="Images/Mask Group 1.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Ecommerce Website</h5>
				  </div>
				</div>
			  </div>
			  <div class="col">
				<div class="card h-100">
				  <img src="Images/Mask Group 2.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Ecommerce Website</h5>
				  </div>
				</div>
			  </div>
			  <div class="col">
				<div class="card h-100">
				  <img src="Images/Mask Group 1.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Ecommerce Website</h5>
				  </div>
				</div>
			  </div>
			</div>



        <br>
        
        <div class="btn-col">
            <div>
                <h5 class="text-center pt-3 text-white">Our Achievements</h5><br>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 ">
                <img src="Images/Group.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>

        <div class="row justify-content-center">
            <h6 class="text-center pt-3 pb-4 ">WHAT OUR CLIENT SAY</h6>
            <div class="col-md-4 client">
                <div class="card">
                    <img src="Images/Component 11 – 4.png" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-md-4 client">
                <div class="card">
                    <img src="Images/Component 11 – 5.png" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-md-4 client">
                <div class="card">
                    <img src="Images/Component 11 – 6.png" class="card-img-top" alt="...">
                </div>
            </div>
        </div>

        <h5 class="text-center pt-3 fs-5 fw-normal">Latest News From Blog</h5><br>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="Images/Mask Group 47.png" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="Images/ui.png" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="Images/trends.png" class="card-img-top" alt="...">
                </div>
            </div>
        </div>

    </div>


    <!-- contact us -->
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
                                <input type="number" class="form-control" id="Mobile" name="phone" required>
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
    </div>


<?php include "footer.php";?>