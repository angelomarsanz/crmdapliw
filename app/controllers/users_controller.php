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

        $this->load_model("Binnacle");
        $this->load_model("Usermeta");
        $this->load_model("Postmeta");
        
        $indicadorError = 0;
       
        /* Descomentar solo para pruebas 
        $_POST['idPost'] = "5000";
        $_POST['persona'] = 
            [
                "tipoIdentificacion" => "V",
                "numeroIdentificacion" => 1,
                "primerNombre" => "Ángel",
                "segundoNombre" => "",
                "primerApellido" => "Sanz",
                "segundoApellido" => "",
                "roles" => ["Cliente"],
                "celular" => "1",
                "telefonoFijo" => "",
                "email" => "angel@gmail.com",
                "direccion" => "Los Cerritos",
                "idPromotor" => "1"
            ];
        */

        if (isset($_POST['idPost']))
        {
            $jsondata = [];

            $primerNombre = $_POST['persona']['primerNombre'];
            $segundoNombre = $_POST['persona']['segundoNombre'];

            $primerApellido = $_POST['persona']['primerApellido'];
            $segundoApellido = $_POST['persona']['segundoApellido'];

            if ($segundoNombre != "")
            {
                $nombres = $primerNombre . " " . $segundoNombre;
            }
            else
            {
                $nombres = $primerNombre;
            }

            if ($segundoApellido != "")
            {
                $apellidos = $primerApellido . " " . $segundoApellido;
            }
            else
            {
                $apellidos = $primerApellido;
            }

            $primerNombreSaneado = $this->sanear_string($primerNombre);

            $primerApellidoSaneado = $this->sanear_string($primerApellido);

            $nombreApellido = strtolower($primerNombreSaneado) . strtolower($primerApellidoSaneado);

            $usuarioModelo = mvc_model('User');

            $contadorUsuarios = $usuarioModelo->count(
                array('conditions' => array('user_login like' => $nombreApellido . '%')));

            $contadorUsuarios++;

            $nuevoUsuario = $nombreApellido . $contadorUsuarios;

            setlocale(LC_TIME, 'es_VE', 'es_VE.utf-8', 'es_VE.utf8'); 
            date_default_timezone_set('America/Caracas');

            $fechaHoy = getdate();

			$clave = md5(substr($primerNombreSaneado, 0, 1) . substr($primerApellidoSaneado, 0, 1) . $fechaHoy['seconds'] . $fechaHoy['minutes'] . '$');

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
                    "display_name" => $nombres . " " . $apellidos 
                ];
                                               
            $idUser = $this->User->insert($user);

            if ($idUser > 0)
            {
                $camposMeta = 
                    [
                        "admin_color" => "fresh",
                        "comment_shortcuts" => false,
                        "description" => "",
                        "dismissed_wp_pointers" => "",
                        "first_name" => $nombres,
                        "last_name" => $apellidos,
                        "locale" => "",                 
                        "nickname" => $nuevoUsuario,                    
                        "rich_editing" => true,
                        "show_admin_bar_front" => true,
                        "syntax_highlighting" => true,
                        "tmbr_capabilities" => 'a:1:{s:10:"subscriber";b:1;}',
                        "tmbr_user_level" => 0,
                        "use_ssl" => 0,
                        "CRMdapliw_roles" => json_encode($_POST["persona"]["roles"]),
                        "CRMdapliw_promotor_cliente" => $_POST["persona"]["idPromotor"],
                        "CRMdapliw_estatus" => "ACTIVO"
                    ];
                
                foreach ($camposMeta as $clave => $valor)
                {
                    $usermeta = ["user_id" => $idUser, "meta_key" => $clave, "meta_value" => $valor];
                    $idUsermeta = $this->Usermeta->insert($usermeta);

                    if ($idUsermeta == 0)
                    {
                        $binnacle = 
                            [
                                "novedad" => "No se pudo agregar la propiedad " . $clave . " al nuevo usuario " . $idUser,
                                "tipo_clase" => "controlador",
                                "nombre_clase" => "Users",
                                "nombre_metodo" => "guardar_persona"                             
                            ];

                            $idBinnacle = $this->Binnacle->insert($binnacle);

                        $indicadorError = 1;
                        $jsondata["satisfactorio"] = false;
                        $jsondata["mensaje"] = "No se pudo agregar la propiedad " . $clave . " al nuevo usuario " . $idUser;
                        break;
                    }
                }
           
                if ($indicadorError == 0)
                {
                    $metaValue = ["idUser" => $idUser, "activo" => "true"];
                    $postmeta = ['post_id' => $_POST['idPost'], 'meta_key' => 'CRMdapliw_cliente', 'meta_value' => json_encode($metaValue)];
                    $idPostmeta = $this->Postmeta->insert($postmeta);  

                    if ($idPostmeta == 0)
                    {
                        $binnacle = 
                            [
                                "novedad" => "No se pudo asociar la propiedad " . $_POST['idPost'] . " al cliente " . $idUser,
                                "tipo_clase" => "controlador",
                                "nombre_clase" => "Users",
                                "nombre_metodo" => "guardar_persona"                             
                            ];

                            $idBinnacle = $this->Binnacle->insert($binnacle);

                        $jsondata["satisfactorio"] = false;
                        $jsondata["mensaje"] = "No se pudo asociar la propiedad " . $_POST['idPost'] . " al cliente " . $idUser;
                    }
                    else
                    {
                        $jsondata["satisfactorio"] = true;
                        $jsondata["mensaje"] = "La persona se agregó exitosamente ";
                        $jsondata["idUser"] = $idUser;
                        $jsondata["idPostmeta"] = $idPostmeta;
                    }
                }
            }
            else
            {
                $jsondata["satisfactorio"] = false;
                $jsondata["mensaje"] = "La persona no se pudo agregar. Motivo: Error al grabar registro en la base de datos ";
            }            

            /* Descomentar solo para pruebas
                $jsondata["satisfactorio"] = true;
                $jsondata["mensaje"] = $_POST['arregloPrueba'][0]['nombre'] . ' ' . $_POST['arregloPrueba'][0]['apellido'];
            */
        }
        else
        {
            $jsondata["satisfactorio"] = false;
            $jsondata["mensaje"] = "La Persona no se pudo agregar. Motivo: No existe la variable idPost";
        }
        exit(json_encode($jsondata, JSON_FORCE_OBJECT)); 
    }

    function sanear_string($string)
    {
     
        $string = trim($string);
     
        $string = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $string
        );
     
        $string = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );
     
        $string = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );
     
        $string = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );
     
        $string = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );
     
        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C',),
            $string
        );
     
        //Esta parte se encarga de eliminar cualquier caracter extraño
        $string = str_replace(
            array("¨", "º", "-", "~",
                 "#", "@", "|", "!",
                 "·", "$", "%", "&", "/",
                 "(", ")", "?", "'", "¡",
                 "¿", "[", "^", "<code>", "]",
                 "+", "}", "{", "¨", "´",
                 ">", "< ", ";", ",", ":",
                 ".", " "),
            '',
            $string
        );     
        return $string;
    }
    public function agregar_usermeta_masivo()
    {
        $this->load_model('Usermeta');

        $indicadorError = 0;

        $users = $this->User->find();

        $camposMeta = 
            [
                "CRMdapliw_estatus" => "ACTIVO"
            ];

        foreach ($users as $user)
        {                
            foreach ($camposMeta as $clave => $valor)
            {
                $usermeta = ["user_id" => $user->ID, "meta_key" => $clave, "meta_value" => $valor];
                $idUsermeta = $this->Usermeta->insert($usermeta);

                if ($idUsermeta == 0)
                {
                    echo "<p>Error agregando el postmeta " . $clave . " al usuario " . $user->ID . "</p>";
                    $indicadorError = 1;
                    break;
                }
            }
            if ($indicadorError == 1)
            {
                break;
            }
        }
        echo "<p>Los registros usermeta se agregaron exitosamente</p>";
    }   
}
