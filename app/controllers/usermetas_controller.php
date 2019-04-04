<?php

class UsermetasController extends MvcPublicController 
{
    public function test_function()
    {
    }
	public function actualizar_vista_preferida()
	{
        $this->autoRender = false;
		
        $this->load_model("Binnacle");
		
		$jsondata = [];
		
		// Descomentar solo para pruebas
			$_POST["vistaPreferida"] = "Lista sin imágenes";
			$_POST["idUsuario"] = 41;
		//
		
		if (isset($_POST["vistaPreferida"]))
		{
			$preferenciaVista = $this->Usermeta->find_one(array(
			'conditions' => array(
			'user_id' => array($_POST['idUsuario']),
			'meta_key' => array('CRMdapliw_vista_preferida'))));
			
			if (isset($preferenciaVista))
			{
				$this->Usermeta->update($preferenciaVista->umeta_id, array('meta_value' =>
					$_POST["vistaPreferida"]));
			}
			else
			{
				$usermeta = ['user_id' => $_POST['idUsuario'], 'meta_key' => 'CRMdapliw_vista_preferida', 'meta_value' => $_POST["vistaPreferida"])];
				$idUsermeta = $this->Usermeta->insert($usermeta);

                if ($idUsermeta == 0)
                {
                    $binnacle = 
                        [
                            "novedad" => "No se pudo actualizar la preferencia de vista del usuario " . $_POST["idusuario"],
                            "tipo_clase" => "controlador",
                            "nombre_clase" => "Usermetas",
                            "nombre_metodo" => "actualizar_vista_preferida"                             
                        ];

                    $idBinnacle = $this->Binnacle->insert($binnacle);
				}
				else
				{
					$jsondata["satisfactorio"] = true;
					$jsondata["mensaje"] = "La preferencia de vista se actualizó satisfactoriamente";				
				}
			}
		}
		else
		{
			$jsondata["satisfactorio"] = false;
            $jsondata["mensaje"] = "No se pudo actualizar la preferencia de vista";
		}
		exit(json_encode($jsondata, JSON_FORCE_OBJECT));	
	}

