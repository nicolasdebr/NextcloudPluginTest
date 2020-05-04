<?php
namespace OCA\grafanadelamor\Service;

class FileService {
  
  public function create (string $tittle, string $content, string $userId){
    return "Service : " . $tittle . $content . $userId;
  }
}
