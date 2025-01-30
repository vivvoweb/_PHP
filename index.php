<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<?php include 'header.php'; ?>

<main>
    <div id="liste-oeuvres">
        <?php
        include 'oeuvres.php';
        
        foreach ($oeuvres as $id => $oeuvre) {
            ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $id; ?>">
                    <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
                    <h2><?php echo $oeuvre['titre']; ?></h2>
                    <p class="description"><?php echo $oeuvre['artiste']; ?></p>
                </a>
            </article>
            <?php
        }
        ?>
    </div>
</main>

<?php include 'footer.php'; ?>
