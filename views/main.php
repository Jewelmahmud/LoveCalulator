<?php 
    $title = "Love Calculator";

    include "app/factory.php"; 
    include "partials/header.php";

?>
    <div class="calculator-container">

        <h1><?=$title?></h1>

        <div class="container">
            <form method="post" id="loveCalculatorForm">
                <div class="question">
                    <label for="name1">Your name: </label>
                    <input type="text" name="name1" required>
                    <button type="button" id="nextQuestion">Next</button>
                    <button type="button" id="cancel" style="display: none;">Cancel</button>
                </div>
                
                <?php foreach ($questions as $index => $question) { ?>
                    <div class="question" style="display: none;">
                        <label for="<?php echo $question; ?>"><?php echo $question; ?></label>
                        <select name="<?php echo $question; ?>">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <?php if ($index === 0) { ?>
                            <button type="button" id="prevQuestion" style="display: none;">Previous</button>
                            <button type="button" id="nextMiddleQuestion">Next</button>
                        <?php } elseif ($index === count($questions) - 1) { ?>
                            <button type="button" id="prevMiddleQuestion">Previous</button>
                            <button type="submit" id="submit" style="display: none;">Submit</button>
                        <?php } else { ?>
                            <button type="button" id="prevMiddleQuestion">Previous</button>
                            <button type="button" id="nextMiddleQuestion">Next</button>
                        <?php } ?>
                    </div>
                <?php } ?>
            </form>

            <?php if (isset($loveScore)) { ?>
                <h2>Love Score: <?php echo $loveScore; ?>%</h2>
            <?php } ?>
        </div>
    </div>

<?php include "partials/footer.php"; ?>
