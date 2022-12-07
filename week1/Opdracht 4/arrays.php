<?php

$aanhef = array(
    "aanhef" => "Beste",
    "persoon" => "klant");

$korting = array(
    "product" => str_replace("[[product]]", "Platenspeler", "U heeft in de voorgaande bestelling voor [[product]] gekozen"),
    "korting" => "Bij Uw volgende bestelling kunnen we U een korting van 10% aanbieden op hetzelfde product"
);

$ondertekening = array(
  "groet" => "Met vriendelijke groet,",
  "naam" => "Scott",
  "functie" => "Directeur Webshop beheer"
);

$aanbieding = array_merge($aanhef, $korting, $ondertekening);

print_r(var_dump($aanbieding));
