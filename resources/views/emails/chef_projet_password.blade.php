<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChantierPro - Gestion de Chantier</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/src/styles.css">
</head>
<html>
<head>
    <title>Vos identifiants</title>
</head>
<body>
    
    <p>Bonjour {{  $chefProjet->nom}},</p>
    <p>Vous avez été ajouté(e) comme Chef de Projet dans notre système. Voici vos identifiants de connexion :</p>
    <ul>
        <li>Email : {{ $chefProjet->$email }}</li>
        <li>Mot de passe : {{ $password }}</li>
    </ul>
    <p>Veuillez vous connecter et modifier votre mot de passe dès que possible.</p>
    <p>Cordialement,</p>
    <p>L'équipe 7ELITE.</p>
   
</body>
</html>
