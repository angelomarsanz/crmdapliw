<?php

class UsermetasController extends MvcPublicController 
{
    public function test_function()
    {
        $this->load_model('User');

        $usuarios = $this->User->find(array(
            'conditions' => array(
            'User.ID' => array(23, 24)),
            'order' => 'User.ID ASC'));    

        foreach ($usuarios as $usuario)
        {
            $roles = ["Cliente"];

            $registroUsuario = ["user_id" => $usuario->ID, "meta_key" => "CRMdapliw_roles", 'meta_value' => json_encode($roles)];
            $id = $this->Usermeta->insert($registroUsuario);
            echo "<p>id: " . $id . "</p>";
        }

        $userMetas = $this->Usermeta->find(array(
            'joins' => array('User'),
            'selects' => array('User.ID', 'User.user_email', 'Usermeta.user_id', 'Usermeta.meta_key', 'Usermeta.meta_value', 'Usermeta.umeta_id'),
            'conditions' => array(
                // 'User.ID' => array(32),
                'Usermeta.meta_key' => array("first_name", "last_name", "CRMdapliw_roles")),
            'order' => 'User.ID ASC, Usermeta.meta_key ASC, Usermeta.umeta_id ASC'));            

        $contadorUsuarios = 0;
        $idUsuarioActual = "";
        $usuarios = [];
        foreach ($userMetas as $userMeta)
        {
            if ($contadorUsuarios == 0)
            {
                $idUsuarioActual = $userMeta->ID;
                $usuarios[$idUsuarioActual]["email"] = $userMeta->user_email;
            }
            if ($idUsuarioActual != $userMeta->ID)
            {
                $idUsuarioActual = $userMeta->ID;
                $usuarios[$idUsuarioActual]["email"] = $userMeta->user_email;
            }
            if ($userMeta->meta_key == "CRMdapliw_roles")
            {
                $usuarios[$idUsuarioActual][$userMeta->meta_key] = json_decode($userMeta->meta_value);
            }
            else
            {
                $usuarios[$idUsuarioActual][$userMeta->meta_key] = $userMeta->meta_value;
            }
            $contadorUsuarios++;
        }

        $captadores = [];
        $promotores = [];
        $propietarios = [];
        $clientes = [];

        foreach ($usuarios as $clave => $usuario)
        {
            $nombreCompleto = $usuario["first_name"] . ' ' . $usuario["last_name"];

            foreach ($usuario["CRMdapliw_roles"] as $rol)
            {
                if ($rol == "Captador")
                { 
                    $captadores[] = ["label" => $nombreCompleto, "value" => $nombreCompleto, "id" => $clave];
                }
                elseif ($rol == "Promotor")
                {   
                    $promotores[] = ["label" => $nombreCompleto, "value" => $nombreCompleto, "id" => $clave];
                }
                elseif ($rol == "Propietario")
                {   
                    $propietarios[] = ["label" => $nombreCompleto, "value" => $nombreCompleto, "id" => $clave];
                }            
                else
                {
                    $clientes[] = ["label" => $nombreCompleto, "value" => $nombreCompleto, "id" => $clave];
                }
            }
        }
        var_dump($captadores);
        echo "<br />";
        var_dump($promotores);
        echo "<br />";
        var_dump($propietarios);
        echo "<br />";
        var_dump($clientes);
        echo "<br />";
    }
}
