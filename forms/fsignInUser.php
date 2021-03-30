
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

    <p>Pituus (cm)<br /> 
    <input type="number" name="givenHeight" placeholder="Pituutesi" maxlength="40"/>
    </p>

    <p>Paino (kg)<br /> 
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
    <input type="password" name="givenPassword" placeholder="Salasana vähintään 8 merkkiä" maxlength="40"/>
    </p>
    
    <p>
    Salasana uudelleen <br />  
    <input type="password" name="givenPasswordVerify" placeholder="Salasana uudelleen" maxlength="40"/>
    </p>

    <p id="signInButtons"><br />
    <input type="submit" name="submitUser" class="btn" value="Rekisteröidy"/>
    <input type="reset" class="btn"  value="Tyhjennä"/>
    <input type="reset" class="btn" onclick="window.location.href='index.php'"  value="Palaa"/>
    </p>
  </form>
