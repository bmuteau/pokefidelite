<?php
// header
include 'C:\wamp64\www\pokefidelite\template\header.php ';
?>
<link href="styles/fonction.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yuji+Syuku&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" crossorigin="anonymous"></script>

<a href="home"><img src="src/iconfinder_home_216242.svg" class="home"></a>
<section carrousel>

    <input id="slide-0" name="carrousel" type="radio" checked />
    <div class="slide">
        <label for="slide-3" class="back">◀</label>
        <div class="slide-content">
            <h1>Télécharger votre QrCode</h1>
            <p>La carte de fidélité Poké est enfin disponible ! <br />
                Afin de cumuler des points, le téléchargement de votre QrCode est indispensable.<br />
                Une fois téléchargé, nous vous conseillons de l'enregistrer dans vos photos.<br />
                Il sera ainsi plus facile à retrouver puisqu'il est à présenter à chaque passage en caisse.</p>
        </div>
        <label for="slide-1" class="forward">▶</label>
    </div>

    <input id="slide-1" name="carrousel" type="radio" />
    <div class="slide">
        <label for="slide-0" class="back">◀</label>
        <div class="slide-content">
            <h1>Présenter votre QrCode</h1>
            <p>
                Pour cumuler des points, il vous suffit de présenter votre QrCode à chaque passage en caisse au moment du réglement.

            </p>
        </div>
        <label for="slide-2" class="forward">▶</label>
    </div>

    <input id="slide-2" name="carrousel" type="radio" />
    <div class="slide">
        <label for="slide-1" class="back">◀</label>
        <div class="slide-content">
            <h1>Cumulez des points</h1>
            <p>

                La règle est simple : </br>
                1 Euros = 1 point <br />
                100 points = 10% de réduction <br />


            </p>
        </div>
        <label for="slide-0" class="forward">▶</label>
    </div>


</section>



<?php
// footer
include 'C:\wamp64\www\pokefidelite\template\footer.php';
?>