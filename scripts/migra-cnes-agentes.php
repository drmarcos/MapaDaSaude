<?php

ini_set('display_errors', true);
$conSagu = new PDO("pgsql:host=10.17.0.36;dbname=sagu", "postgres", "postgres");
if (!$conSagu) {
    echo 'não conectou';
}



$conMap = new PDO("pgsql:host=10.17.0.209;port=5470;dbname=mapas", "mapas", "mapas");
if (!$conMap) {
    echo 'não conectou';
}




$sql = "SELECT DISTINCT cbo_descricao FROM cnes.elastic_sagu_cnes_egressos A WHERE cbo_descricao <> ''";
$query1 = $conSagu->query($sql);
while ($row = $query1->fetch(PDO::FETCH_OBJ)) {
    $sqlInsert5 = "INSERT INTO public.term (taxonomy, term, description) 
                    VALUES ('area', '" . $row->cbo_descricao . "', '" . $row->cbo_descricao . "')";
    $conMap->exec($sqlInsert5);
}


$sql = "
    SELECT DISTINCT A.*, B.email FROM cnes.elastic_sagu_cnes_egressos A 
    INNER JOIN public.basperson B ON A.personid = B.personid
";
$query1 = $conSagu->query($sql);
while ($row = $query1->fetch(PDO::FETCH_OBJ)) {


    if ($row->longitude != null) {
        $email = strtolower($row->email);


        $sqlInsert = "INSERT INTO public.usr (auth_provider, auth_uid, email, status, last_login_timestamp, create_timestamp) 
                        VALUES (0, 'fake-5dd2cecc55dc5', '" . $email . "', '1', '2019-11-18 17:03:08', '2019-11-18 17:03:08')";
        $conMap->exec($sqlInsert);
        $idUsr = $conMap->lastInsertId();


        $location = '(' . $row->longitude . ', ' . $row->latitude . ')';
        $sqlInsert2 = "INSERT INTO public.agent (user_id, type, name, location, _geo_location, create_timestamp, status, is_verified, public_location, update_timestamp) 
                    VALUES ('" . $conMap->lastInsertId() . "', 1, '" . strtoupper($row->pessoa) . "', '" . $location . "', '0101000020E6100000FCFFFFAB214C43C0547B8C58D9800EC0', '2019-11-18 17:03:08', '1', 'FALSE', 'TRUE', '2019-11-18 17:47:06')";
        $conMap->exec($sqlInsert2);
        $idAgent = $conMap->lastInsertId();


        $sqlInsert3 = "UPDATE public.usr SET profile_id =  " . $conMap->lastInsertId() . " WHERE id = " . $idUsr;
        $conMap->exec($sqlInsert3);

        $dataHora = date('Y-m-d H:i:s');
        $sqlInsert4 = "INSERT INTO public.entity_revision (id, user_id, object_id, object_type, create_timestamp, action, message) 
                    VALUES ('" . $idUsr . "', '" . $idUsr . "', '" . 5200 . "', 'MapasCulturais\Entities\Agent', '" . $dataHora . "', 'created', 'Registro criado.')";
        $conMap->exec($sqlInsert4);

        $sql11 = "
        SELECT DISTINCT cbo_descricao FROM cnes.elastic_sagu_cnes_egressos A WHERE A.personid = " . $row->personid;
        $query11 = $conSagu->query($sql11);
        while ($row2 = $query11->fetch(PDO::FETCH_OBJ)) {
            $sqlTerm = "SELECT * FROM public.term WHERE term = '" . $row2->cbo_descricao . "'";
            $result = $conMap->prepare($sqlTerm);
            $result->execute();
            $termo = $result->fetch(PDO::FETCH_OBJ);


            $sqlInsert6 = "INSERT INTO public.term_relation (term_id, object_type, object_id)  VALUES ('" . $termo->id . "', 'MapasCulturais\Entities\Agent', '" . $idAgent . "')";
            $conMap->exec($sqlInsert6);
        }
    }
}
