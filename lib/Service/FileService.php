<?php
namespace OCA\grafanadelamor\Service;

use OCA\grafanadelamor\Db\File;

class FileService {
  
  public function create (string $tittle, string $content, string $userId){
    //return "Service : " . $tittle . $content . $userId;
  $file = new file();
  $file->setTitle($tittle);
  $file->setContent($content);
  $file->setUserId($userId);  
  
    return $file;
  
  }
}
