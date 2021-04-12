<?php
session_start();
$_SESSION['true'] = false;

// include_once("connection.php"); 

// include_once("inlogg.php");

include_once("inlog.inc.php");


if (isset($_POST["submit"])) {
    $melding = "";
    $email = htmlspecialchars($_POST["e-mail"]);
    $wachtwoord = htmlspecialchars($_POST["wachtwoord"]);

    try {
        $sql = "SELECT * FROM baas WHERE email =?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($email));
        $resultaat = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($resultaat) {
            $wachtwoordInDatabase = $resultaat["wachtwoord"];
            $rol = $resultaat["rol"];

            if (password_verify($wachtwoord, $wachtwoordInDatabase)) {
                $_SESSION["ID"] = session_id();
                $_SESSION["USER_ID"] = $resultaat["id"];
                // $_SESSION["USER_NAAM"] = $resultaat["voornaam"];
                $_SESSION["E-MAIL"] = $resultaat["email"];
                $_SESSION["STATUS"] = "ACTIEF";
                $_SESSION["ROL"] = $rol;

                if ($rol == 0) {
                    echo "<script>
                        location.href='index.php?page=webshop';
                     </script>";
                } elseif ($rol == 1) {
                    $_SESSION['true'] = true;
                    header("Location: index.php");
                } else {
                    $melding = "Toegang geweigerd<br />";
                }
            } else {
                $melding = "Probeer nogmaals in te loggen <br />";
            }
        } else {
            $melding = "Probeer Nogmaals in te loggen <br />";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    echo "<div id='melding'>$melding</div> ";
}


?>