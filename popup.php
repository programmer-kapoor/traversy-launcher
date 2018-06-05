
<?php
$myfile = fopen("link.txt", "a") or die("Unable to open file!");

$myfileR = fopen("link.txt", "r") or die("Unable to open file!");

$err="";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$string = 'place1 place2';
$arr = explode(' ', $string);
echo $arr[0]; // place1
echo $arr[1]; // place2
echo "<br>";

$arr1=[];
function pk($ln){
   static $a=0;
     echo $ln."----";
     gettype($ln);
    //  array_push($arr1,$ln);
    $a++;
   }


while(! feof($myfileR))
  {
  // echo fgets($myfileR). "<br />";
    $ln= fgets($myfileR);
    pk($ln);
  }
 
  // print_r($ln);
  // echo gettype($ln), "\n";
  var_dump($arr1);



//echo $_POST['sub-btn'];
if(isset($_POST['sub-btn']))
{
  $txt=test_input($_POST['addLink']);
  //$_POST['sub-btn'];
  // echo $txt;
  if($txt!=""){
  $err="Added Successfully!";
  $txt=$txt."\n";
  // echo $txt;

  fwrite($myfile, $txt);
  header("Location:popup.php?msg=".$err);
  fclose($myfile);}
  else{
    $err="fill the column!";
  
    header("Location:action.php?msg=".$err);
  }
}
else{
  $err="Somethings went Wrong!Try again";
}

   


echo "<br>";


 $lk=file_get_contents("link.txt");

echo "<br>";

echo "<br>";
echo "shu";
?>

<!doctype html>
<html>

<head>
  <title>Traversy Media Quick Launcher</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>

<body>
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

  <div class="modal-icons">
      <div class="flex-container">
  
        <div class="flex d-box" ondrop="drop(event)" ondragover="allowDrop(event)" ondragstart="drag(event)">
           <!-- <div id="dD"  > -->
              <a id="dD2" href="https://www.traversymedia.com" target="_blank">
                <i class="fa fa-globe"></i>
               </a>
           <!-- </div>  -->
        </div>

        <div class="flex">
            <div id="dD1" class="d-box" ondrop="drop(event)" ondragover="allowDrop(event)" ondragstart="drag(event)">

            </div> 
        </div>
  
       
  
      </div>
    </div> <!--drop box -->
     
    <div class="container-link">
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <input type="text" name="addLink" required>
         <input type="submit" name="sub-btn" value="submit">
       </form>
    </div>
   </div> <!--container -->

   <a href="<?php echo $lk;?>"><?php echo $lk;?> </a>
   -------------------<br>
   
    




<br>
***********


<!-- <h3><?php echo $a;?></h3> -->



   <script
   src="https://code.jquery.com/jquery-3.2.1.min.js"
 ></script>



   <script src=""></script>
</body>

</html>