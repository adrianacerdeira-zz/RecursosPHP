<?php


class ErrorController extends Clientes
{
    public function __construct()
    {
        parent::__construct();
        $this->view = 'form.php';
    }

}