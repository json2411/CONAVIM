<?php

//Se incluye el modelo donde conectará el controlador.
require_once 'Model/violenciaGenero.php';

class ViolenciaGeneroController{

    private $model;

    public function __CONSTRUCT (){
        $this->model = new violenciaGeneros();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/violenciaGenero/violenciaGenero.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        require_once 'view/header.php';
        require_once 'view/violenciaGenero/violenciaGeneroNuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        require_once 'view/header.php';
        $pvd = new violenciaGeneros();
        $pvd->tipoViolencia = $_REQUEST[ 'tipoViolencia' ];
        $pvd->ubicacionHecho = $_REQUEST[ 'ubicacionHecho' ];
        $pvd->telReportante = $_REQUEST[ 'telReportante' ];
        $pvd->nomVictimas = $_REQUEST[ 'nomVictimas' ];
        $pvd->caracteristicas = $_REQUEST[ 'caracteristicas' ];
        $pvd->horaLLamadas = $_REQUEST[ 'horaLLamadas' ];
        echo var_dump($pvd);
        //$this->model->Registrar ( $pvd );

        require_once 'view/footer.php';
    }


}
