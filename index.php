<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="badwords.php" method="GET">
        <label for="word">Parola da Censurare</label>
        <input name="word" id="word" type="text">

        <label for="text">Testo</label>
        <textarea name="text" id="text" cols="30" rows="10"></textarea>

        <button type="submit">Submit</button>
    </form>   
</body>
</html>
