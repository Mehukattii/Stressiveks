
<div class="form-login" id="loginForm">
  <form method="post">
    <p><b>Etunimi </b><br /> 
    <input type="text" name="givenFirstname" placeholder="Etunimesi" maxlength="40"/>
    </p>

    <p><b>Sukunimi </b><br /> 
    <input type="text" name="givenLastname" placeholder="Sukunimesi" maxlength="40"/>
    </p>

    <p><b>Sähköposti </b> <br />  
    <input type="text" name="givenEmail" placeholder="Sähköpostiosoitteesi" maxlength="40"/>
    </p>

    <p><b>Ikä </b><br /> 
    <input type="number" name="givenAge" placeholder="Ikäsi" />
    </p>

    <p><b>Pituus (cm) </b> <br /> 
    <input type="number" name="givenHeight" placeholder="Pituutesi"/>
    </p>

    <p><b>Paino (kg) </b> <br /> 
    <input type="number" name="givenWeight" placeholder="Painosi" />
    </p>

    <p><b>Sukupuoli </b> <br /> 
    <input type="radio" id="male" name="givenGender" value = "male">
    <label for="male">Mies</label><br>
    <input type="radio" id="female" name="givenGender" value = "female">
    <label for="female">Nainen</label><br>
    <input type="radio" id="other" name="givenGender" value="other">
    <label for="other">Muu</label>
    </p>

    <p>
    <b>Salasana</b><br /> 
    <input type="password" name="givenPassword" placeholder="Salasana vähintään 8 merkkiä" maxlength="40"/>
    </p>
    
    <p>
    <b>Salasana uudelleen </b> <br />  
    <input type="password" name="givenPasswordVerify" placeholder="Salasana uudelleen" maxlength="40"/>
    </p>

    <p id="signInButtons"><br />
    <input type="submit" name="submitUser" class="btn" value="Rekisteröidy"/>
    <input type="reset" class="btn"  value="Tyhjennä"/>
    <input type="reset" class="btn" onclick="window.location.href='index.php'"  value="Palaa"/>
    </p>
  </form>
</div>