<div class="form-login" id="loginForm">
  <form method="post">
   
    <p><b>Ikä </b><br /> 
    <input type="number" name="givenAge" placeholder="Ikäsi" />
    </p>

    <p><b>Pituus (cm) </b> <br /> 
    <input type="number" name="givenHeight" placeholder="Pituutesi"/>
    </p>

    <p><b>Paino (kg) </b> <br /> 
    <input type="number" name="givenWeight" placeholder="Painosi" />
    </p>
    <p>
    <b>Salasana</b><br /> 
    <input type="password" name="givenPassword" placeholder="Salasana vähintään 8 merkkiä" maxlength="40"/>
    </p>
    
    <p>
    <b>Salasana uudelleen </b> <br />  
    <input type="password" name="givenPasswordVerify" placeholder="Salasana uudelleen" maxlength="40"/>
    </p>

    <p id="signInButtons2"><br />
    <input type="submit" name="submitUser" class="btn" value="Päivitä"/>
    <input type="reset" class="btn" onclick="window.location.href='profiili.php'"  value="Palaa"/>
	<input type="submit" name="deleteUser" class="btn" id = "deleteUser" value="Poista tili"/>
    </p>
  </form>
</div>