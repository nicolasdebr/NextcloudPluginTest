<?php

                $fichier = $_['files'];
                $total = 0;
                $ressource = fopen ($fichier, "r");
                $contenu = fread ($ressource, filesize ($fichier));
                fclose ($ressource);
                $tableau = explode("\r\n", $contenu);
                $longueurs = array();
                foreach($tableau as $ligne)
                {
                    $total = strlen($ligne)+$total;
                }
                $nb = count($tableau);
                echo $total;
          
            
