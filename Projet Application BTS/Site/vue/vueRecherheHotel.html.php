<h1>Recherche d'un restaurant</h1>
<form action="./?action=recherche&critere=<?= $critere ?>" method="POST">

    <?php
    switch ($critere) {
        case "nom":
            ?>
            Recherche par nom : <br />
            <input type="text" name="nomH" placeholder="nom" value="<?= $nomH ?>" /><br />
            <?php
            break;
        case "adresse":
            ?>
            Recherche par adresse : <br />
            <input type="text" name="villeH" placeholder="ville" value="<?= $villeH ?>"/><br />
            <input type="text" name="cpRH" placeholder="code postal" value="<?= $cpH ?>"/><br />
            <input type="text" name="voieAdresH" placeholder="rue" value="<?= $voieAdrH ?>"/><br />
            <?php
            break;

    }
    ?>
    <br /><br />
    <input type="submit" value="Rechercher" />

</form>