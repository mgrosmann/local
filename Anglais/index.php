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

// Mélange aléatoirement les mots
$keys = array_keys($vocabulaire);
shuffle($keys);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Entraînement vocabulaire anglais</title>
</head>
<body>

    <h1>Entraînement vocabulaire anglais</h1>
    <form action="result.php" method="post">
        <?php
        // Partie 1 : 10 questions Français -> Anglais
        echo "<h2>Traduire les mots en anglais :</h2>";
        foreach ($keys as $mot_anglais) {
            $mot_francais = $vocabulaire[$mot_anglais];
            echo "<label>Mot en français : <b>$mot_francais</b></label><br>";
            echo "<input type='text' name='reponse_anglais[]' /><br><br>";
            echo "<input type='hidden' name='mot_anglais[]' value='$mot_anglais' />";
        }

        // Partie 2 : 10 questions Anglais -> Français
        echo "<h2>Traduire les mots en français :</h2>";
        foreach ($keys as $mot_anglais) {
            $mot_francais = $vocabulaire[$mot_anglais];
            echo "<label>Mot en anglais : <b>$mot_anglais</b></label><br>";
            echo "<input type='text' name='reponse_francais[]' /><br><br>";
            echo "<input type='hidden' name='mot_francais[]' value='$mot_francais' />";
        }
        ?>
        <input type="submit" value="Soumettre">
    </form>

</body>
</html>

