
<div class="form-contact" id="contactForm">
  <form method="post">

    <input type="text" name="givenName" placeholder="Nimi" maxlength="40"/><br>


    <input type="text" name="givenMail" placeholder="Sähköpostiosoite" maxlength="40"/><br>
    

    <textarea id="subject" name="message" placeholder="Kirjoita viestisi tähän..." style="height:150px"></textarea>


    <p id="contactButtons"><br />
    <input type="submit" name="contact" class="btn" value="Lähetä"/>
    <input type="reset" class="btn" onclick="window.location.href='index.php'"  value="Palaa"/>
    </p>
  </form>
</div>