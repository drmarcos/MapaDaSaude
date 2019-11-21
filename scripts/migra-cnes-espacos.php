<?php

require_once "../src/protected/vendor/autoload.php";

ini_set('display_errors', true);
$conSagu = new PDO("pgsql:host=10.17.0.36;dbname=sagu", "postgres", "postgres");
if (!$conSagu) {
    echo 'não conectou';
}



$conMap = new PDO("pgsql:host=10.17.0.209;port=5470;dbname=mapas", "mapas", "mapas");
if (!$conMap) {
    echo 'não conectou';
}


$tipos = include_once '../src/protected/application/conf/space-types.php';


$sql = "
    SELECT DISTINCT estabelecimento_nomefantasia, longitude, latitude, estabelecimento_tipounidade FROM cnes.elastic_sagu_cnes_egressos A 

";
$query1 = $conSagu->query($sql);
while ($row = $query1->fetch(PDO::FETCH_OBJ)) {


    if ($row->longitude != null) {



        foreach ($tipos['items']['Tipos']['items'] as $key => $value) {
            echo $key . ' => ' . $value['name'] . PHP_EOL;

            if ($value['name'] == $row->estabelecimento_tipounidade) {
                $idTipo = $key;
            }
        }


        $location = '(' . $row->longitude . ', ' . $row->latitude . ')';
        $data = date('Y-m-d H:i:s');
        $idAgenteResponsavel = 69987; //mudar esse valor, pois é baseado no agente
        $sqlInsert = "INSERT INTO public.space (location, _geo_location, name, short_description, long_description, create_timestamp, status, type, is_verified, public, agent_id) 
                        VALUES ('" . $location . "', '0101000020E610000000000008A63E43C090B78B3B9BCF0DC0', '" . $row->estabelecimento_nomefantasia . "', '" . $row->estabelecimento_nomefantasia . "', '" . $row->estabelecimento_nomefantasia . "', '" . $data . "', 1, '" . $idTipo ."', 'FALSE', 'FALSE', '" . $idAgenteResponsavel ."')";
        $conMap->exec($sqlInsert);

    }
}
