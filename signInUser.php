<?php
include("config/cconfig.php");
include("forms/fsignInUser.php"); 
?>


<?php
//***Tarkistetaan syötteet myös palvelimella
if (isset($_POST['submitUser'])){

    if(!strlen($_POST['givenFirstname'])>=4){
      $_SESSION['swarningInput']="Illegal username (min 4 chars)";
    }elseif(!strlen($_POST['givenLastname'])>=4){
      $_SESSION['swarningInput']="Illegal username (min 4 chars)";
    }else if(!filter_var($_POST['givenEmail'], FILTER_VALIDATE_EMAIL)){
      $_SESSION['swarningInput']="Illegal email";
    }else if(!strlen($_POST['givenPassword'])>=8){
      $_SESSION['swarningInput']="Illegal password (min 8 chars)";
    }else if(!$_POST['givenPassword']== $_POST['givenPasswordVerify']){
      $_SESSION['swarningInput']="Given password and verified not same";
    }else{
      unset($_SESSION['swarningInput']);
  
    //***Tiedot sessioon - annettu oikeanlaisena
    $_SESSION['sloggedIn']="yes";
    $_SESSION['sfirstname']=$_POST['givenFirstname'];
    $_SESSION['slastname']= $_POST['givenLastname'];
    $_SESSION['semail']= $_POST['givenEmail'];
    $_SESSION['sage']= $_POST['givenAge'];
    $_SESSION['sheight']= $_POST['givenHeight'];
    $_SESSION['sweight']= $_POST['givenWeight'];
    $_SESSION['sgender']= $_POST['givenGender'];

    
    //Tiedot kantaan
    $data['firstname'] = $_POST['givenFirstname'];
    $data['lastname'] = $_POST['givenLastname'];
    $data['email'] = $_POST['givenEmail'];
    $data['age'] = $_POST['givenAge'];
    $data['height'] = $_POST['givenHeight'];
    $data['weight'] = $_POST['givenWeight'];
    $data['gender'] = $_POST['givenGender'];
    
    $added='#â‚¬%&&/'; //suolataan annettua salasanaa
    $data['pwd'] = password_hash($_POST['givenPassword'].$added, PASSWORD_BCRYPT);
    try {
      //***Email ei saa olla käytetty aiemmin
      $kysely=$DBH->prepare("SELECT COUNT(*) FROM stressiveks_user where userMail like  " . "'".$_POST['givenEmail']."'");
      $kysely->execute();				
      $tulos=$kysely->fetch();
      if($tulos[0] == 0){ //email ei ole käytössä
      $STH = $DBH->prepare("INSERT INTO stressiveks_user (userFirstname, userLastname, userMail, userPassword, userAge, userHeight, userWeight, userGender) 
      VALUES (:firstname, :lastname, :email, :pwd, :age, :height, :weight, :gender);");
      $STH->execute($data);
      header("Location: index.php"); //Palataan pääsivulle kirjautuneena
      }else{
        $_SESSION['swarningInput']="Email is reserved";
      }
    } catch(PDOException $e) {
      file_put_contents('log/DBErrors.txt', 'signInUser.php: '.$e->getMessage()."\n", FILE_APPEND);
      $_SESSION['swarningInput'] = 'Database problem';
      
    }
  }
}
?>

<?php
//***Luovutetaanko ja palataan takaisin pääsivulle alkutilanteeseen
//ilma  rekisteröintiä?
if(isset($_POST['submitBack'])){
  session_unset();
  session_destroy();
  header("Location: index.php");
}
?>

<?php
  //***Näytetäänkö lomakesyötteen aiheuttama varoitus?
if(isset($_SESSION['swarningInput'])){
  echo("<p class=\"warning\">ILLEGAL INPUT: ". $_SESSION['swarningInput']."</p>");
}
?>
