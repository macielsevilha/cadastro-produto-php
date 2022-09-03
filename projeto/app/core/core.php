<?php 

class Core 
{
    public function start($urlGet) 
    {
        if(isset($urlGet['metodo'])) {
            $acao = $urlGet['metodo'];
        } else  {
            $acao = 'index';
        }
       
        if(isset($urlGet['pagina'])) {
            $controller = ucfirst($urlGet['pagina'].'Controller');
        } else {
            $controller = 'HomeController';
        }

        if (!class_exists($controller)){
            $controller = 'ErroController';
        }

        if (isset($urlGet['id']) && ($urlGet['id'] != null)) {
            $id = $urlGet['id'];
        } else {
            $id = null;
        }
      
        if (!class_exists($controller)) {
            $controller = 'ErroController';
        }
        call_user_func(array(new $controller, $acao), $id);

        var_dump($id);
    }
}
