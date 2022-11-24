<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select All Checkboxes Using jQuery</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<body>

<form action="#" method="post">
    <input type="checkbox" name="select_all" id="select_all"> Select All

    <div class="checkbox_container">
        <input type="checkbox" name="firstnames" id="checkbox" value="John"> John <br>
        <input type="checkbox" name="firstnames" id="checkbox" value="James"> James <br>
        <input type="checkbox" name="firstnames" id="checkbox" value="Canon"> Canon <br>
        <input type="checkbox" name="firstnames" id="checkbox" value="Jane"> Jane <br>

        <button type="submit">Submit</button>
    </div>
</form>
    
</body>
<script>
    $(document).ready(function(){
        $('#select_all').click(function(){
            $("input[type = checkbox]").prop('checked', $(this).prop('checked'));
        })
    })
</script>
</html>