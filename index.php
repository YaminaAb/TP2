<?php

require_once __DIR__.'/library/RequirePage.php';
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/library/Twig.php';


$url = isset($_SERVER['PATH_INFO']) ? explode ('/', ltrim($_SERVER['PATH_INFO'], 
'/')) : '/';  


if($url=="/"){

    $controllerHome = __DIR__.'/controller/ControllerHome.php';

    require_once $controllerHome;
    $controller = new ControllerHome;
    echo $controller->index();

}else{

    $requestUrl=$url[0];  
    $requestUrl = ucfirst($requestUrl);


    $controllerPath = __DIR__.'/controller/Controller'.$requestUrl.'.php';

    
    if(file_exists($controllerPath)){
        require_once $controllerPath;

        $controllerName = 'Controller'.$requestUrl;      

        $controller = New $controllerName; 
        if(isset($url[1])){
            $method = $url[1];
                if(isset($url[2])){

                    $value = $url[2];
                    echo $controller->$method($value);


                }else{
                    echo $controller->$method();
                }
         
        }else{
            echo $controller->index();
        }
        

    }else{
    $controllerErreur = __DIR__.'/controller/ControllerHome.php';

    require_once $controllerErreur;

    $controller = new ControllerHome;
    echo $controller->erreur();

    }
       
}
?>