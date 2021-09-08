<?php

if (isset($_POST['submit'])) {
	$nulis = $_POST['nulis'];


$url = "https://st4rz.herokuapp.com/api/nulis?text=".$nulis;
$json = file_get_contents($url);

$data_json = json_decode($json, true);

$image = $data_json['result'];

define("UPLOAD_DIR', 'images/');
$img= $image;
$img= str_replace('data:image/jpeg;base64,','', $img);
$img = str_replace(' ','+',Simg);
$data = base64_decode($img);
$upload = UPLOAD_DIR . uniqid() . '.jpeg';

//$succsess = file_put_contents($upload, $data);

}




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>bot nulis</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>  

    <h1 class="text-center">Bot nulis by shandy</h1>
<form action="" method="post">
<div class="container">    
    <div class="row">
    	<div class="col">
    		<textarea name="nulis" style="width: 100%; height: 100px;"></textarea>
    	</div> 

    	<div class="col">
    	    <button name="submit" type="submit" class="btn btn-succsess btn-block">Submit</button>
    	</div>        	
    </div>
</div>
</form>

<div class="container">
	<h2 class="text-center">Hasil gambar</h2>
	<img src="<?= $upload ?>">
</div>




</body>
</html>