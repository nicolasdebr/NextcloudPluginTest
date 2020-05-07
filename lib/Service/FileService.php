<?php
namespace OCA\GrafanaDelAmor\Service;

use OCA\GrafanaDelAmor\Db\File;

use OCA\GrafanaDelAmor\Db\FileMapper;

class FileService {
  private $mapper;


  public function __construct(FileMapper $mapper){
  $this->mapper = $mapper;
  }

  public function findAll(string $userId){
    return $this->mapper->findAll($userId);
  }

  public function find(int $id, string $userId){
    return $this->mapper->find($id,$userId);
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
