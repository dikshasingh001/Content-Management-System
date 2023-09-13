<?php 
require "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_REQUEST['name'];
    $about = $_REQUEST['about'];
    $img = $_FILES['img'];
    $vdo=$_FILES['vdo'];
    $folder = "./files/" . $img;
    $folder = "./files" . $vdo;
    $query = "INSERT INTO data(name,about, img, vdo) VALUES('$name','$about','$img[name]','$vdo[name]')";
    $stmp=$mysqli->query($query);
    $upload_directory = 'files/';
    $uploaded_image_path = $upload_directory . basename($img['name']);
    $uploaded_vdo_path = $upload_directory . basename($vdo['name']);
    move_uploaded_file($img['tmp_name'], $uploaded_image_path);
    move_uploaded_file($vdo['tmp_name'], $uploaded_vdo_path);
    header("Location:home.php");

    }
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add</title>
</head>
<body>
    <div class="container mt-5">
<form method="post" enctype="multipart/form-data">
    <h1 class="text-center">Add Details</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Name" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">About</label>
    <textarea name="about" id="" cols="30" rows="10" class="form-control" placeholder="About"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <input type="file" name="img" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Video</label>
    <input type="file" name="vdo" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></body>

</html>