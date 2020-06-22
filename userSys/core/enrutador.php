<?php
/*Enrutado filtrado v0.1b
  by FSAteam*/
class Enrutador
{
 //Metodo para cargar la vista donde $idRol es "admin" = 6 o "common" = 1, 2 ,7.
  public function cargarVista($vista, $idRol){
    if($idRol == "1"){
      switch ($vista) {
      case 'inicio': //home
        require_once "vista/".$vista.".php";
      break;
      case 'vGestionU': 
        require_once "vista/".$vista.".php";
      break;
      case 'vCrearU-Pub':
        require_once "vista/".$vista.".php";
      break;
      case 'vNoticias':
        require_once "vista/".$vista.".php";
      break;
      case 'vGestionDi':
        require_once "vista/".$vista.".php";
      break;
      case 'vGestionReportes':
        require_once "vista/".$vista.".php";
      break;
      case 'vGestionContacto':
        require_once "vista/".$vista.".php";
      break;
      case 'mJoinUs':
        require_once "vista/".$vista.".php";
      break;
      default:
        require_once "vista/error.php";
      break;
    }
    }else if($idRol == "2"){
      switch ($vista){
        case 'inicio': //home
        require_once "vista/".$vista.".php";
      break;
      case 'vGestionU': 
        require_once "vista/".$vista.".php";
      break;
      case 'vCrearU-Pub':
        require_once "vista/".$vista.".php";
      break;
      case 'vNoticias':
        require_once "vista/".$vista.".php";
      break;
      case 'vGestionDi':
        require_once "vista/".$vista.".php";
      break;
      case 'vGestionReportes':
        require_once "vista/".$vista.".php";
      break;
      case 'vGestionContacto':
        require_once "vista/".$vista.".php";
      break;
      case 'vGestionJoinUs':
        require_once "vista/".$vista.".php";
      break;
      default:
        require_once "vista/error.php";
      break;
      }
    }else if($idRol == "3"){
    switch ($vista) {
      case 'inicio':
       require_once "vista/".$vista.".php";
      break;
      case 'vGestionU':
       require_once "vista/".$vista.".php";
      break;
      case 'vGestionJoinUs':
       require_once "vista/".$vista.".php";
      break;
      case 'vGestionContacto':
       require_once "vista/".$vista.".php";
      break;
      default:
       require_once "vista/error.php";
      break;
    }
  }else if($idRol == "4"){
    switch ($vista) {
      case 'inicio':
        require_once "vista/".$vista.".php";
        break;
      case 'vNoticias':
       require_once "vista/".$vista.".php";
       break;
      default:
        require_once "vista/error.php";
        break;
    }
  }else if($idRol == "5"){
    switch ($vista) {
      case 'inicio':
        require_once "vista/".$vista.".php";
        break;
      case 'vNoticias':
       require_once "vista/".$vista.".php";
      default:
        require_once "vista/error.php";
        break;
    }
  }else if($idRol == "6"){
    switch ($vista) {
      case 'inicio':
       require_once "vista/".$vista.".php";
      break;
      default:
       require_once "vista/error.php";
      break;
    }
}
}public function cargarMUS($idRol){
    if ($idRol == "1")//admin
   {
echo '<ul class="nav nav-pills nav-stacked">
        <li><a href="?vista=inicio" id="inicio" style="background-color:#c82e46;color: #FFF;">Home</a></li>
        <li><a href="?vista=vGestionU" id="vGestionU" style="color: #FFF; background-color:#e1576d;"> Gestión de usuarios</a></li>
        <li><a href="?vista=vNoticias" id="vNoticias" style="color: #FFF; background-color:#e1576d;">Gestión de noticias</a></li>
        <li><a href="?vista=vGestionDi" id="vGestionDi" style="color: #FFF; background-color:#e1576d;">Gestión de diseño</a></li>
        <li><a href="?vista=vGestionReportes" style="color: #FFF; background-color:#e1576d;">Gestión de Reportes</a></li>
        <li><a href="?vista=vGestionContacto" style="color: #FFF; background-color:#e1576d;">Gestión de PQRS</a></li>
        <li><a href="?vista=vGestionJoinUs" style="color: #FFF; background-color:#e1576d;">Gestión de Joins</a></li>
        </ul>';
}else if ($idRol == "2")//trans
{
 echo '<ul class="nav nav-pills nav-stacked">
        <li><a href="?vista=inicio" id="inicio" style="background-color:#c82e46;color: #FFF;">Home</a></li>
        <li><a href="?vista=vGestionU" id="vGestionU" style="color: #FFF; background-color:#e1576d;"> Gestión de usuarios</a></li>
        <li><a href="?vista=vNoticias" id="vNoticias" style="color: #FFF; background-color:#e1576d;">Gestión de noticias</a></li>
        <li><a href="?vista=vGestionDi" id="vGestionDi" style="color: #FFF; background-color:#e1576d;">Gestión de diseño</a></li>
        <li><a href="?vista=vGestionReportes" style="color: #FFF; background-color:#e1576d;">Gestión de Reportes</a></li>
        <li><a href="?vista=vGestionContacto" style="color: #FFF; background-color:#e1576d;">Gestión de PQRS</a></li>
        <li><a href="?vista=vGestionJoinUs" style="color: #FFF; background-color:#e1576d;">Gestión de Joins</a></li>
      </ul>';
}else if ($idRol == "3")//rrhh
{
  echo '<ul class="nav nav-pills nav-stacked">
        <li><a href="?vista=inicio" id="inicio" style="background-color:#c82e46;color: #FFF;">Home</a></li>
        <li><a href="?vista=vGestionU" id="vGestionU" style="color: #FFF; background-color:#e1576d;"> Gestión de usuarios</a></li>
        <li><a href="?vista=vGestionJoinUs" style="color: #FFF; background-color:#e1576d;">Gestión de Joins</a></li>
        <li><a href="?vista=vGestionContacto" style="color: #FFF; background-color:#e1576d;">Gestión de PQRS</a></li>
        </ul>';

}else if ($idRol == "4")//diffu
{
  echo '<ul class="nav nav-pills nav-stacked">
        <li><a href="?vista=inicio" id="inicio" style="background-color:#c82e46;color: #FFF;">Home</a></li>
        <li><a href="?vista=vNoticias" id="vNoticias" style="color: #FFF; background-color:#e1576d;">Gestión de noticias</a></li>
        </ul>';

   }else if ($idRol == "5")//design
   {
    echo '<ul class="nav nav-pills nav-stacked">
        <li><a href="?vista=inicio" id="inicio" style="background-color:#c82e46;color: #FFF;">Home</a></li>
        <li><a href="?vista=vGestionDi" id="vGestionDi" style="color: #FFF; background-color:#e1576d;">Gestión de diseño</a></li>
        </ul>';
   }else if ($idRol == "6")//common
  {
    echo '<ul class="nav nav-pills nav-stacked">
          <li><a href="?vista=inicio" id="inicio" style="background-color:#c82e46;color: #FFF;">Home</a></li>
          </ul>';
  }
 }
}


?>