<?php

/*
Clase router
*/

Class Router 
{
    // Variables
    protected $routes = [];

    //variable para obtener la los parametros de la ruta del navegador
    protected $params = [];

    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    //metodo para separar y comparar los parametros de routeo con la tabla
    public function match($url)
    {
        /*
        foreach($this->routes as $route => $params){
            //echo '<br>';
            //echo "Valor de url:" . $url;
            //echo " Valor de la ruta: ". $route;
            //echo '<br>';

            if($url == $route) {
                $this->params = $params;
                return true;
            }
        }*/
        
        //Realiza una separación de la url basado en una expresión regular
        $reg_exp = "/^(?P<controller>[a-z]+\/(?P<action>)[a-z]+)$/";
        
        if (preg_match($reg_exp, $url, $matches)){

            
        }
        //echo '<br>';
        //echo "Valor de url:" . $url;
        //var_dump($matches);
        //echo '<br>';

        return false;
    }

    public function getParams()
    {
        return $this->params;
    }
}