<?php

namespace controllers;

class ControlSueldo
{
    public $sueldo;
    public $desc;

    public function __construct()
    {
        $this->sueldo = $_POST['sueldo'];
        $this->desc = $_POST['desc'];
    }

    public function calcular()
    {
        session_start();
        if (!is_numeric($this->sueldo)) {
            $_SESSION['respuesta'] = "El sueldo no es un numero";
            header("Location: ../form_sueldo.php");
            return;
        }

        $descuento = $this->sueldo * $this->desc;
        $liquido = $this->sueldo - $descuento;


        $_SESSION['respuesta'] = "El sueldo liquido es: $liquido";

        header("Location: ../form_sueldo.php");
    }
}

$obj = new ControlSueldo();
$obj->calcular();
