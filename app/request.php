<?php 

include "factory.php";

$request = $_POST['request'];

if($request === 'love') {

    $name1 = isset($_POST['name1']) ? $_POST['name1'] : '';
    $name2 = isset($_POST['name2']) ? $_POST['name2'] : '';

    $answers = array();
    foreach ($questions as $question) {
        $answer = isset($_POST[$question]) ? $_POST[$question] : 'no';
        array_push($answers, $answer);
    }

    $loveScore = calculateLoveScore($answers);

    echo json_encode($loveScore );

} elseif ($request === 'finance') {

}