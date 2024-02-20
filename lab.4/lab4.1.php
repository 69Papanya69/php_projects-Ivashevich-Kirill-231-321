<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <a href="index.html">Hello</a>
        <?php
            $abs = get_headers("http://localhost/lab1/php_projects-Ivashevich-Kirill-231-321/lab.4./index.html");
            foreach ($abs as $EL){
            echo $EL . "<br>";
            }
        ?> 
    </body>
</html>