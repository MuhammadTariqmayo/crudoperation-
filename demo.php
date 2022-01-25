<html>
  <head>
    <link rel="stylesheet" href="https://harvesthq.github.io/chosen/chosen.css">
  </head>
  <body>
  <div id="output"></div>
<form method="GET" action="">
  <select data-placeholder="Choose tags ..." name="tags[]" multiple class="chosen-select">
    <option value="Engineering">Engineering</option>
    <option value="Carpentry">Carpentry</option>
    <option value="Plumbing">Plumbing</option>
    <option value="Electical">Electrical</option>
    <option value="Mechanical">Mechanical</option>
    <option value="HVAC">HVAC</option>
  </select>
  <input type="submit">
</form>

<style>
  #output {
  padding: 20px;
  background: #dadada;
}

form {
  margin-top: 20px;
}

select {
  width: 300px;
}
  </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://harvesthq.github.io/chosen/chosen.jquery.js"></script>
  </body>
  <script>
      document.getElementById('output').innerHTML = location.search;
       $(".chosen-select").chosen();
  </script>

</html>






<?php
                                        
                                        if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {                                                                                      
                                        ?>

                                            <option><?php echo $row['name']?></option>
                                            
                                    
                                    
                                        <?php
                                            }
                                        }
                                        ?>