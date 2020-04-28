$fichier = $TheFile;
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
    
<div id="search">
    <form id="search-form">
        <input type="text" placeholder="" id="search-term" />
        <input type="submit" id="search-submit" value="Count" />
    </form>
</div>
