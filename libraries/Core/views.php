<?php


 class views{

    function getview($controller, $view){
        $controller = get_class($controller);
        if ($controller == "home"){
            $view = VIEWS.$view.".php";
    }else{
        $view = VIEWS.$controller."/".$view.".php";
    }
    require_once($view);
 }
}

?>