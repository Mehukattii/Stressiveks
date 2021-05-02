
<nav>
<style>/*Popup-ikkunan tyylittely tässä*/

.modal {
  display: none; 
  position: fixed;
  z-index: 1; 
  padding-top: 100px; /* Sijainti */
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
  box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

/* PopUpin sisältö */
.modal-content {
  background-color: #F9F9F9;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  text-shadow:none;
}

/* Sulkunappi */
.close {
  color: #070d0d;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
#myBtn {
  border: none;
  background-color: inherit;
  padding-top: 40px;
  cursor: pointer;
  display: block;
  margin: auto;
  color: black;
  text-decoration: none;
  font-family: 'Raleway', sans-serif;
  font-size: 20px;
}

p {
  text-align: center;
}

</style>

<div class="frontpage">
    <button id="myBtn">Mikä on Stressiveks?</button>

<!-- Popup -ikkuna -->
  <div id="myModal" class="modal">

  <!-- Popup -ikkanan sisältö -->
    <div class="modal-content">
    <span class="close">&times;</span>
    <p> Mikä on Stressiveks? <br><br>

        Stressiveks on sykevälivaihtelun (HRV) analysoinnin avuksi luotu sovellus. <br><br>
        Stressiveksin tavoitteena on parantaa työperäisen stressin tunnistettavuutta ja ennakoivasti parantaa työntekijän työssä jaksamista. Kohderyhmämme ovat 18–64-vuotiaat toimistotyöntekijät. Työperäistä stressiä pyritään tunnistamaan mittaamalla työntekijän sykevälivaihtelua kahden viikon ajan, jonka lisäksi kirjataan tuntemuksia ja tapahtumia päiväkirjaan. Päivän tapahtumat voidaan näin yhdistää sykevälivaihtelun muutoksiin. Stressiveksistä löytyy ohjeita, joilla muistutetaan muista hyvinvointia ja terveyttä edistävistä toimista. <br><br>
        Tarkoituksenamme olla yhdessä työterveyshuollon kanssa mahdollistamassa parempaa työhyvinvointia ja vähentämässä työperäistä stressiä. 
    </p>
    </div>

  </div>

<script src="js/popup.js"></script>
</div>

    </nav>

<hr>
<hr>
<p>
  ©2021 Stressiveks Oy
</p>
