<p>test_function</p>
<?php
    $contadorRegistros = 0;
    $datosBienes = [];
    foreach ($propiedadesBienes as $propiedadesBien)
    {
        echo 'ID: ' . $propiedadesBien->post_id . ' Propiedad: ' . $propiedadesBien->post->post_title . ': ' . $propiedadesBien->meta_key . ' = ' . $propiedadesBien->meta_value;
        echo '<br />';

        if ($propiedadesBien->meta_key == 'REAL_HOMES_property_images')
        {
            $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][] = $propiedadesBien->meta_value; 
        }
        elseif ($propiedadesBien->meta_key == 'CRMdapliw_actividad_agenda')
        {
            $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][] = $propiedadesBien->meta_value; 
        }
        else
        {
            $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key] = $propiedadesBien->meta_value;
        }
        $contadorRegistros++;
    }

    echo '<br />';
    echo 'total registros seleccionados: ' . $contadorRegistros;
    echo '<br />';

    $contadorMatriz = 0;

    foreach ($datosBienes as $clave1 => $datosBien)
    {
        echo 'Clave1: ' . $clave1;
        echo '<br />';
        foreach ($datosBien as $clave2 => $atributos)
        {
            if ($clave2 == 'REAL_HOMES_property_images')
            {
                foreach ($atributos as $clave3 => $masAtributos)
                {
                    echo 'clave2: ' . $clave2 . ' clave3: ' . $clave3 . ' = ' . $masAtributos;
                    echo '<br />';
                    $contadorMatriz++;                 
                }
            }
            elseif ($clave2 == 'CRMdapliw_actividad_agenda')
            {
                foreach ($atributos as $clave3 => $masAtributos)
                {
                    echo 'clave2: ' . $clave2 . ' clave3: ' . $clave3 . ' = ' . $masAtributos;
                    echo '<br />';
                    $contadorMatriz++;                 
                }
            }
            else
            {
                echo 'clave2: ' . $clave2 . ' = ' . $atributos;
                echo '<br />';
                $contadorMatriz++;     
            }  
        }
    }
    echo '<br />';
    echo 'total registros en la matriz: ' . $contadorMatriz;
    echo '<br />';

    echo 'Post 5763, REAL_HOMES_property_size: ' . $datosBienes[5763]['REAL_HOMES_property_size'];
    echo '<br />';
    echo '<br />';    
    echo 'Post 5849, REAL_HOMES_property_size: ' . $datosBienes[5849]['REAL_HOMES_property_size'];
    echo '<br />';
    echo '<br />';
?>