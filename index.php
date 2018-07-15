
<?php
$myfile = fopen("link.txt", "a") or die("Unable to open file!");
$my = file('link.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$n=sizeof($my);
$err="";$i=0;

//trimp or validate the input
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//url valdation
function checkUrl($data){
//  $url = filter_var($data, FILTER_SANITIZE_URL);

  if (filter_var($data, FILTER_VALIDATE_URL)) {
    return 1;
  } else {
    return 0;

  }
}
//check active URL
function url_exists($url) {
    //if (!$fp = curl_init($url)) return false;
      return true;

   //  $file_headers = @get_headers($url);
   //  if(!$file_headers || $file_headers[0] == 'HTTPS/1.1 404 Not Found') {
   //    $exists = false;
   //  }
   // else {
   //  $exists = true;
   // }
}

//trim the name
function func($data){
   $a=parse_url($data, PHP_URL_HOST);
   $a=rtrim($a,"com");
   $a=ltrim($a,"w");
   $a=trim($a,'.');
   return $a;
}


//input from form
if(isset($_POST['sub-btn']))
{
  $txt=test_input($_POST['addLink']);
  //$_POST['sub-btn'];
  // echo $txt;
  if($txt!="" && checkUrl($txt)){
     if(url_exists($txt)){

      $err="Added Successfully!";
      echo $err;
      $txt=$txt."\n";
      // echo $txt;
      fwrite($myfile, $txt);
      header("Location:popup.php?msg=".$err);
      fclose($myfile);
    }else{
       $err2="not active url";
       echo $err2;
    }
}
  else{
    $err="fill the column!";

    header("Location:action.php?msg=".$err);
  }
}
else{
  $err="Somethings went Wrong!Try again";
}

//var_dump($my);

for($s=0;$s<sizeof($my);$s++){
          // $check=checkUrl($my[$s]);
          // if($check==1)
          //   echo "valid";
          // else {
          //   echo "invalid";
          // }
   echo $my[$s];
   echo "<br>";
}




?>

<!doctype html>
<html>

<head>
  <title>Traversy Media Quick Launcher</title>
  <link rel="shortcut icon" href="">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>

<body>
<!--
  <div class="container">

    <div class="modal-header">
    <h1 class="logo">
      <img class="logo-icon" src="images/traversy-logo.png">Traversy Launcher
      <span class="version">(1.0.0)</span>
    </h1>
  </div>

  <div class="modal-content">
    <p>Easily Access Traversy Media content</p>
  </div>

  <div class="modal-icons">
    <div class="flex-container">

      <div class="flex">
        <a href="https://www.traversymedia.com" target="_blank">
          <i class="fa fa-globe"></i>
        </a>
      </div>

      <div class="flex">
        <a href="https://www.youtube.com/traversymedia" target="_blank">
          <i class="fa fa-youtube"></i>
        </a>
      </div>

      <div class="flex">
        <a href="https://www.twitter.com/traversymedia" target="_blank">
          <i class="fa fa-twitter"></i>
        </a>
      </div>

      <div class="flex">
        <a href="https://www.facebook.com/traversymedia" target="_blank">
          <i class="fa fa-facebook"></i>
        </a>
      </div>


      <div class="flex">
        <a href="https://www.github.com/bradtraversy" target="_blank">
          <i class="fa fa-github"></i>
        </a>
      </div>

    </div>
  </div>



    <div class="container-link">
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <input type="text" name="addLink" required>
         <input type="submit" name="sub-btn" value="submit">
       </form>
    </div>
  </div>   !container -->


   <div class='container'>
     <div class="flex-modal">
       <div><img src="icon1.png" alt="iocn"></div>
       <div>
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <input type="text" name="addLink" placeholder="Enter url" required>
         <input type="submit" name="sub-btn" value="submit">
       </form>
     </div>
       <div class="">
        <button type="button" name="button">Button</button>
       </div>
     </div>

   </div>

<?php while($i<=$n-1):?>
   <a href="<?php echo $my[$i] ;?>"><?php echo func($my[$i]);?></a>
   <?php $i++ ;echo "<br>";?>
<?php endwhile;?>










   <script
   src="https://code.jquery.com/jquery-3.2.1.min.js"
 ></script>



   <script src="popup.js"></script>
</body>

</html>
