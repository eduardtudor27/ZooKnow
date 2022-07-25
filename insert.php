<?php
$servername = "localhost";
$username = "root";
$password = "tb84cubjvked";
$dbname = "zooknow";

$url ="zimbrul";
if (isset($_GET["url"]))
	$url = $_GET["url"];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


$target_dir = "assets/img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}


if ($_FILES["fileToUpload"]["size"] > 500000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "webp" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}


if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";

} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

if(isset($_POST['submit'])){
    if(!empty($_POST['title']) && !empty($_POST['autor']) && !empty($_POST['contentstart']) &&!empty($_POST['content'])){
        $title = $_POST['title'];
        $autor = $_POST['autor'];
        $contentstart = $_POST['contentstart'];
        $content = $_POST['content'];

        $query1 = "INSERT INTO animalarticle(url,title,autor,imagine,contentstart,content) values('$title','$title', '$autor','$target_file' , '$contentstart', '$content')";
        $query2 = "INSERT INTO animals(url,title,autor,imagespot,contentstart,content) values('$title','$title', '$autor', '$target_file' ,'$contentstart', '$content')";

        $run = mysqli_query($conn,$query1) or die(mysqli_error());
        $run = mysqli_query($conn,$query2) or die(mysqli_error());

        if($run){
            echo "A mers baros";
        }else {
            echo "Nu a mers baros prost";
        }
    
    }else{
        echo "toate formularele baros";
    }
}



?>