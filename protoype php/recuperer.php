<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['nom']);

    $notes = [
        (float) $_POST['note1'],
        (float) $_POST['note2'],
        (float) $_POST['note3'],
    ];

    function checkRange(array $notes): bool {
        foreach ($notes as $note) {
            if ($note < 0 || $note > 20) {
                return false;
            }
        }
        return true;
    }

    function calculateAVG(array $notes): float {
        return array_sum($notes) / count($notes);
    }

    function getMention(float $avg, string $name): string {
        if ($avg < 10) return "Rattrapage";
        if ($avg <= 11) return "Passable";
        if ($avg <= 14) return "Assez bien";
        if ($avg <= 16) return "Très bien";
        if ($avg <= 18) return "Excellent";
        return "Félicitations $name, vous êtes un génie 🚀";
    }

    if (!checkRange($notes)) {
        echo "❌ Veuillez entrer des notes entre 0 et 20.";
        exit;
    }

    $avg = round(calculateAVG($notes), 2);
    $mention = getMention($avg, $name);

    echo "<h3>Résultat</h3>";
    echo "Moyenne : <strong>$avg</strong><br>";
    echo "Mention : <strong>$mention</strong>";
}
