<?php 
include("../config/config.php");

$requette = 'SELECT
            (SELECT COUNT(*) FROM patient WHERE age <= 3) as baby,
            (SELECT COUNT(*) FROM patient WHERE age > 3 AND age <=12) as children,
            (SELECT COUNT(*) FROM patient WHERE age > 12 AND age <= 17) as adolescent,
            (SELECT COUNT(*) FROM patient WHERE age > 17 AND age <=50) as adult,
            (SELECT COUNT(*) FROM patient WHERE age > 50) as old';

$statement = $db ->prepare($requette);
$execution =  $statement -> execute();
if ($execution){
    $data = $statement -> fetch();
    $babies = $data['baby'];
    $children = $data['children'];
    $ado = $data['adolescent'];
    $adult =$data['adult'];
    $old = $data['old'];
}
