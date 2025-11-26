<?php
// ==============================================
// Fichier : connexion.php
// Projet : Olylife
// Description : Connexion à la base de données MySQL
// Auteur : Christian Bini
// ==============================================

// Informations de connexion
$host = "localhost";           // Hôte (ne change pas sur WAMP)
$dbname = "olylife";           // Nom de la base de données
$username = "root";            // Utilisateur (par défaut sur WAMP)
$password = "";                // Mot de passe (souvent vide sur WAMP)

// Connexion via PDO
try {
    // Création de l’objet PDO
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Configuration des options PDO
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Debug facultatif
    // echo "✅ Connexion réussie à la base de données Olylife !";

} catch (PDOException $e) {
    // Gestion des erreurs
    echo "❌ Erreur de connexion : " . $e->getMessage();
    exit;
}
?>
