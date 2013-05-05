<?php

class Application_Model_Usuario extends F5_Db_Table_Row{
   
 
    protected function _insert(){
        
        if ( !$this->ST_NOME_USU )
            throw new Exception("Nome não informado");
    }
    
//    protected function _postInsert() {
//        
//        die("Passou aqui depois que salvou");
//    }
    
    protected function _update(){
        
        if ( !$this->ST_NOME_USU )
            throw new Exception("Nome não informado");
    }
    
//    protected function _postUpdate() {
//        
//        die("Passou aqui depois que salvou");
//    }
}