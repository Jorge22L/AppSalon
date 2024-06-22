<?php

namespace Controllers;

use Classes\Email;
use Model\Usuario;
use MVC\Router;

class LoginController
{
    public static function login(Router $router)
    {
        $router->render('/auth/login');
    }

    public static function crear(Router $router)
    {
        $usuario = new Usuario();

        //alertas vacías
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

            //Revisar que alertas este vacio
            if(empty($alertas)) {
                //Verificar que el usuario no este registrado
                $resultado = $usuario->existeUsuario();
                if($resultado)
                {
                    $alertas = Usuario::getAlertas();
                }
                else{
                    //hashear password
                    $usuario->hashPassword();
                    //Generar token unico
                    $usuario->crearToken();

                    //Enviar email
                    $email = new Email($usuario->email, $usuario->nombre, $usuario->token);

                    $email->enviarConfirmacion();

                    $resultado = $usuario->guardar();
                    if($resultado){
                        echo "Guardado correctamente";
                    }

                    //debuguear($usuario);
                }
            }
        }
        
        $router->render('/auth/crear-cuenta',[
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }

    public static function olvide(Router $router)
    {
        $router->render('/auth/olvide', [
            
        ]);
    }
    
}