<?php

namespace Model;

use PDO;

class Usuario extends ActiveRecord
{
    //Atributos
    protected static $tabla = 'usuarios'; //tabla de base de datos
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'email', 'password', 'telefono', 'admin', 'confirmado', 'token'];

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $telefono;
    public $admin;
    public $confirmado;
    public $token;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->admin = $args['admin'] ?? 0;
        $this->confirmado = $args['confirmado'] ?? 0;
        $this->token = $args['token'] ?? '';
    }

    //Mensajes de validación
    public function validarNuevaCuenta()
    {
        if(!$this->nombre)
        {
            self::$alertas['error'][] = 'El nombre del cliente es obligatorio';
        }

        if(!$this->apellido)
        {
            self::$alertas['error'][] = 'El apellido del cliente es obligatorio';
        }

        if(!$this->email)
        {
            self::$alertas['error'][] = 'El email del cliente es obligatorio';
        }

        if(strlen($this->password)<6)
        {
            self::$alertas['error'][] = 'La contraseña debe contener al menos 6 caracteres';

        }

        return self::$alertas;
    }

    //Revisa si el usuario ya existe
    public function existeUsuario()
    {
        //Revisar si el usuario ya existe
        $query = "SELECT * FROM ". self::$tabla ." WHERE email = '". $this->email ."' LIMIT 1";
        $stmt = self::$db->prepare($query);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        if($resultado){
            self::$alertas['error'][] = 'El usuario ya existe';
            return $resultado;
        }
        else{
            return false;
        }
        
    }

    public function hashPassword()
    {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function crearToken()
    {
        $this->token = uniqid();
    }
}