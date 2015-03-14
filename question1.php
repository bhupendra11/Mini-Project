<html>
<head>
<style>
.overlimit{
   color: red;         
}​
</style>
<script>
$(document).ready(function(){
    var left = 140
    $('#text_counter').text('Characters left: ' + left);

        $('#status').keyup(function () {

        left = 140 - $(this).val().length;

        if(left < 0){
            $('#text_counter').addClass("overlimit");
        }
        if(left >= 0){
            $('#text_counter').removeClass("overlimit");
        }

        $('#text_counter').text('Characters left: ' + left);
    });
});
</script>

</head>

<body>
<div>
<form action="question.html" method="post">
Enter Your Question:<textarea rows="4" cols="50" name='question'></textarea>
<?php
echo "" . date("Y/m/d") .date("l"). "  " . date("h:i:sa");
?>
<br>
<input type="Submit" value="POST My Question"></input>
</form>

</div>

<textarea id="status"></textarea>
<span id="text_counter"></span>

</body>

</html>