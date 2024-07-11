<?php
$bdd = new bdd();
$bdd->connect();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Fighter-UFC</title>
</head>

<body>
    <header class="bg-red-900">
        <nav class="flex justify-center items-center gap-10 h-24">
            <a class="underline text-white text-lg" href="index.php">Accueil</a>
            <a class="underline text-white text-lg" href="recup.php">Recup</a>
        </nav>
    </header>
</body>

</html>