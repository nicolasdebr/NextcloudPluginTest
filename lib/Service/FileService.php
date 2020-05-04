<?php
namespace OCA\grafanadelamor\Service;

use OCA\GrafanaDelAmor\Db\File;

use OCA\GrafanaDelAmor\Db\FileMapper;

class FileService {
  public $mapper;
  public function _construct(FileMapper $mapper){
  $this->mapper = $mapper;
  }
  
  public function create (string $tittle, string $content, string $userId){
    //return "Service : " . $tittle . $content . $userId;
  $file = new file();
  $file->setTitle($tittle);
  $file->setContent($content);
  $file->setUserId($userId);  
  
    return $this->mapper->insert($note);
  
  }
}
