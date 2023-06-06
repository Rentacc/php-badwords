<!DOCTYPE html>
<html>
<head>
    <title>PHP Badwords</title>
</head>
<body>
    <h1>PHP Badwords</h1>
    <form action="process.php" method="POST">
        <label for="paragraph">Paragrafo:</label><br>
        <textarea name="paragraph" id="paragraph" rows="4" cols="50"></textarea><br><br>
        <label for="word">Parola da censurare:</label>
        <input type="text" name="word" id="word"><br><br>
        <input type="submit" value="Invia">
    </form>


    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
    
    h1 {
        text-align: center;
        color: #333;
    }
    
    form {
        max-width: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    label {
        display: block;
        margin-bottom: 10px;
        color: #555;
    }
    
    textarea, input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
    input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    input[type="submit"]:hover {
        background-color: #555;
    }
    
    .result {
        max-width: 500px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .result h2 {
        color: #333;
    }
    
    .result p {
        margin-bottom: 10px;
    }
</style>


</body>
</html>