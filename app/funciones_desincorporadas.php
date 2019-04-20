        $permiso = 0;

        if (in_array("Promotor", $roles))
        {
            $permiso = $permiso + 1;    
        }

        if (in_array("Captador", $roles))
        {
            $permiso = $permiso + 2;    
        }
        
        if (in_array("Gestor de negocios", $roles))
        {
            $permiso = $permiso + 4;
        }
        
        if (in_array("Administrador", $roles))
        {
            $permiso = $permiso + 8;
        }

		$cadenaRoles = "";
		
        if (in_array("Administrador", $roles))
        {
			$cadenaRoles = "Administrador";
		}
		elseif (in_array("Gestor de negocios", $roles)) 
		{
			if (in_array("Captador", $roles))
			{
				if (in_array("Promotor", $roles))
				{
					$cadenaRoles = "GestorCaptadorPromotor";
				}
				else
				{
					$cadenaRoles = "GestorCaptador";
				}
			}
			elseif (in_array("Promotor", $roles))
			{
				$cadenaRoles = "GestorPromotor";
			}
			else
			{
				$cadenaRoles = "Gestor";
			}
		}
		elseif (in_array("Captador", $roles))
		{
			if (in_array("Promotor", $roles))
			{
				$cadenaRoles = "CaptadorPromotor";
			}
			else
			{
				$cadenaRoles = "Captador";
			}
		}
		elseif (in_array("Promotor", $roles))
		{
			$cadenaRoles = "Promotor";
		}

function selectActividades()
{
    if (gCadenaRoles == "Administrador")
    {
        $j("#actividadesAdministrador90").removeClass('noVer');
    }   
    else if (gCadenaRoles == "GestorCaptadorPromotor")
    {
         $j("#actividadesGestorCaptadorPromotor90").removeClass('noVer');
    }    
    else if (gCadenaRoles == "GestorCaptador")
    {
         $j("#actividadesGestorCaptador90").removeClass('noVer');
    }    
    else if (gCadenaRoles == "GestorPromotor")
    {
         $j("#actividadesGestorPromotor90").removeClass('noVer');
    }    
    else if (gCadenaRoles == "Gestor")
    {
         $j("#actividadesGestor90").removeClass('noVer');
    }    
    else if (gCadenaRoles == "CaptadorPromotor")
    {
         $j("#actividadesCaptadorPromotor90").removeClass('noVer');
    }    
    else if (gCadenaRoles == "Captador")
    {
         $j("#actividadesCaptador90").removeClass('noVer');
    }    
    else 
    {
         $j("#actividadesPromotor90").removeClass('noVer');
    }    
}

