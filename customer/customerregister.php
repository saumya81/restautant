<?php include'../includefile/header.php' ?>
<?php include'../includefile/nav.php' ?>
<br>
<br>
<?php
session_start();
$msg_error='';
if(isset($_SESSION['msg']))
{
    $msg_error=$_SESSION['msg'];
    echo $msg_error;
    unset($_SESSION['msg']);
}

?>
<center><h1 class="bg-primary text-white text-center  ">Register yourself here and become a member of FoodShala family!!</h1></center>
<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                        <h2 class="py-3">Registration</h2>
                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
                <form action="cconregister.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input  name="name" placeholder="Name" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input  name="number" placeholder="Mobile No." class="form-control" required="required" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input  name="state" placeholder="State" class="form-control" required="required" type="text">
                        </div>
                    
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input  name="password" placeholder="Password" class="form-control" required="required" type="password">
                        </div>
                        <div class="form-group col-md-6">
                            <input  name="confirmpassword" placeholder="Confirm Password" class="form-control" required="required" type="password">
                        </div>
                     
                      
                    </div>
                   
                    
                    <div class="form-row">
                        <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include'../includefile/footer.php' ?>
