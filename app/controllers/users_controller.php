<?php

class UsersController extends MvcPublicController 
{
    public function test_function()
    {
        setlocale(LC_TIME, 'es_VE', 'es_VE.utf-8', 'es_VE.utf8'); 
        date_default_timezone_set('America/Caracas');

        $fechaHoy = getdate();

        $fechaHora = new DateTime(); 
        $fechaHoraFormato = $fechaHora->format('Y-m-d H:i:s'); 

        echo "<p>FechaHoraFormato: " . $fechaHoraFormato . "</p>";
    }

    public function show() 
    {
        $object = $this->model->find_by_id($this->params['id'], array(
            'includes' => array('User')
        ));
        $this->set('object', $object);
    }
    public function index() 
    {
        $user = wp_get_current_user();
        if ($user->id > 0)
        {        
            $this->set_objects();
        }
    }
    public function agregar_persona()
    {
        $this->autoRender = false;
        
        /* Descomentar solo para pruebas
        $_POST['idPost'] = "5000";
        */

        if (isset($_POST['idPost']))
        {
            $jsondata = [];

            $primerNombre = $_POST['persona']['primerNombre'];
            $segundoNombre = $_POST['persona']['segundoNombre'];

            $primerApellido = $_POST['persona']['primerApellido'];
            $segundoApellido = $_POST['persona']['segundoApellido'];

            $nombreApellido = strtolower($primerNombre) . strtolower($primerApellido);
          
            $usuarioModelo = mvc_model('User');

            $contadorUsuarios = $usuarioModelo->count(
                array('conditions' => array('user_login like' => $nombreApellido . '%')));

            $contadorUsuarios++;

            $nuevoUsuario = $nombreApellido . $contadorUsuarios;

            setlocale(LC_TIME, 'es_VE', 'es_VE.utf-8', 'es_VE.utf8'); 
            date_default_timezone_set('America/Caracas');

            $fechaHoy = getdate();

			$clave = substr($primerNombre, 0, 1) . substr($primerApellido, 0, 1) . $fechaHoy['seconds'] . $fechaHoy['minutes'] . '$';

            $fechaHora = new DateTime(); 
            $fechaHoraFormato = $fechaHora->format('Y-m-d H:i:s'); 

            $user = 
                [
                    "user_login" => $nuevoUsuario,
                    "user_pass" => $clave,
                    "user_nicename" => $nuevoUsuario,
                    "user_email" => $_POST['persona']['email'],
                    "user_url" => "",
                    "user_registered" => $fechaHoraFormato,
                    "user_activation_key" => "",
                    "user_status" => 0,
                    "display_name" => $primerNombre . " " . $segundoNombre . " " . $primerApellido . " " . $segundoApellido 
                ];
                                               
            $idUser = $this->User->insert($user);
           
            /* Descomentar solo para pruebas
                $jsondata["satisfactorio"] = true;
                $jsondata["mensaje"] = $_POST['arregloPrueba'][0]['nombre'] . ' ' . $_POST['arregloPrueba'][0]['apellido'];
            */

            $jsondata["satisfactorio"] = true;
            $jsondata["mensaje"] = "La persona se agregó exitosamente";
            $jsondata["idUser"] = $idUser;
            $jsondata["idPostmeta"] = 2000;
        }
        else
        {
            $jsondata["satisfactorio"] = false;
            $jsondata["mensaje"] = "La Persona no pudo ser agregada";
        }
        exit(json_encode($jsondata, JSON_FORCE_OBJECT)); 
    }

}
