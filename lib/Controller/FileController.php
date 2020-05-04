<?php
 namespace OCA\grafanadelamor\Controller;

 use OCP\IRequest;
 use OCP\AppFramework\Controller;
use OCP\AppFramework\Http;
 use OCP\AppFramework\Http\DataResponse;

 class FileController extends Controller {

    private $mapper;
     private $userId;

     public function __construct(string $AppName, IRequest $request , $userId){
         parent::__construct($AppName, $request);
         $this->userId = $userId;
     }

     /**
      * @NoAdminRequired
      */
     public function index() {
       return new DataResponse($this->mapper->findAll($this->userId));     
     }

     /**
      * @NoAdminRequired
      *
      * @param int $id
      */
    /* public function show(int $id) {
        try {
             return new DataResponse($this->mapper->find($id, $this->userId));
         } catch(Exception $e) {
             return new DataResponse([], Http::STATUS_NOT_FOUND);
         }
     }*/

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
         return new DataResponse("file:" . $tittle . " " . $content ." " . $this->userId);
     }

     /**
      * @NoAdminRequired
      *
      * @param int $id
      * @param string $title
      * @param string $content
      */
    /* public function update(int $id, string $title, string $content) {
         try {
             $file = $this->mapper->find($id, $this->userId);
         } catch(Exception $e) {
             return new DataResponse([], Http::STATUS_NOT_FOUND);
         }
         $file->setTitle($title);
         $file->setContent($content);
         return new DataResponse($this->mapper->update($file));
     }

     /**
      * @NoAdminRequired
      *
      * @param int $id
      */
   /*  public function destroy(int $id) {
         try {
             $file = $this->mapper->find($id, $this->userId);
         } catch(Exception $e) {
             return new DataResponse([], Http::STATUS_NOT_FOUND);
         }
         $this->mapper->delete($file);
         return new DataResponse($file);
     }
*/
 }
