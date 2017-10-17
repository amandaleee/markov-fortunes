<?php

require 'markov.php';

if (isset($_POST['submit'])) {
    $order  = 5;
    $length = 200;

    $text = file_get_contents("text/fortunes.txt");

    if(isset($text)) {
        $markov_table = generate_markov_table($text, $order);
        $markov = generate_markov_text($length, $markov_table, $order);
    }
    //todo: don't start with a space; 
    // end with punctuation;
    //begin and end with a real word. 
    //add periods to the end of fortunes
    //

}
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title>Artist Statement Generator</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />    
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Tap for fortune</h1>
    <form method="post" action="" name="markov">
        <input type="submit" name="submit" value="GO" />
    </form>

    <?php if (isset($markov)) : ?>
        <p style="max-width: 350px;"><?php echo $markov; ?></p>
    <?php endif; ?>

  
</body>
</html>