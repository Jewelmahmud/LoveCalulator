<?php
$questions = array(
    "Is she/he caring when you are sick?",
    "Does she/he celebrate your successes?",
    "Do you have similar interests?",
    "Do you trust each other?",
    "Do you communicate openly?",
    "Do you share common values?",
    "Do you enjoy spending time together?",
    "Do you support each other's goals?",
    "Do you resolve conflicts effectively?",
    "Do you make each other laugh?",
    "Do you feel comfortable being yourself around them?",
    "Do you feel a deep emotional connection?"
);


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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name1 = isset($_POST['name1']) ? $_POST['name1'] : '';
    $name2 = isset($_POST['name2']) ? $_POST['name2'] : '';

    $answers = array();
    foreach ($questions as $question) {
        $answer = isset($_POST[$question]) ? $_POST[$question] : 'no';
        array_push($answers, $answer);
    }

    $loveScore = calculateLoveScore($answers);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Love Calculator</title>
</head>
<body>
    <h1>Love Calculator</h1>
    
    <form method="post">
        <label for="name1">Your name: </label>
        <input type="text" name="name1" required><br><br>
        
        <label for="name2">Your love's name: </label>
        <input type="text" name="name2" required><br><br>
        
        <?php foreach ($questions as $question) { ?>
            <label for="<?php echo $question; ?>"><?php echo $question; ?></label>
            <select name="<?php echo $question; ?>">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select><br><br>
        <?php } ?>
        
        <button type="submit">Calculate</button>
    </form>

    <?php if (isset($loveScore)) { ?>
        <h2>Love Score: <?php echo $loveScore; ?>%</h2>
    <?php } ?>
</body>
</html>
