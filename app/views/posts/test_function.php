<p>test_function</p>
<?php

    foreach ($datosBienes as $clave1 => $valor1)
    {
        foreach ($valor1 as $clave2 => $valor2)
        {
            foreach ($valor2 as $clave3 => $valor3)
            {
                foreach ($valor3 as $clave4 => $valor4)
                {
                    if ($clave2 == "CRMdapliw_actividad_agenda")
                    {
                        echo " post_id: " . $clave1 . ' ' . $clave2 . ' ' . $clave3 . ' ' . $clave4 . ' = ' . json_encode($valor4);
                    }
                    else
                    {
                        echo " post_id: " . $clave1 . ' ' . $clave2 . ' ' . $clave3 . ' ' . $clave4 . ' = ' . $valor4;
                    }
                    echo "<br />";
                }  
            }
        }
    }

/*
    foreach ($datosBienes[5297]["CRMdapliw_actividad_agenda"] as $datosAgenda):
        if (isset($datosAgenda['id']))
        {
            echo $datosAgenda['id'];
            echo "<br />";
        }
        else
        {
            echo $datosAgenda['valor']->nombreActividad;
            echo "<br />";
            echo $datosAgenda['valor']->estatus;
            echo "<br />";
        }
    endforeach; 
*/
?>