<?php

$age = 17;

if ($age >= 18) {
    echo "أنت راشد.";
} else {
    echo "أنت قاصر.";
}
?>  
$jour = "Vendredi";

switch ($jour) {
    case "Lundi":
        echo "بداية الأسبوع";
        break;

    case "Vendredi":
        echo "آخر يوم قبل عطلة نهاية الأسبوع";
        break;

    default:
        echo "يوم عادي";
}
