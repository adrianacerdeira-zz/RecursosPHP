<?php


class DBConnect
{
    private const DB_NAME = 'loja_temp';
    private const DB_user = 'root';
    private const DB_pass = '';
    private const HOST = 'localhost';
    private const DB_TIPO = 'mysql';

    function __construct()
    {

        $caminho = DBConnect::DB_TIPO . ':host=' . DBConnect::HOST  . ';dbname=' . DBConnect::DB_NAME;

        $this->db = new PDO($caminho, DBConnect::DB_user, DBConnect::DB_pass);
    }
}