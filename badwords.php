<?php 
$censoredWord = $_GET['word'];
$textToCensor = $_GET['text'];
$textLength = strlen($textToCensor);
$wordLength = explode(' ', $textToCensor);
$arrayLength = count($wordLength);
$censoredText = str_replace($censoredWord, "***", $textToCensor);

var_dump($wordLength, $arrayLength);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords</title>
</head>
<body>
    <main>
        <p>Censored Text: "<?php echo $censoredWord ?>" </p>
        <p>Testo: "<?php echo $textToCensor ?>" <span style="font-size: 1.2em; color: grey;"> <?php echo ' Length: '. $textLength ?></span></span> </p>
        <p>Testo censurato: "<?php echo $censoredText ?>"</p>
    </main>
</body>
</html>


