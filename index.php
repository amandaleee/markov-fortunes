<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title>Fortune</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />    
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // alert("yup");
        });
    </script>
</head>
<body>
    

    

    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <h1>Tap for fortune</h1>
            <form method="post" action="" name="markov">
                <input type="submit" name="submit" value="GO" />
            </form>
            <?php if (isset($markov)) : ?>
                    <p style="max-width: 350px;"><?php  print_r($markov_result); ?></p>
            <?php endif; ?>
        <!-- todo - card below -->
    <div class="flipper">
        <div class="front">
        </div>
        <div class="back">
        </div>
    </div>
</div>

  
</body>
</html>