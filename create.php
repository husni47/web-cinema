<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="bootstrap-4.5.2/dist/css/bootstrap.min.css">

	<!-- Style CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Cinema XXI</title>
</head>
<body>
<div class="container" style="padding: 20px;">
    <h2>Create New Film:</h2><br><br>
    <form method="POST" action="add.php" enctype="multipart/form-data" class="needs-validation" novalidate>
        <div class="form-group">
            <lable for="title">Title:</label>
            <input type="text" class="form-control" placeholder="enter nama film" name="title" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    
        <div class="form-group">
            <lable for="genre">Genre:</label>
            <input type="text" class="form-control" placeholder="enter genre film" name="genre" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
 
        <div class="form-group">
            <lable for="trailer">Trailer:</label>
            <input type="text" class="form-control" placeholder="enter trailer film" name="trailer" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
            <lable for="production">Production:</label>
            <input type="text" class="form-control" placeholder="enter productiont film" name="production" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
            <lable for="synopsis">Synopsis:</label>
            <textarea class="form-control"  rows="7" name="synopsis"></textarea>
        </div>

        <div class="form-group">
            <lable for="cast">Cast:</label>
            <input type="text" class="form-control" placeholder="enter cast film" name="cast" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
            <label>Upload Image:</label><br>
            <input type="file" name="img" required="" />
            <p style="color: red">Ekstensi yg diperbolehkan .png | .jpg | .jpeg </p>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <a href="home.php" class="btn btn-danger">cancel</a>
</div>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>