<?php
<?php
namespace OCA\MyApp\Storage;

class AuthorStorage {

    private $storage;

    public function __construct($storage){
        $this->storage = $storage;
    }

    public function getContent($id) {
        // check if file exists and read from it if possible
        try {
            $file = $this->storage->getById($id);
            if($file instanceof \OCP\Files\File) {
                $fichier = $file;
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
                return $total;
            } else {
                throw new StorageException('Can not read from folder');
            }
        } catch(\OCP\Files\NotFoundException $e) {
            throw new StorageException('File does not exist');
        }
    }
}
<p>Le document contiens <?= $total ?> caractères</p>
