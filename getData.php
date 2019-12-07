
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>


<body>
<script type="text/javascript">
    var t=<?php 
    $con = mysqli_connect('178.128.65.56','remote','remotePass','remoteDB');
      if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
      }

      $sql="SELECT * FROM n7 ";
      $result = mysqli_query($con,$sql);

     $rows = array();
      while($r = mysqli_fetch_assoc($result)) {
          $rows[] = $r;
          // $jsonDataEncoded=json_encode($row);
          // echo $jsonDataEncoded;
          // echo $tmp;
          // add();
         
      }
      echo json_encode($rows);
      
      
      // echo $jsonDataEncoded;
    mysqli_close($con);
    ?>;
  localStorage["food"] = JSON.stringify(t);
  


</script>
     
 


<!-- <form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form> -->


</body>
</html>