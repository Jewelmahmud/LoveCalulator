<?php 
include "config.php";


function view() {

}


function calculateLoveScore($answers) {
    
    $totalQuestions = count($answers);
    $positiveAnswers = 0;

    foreach ($answers as $answer) {
        if ($answer === 'yes') {
            $positiveAnswers++;
        }
    }

    $loveScore = ($positiveAnswers / $totalQuestions) * 100;
    return round($loveScore);
}