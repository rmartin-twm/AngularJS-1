<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ryan Martin - Ninja 1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
        
        <style>
            body { 
                margin: 20px;
                margin-top: 30px;
                background-color: #000;
            }
            
            div { text-align: center; }
            
            img {
                width: 50%;
                margin-bottom: 10px;
            }
            
            button {
                font-family: 'Bangers', cursive;
                font-size: 25px;
                border: 1px solid #0FF;
                background: #AAA;
                width: 200px;
                border-radius: 10px;
            }
            
            button:hover {
                background: #0FF;
                border: 1px solid #AAA;
            }
            
            blockquote { 
                margin: 30px 0px 0px 0px;
                font-family: 'Bangers', cursive;
                font-size: 35px;
                color: #FFF;
            }
        </style>
    </head>
    <body>
        <div>
            <img src="jack-handey.jpg" alt="Jack Handey" /><br/>
            <button class="button">Grab Quote</button>
            <blockquote id="blockquote"></blockquote>
	</div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="ajax.js"></script>
    </body>
</html>
