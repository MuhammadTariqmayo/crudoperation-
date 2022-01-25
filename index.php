<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <?php
   include 'links.php';
   
    ?>
    <style>
     .button {
    align-items: center;
    top: 5rem;
    /* left: 30px; */
    /* margin-right: 103px; */
    margin-left: -58px;
    margin-top: 21px;
}
      .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 24px;
    margin-left: 5px;
}

    </style>
</head>
<body>
<h1 class="text-center text-info py-4 ">Apply for webdeveloper post</h1>
     <div class="container">
  
  
  <form action="" method="POST"  class="d-flex justify-content-center gy-3">
  <div class="row">
  <div class="col col-lg-6 col-md-6">
  <div class="form-group">
    <input type="text" id="formGroupExampleInput" placeholder="Enter your name*" name="user" value="" required />
  </div>
  <div class="form-group">
    <input type="text" id="formGroupExampleInput2" placeholder="Enetr your qualification" name="degree" value="" required />
  </div>
  <div class="form-group">
    <input type="text" id="formGroupExampleInput2" placeholder="Enter your Email" name="email" value="" required />
  </div>
  </div>
  </div>
  <div class="row">
  <div class="col col-lg-6 col-md-6">
  <div class="form-group">
    <input type="text" id="formGroupExampleInput" placeholder="Enter mobile num" name="number" value="" required  />
  </div>
  <div class="form-group">
    <input type="text" id="formGroupExampleInput2" placeholder="enter a referance" name="refer" value=""required  />
  </div>
  <div class="form-group">
    <input type="text" id="formGroupExampleInput2" placeholder="enter a jobpost" name="jobpost" value="" required  />
  </div>
  <input type="Submit" class="btnregister btn-outline-info  button" name="submit" value="register" />
 
  </div>
  </div>
  
 </form>
 
</div>
</body>
</html>
<?php

include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['user'];
    $degree=$_POST['degree'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $refer=$_POST['refer'];
    $jobpost=$_POST['jobpost'];

    $insertquery = "INSERT INTO `jobregistration`(`id`, `name`, `Degree`, `mobile`, `email`, `refer`, `jobpost`) VALUES ('','$name','$degree','$number','$email','$refer','$jobpost')";
    $res= mysqli_query($con, $insertquery);
    if($res){
       ?>
       <script>
       alert('data insert successfuly');
       </script>
       <?php

   }else{
    ?>
    <script>
    alert('data not insert successfuly');
    </script>
    <?php
   }
}


?>