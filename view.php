<?php

class View {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function output() {
        return "
            <h1>Calculadora MVC</h1>
            <p>Número 1: {$this->model->num1}</p>
            <p>Número 2: {$this->model->num2}</p>
            <p><strong>Resultado:</strong> {$this->model->resultado}</p>
            <a href='index.php?action=somar'>Somar</a>
            <a href='index.php?action=subtrair'>Subtrair</a>
            <a href='index.php?action=multiplicar'>Multiplicar</a>
            <a href='index.php?action=dividir'>Dividir</a>
        ";
    }
}