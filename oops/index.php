<?php

$file=fopen("link.txt", "a") or die("Unable to open file!");

class A{

  //private $link=fopen("link.txt", "a") or die("Unable to open file!");


  public static function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  public function __constructor(){

      echo "ddddd";

  }



  //url valdation
  private function checkUrl($data){
  //  $url = filter_var($data, FILTER_SANITIZE_URL);

    if (filter_var($data, FILTER_VALIDATE_URL)) {
      return 1;
    } else {
      return 0;

    }
  }


  public function setUrl($txt){

    if($txt!="" && A::checkUrl($txt)){


        $err="Added Successfully!";
        echo $err;
        $txt=$txt."\n";
         echo $txt;
        fwrite($file, $txt);
      //  header("Location:index.php?msg=".$err);
      //  fclose($file);

  }
    else{
      $err="fill the column!";
      echo $err;
      //header("Location:action.php?msg=".$err);
    }
  }

  }





$Bb = new A();
if(isset($_POST['sub-btn']))
{

  echo "string";
  $B = new A();
  $l=$B->test_input($_POST['addLink']);
  $B->setUrl($l);
}



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
