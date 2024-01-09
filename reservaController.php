
<?php

require_once "reservaModel.php";

class reservaController {

    private $model;

    function __construct()
    {
        $this->model = new reservaModel();
    }

    public function read() {
        return $this->model->read();
    }

    public function add(reserva $c) {
        return $this->model->create($c);
    }

    public function findId($mesa) {
        return $this->model->findId($mesa);
    }

}