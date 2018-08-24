<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Http\Exception\InternalErrorException;
use Cake\Utility\Text;

class UploadComponent extends Component{
   
    
    public function send($data, $imgOrg,$userid){
       
        
        if(!empty($data['name']) && $data['size'] < 500000){       
                 
            $filename = $this->tirarAcentos($data['name']);
            $file_tmp_name = $data['tmp_name'];
            $dir = WWW_ROOT.'img'.DS.'uploads';
            $allowed = array('png','jpg','jpeg');            
      
            if(!in_array(substr(strrchr($filename, '.'),1),$allowed)){
                    throw new InternalErrorException('Error de processamento',1);
            }elseif (is_uploaded_file($file_tmp_name)){
                    $nameFile =  $userid.'-'.$filename;
                    $newName = $dir.DS.$nameFile;
                    move_uploaded_file($file_tmp_name,   $newName);
            } 
            return $nameFile;
        }else{
            return $imgOrg;
        }
    }
    
    
    function tirarAcentos($string){
        return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
    }
}

    
    
    
