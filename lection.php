<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab_1</title>
</head>
<body>
    <header style="display:flex; flex-direction:row;box-sizing:border-box; margin:0;font-size:18px;font-family:monospace;"> 
        <img style="height: 85px;margin-top:10px;margin-right:50px;" src='http://localhost/server-side_development/image/Logo_Polytech_rus_main.jpg'>
        <h1>Hello, World!</h1>
    </header>
    <main>
        <h2 style="font-size:22px;">
            <?php
                //ex 1

                $a = 27;
                $b = 12;
                $c = round(sqrt($a*$a - $b*$b), 2);
                echo ("<br>$c<br>");

                //ex 2

                $a = 2;
                $b = 2.0;
                $c = '2';
                $d = 'two';
                $g = true;
                $f = false;
                echo gettype ($b+$c);
                
                //ex 10

                $hunter = 'охотник';
                $wants = 'желает';
                $know = 'знать';
                $fizan = 'фазан'; 
                $sits = 'сидит';
                echo("<br>Каждый $hunter $wants $know где $sits $fizan" ); 
                
                //ex 14
                $quieter = ' Тише '; 
                $go = ' едешь '; 
                $further = ' дальше ';
                $budesh = ' будешь ';
                $fulstroka = $quieter.$go.$further.$budesh; 
                echo("<br>$fulstroka<br>" ); 

                $give = ' Дают ';
                $take = ' бери ';
                $beat = ' бьют '; 
                $run = ' беги ';
                $fulstroka = $give.$take.$beat.$run; 
                echo("<br>$fulstroka<br>" );

                //ex 27

                $a = 4;
                $b = 3;
                $c = ' мандаринок';
                $full = ($a*$b).$c;
                echo("<br>$full<br>" );

                //ex 28 
                $a = 7;
                $b = 4;
                $c = ' воробья';
                $full = ($a-$b).$c;
                echo("<br>$full<br>" );
                
                //ex 29
                $a = 2;
                $b = '2'; 
                $d = '2a';
                var_dump($a>$b);
                var_dump($a>=$d);
                var_dump($b>$b);
                
                //lab 1.2 var 4 

                $m1 = array('summer');
                print $m1[0].'<br>';

                $m2[0] = 'winter';
                var_dump($m2);

                $m3 = array(3,'authomn',100);
                $m3[3] = 7;
                $m3[5] = 'five';
                $m3[6] = 22;
                $m3['arr'] = 'arr';
                var_dump($m3);
                foreach($m3 as $value){
                    echo $value.'<br>';
                }
                foreach($m3 as $key=>$value){
                    echo $key.'=>'.$value.'<br>';
                }

                $a=array(1,2);
                $b=array(3,4);

                $c= $a + $b;
                var_dump($c);
                echo'<br>';
                foreach ($c as $key => $value) {
                    echo $key.'=>'.$value.'<br>';
                }
                $d = array(2=> 'a', 3=> 'b', 8=>'c');
                var_dump($a+$d);

                

            ?>
        </h2>
    </main>
    <footer>
        <p style="font-size:20px;">Создать любой html элемент с 
        адеквтаным динамическим контеном</p>
    </footer>
</body>
</html>