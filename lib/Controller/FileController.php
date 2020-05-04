<?php
 namespace OCA\GrafanaDelAmor\Controller;

 use OCP\IRequest;
 use OCP\AppFramework\Controller;
 use OCP\AppFramework\Http;
 use OCP\AppFramework\Http\DataResponse;
 use OCA\GrafanaDelAmor\Service\FileService;

 class FileController extends Controller {

   // private $mapper;
    private $userId;
    private $service;

     public function __construct(string $AppName, IRequest $request , $userId, FileService $service){
         parent::__construct($AppName, $request);
         $this->userId = $userId;
        // $this->service = $service;
     }

    
    
     /**
      * @NoAdminRequired
      *
      * @param string $title
      * @param string $content
      */
     public function create(string $title, string $content) {
       /*  $file = new Note();
         $file->setTitle($title);
         $file->setContent($content);
         $file->setUserId($this->userId);*/
      $serviceResponse = $this->service->create($title,$content,$this->userId);
      return new DataResponse($serviceResponse);
     }

     
 }
