<?php
require "config.php";

$data = "SELECT * FROM data";
$result = $mysqli->query($data);

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home Page</title>
</head>

<body>
    <div class="container">
        <div>
            <h2 class="text-center mt-5 fw-1">Home Page</h2>
        </div>
   <button class="btn btn-primary"><a class="btn btn-primary" href="./add.php">Add</a></button>

          <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        
                    </div>
                </div>
          </div>  
                       <?php

            
                        $arr = array();
                        while ($row = mysqli_fetch_assoc($result)) {
                            $arr[] = $row;
                        }
                        foreach ($arr as $arr) {
                        ?>
                            <tr>
                                <td><img src="./files/<?php echo $arr['img']; ?>" alt=""></td>
                                <td><video style="border:1px solid" id="myVideo" width="320" height="176" controls >
      <source src="./files/<?php echo $vdo;?>" type="video/mp4">
    </video></td></tr>
    <tr><td><?php echo $arr['about'] ?></td></tr>
                            
                        <?php

                        }
                        ?>
                      
                 

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></body>

</html>