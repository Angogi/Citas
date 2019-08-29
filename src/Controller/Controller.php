<?php
namespace Citas\Controller;
//include_once "../../vendor/autoload.php";
use Citas\Model\UsersModel;


class Controller 
{
    function consultListadoCoders()
    {
        $usersModel = new UsersModel();
        $consultaListadoCoders = $usersModel->getListadoCoders();

        foreach($consultaListadoCoders as $consulta)
        {
            echo "<option value='$consulta[userName]'>" . $consulta["userName"]. "</option>";
        }
    }

    function consultListadoFormadores()
    {
        $usersModel = new UsersModel();
        $consultaListadoFormadores = $usersModel->getListadoFormadores();

        foreach($consultaListadoFormadores as $consulta)
        {
            echo "<option value='$consulta[userName]' >" . $consulta["userName"]. "</option>";
        }

    }
}

// $objeto = new Controller();
// $objeto->consultListadoFormadores(); 