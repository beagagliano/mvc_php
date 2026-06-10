<?php

class Controller {
    private $model;

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function somar() {
        $this->model->resultado = $this->model->num1 + $this->model->num2;
    }

    public function subtrair() {
        $this->model->resultado = $this->model->num1 - $this->model->num2;
    }

    public function multiplicar() {
        $this->model->resultado = $this->model->num1 * $this->model->num2;
    }

    public function dividir() {
        if ($this->model->num2 != 0) {
            $this->model->resultado = $this->model->num1 / $this->model->num2;
        } else {
            $this->model->resultado = "Erro: Divisão por zero";
        }
    }
}