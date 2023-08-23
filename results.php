<!DOCTYPE html>
<html>
<head>
    <title>Elaborazione Censura</title>
</head>
<body>
    <h1>Elaborazione Censura</h1>
    <?php
    if (isset($_GET["paragraph"]) && isset($_GET["word"])) {
        $paragraph = $_GET["paragraph"];
        $word = $_GET["word"];

        echo "<h2>Paragrafo Originale</h2>";
        echo "<p>$paragraph</p>";
        echo "<p>Lunghezza: " . strlen($paragraph) . " caratteri</p>";

        $censoredParagraph = str_ireplace($word, '***', $paragraph);

        echo "<h2>Paragrafo Censurato</h2>";
        echo "<p>$censoredParagraph</p>";
        echo "<p>Lunghezza: " . strlen($censoredParagraph) . " caratteri</p>";
    }
    ?>
</body>
</html>
