<?php
require_once dirname(__DIR__)."/modelo/mJoinUs.php";
class CJoinUs
{
    public $modeloJoinUs;

    public function __construct()
    {
        $this->modeloJoinUs = new MJoin();
    }

    public function insertarJ($user)
    {
        $this->modeloJoinUs->__SET("idUser", $user);
        $res = $this->modeloJoinUs->insertarJoin();
        return $res;

    }

    public function listarJ()
    {
        $tabla = $this->modeloJoinUs->listarJoin();
        return $tabla;
    }
    public function filtrarJ($pagina)
    {
        $this->modeloJoinUs->__SET('page', $pagina);
        $tabla = $this->modeloJoinUs->filtrarJoin();
        return $tabla;
    }

    public function eliminarJ($id)
    {
        $this->modeloJoinUs->__SET("idJoin", $id);
        $res = $this->modeloJoinUs->eliminarJoin();
        return $res;
    }

}
?>