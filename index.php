<!DOCTYPE html>
<html>

<head>
    <title>Aptitude Exam: Fibonacci</title>
</head>

<body>
    <h4>FIBONACCI</h4>
    <span>Enter a number: </span> <input type="number" id="num" class="num" /> <button id="submitBtn">Submit</button>
    <br/>
    <h5>Result: </h5>
    <p id="result"></p>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>

        $("#submitBtn").on('click',function(){
            var num = $('#num');

            if(num.val() < 1 || num.val() > 20) {
                alert("Invalid number. Please try again.");
                num.val("");
            }
            else {

                $.ajax({
                    url: './fibonacci.php',
                    type: 'POST',
                    data: {
                        num : num.val()
                    }
                })
                .done(function (response) {
                    
                    var result = $.parseJSON(response);
                    var appendText = "";

                    $.each(result,function(key,value) {
                        appendText += '<span>' + value + '</span><br/>';
                    });

                    $("#result").html(appendText);

                })
                .fail(function () {
                    alert("Error");
                });
                
            }
        });

    </script>
</body>
</html>