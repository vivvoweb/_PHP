<?php
// Inclure oeuvres.php
include 'oeuvres.php';

// Récupérer l'ID 
if (isset($_GET['id'])) {
    $id = (int) $_GET['id']; 
} else {
    $id = 0; 
}


if (isset($oeuvres[$id])) {
    $oeuvre = $oeuvres[$id];
} else {
    // 
    echo "Œuvre non trouvée.";
    exit;
}
?>

<?php include 'header.php'; ?>

<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre['titre']; ?></h1>
            <p class="description"><?php echo $oeuvre['artiste']; ?></p>
            <p class="description-complete"><?php echo $oeuvre['description']; ?></p>
        </div>
    </article>
</main>

<?php include 'footer.php'; ?>
