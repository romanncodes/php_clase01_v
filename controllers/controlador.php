<?php

namespace controllers;

class Controlador
{
    public $nombre;
    public $edad;

    public function __construct()
    {
        $this->nombre = $_POST['nombre'];
        $this->edad = $_POST['edad'];
    }

    public function saludar()
    {
        $respuesta = "Hola $this->nombre tu edad es de $this->edad";
        //enviando la respuesta
        session_start();
        $_SESSION['respuesta'] = $respuesta;
        //redireccionando
        header("Location: ../formulario.php");
    }
}

$objeto = new Controlador();
$objeto->saludar();
