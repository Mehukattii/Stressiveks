<?php
include("config/cconfig.php");
 
?>
<!DOCTYPE html>
 <html lang="en">
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

include("forms/fupdateUser.php");

if (isset($_POST['submitUser'])){

    if(strlen($_POST['givenPassword']) < 8){
        $_SESSION['swarningInput']="Illegal password (min 8 chars)";
    }else if(!$_POST['givenPassword']== $_POST['givenPasswordVerify']){
        $_SESSION['swarningInput']="Given password and verified not same";
      }else{
        unset($_SESSION['swarningInput']);
      }

      $_SESSION['sloggedIn']="yes";
      $_SESSION['sage']= $_POST['givenAge'];
      $_SESSION['sheight']= $_POST['givenHeight'];
      $_SESSION['sweight']= $_POST['givenWeight'];
  

        $data2['email'] = $_SESSION['semail'];

        // id haettiin emailin avulla
        $sqlQuery = "SELECT userID FROM stressiveks_user where userMail = :email";

        $kysely1 = $DBH->prepare($sqlQuery);
        $kysely1->execute($data2);
        $tulos1 = $kysely1->fetch();
        $currentUserID = $tulos1[0];

        $data3['id'] = $currentUserID;
        $data3['age'] = $_POST['givenAge'];
        $data3['height'] = $_POST['givenHeight'];
        $data3['weight'] = $_POST['givenWeight'];

        $added='#â‚¬%&&/'; //suolataan annettua salasanaa
        $data3['pwd'] = password_hash($_POST['givenPassword'].$added, PASSWORD_BCRYPT);
        

        try {
        
            $sql3 = "UPDATE stressiveks_user SET userAge = :age, userHeight = :height, userWeight = :weight, userPassword = :pwd  WHERE userID = :id";
    
            $kysely3 = $DBH->prepare($sql3);
            $kysely3->execute($data3);
            
            header("Location: profiili.php"); 
    

    } catch (PDOException $e) {
        echo "Yhteysvirhe: " . $e->getMessage();
        file_put_contents('log/DBErrors.txt', 'Connection rivi 40: ' . $sqlQuery . "\n", FILE_APPEND);
    }

}

if (isset($_POST['deleteUser'])){

    $data4['email'] = $_SESSION['semail'];

    // id haettiin emailin avulla
    $sqlQuery2 = "SELECT userID FROM stressiveks_user where userMail = :email";
    $kysely2 = $DBH->prepare($sqlQuery2);
    $kysely2->execute($data4);
    $tulos2 = $kysely2->fetch();
    $currentUserID = $tulos2[0];

    $data5['id'] = $currentUserID;

    try{
        
        $kysely3 = $DBH->prepare("DELETE * FROM stressiveks_user WHERE userID = :id");
        $kysely3->execute();
        
        session_unset();
        session_destroy();

        header("Location: index.php"); 

    } catch (PDOException $e) {
        echo "Yhteysvirhe: " . $e->getMessage();
       
    }
}
?>
