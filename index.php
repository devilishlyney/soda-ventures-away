<?php

// format variables
// $variable = "valeur";
// ===exemple===
// $siteTitle = "J'aime pas les lundis";

$siteTitle = "Soda Ventures Away";
$pageTitle = "Accueil";
$pageContent = "The time is 1:04 AM. You can't sleep, you feel an overwhelming sense of discomfort. You ponder your options carefully.
You could stay home and brew a cup of coffee, and get some work done in advance to lighten your workload.
Or you could go for a walk to the park nearby, though you don't know what you're hoping to encounter there.
Or you could just keep trying to sleep, despite the fact that it hasn't proven to be a success so far.";

$choice_1 = [
    [
        "pick" => "You choose to work at home.",
        "link" => "work-at-home.php"
    ],
    [
        "pick" => "You choose to go for a walk.",
        "link" => "go-for-walk.php"
    ],
    [
        "pick" => "You choose to keep trying to sleep.",
        "link" => "try-to-sleep.php"
    ]
];


require "templates/layout.phtml";
?>