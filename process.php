<!DOCTYPE html>
<html>
<head>
    <title>PHP Badwords - Risultato</title>
</head>
<body>
    <h1>PHP Badwords - Risultato</h1>
    <?php
    if(isset($_POST['paragraph']) && isset($_POST['word'])) {
        $paragraph = $_POST['paragraph'];
        $word = $_POST['word'];
        
        // Stampa del paragrafo e della sua lunghezza
        echo "<h2>Paragrafo originale</h2>";
        echo "<p>$paragraph</p>";
        echo "<p>Lunghezza: " . strlen($paragraph) . " caratteri</p>";
        
        // Sostituzione della parola da censurare con asterischi
        $censoredParagraph = str_ireplace($word, '***', $paragraph);
        
        // Stampa del paragrafo censurato e della sua lunghezza
        echo "<h2>Paragrafo censurato</h2>";
        echo "<p>$censoredParagraph</p>";
        echo "<p>Lunghezza: " . strlen($censoredParagraph) . " caratteri</p>";
    } else {
        echo "Errore: dati mancanti.";
    }
    ?>
</body>
</html>