<?php 
include_once('connection.php');
if (isset($_GET['id'])) {

  $id = $_GET['id'];
  print_r($id);
  $query  = "DELETE FROM  jobregistration WHERE  id= '$id'";
 
   $result =  mysqli_query($con , $query);

 if ($result==true){
   ?>
   <script>
   alert('Are you sure!');
   </script>
<?php
  
  header("Location:display.php");


} 
 else
 {
   echo "Player not deleted ";
 }
}

?>

<!DOCTYPE html>
<html lang="eng">
<head>
<title>display data</title>
<?php
include 'links.php';
 ?>
</head>
<body>

<div class="container">
  <h2 class="text-center py-4 text-info">List of Webdeveloper jobs</h2>            
  <table class="table table-info">
                     <thead>
                            <tr>
                                <th>No</th>
                                <th> Name</th>
                                <th>degree</th>
                                <th>mobile</th>
                                <th>email</th>
                                <th>refer</th>
                                <th>jobpost</th>
                                <th>action</th>
                                
                                </tr>
                     </thead>

                    
                 <!-- pick data from Database -->
              
                  <?php
                  include 'connection.php';
                 
    
                  $result = mysqli_query($con, "SELECT * from jobregistration");
                    
                  if (mysqli_num_rows($result) > 0) {
                    while ($rowData = mysqli_fetch_array($result)) {

                    ?>  
                    <tr>
                 
                    <td><?php echo $rowData['id']?> </td>
                    <td><?php echo $rowData['name']?> </td>
                    <td><?php echo $rowData['Degree']?> </td>
                    <td><?php echo $rowData['mobile']?> </td> 
                    <td><?php echo $rowData['email']?> </t>
                    <td><?php echo $rowData['refer']?> </td>
                    <td><?php echo $rowData['jobpost']?> </td>
                    
                    <td>  
                          <a href="update.php?id=<?php echo $rowData['id'] ?>"> <i class="fa fa-edit"></i>  
                           <a href="display.php?id=<?php echo $rowData['id'] ?>"> <i class="fa fa-trash"></i>   
                    </td>
                  </tr>
                    <?php
                    
                  }
                }
              
                    ?> 

                    <!-- pick data from Database Ends here-->
                       
                  </tbody>
                </table>
</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>
