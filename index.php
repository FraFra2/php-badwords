<!DOCTYPE html>
<html>
<head>
    <title>Form di Censura</title>
</head>
<body>
    <h1>Form di Censura</h1>
    <form action="results.php" method="get">
        <label for="paragraph">Inserisci il paragrafo:</label><br>
        <textarea name="paragraph" id="paragraph" cols="30" rows="5"></textarea><br>
        <label for="word">Parola da censurare:</label>
        <input type="text" name="word" id="word"><br>
        <input type="submit" value="Censura">
    </form>
</body>
</html>