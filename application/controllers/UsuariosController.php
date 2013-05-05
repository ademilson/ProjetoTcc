<?php


class UsuariosController extends F5_Controller_Action{
    
    public function indexAction(){
        
//$loader = Zend_Loader_Autoloader::getInstance();
//		die( print_r( $loader->getAutoloaders() ));        
//        $teste = new Zend_Date();
//        $teste = new F5_Db_Table();
        $usuarios = new Application_Model_Usuarios();
//        $usuario = $usuarios->find( 1 )->current();
//        $usuario = $usuarios->createRow();
//        $usuario->ST_NOME_USU = "rOBERTINHO";
//        $usuario->save();
        
//        $usuarios->_selectCompartilhado();
//        $arUsuarios = $usuarios->encontrar();
        $arUsuarios = $usuarios->somenteUsuariosAtivos( true )
                               ->comApelido( 'gordo' )
                               ->encontrar()
                               ->toArray();
        
        print_r( $arUsuarios );
        die("todos os usuários");
//        $valor = $teste->testeMirso();
//        die("valor ->" . $valor );
        
//        $date = new Zend_Date();    
//        die("-->" . $date->toString() );
////        $usuarios = new Zend_Db_Table();
//        die("model usuario");
//        $arListas = $usuarios->listar();
//        
//        print_r( $arListas );
//        die("chegou no usuariossss");
    }
    
}
?>
