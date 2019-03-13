<div class="container">
    <div>
        <button title="Agregar elemento" class="btn btn-light" id="agregarElemento">
            Agregar elemento
        </button>
    </div>
    <div>
        <?php
            $idBien = 0;
            $metaKey = ""; 
            foreach ($datosBienes as $clave1 => $datos1):
                // echo "idBien: " . $clave1;
                $idBien = $clave1;
                foreach ($datos1 as $clave2 => $datos2):
                    // echo " metaKey: " . $clave2;
                    $metaKey = $clave2;
                    foreach ($datos2 as $clave3 => $datos3):
                        echo "idBien: " . $idBien;
                        echo " metaKey: " . $metaKey;
                        if ($metaKey == "CRMdapliw_actividad_agenda"):
                            echo " Actividad: " . $datos3["nombreActividad"];
                            echo " idKey: " . $datos3["id"];
                            echo " posicion: " . $clave3;
                            echo " fecha invertida: " . $datos3["fechaInvertida"];
                        else:
                            echo " Valor: " . $datos3["valor"];
                            echo " idKey: " . $datos3["id"];
                            echo " posicion: " . $clave3;
                        endif;
                        echo "<br />";
                        echo "<br />"; 
                    endforeach;
                endforeach;
            endforeach; 
        ?>
    </div>
</div>
<script>
    var matrizBienes = <?= json_encode($matrizBienes) ?>;
    var datosBienes = <?= json_encode($datosBienes) ?>;

    $j(document).ready(function()
    {
        $j("#agregarElemento").click(function()
        {
            /*
            arregloActividades = datosBienes[5297]["CRMdapliw_actividad_agenda"];

            console.log(arregloActividades);

            arregloActividades.sort(function(a, b){return b-a});

            console.log(arregloActividades);
            */

        });
    });
</script>
