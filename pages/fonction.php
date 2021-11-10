<?php
// header
include 'C:\wamp64\www\pokefidelite\template\header.php ';
?>
<link href="../styles/fonction.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" crossorigin="anonymous"></script>

<a href="../pages/home.php"><img src="../src/iconfinder_home_216242.svg" class="home"></a>
<section carrousel>

    <input id="slide-0" name="carrousel" type="radio" checked />
    <div class="slide">
        <label for="slide-3" class="back">◀</label>
        <div class="slide-content">
            <h1>Télécharger votre QrCode</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi voluptatibus facilis, porro aperiam explicabo totam error harum assumenda velit repellat dolorem quasi, ad consectetur ducimus, consequatur tempore accusamus! Libero, culpa?</p>
        </div>
        <label for="slide-1" class="forward">▶</label>
    </div>

    <input id="slide-1" name="carrousel" type="radio" />
    <div class="slide">
        <label for="slide-0" class="back">◀</label>
        <div class="slide-content">
            <h1>Présenter votre QrCode</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi voluptatibus facilis, porro aperiam explicabo totam error harum assumenda velit repellat dolorem quasi, ad consectetur ducimus, consequatur tempore accusamus! Libero, culpa?</p>
        </div>
        <label for="slide-2" class="forward">▶</label>
    </div>

    <input id="slide-2" name="carrousel" type="radio" />
    <div class="slide">
        <label for="slide-1" class="back">◀</label>
        <div class="slide-content">
            <h1>Cumulez des points</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi voluptatibus facilis, porro aperiam explicabo totam error harum assumenda velit repellat dolorem quasi, ad consectetur ducimus, consequatur tempore accusamus! Libero, culpa?</p>
        </div>
        <label for="slide-0" class="forward">▶</label>
    </div>


</section>



<?php
// footer
include 'C:\wamp64\www\pokefidelite\template\footer.php';
?>