 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update data </title>
  <?php
   include 'links.php';
   
    ?>
</head>
<body>
   <h1 class="text-center text-info py-4 ">Apply for webdeveloper post</h1>
     <div class="container">
     <?php


    include 'connection.php';

  if(isset($_GET['id']));
  $id = $_GET['id'];

  $showquery="SELECT * FROM jobregistration WHERE id={$id}";
  $showdata=mysqli_query($con,$showquery);
  $arrdata=mysqli_fetch_array($showdata);

 if(isset($_POST['submit'])){
    $name=$_POST['user'];
    $degree=$_POST['degree'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $refer=$_POST['refer'];
    $jobpost=$_POST['jobpost'];

    $insertquery = "INSERT INTO `jobregistration`(`id`, `name`, `Degree`, `mobile`, `email`, `refer`, `jobpost`) VALUES ('id','$name','$Degree','$number','$email','$refer','$jobpost')";
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
  
  
  <form action="" method="POST"  class="d-flex justify-content-center gy-3">
  <div class="row">

  <div class="col col-lg-6 col-md-6">
  <div class="form-group">
    <input type="text" id="formGroupExampleInput" placeholder="Enter your name*" name="user" value="<?php echo $arrdata['name']; ?>" required />
  </div>
  <div class="form-group">
    <input type="text" id="formGroupExampleInput2" placeholder="Enetr your qualification" name="Degree" value="<?php echo  $arrdata['Degree']; ?>" required />
  </div>
  <div class="form-group">
    <input type="text" id="formGroupExampleInput2" placeholder="Enter your Email" name="email" value="<?php echo  $arrdata['email']; ?>" required />
  </div>
  </div>
  </div>
  <div class="row">
  <div class="col col-lg-6 col-md-6">
  <div class="form-group">
    <input type="text" id="formGroupExampleInput" placeholder="Enter mobile num" name="number" value="<?php echo  $arrdata['mobile']; ?>" required  />
  </div>
  <div class="form-group">
    <input type="text" id="formGroupExampleInput2" placeholder="enter a referance" name="refer" value="<?php echo  $arrdata['refer']; ?>"required  />
  </div>
  <div class="form-group">
    <input type="text" id="formGroupExampleInput2" placeholder="enter a jobpost" name="jobpost" value="<?php echo  $arrdata['jobpost']; ?> " required  />
  </div>
  <input type="Submit" class="btnregister btn-outline-info" name="submit" value="update" />
 
  </div>
  </div>
  
 </form>
 
</div>
</body>
</html>
