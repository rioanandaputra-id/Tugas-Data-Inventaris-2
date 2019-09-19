<?php
include_once(__DIR__."/lib/DataInventaris.php");
include_once(__DIR__."/lib/DataFormat.php");
header('Access-Control-Allow-Origin:*');
$dtinventaris = new DataInventaris();
$data = $dtinventaris->getAll();
$format = new DataFormat();

if($_GET['view']=='xml'){
    header('Content-Type: application/xml; charset=utf-8');
    echo $format->asXML($data,'Inventaris');
} else if ($_GET['view']=='json'){
    header('Content-Type: application/json');
    echo $format->asJSON($data);
} else {
    echo $format->asHTML($data);
}

