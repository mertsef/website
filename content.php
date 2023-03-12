<?php
           $headline = "Test Webseite";
           $test=[];
            echo "<h1>" . $headline . "</h1>";
                $test="test";
            if ($_GET["page"]=="Start")
            {
                echo "sieht man das?";
            }
            if ($_GET["page"]=="Anmeldung")
            {
                echo "Anmelden";
                
            }
            if ($_GET["page"]=="Menü")
            {
                echo "das sollte hoffentlich das Menü sein?";
            }
            if ($_GET["page"]=="Auswahl")
            {
                echo "Auswahl: ";
            }
            if ($_GET["page"]=="Info")
            {
                echo "Informationen weiter unten... Tipp: steht im footer";
            }
            ?>