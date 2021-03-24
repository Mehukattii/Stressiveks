<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Stressiveks</title>
</head>
<body>
<div id="header2">
    <h1><a href="#" id="logo2">Stressiveks</a></h1>
</div>
<div class="form-login" id="loginForm">
  <form method="post">
    <p>Etunimi<br /> 
    <input type="text" name="givenFirstname" placeholder="Etunimesi" maxlength="40"/>
    </p>

    <p>Sukunimi<br /> 
    <input type="text" name="givenLastname" placeholder="Sukunimesi" maxlength="40"/>
    </p>

    <p>Sähköposti <br />  
    <input type="text" name="givenEmail" placeholder="Sähköpostiosoitteesi" maxlength="40"/>
    </p>

    <p>Ikä<br /> 
    <input type="number" name="givenAge" placeholder="Ikäsi" maxlength="40"/>
    </p>

    <p>Pituus<br /> 
    <input type="number" name="givenHeight" placeholder="Pituutesi" maxlength="40"/>
    </p>

    <p>Paino<br /> 
    <input type="number" name="givenWeight" placeholder="Painosi" maxlength="40"/>
    </p>

    <p>Sukupuoli<br /> 
    <input type="radio" name="givenGender" value = "male" />
    <label for="male">Mies</label><br>
    <input type="radio" name="givenGender" value = "female" />
    <label for="female">Nainen</label><br>
    <input type="radio" id="other" name="givenGender" value="other">
    <label for="other">Muu</label>
    </p>

    <p>
    Salasana<br /> 
    <input type="password" name="givenPassword" placeholder="password min 8 chars" maxlength="40"/>
    </p>
    
    <p>
    Salasana uudelleen <br />  
    <input type="password" name="givenPasswordVerify" placeholder="password again" maxlength="40"/>
    </p>

    <p><br />
    <input type="submit" name="submitUser" class="btn" value="Submit"/>
            <input type="reset" class="btn"  value="Reset"/>
    </p>
  </form>
