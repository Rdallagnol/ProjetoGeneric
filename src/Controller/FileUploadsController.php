<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\Filesystem\Folder;


class FileUploadsController extends AppController {
  
    public function index(){
        echo 'TESTAR CONTROLER'; 
    }
    
    public function isAuthorized($user)
    {
        return parent::isAuthorized($user);
    }
    
    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
    
    public function upload() {
        
        $this->layout = false;

        if ($this->request->is('post')) {
          
         $time = round(microtime(true) * 1000);
            
            
            $temp = current($_FILES);
            $diretorio = null;
            
            if (in_array($temp['type'], array('image/png', 'image/jpg', 'image/jpeg', 'image/gif', 'image/bmp'))) {
                $diretorio = "uploaded-images/";
            } else {
                echo json_encode(array('erro' => 'tipo'));
                $this->response->statusCode(400);
                return;
            }
            
            if ($temp['size'] > 2000000) {
                echo json_encode(array('erro' => 'tamanho'));
                $this->response->statusCode(400);
                return;
            }
            
            substr($diretorio, 0, -1);
            //declaro aonde salvar os arquivos
            $diretorio_local = WWW_ROOT . str_replace(array('/'), DS, $diretorio);
            $diretorio_local = str_replace(array(DS . DS), DS, $diretorio_local);
            
            if (!is_dir($diretorio_local)) {
                $folder = new Folder();
                //crio a pasta já verificando se conseguiu
                if ($folder->create($diretorio_local)) {
                    //se conseguiu criar o diretório eu dou permissão
                    $folder->chmod($diretorio_local, 0755, true);
                } else {
                    //se não foi possível informo um erro
                    echo json_encode(array('erro' => 'pasta'));
                    $this->response->statusCode(400);
                    return;
                }
            }
            
            $temp['name'] = $time . "-" . $temp['name'];
            
            $arquivo = $diretorio_local . $temp['name'];
            
            //$resizeObj = new imageTools($arquivo);
            //$resizeObj -> resizeImage(150, 100, 0);
            //$resizeObj -> saveImage($arquivo, 100);
            
            if(move_uploaded_file($temp['tmp_name'], $arquivo)) {
                echo json_encode(array('location' => $temp['name'], 'erro' => null));
            } else {
                echo json_encode(array('erro' => 'upload'));
                $this->response->statusCode(400);
            } 
            
            return; 
        }
    }
    
    
}