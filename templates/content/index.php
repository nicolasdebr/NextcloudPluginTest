<?php
import { basename, dirname, encodePath, isSamePath, joinPaths } from '@nextcloud/paths'

$fichier = basename('/my/questions.txt');
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
for($i = 0; $i < $nb; $i++)
{
?>

<?php
}
?>
<p>Le document contiens <?= $total ?> caractères</p>
