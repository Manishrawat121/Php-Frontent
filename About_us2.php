<?php 
require 'connection.php';
$form = "SELECT * FROM `about_banner` ";
$queri = mysqli_query($connect,$form);
$data = mysqli_fetch_array($queri);
?>


<?php include 'header2.php';?>

    <div class="container-fluid  pt-4 pb-3 btn-col ">
        <h4 class="text-center text-white fs-2">Web Designing</h4>
        <p class="text-center text-white">Service . Web Designing</p>
    </div>

    <div class="container">
        <div class="container shadow p-3 mb-4 bg-body rounded">
            <h6 class="fw-bolder text-center pt-4">
                <i class="fa-duotone fa-angles-right"></i>
                <?php echo $data['title']; ?>
            </h6>
            <p class=" justify-content-center pt-3 pb-2">
                <?php echo $data['desc']; ?>
            </p>
            <!-- <img src="Images/Mask Group 35.png" alt="no image"> -->
            <img src="../img/<?php echo $data['photo'] ;?>" style="width:100%">    
        </div>

        <div class="pt-3">

                    <?php
                    require 'connection.php';
                    $aboutsec = "SELECT * FROM `aboutsec` ";
                    $querid = mysqli_query($connect,$aboutsec);
                    
                    $check_query = mysqli_num_rows($querid) > 0;
                    if($check_query)
                    {
                        while($row = mysqli_fetch_assoc($querid))
                        {
                            ?>
                    <dl>
                        <dt><?php echo $row['title']; ?></dt>
                        <dd><?php echo $row['desc']; ?> </dd>
                    </dl>

                            <?php
                            
                        }
                    }else{
                            echo 'no record found';
                        }
    	            ?> 
        </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <img src="Images/Mask Group 1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Ecommerce Website</p>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Images/Mask Group 2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Ecommerce Website</p>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pd-4">
                    <div class="card">
                        <img src="Images/Mask Group 1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Ecommerce Website</p>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                    </div>
                </div>
                <div class="working">
                    <h6 class="text-center pt-5">SUBSCRIBE OUR NEWSLETTER</h6>
                    <button type="button" class="btn btn-link"></button>
                </div>
            </div>
    </div>


<?php include 'footer.php';?>