<?php
// header
include 'C:\wamp64\www\pokefidelite\template\header.php ';
global $hlp, $db;
$users = $hlp->getUsers();
$nbUsers = count($users);
$nbPts = 0;
foreach ($users as $user) {
    $nbPts += $user['points'];
}
?>
<link href="styles/adminHome.css" rel="stylesheet">

<section>
    <h2> &nbsp; Nombre de clients fidélisé &nbsp;</h2><br />
    <h3><?= $nbUsers ?></h3>

    <h2> &nbsp; Nombre de points cumulé &nbsp;</h2><br />
    <h3><?= $nbPts ?></h3>
</section>

<article>
    <button class="button1"><a href="scanner">Scanner une carte <br />
            de fidélité </a>
    </button>
    <br />
    <br />
    <button onclick="exportListingExcel('tableId', 'bdd')" class="button2">Télécharger <br />
        la liste utilisateur
    </button>
    <!--  -->
    <table id="tableId" style="display:none">
        <thead>
            <tr>
                <th>Email</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Code Postal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $i => $user) {
            ?>
                <tr>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['fname'] ?></td>
                    <td><?= $user['lname'] ?></td>
                    <td><?= $user['postalcode'] ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</article>
<script type="text/javascript" src="script/bddexport.js"></script>
<?php
// footer
include 'C:\wamp64\www\pokefidelite\template\footer.php';
?>