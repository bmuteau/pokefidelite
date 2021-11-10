<?php
// header
include 'C:\wamp64\www\pokefidelite\template\header.php ';

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" crossorigin="anonymous"></script>
<link href="styles/home.css" rel="stylesheet">
<link href="styles/connexionregister.css" rel="stylesheet">

<div class="menu-bg"></div>
<div class="menu-burger">☰</div>
<div class="menu-items">
    <div> <a href="home">• Accueil </a> </div>
    <div><a href="editInfo">• Mes informations</a></div>
    <div><a href="fonction">• Fonctionnement de la carte de fidélité </a></div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <div> <a href="https://www.pokegranville.fr/contact/">• Nous contacter</a></div>
    <div><a href="https://www.pokegranville.fr/mentions-legales/">• Mention légale </a></div>
    <div><a href="https://www.pokegranville.fr/politique-de-confidentialite/">• Politique de confidentialité</a></div>
    <br />
    <br />
    <div><a href="connexionregister">• Se déconnecter</a></div>
</div>
<form class="form" style="left:20%;">
    <label for="popup__1"><img src="src/editpen.svg" class="pen"> Nom </label>
    <input type="text" style="font-size: 51px;" value="NOM" disabled="disabled" required>
    <label for="popup__2"> <img src="src/editpen.svg" class="pen"> Prénom </label>
    <input type="text" style="font-size: 51px;" value="PRENOM" disabled="disabled" required>
    <label for="popup__3"><img src="src/editpen.svg" class="pen"> Email </label>
    <input type="email" style="font-size: 51px;" value="EMAIL" autocomplete="off" disabled="disabled" requiered>
    <label for="popup__4"><img src="src/editpen.svg" class="pen"> Mot de passe </label>
    <input type="password" style="font-size: 51px;" value="MOT DE PASSE" autocomplete="off" disabled="disabled" required>
    <label for="popup__5"><img src="src/editpen.svg" class="pen"> Code postal </label>
    <input type="number" style="font-size: 51px;" value="12345" disabled="disabled" required>
</form>
<div class="intro">
    <h3>Mes informations</h3>
    <p style="margin-top:-28px;">Vous pouvez édité vos informations en cliquant sur le crayon.</p>
</div>
<!-- Name Popup -->
<input type="checkbox" id="popup__1" class="popup__check" />
<div class="popup__base">
    <label for="popup__1" class="popup__bg"></label>
    <div class="popup__inner">
        <div class="popup__calign">
            <label for="popup__1" class="popup__close">+</label>
        </div>
        <div id="popup__textbox" class="popup__textbox">
            <h1 id="titlePopup">Nouveau Nom </h1>
            <p>
                Veuillez remplir votre nouveau nom et validé en cliquant sur OK, ou annulé en cliquant sur la croix.
            <form method="POST">
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <div class="center">
                    <label id="type" style="left: 11%;
    position: relative;">Nom</label>

                    <input type="text" class="editing" style="font-size: 51px;">

                    <button type="submit" class="validate">OK </button>
                </div>
            </form>
            <p>
        </div>
    </div>
</div>
<!-- End popup -->
<!--  firstname popup -->
<input type="checkbox" id="popup__2" class="popup__check" />
<div class="popup__base">
    <label for="popup__2" class="popup__bg"></label>
    <div class="popup__inner">
        <div class="popup__calign">
            <label for="popup__2" class="popup__close">+</label>
        </div>
        <div id="popup__textbox" class="popup__textbox">
            <h1 id="titlePopup">Nouveau Prénom </h1>
            <p>
                Veuillez remplir votre nouveau prénom et validé en cliquant sur OK, ou annulé en cliquant sur la croix.
            <form method="POST">
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <label id="type" style="left: 11%;
    position: relative;">Prénom</label>

                <input type="text" class="editing" style="font-size: 51px;">

                <button type="submit" class="validate">OK </button>
            </form>
            <p>
        </div>
    </div>
</div>
<!-- End popup -->
<!--  email popup -->
<input type="checkbox" id="popup__3" class="popup__check" />
<div class="popup__base">
    <label for="popup__3" class="popup__bg"></label>
    <div class="popup__inner">
        <div class="popup__calign">
            <label for="popup__3" class="popup__close">+</label>
        </div>
        <div id="popup__textbox" class="popup__textbox">
            <h1 id="titlePopup">Nouvelle Email </h1>
            <p>
                Veuillez remplir votre nouvelle email et validé en cliquant sur OK, ou annulé en cliquant sur la croix.
            <form method="POST">
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <label id="type" style="left: 11%;
    position: relative;">Email</label>

                <input type="text" class="editing" style="font-size: 51px;">

                <button type="submit" class="validate">OK </button>
            </form>
            <p>
        </div>
    </div>
</div>
<!-- End popup -->
<!--  password popup -->
<input type="checkbox" id="popup__4" class="popup__check" />
<div class="popup__base">
    <label for="popup__4" class="popup__bg"></label>
    <div class="popup__inner">
        <div class="popup__calign">
            <label for="popup__4" class="popup__close">+</label>
        </div>
        <div id="popup__textbox" class="popup__textbox">
            <h1 id="titlePopup">Nouveau Mot de Passe </h1>
            <p>
                Veuillez remplir votre nouveau mot de passe et validé en cliquant sur OK, ou annulé en cliquant sur la croix.
            <form method="POST">
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />

                <label id="type" style="left: 11%;
    position: relative;">Mot de Passe</label>

                <input type="text" class="editing" style="font-size: 51px;">

                <button type="submit" style="top:150%;" class="validate">OK </button>
            </form>
            <p>
        </div>
    </div>
</div>
<!-- End popup -->

<!--  postal code popup -->
<input type="checkbox" id="popup__5" class="popup__check" />
<div class="popup__base">
    <label for="popup__5" class="popup__bg"></label>
    <div class="popup__inner">
        <div class="popup__calign">
            <label for="popup__5" class="popup__close">+</label>
        </div>
        <div id="popup__textbox" class="popup__textbox">
            <h1 id="titlePopup">Nouveau Code Postal </h1>
            <p>
                Veuillez remplir votre nouveau code postal et validé en cliquant sur OK, ou annulé en cliquant sur la croix.
            <form method="POST">
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />

                <label id="type" style="left: 11%;
    position: relative;">Code postal</label>

                <input type="text" class="editing" style="font-size: 51px;">

                <button type="submit" style="top:150%;" class="validate">OK </button>
            </form>
            <p>
        </div>
    </div>
</div>
<!-- End popup -->

<script src="script/navbar.js"></script>


<?php
// footer
include 'C:\wamp64\www\pokefidelite\template\footer.php';
?>