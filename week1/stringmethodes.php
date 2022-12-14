<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String methodes</title>
</head>
<body>

<h2>String methodes</h2>
<form action="" method="post">
    <label for="naam">Naam:</label><br>
    <input type="text" name="naam" required placeholder="Naam"><br><br>

    <label for="straat">Straat:</label><br>
    <input type=text name="straat" required placeholder="Straat">><br><br>

    <label for="huisnummer">Huisnummer:</label><br>
    <input type=text name="huisnummer" required placeholder="Huisnummer">><br><br>

    <label for="postcode">Postcode:</label><br>
    <input type=text name="postcode" required placeholder="Postcode">><br><br>

    <label for="woonplaats">Woonplaats:</label><br>
    <input type=text name="woonplaats" required placeholder="Woonplaats">><br><br>

    <input type="submit" name="submit" value="verzenden" >
</form>

<?php

if (isset($_POST['submit'])) {
    ?>    
    <?php 

    
    $naam = $_POST['naam'];
    $straat = $_POST['straat'];
    $huisnummer = $_POST['huisnummer'];
    $postcode = $_POST['postcode'];
    $woonplaats = $_POST['woonplaats'];

    if(is_numeric($huisnummer)){
        $naam = strtolower($naam);
        $straat = strtolower($straat);
        $huisnummer = strtolower($huisnummer);
        $postcode = strtolower($postcode);
        $woonplaats = strtolower($woonplaats);
    
        $naam = ucfirst($naam);
        $straat = ucfirst($straat);
        $huisnummer = ucfirst($huisnummer);
        $postcode = ucfirst($postcode);
        $woonplaats = ucfirst($woonplaats);
    
        echo htmlspecialchars(
            $naam." ".
            $straat. " ".
            $huisnummer. " ".
            $postcode. " ".
            $woonplaats
        );

    }else{
        echo "voor een hetal in bij huisnummer";
    }


    /*
     * OPDRACHT 5:
     * Check of het ingevoerde huisnummer werkelijk een nummer is.
     * Hiervoor gebruik je de functie is_numeric()
     * Is er geen nummer ingevoerd geef dan een melding dat er een nummer moet worden ingevoerd
     */

}
?>

</body>
</html>