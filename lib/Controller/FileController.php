<?php
 namespace OCA\grafanadelamor\Controller;

 use OCP\IRequest;
 use OCP\AppFramework\Controller;

 class FileController extends Controller {

     public function __construct(string $AppName, IRequest $request){
         parent::__construct($AppName, $request);
     }

     /**
      * @NoAdminRequired
      */
     public function index() {
         // empty for now
     }

     /**
      * @NoAdminRequired
      *
      * @param int $id
      */
     public function show(int $id) {
         // empty for now
     }

     /**
      * @NoAdminRequired
      *
      * @param string $title
      * @param string $content
      */
     public function create(string $title, string $content) {
         // empty for now
     }

     /**
      * @NoAdminRequired
      *
      * @param int $id
      * @param string $title
      * @param string $content
      */
     public function update(int $id, string $title, string $content) {
         // empty for now
     }

     /**
      * @NoAdminRequired
      *
      * @param int $id
      */
     public function destroy(int $id) {
         // empty for now
     }

 }
