<?php

// VIDEO_TEXT -> střelivo a nabíjení zásobníků




$query_results_bullets_rifle = array (
    'hollow' => array('query' => 'SELECT * FROM video_text WHERE id=1', 'result' => null),
    'fmj' => array('query' => 'SELECT * FROM video_text WHERE id=2', 'result' => null),
    'partitions' => array('query' => 'SELECT * FROM video_text WHERE id=3', 'result' => null),
    'bonded' => array('query' => 'SELECT * FROM video_text WHERE id=4', 'result' => null),
    'pevne' => array('query' => 'SELECT * FROM video_text WHERE id=5', 'result' => null)
);   
foreach ($query_results_bullets_rifle as $key => &$query_result) {
    $query_result['result'] = mysqli_query($conn, $query_result['query']);
}

$query_results_calibers_rifle = array(
    '223' => array('query' => 'SELECT * FROM video_text WHERE id=6', 'result' => null),
    '76231' => array('query' => 'SELECT * FROM video_text WHERE id=7', 'result' => null),
    '76251' => array('query' => 'SELECT * FROM video_text WHERE id=8', 'result' => null),
    '3006' => array('query' => 'SELECT * FROM video_text WHERE id=9', 'result' => null),
    '22_LongRifle' => array('query' => 'SELECT * FROM video_text WHERE id=10', 'result' => null),

);


// Execute the queries and store the results
foreach ($query_results_calibers_rifle as $key => &$query_result) {
    $query_result['result'] = mysqli_query($conn, $query_result['query']);
    if (!$query_result['result']) {
        echo 'Error executing query: ' . mysqli_error($conn);
    }
}









/*$query_hollowPoint = "select * from video_text where id=1";
$query_fmj = "select * from video_text where id=2";
$query_partitions = "select * from video_text where id=3";
$query_bonded = "select * from video_text where id=4";
$query_solid = "select * from video_text where id=5";
$query_223rem = "select * from video_text where id=6";
$query_akRounds = "select * from video_text where id=7";
$query_308win = "select * from video_text where id=8";
$query_springfield = "select * from video_text where id=9";
$query_22long = "select * from video_text where id=10";

$result_hollowPoint = mysqli_query($conn, $query_hollowPoint);
$result_fmj = mysqli_query($conn, $query_fmj);
$result_partitions = mysqli_query($conn, $query_partitions);
$result_bonded = mysqli_query($conn, $query_partitions);
$result_solid = mysqli_query($conn, $query_solid);
$result_223rem = mysqli_query($conn, $query_223rem);
$result_akRounds = mysqli_query($conn, $query_akRounds);
$result_308win = mysqli_query($conn, $query_308win);
$result_springfield = mysqli_query($conn, $query_springfield);
$result_22long = mysqli_query($conn, $query_22long);*/

// VIDEO_TEXT -> Druhy Kulovnic
$query_results_raze_rifle = array (
    'malorazka' => array('query' => 'SELECT * FROM video_text WHERE id=11', 'result' => null),
    'stredorazka' => array('query' => 'SELECT * FROM video_text WHERE id=12', 'result' => null),
    'velkorazka' => array('query' => 'SELECT * FROM video_text WHERE id=13', 'result' => null),
);  
foreach ($query_results_raze_rifle as $key => &$query_result) {
    $query_result['result'] = mysqli_query($conn, $query_result['query']);
}
$query_results_fireAction_rifle = array (
    'jednorazove' => array('query' => 'SELECT * FROM video_text WHERE id=15', 'result' => null),
    'opakovaci' => array('query' => 'SELECT * FROM video_text WHERE id=16', 'result' => null),
);  
foreach ($query_results_fireAction_rifle as $key => &$query_result) {
    $query_result['result'] = mysqli_query($conn, $query_result['query']);
}

/*$query_malorazka = "select * from video_text where id=11";
$query_stredorazka = "select * from video_text where id=12";
$query_velkorazka = "select * from video_text where id=13";
$query_jednorazove = "select * from video_text where id=15";
$query_opakovaci = "select * from video_text where id=16";

$result_malorazka = mysqli_query($conn, $query_malorazka);
$result_stredorazka = mysqli_query($conn, $query_stredorazka);
$result_velkorazka = mysqli_query($conn, $query_velkorazka);
$result_jednorazove = mysqli_query($conn, $query_jednorazove);
$result_opakovaci = mysqli_query($conn, $query_opakovaci);*/


$query_zpusobStrelby = "select * from video_text where id=14";
$result_zpusobStrelby = mysqli_query($conn, $query_zpusobStrelby);

//VIDEO_TEXT -> PistoleStrelivo

$query_instalacePrislusenstvi = "select * from video_text where id=29";
$result_instalacePrislusenstvi = mysqli_query($conn, $query_instalacePrislusenstvi);



$records = "select * from video_text";
$result_records = mysqli_query($conn, $records);

$arRozborka = "select * from video_text where id=34";
$result_arRozborka = mysqli_query($conn, $arRozborka);
$kulRozborka = "select * from video_text where id=37";
$result_kulRozborka = mysqli_query($conn, $kulRozborka);

$shotgunRozborka = "select * from video_text where id=36";
$result_shotgunRozborka = mysqli_query($conn, $shotgunRozborka);

$pisDruhy = "select * from video_text where id=33";
$result_pisDruhy = mysqli_query($conn, $pisDruhy);

$pisRozborka = "select * from video_text where id=35";
$result_pisRozborka = mysqli_query($conn, $pisRozborka);

$dvouRozborka = "select * from video_text where id=38";
$result_dvouRozborka = mysqli_query($conn, $dvouRozborka);

$nozeUvod = "select * from video_text where id=39";
$result_nozeUvod = mysqli_query($conn, $nozeUvod);

$nozeTypy = "select * from video_text where id=40";
$result_nozeTypy = mysqli_query($conn, $nozeTypy);

$kulUvod = "select * from video_text where id=41";
$result_kulUvod = mysqli_query($conn, $kulUvod);

$brokUvod = "select * from video_text where id=30";
$result_brokUvod = mysqli_query($conn, $brokUvod);


// Text for FAQ's

$faq = "select * from course_faq";
$result_faq = mysqli_query($conn, $faq);
