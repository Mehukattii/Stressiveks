

<?php
 include("config/cconfig.php");
 session_start();
 ?>
 <!DOCTYPE html>
 <html lang="fi">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Stressiveks</title>
 </head>
 <body>
 <div id="header2">
    <h1><a href="#" id="logo2">Stressiveks</a></h1>
</div>
<?php
  include("forms/flogInUser.php");
?>
 </body>
 </html>


<?php
//Lomakkeen submit painettu?
if(isset($_POST['submitUser'])){
  //***Tarkistetaan syötteet myös palvelimella
  if(!filter_var($_POST['givenEmail'], FILTER_VALIDATE_EMAIL)){
   $_SESSION['swarningInput']="Virhe kirjautumisessa: ";
  }else{
    unset($_SESSION['swarningInput']); 
     try {
      //Tiedot kannasta, hakuehto
      $data['email'] = $_POST['givenEmail'];
      $STH = $DBH->prepare("SELECT userFirstname, userLastname, userMail, userPassword, userAge, userHeight, userWeight FROM stressiveks_user WHERE userMail = :email;");
      $STH->execute($data);
      $STH->setFetchMode(PDO::FETCH_OBJ);
      $tulosOlio=$STH->fetch();
      //lomakkeelle annettu salasana + suola
      $givenPasswordAdded = $_POST['givenPassword'].$added;
 
       //Löytyikö email kannasta?
       if($tulosOlio!=NULL){
          //email löytyi
          //var_dump($tulosOlio);
          if(password_verify($givenPasswordAdded,$tulosOlio->userPassword)){
              $_SESSION['sloggedIn']="yes";
              $_SESSION['sfirstname']=$tulosOlio->userFirstname;
              $_SESSION['slastname']=$tulosOlio->userLastname;
              $_SESSION['semail']=$tulosOlio->userMail;
              $_SESSION['sage']=$tulosOlio->userAge;
              $_SESSION['sheight']=$tulosOlio->userHeight;
              $_SESSION['sweight']=$tulosOlio->userWeight;
              header("Location: index.php"); //Palataan pääsivulle kirjautuneena
          }else{
            $_SESSION['swarningInput']="Virheellinen salasana";
          }
      }else{
        $_SESSION['swarningInput']="Virheellinen sähköpostiosoite";
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
  echo("<p class=\"warning\">Virhe kirjautumisessa: ". $_SESSION['swarningInput']."</p>");
}
?>

<footer>
			<?php
   				include("includes/footer.php")
			?>
</footer>

