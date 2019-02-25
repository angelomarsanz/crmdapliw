<p>test_function</p>
<?php
    $contadorRegistros = 0;
    $datosPropiedades = [];
    foreach ($postMetas as $postMeta)
    {
        echo 'ID: ' . $postMeta->post_id . ' Propiedad: ' . $postMeta->post->post_title . ': ' . $postMeta->meta_key . ' = ' . $postMeta->meta_value;
        echo '<br />';

        if ($postMeta->meta_key == 'REAL_HOMES_property_images')
        {
            $datosPropiedades[$postMeta->post_id][$postMeta->meta_key][] = $postMeta->meta_value; 
        }
        elseif ($postMeta->meta_key == 'Agenda')
        {
            $datosPropiedades[$postMeta->post_id][$postMeta->meta_key][] = $postMeta->meta_value; 
        }
        else
        {
            $datosPropiedades[$postMeta->post_id][$postMeta->meta_key] = $postMeta->meta_value;
        }
        $contadorRegistros++;
    }

    echo '<br />';
    echo 'total registros seleccionados: ' . $contadorRegistros;
    echo '<br />';

    $contadorMatriz = 0;

    foreach ($datosPropiedades as $clave1 => $datosPropiedad)
    {
        echo 'Clave1: ' . $clave1;
        echo '<br />';
        foreach ($datosPropiedad as $clave2 => $caracteristica)
        {
            if ($clave2 == 'REAL_HOMES_property_images')
            {
                foreach ($caracteristica as $clave3 => $matrizCaracteristica)
                {
                    echo 'clave2: ' . $clave2 . ' clave3: ' . $clave3 . ' = ' . $matrizCaracteristica;
                    echo '<br />';
                    $contadorMatriz++;                 
                }
            }
            elseif ($clave2 == 'Agenda')
            {
                foreach ($caracteristica as $clave3 => $matrizCaracteristica)
                {
                    echo 'clave2: ' . $clave2 . ' clave3: ' . $clave3 . ' = ' . $matrizCaracteristica;
                    echo '<br />';
                    $contadorMatriz++;                 
                }
            }
            else
            {
                echo 'clave2: ' . $clave2 . ' = ' . $caracteristica;
                echo '<br />';
                $contadorMatriz++;     
            }  
        }
    }
    echo '<br />';
    echo 'total registros en la matriz: ' . $contadorMatriz;
    echo '<br />';

    echo 'Post 5763, REAL_HOMES_property_size: ' . $datosPropiedades[5763]['REAL_HOMES_property_size'];
    echo '<br />';
    echo '<br />';    
    echo 'Post 5849, REAL_HOMES_property_size: ' . $datosPropiedades[5849]['REAL_HOMES_property_size'];
    echo '<br />';
    echo '<br />';
?>