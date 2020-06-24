<?php
class Router
{
    public function returnView($view)
    {
        switch($view)
        {
            // retorna una hoja determinada, la hoja que se muestra en index es MAIN
            //los enlaces para cargar una vista deben cumplir ciertas condiciones
            //1. Que la llamada a la función esté a nivel de la hoja o halla invocado a esta
            //2. ir en formato: ?vista=nombredelahoja
            case "about":
                require_once "view/".$view.".html";
            break;
            case "blog":
                require_once "view/".$view.".html";
            break;
            case "contact":
                require_once "view/".$view.".html";
            break;
            case "cultura":
                require_once "view/".$view.".html";
            break;
            case "elements":
                require_once "view/".$view.".html";
            break;
            case "galeria":
                require_once "view/".$view.".html";
            break;
            case "main":
                require_once "view/".$view.".html";
            break;
            case "noticias":
                require_once "view/".$view.".html";
            break;
            case "services":
                require_once "view/".$view.".html";
            break;
            case "single-blog":
                require_once "view/".$view.".html";
            break;
            case "terms-of-use":
                require_once "view/".$view.".html";
            break;
            case "torneos":
                require_once "view/".$view.".html";
            break;
            case "tsumes":
                require_once "view/".$view.".html";
            break;
        }
    }
}
?>