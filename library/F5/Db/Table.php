<?php

class F5_Db_Table extends Zend_Db_Table{
    
    protected $_name = 'USUARIOS';
    protected $_primary = array('ID_USUARIO_USU');    
    
    private $_select = null;
    
    /**
     * Retorna o "select compartilhado das classes"
     * 
     *
     * @return Zend_Db_Table_Select
     */
    public function _selectCompartilhado() {
        if ($this->_select === null) {
            $this->_select = $this->select()
                            ->setIntegrityCheck(false)
                            ->from($this, array());
            
        }
        return $this->_select;
    }
    
    
    public function encontrar(){
        
        return $this->_encontrar();
    }
    
    public function select($withFromPart =false){
        
        return new F5_Db_Table_Select($this);
    }
    
    protected function _encontrar(){
                
        $select = clone($this->_select);
        
//        $this->_setTabelasColunas($this->_select->getPart('columns'));

        $this->_select = null;
//        $this->_colunas = array();
//        return $contar ? $this->fetchAll($select)->current()->contador : $this->fetchAll($select);        
        
        return $this->fetchAll($select);        
    }
}