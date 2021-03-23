<fieldset><legend>Käyttäjätiedot</legend>
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
  <input type="submit" name="submitUser" value="Submit"/>
          <input type="reset"  value="Reset"/>
  </p>
</form>
</fieldset>