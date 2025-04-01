<?php
session_start();
$role = $_GET['role'] ?? 'utilisateur';

if ($role === 'candidat') {
    $message = "Ton compte étudiant a bien été créé 🚀";
    $redirect = "profil_etudiant.php";
} elseif ($role === 'entreprise') {
    $message = "Ton compte entreprise est prêt à être utilisé 👔";
    $redirect = "profil_entreprise.php";
} else {
    $message = "Inscription réussie 🎉";
    $redirect = "index.php";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription validée</title>
    <link rel="stylesheet" href="../../../public/assets/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 3rem;
        }
        .success-card {
            background: #f0f9ff;
            border: 1px solid #bee3f8;
            padding: 2rem;
            border-radius: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="success-card">
        <h1>✅ Bravo !</h1>
        <p><?= $message ?></p>
        <p>Tu vas être redirigé(e) dans quelques secondes...</p>
        <a href="<?= $redirect ?>">Sinon clique ici</a>
    </div>

    <script>
        setTimeout(() => {
            window.location.href = "<?= $redirect ?>";
        }, 4000);
    </script>
</body>
</html>
