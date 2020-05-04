<?php
namespace OCA\grafanadelamor\Service;

use OCA\GrafanaDelAmor\Db\File;

use OCA\GrafanaDelAmor\Db\FileMapper;

class FileService {
  private $mapper;
  
  public function _construct(FileMapper $mapper){
  $this->mapper = $mapper;
  }
  
  public function create (string $title, string $content, string $userId){
    //return "Service : " . $tittle . $content . $userId;
  $file = new File();
  $file->setTitle($title);
  $file->setContent($content);
  $file->setUserId($userId);  
  
    return $this->mapper->insert($file);
  
  }
}
