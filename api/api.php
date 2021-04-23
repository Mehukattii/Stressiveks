<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");



$data = array(
    array("category"=>"9.4.2021",
    "value"=>6),
    array("category"=>"10.4.2021",
    "value"=>9),
    array("category"=>"11.4.2021",
    "value"=>6),
    array("category"=>"14.4.2021",
    "value"=>6),
    array("category"=>"15.4.2021",
    "value"=>9),
    array("category"=>"16.4.2021",
    "value"=>4),
    array("category"=>"23.4.2021",
    "value"=>11)
);
echo(json_encode($data));


// valuearvo kertoo stressi-indexin
// päivä voi olla mitä vaan 

?>