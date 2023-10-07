
$(document).ready(function() {
    var questions = $(".question");
    var currentQuestion = 0;

    function showQuestion(index) {
        questions.hide();
        questions.eq(index).show();
    }

    showQuestion(currentQuestion);

    function collectFormData() {
        var formData = {};

        // Collect input values from all questions
        questions.find("input, select").each(function() {
            var name = $(this).attr("name");
            var value = $(this).val();
            formData[name] = value;
        });

        return formData;
    }

    $("#nextQuestion").click(function() {
        currentQuestion++;
        showQuestion(currentQuestion);
    });

    $("#prevQuestion").click(function() {
        currentQuestion--;
        showQuestion(currentQuestion);
    });

    $("#nextMiddleQuestion").click(function() {
        currentQuestion++;
        showQuestion(currentQuestion);
    });

    $("#prevMiddleQuestion").click(function() {
        currentQuestion--;
        showQuestion(currentQuestion);
    });

    $("#submit").click(function() {
        
        var formData = JSON.stringify(collectFormData());

        $.ajax({
            type: "POST",
            url: "app/request.php",
            data: formData,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });

    $("#cancel").click(function() {
        window.location.href = "/";
    });
});
