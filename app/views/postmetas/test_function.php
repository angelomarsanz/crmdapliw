<p>test_function</p>
<?php
    $contadorRegistros = 0;
    foreach ($postMetas as $postMeta)
    {
        echo 'ID: ' . $postMeta->post_id . ' Propiedad: ' . $postMeta->post->post_title . ': ' . $postMeta->meta_key . ' = ' . $postMeta->meta_value;
        echo '<br />';
        $contadorRegistros++;
    }
    echo 'total registros seleccionados: ' . $contadorRegistros;
?>