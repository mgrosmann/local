<?php
// Liste de mots : clé = anglais, valeur = français
$vocabulaire = [
    "reliable" => "fiable",
    "wide" => "large",
    "narrow" => "étroit",
    "thick" => "épais",
    "thin" => "mince",
    "accurate" => "précis",
    "accuracy" => "précision",
    "straight" => "droit",
    "curved" => "incurvé", 
    "copper" => "cuivre"
];

// Récupère les réponses
$reponses_anglais = $_POST['reponse_anglais'];
$reponses_francais = $_POST['reponse_francais'];
$mots_anglais = $_POST['mot_anglais'];
$mots_francais = $_POST['mot_francais'];

// Initialisation du score
$score = 0;

echo "<h2>Correction : Traduction de français vers anglais</h2>";
for ($i = 0; $i < count($mots_anglais); $i++) {
    $mot_anglais = $mots_anglais[$i];
    $reponse = $reponses_anglais[$i];
    $mot_francais = $vocabulaire[$mot_anglais];
    $correct = ($reponse === $mot_anglais) ? "correct" : "incorrect";
    if ($correct === "correct") {
        $score++;
    }
    echo "<p>Mot français : <b>$mot_francais</b>, Réponse : $reponse (Attendu : $mot_anglais) - $correct</p>";
}

echo "<h2>Correction : Traduction d'anglais vers français</h2>";
for ($i = 0; $i < count($mots_francais); $i++) {
    $mot_francais = $mots_francais[$i];
    $reponse = $reponses_francais[$i];
    $mot_anglais = array_search($mot_francais, $vocabulaire);
    $correct = ($reponse === $mot_francais) ? "correct" : "incorrect";
    if ($correct === "correct") {
        $score++;
    }
    echo "<p>Mot anglais : <b>$mot_anglais</b>, Réponse : $reponse (Attendu : $mot_francais) - $correct</p>";
}

// Affichage du score final sur 20
echo "<h2>Score final : $score / 20</h2>";
?>
