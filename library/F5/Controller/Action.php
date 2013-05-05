<?php

class F5_Controller_Action extends Zend_Controller_Action{
    
    
    public function preDispatch() {
        
//        $db = $this->initDb();
    }
    
    /**
     * Realiza a conexão antes do login ou após verificar se usuário autenticado
     * Carrega as configurações em $_config
     * @return Superlogica_Db
     */    
//    protected function initDb(){
//        
//        die("passou no init db");
////return array(
////    'db' => array(
////        'username' => 'root',
////        'password' => '123456',
////        'driver'         => 'Pdo',
////        'dsn'            => 'mysql:dbname=zend;host=localhost',
////        'driver_options' => array(
////            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
////        ),
////    ),
////    'service_manager' => array(
////        'factories' => array(
////            'Zend\Db\Adapter\Adapter'
////                    => 'Zend\Db\Adapter\AdapterServiceFactory',
////        ),
////    ),
////);        
////        
//        
//        
//        
//        
//        try {
//            $db = new Superlogica_Db(array(
//                        'host' => $host,
//                        'port' => $port,
//                        'username' => 'sysdba',
//                        'password' => $password,
//                        'dbname' => $arquivo,
//                        'options' => array(
//                            Zend_Db::CASE_FOLDING => Zend_Db::CASE_UPPER,
//                            'persistent' => $persistent)
//                    ));
//
//            $db->getConnection(); //conecta, tem que estar aqui para os exceptions
//        } catch (Zend_Exception $except) {
//            if (( strpos($except->getMessage(), 'O arquivo já está sendo usado por outro processo') !== false)) {
//                throw new Exception( 'A base de dados esta sendo utilizada por outro processo. Provavelmente estão fazendo backup.', 503 );
//                //Superlogica_Response::error(503, 'A base de dados esta sendo utilizada por outro processo. Provavelmente estão fazendo backup.');
//                //$this->_forward('null', 'index');
//                //return;
//            }
//            throw $except;
//        }
//        Zend_Registry::set('db', $db);
//        Zend_Db_Table::setDefaultAdapter($db);
//
//        return $db;        
//    }
}