<!DOCTYPE html>
<html>
<head>
    <h1>Jour02.Job04</h1>
</head>

<textarea id="keylogger"></textarea>

<script>
    document.addEventListener('keypress', function(event){
        let keylogger = document.getElementById("keylogger");
        let letter = String.fromCharCode(event.charCode);
        if(/[a-z]/.test(letter)) {
            keylogger.value += letter;
        }
        else {
            keylogger.value = letter;
        }    
    });
</script>

</body>