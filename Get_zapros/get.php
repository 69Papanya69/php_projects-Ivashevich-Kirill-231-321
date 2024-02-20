<?php
        // ex 1
    //$array = ['a', 'b', 'c', 'b', 'a'];

    //$result = array_count_values($array);

    //foreach ($result as $key => $value) {
        //echo $key.'=>'.$value.'<br>';
    //}

        // ex2
    // $array = ['a' => 2, 'b' => 2, 'c' => 3];
    // $array_flipped = array_flip($array);
    // var_dump($array_flipped);

       // ex4
    // $a1 = array('a', 'b', 'c');
    // $a2 = array(1, 2, 3);
    // $ar3 = array_combine($a1, $a2);
    // foreach ($ar3 as $key=>$value){
    //     echo "$key => $value ";
    // }

    //ex 6
    // $a4 = ['a', 'b', 'c', 'd', 'e'];
    // $new_array= array_map('strtoupper',$a4);
    // print_r ($new_array);
    
    //ex 7

    // $a=[1,2,3];
    // $a2=['a','b','c'];
    // $a3=array_merge($a,$a2);
    // print_r($a3);

    //ex 8

    // $a1 = [1,2,3,4,5];
    // $a2 = array_product($a1);
    // print_r($a2);
    
    //ex 9
    // $a1 = ['a'=> 1, 'b'=>2, 'c'=>3];
    // $a2 = array_rand($a1);
    // echo($a2);

    // $array = ['a', 'b', 'c', 'd', 'e'];

    // $new_array = array_replace($array, [0 => '!', 3 => '!!']);

    // print_r($new_array);

    // $array = ['a', '-', 'b', '-', 'c', '-', 'd'];


    // $position = array_search('-', $array);

    // echo "Позиция первого элемента '-' в массиве: $position";

    $array = [1, 2, 3, 4, 5];
    array_unshift($array, 0);
    array_push($array, 6);
    print_r($array);

?>    

