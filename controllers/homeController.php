<?php
class homeController extends controller {
    
    public function index() {
        $mvc = array(
            "nome" => "MVC",
            "modelo" => "Padrão"
        );
        
        $dados['mvc'] = $mvc;
        $this->loadTemplate('home', $dados);
    }
    
}
?>