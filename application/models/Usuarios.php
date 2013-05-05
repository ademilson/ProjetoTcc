<?php

class Application_Model_Usuarios extends F5_Db_Table{
    protected $_name = 'USUARIOS';
    protected $_primary = array('ID_USUARIO_USU');
    protected $_rowClass = 'Application_Model_Usuario';
    
    public function somenteUsuariosAtivos( $somenteAtivos = false ){
        
        if ( $somenteAtivos ){
            $this->_selectCompartilhado()
                 ->where("FL_ATIVO_USU = 1");
        }
        
        return $this;
    }    
    
    public function comApelido( $apelido='' ){
        
        if ( $apelido ){
            $this->_selectCompartilhado()
                 ->where("ST_APELIDO_USU = ?", $apelido);
        }
        
        return $this;        
    }
}