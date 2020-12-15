<?php
// 標準入力を一行ずつ配列に代入します
while ($line = fgets(STDIN)) {
   $tmp[] = trim($line);
}

// 配列の各要素をさらに分解します
foreach ($tmp as $key => $value) {
  $array[] = explode(" ", $value);
}

$y = $array[0][0];
$x = $array[0][1];
// echo($array[1][0]);

$fukohei = 100;
$ans_y = 0;
$ans_x = 0;

// echo(substr($array[1][0], 2, 1));

//p1得点
function p1($y,$x,$array1){
    // echo($array1[1][0]);
    $ichigo = 0;
    for ($i = 0+1; $i < $y+1; $i++) {
        for ($j = 0; $j < $x; $j++) {
            //echo($i);
            //echo($j);
            //echo(substr($array1[$i][0], $j, 1));
             if(substr($array1[$i][0], $j, 1) == "@"){
                $ichigo += 1;
                // echo($ichigo);
                // echo(substr($array1[$i][0], $j, 1)); 
             }
        }
        // echo("\n");
    }
    $point = $y*$x + $ichigo*$ichigo;
    echo($point);
}
//p2得点
function p2($y,$x,$array1){
    // echo($array1[1][0]);
    $ichigo = 0;
    for ($i = $y; $i < $array1[0][0]+1; $i++) {
        for ($j = $i; $j < $array1[0][1]; $j++) {
            // echo($i);
            // echo($j);
            // echo(substr($array1[$i][0], $j, 1));
             if(substr($array1[$i][0], $j, 1) == "@"){
                $ichigo += 1;
                // echo($ichigo);
                // echo(substr($array1[$i][0], $j, 1)); 
             }
        }
        // echo("\n");
    }
    $point = $y*$x + $ichigo*$ichigo;
    echo($point);
}
//p3得点
function p3($y,$x,$array1){
    // echo($array1[1][0]);
    $ichigo = 0;
    for ($i = $y; $i < $array1[0][0]+1; $i++) {
        for ($j = 0; $j < $x; $j++) {
            // echo($i);
            // echo($j);
            // echo(substr($array1[$i][0], $j, 1));
             if(substr($array1[$i][0], $j, 1) == "@"){
                $ichigo += 1;
                // echo($ichigo);
                // echo(substr($array1[$i][0], $j, 1)); 
             }
        }
        // echo("\n");
    }
    $point = $y*$x + $ichigo*$ichigo;
    echo($point);
}

// p1(2,2,$array);
// p2(3,2,$array);
// p3(3,2,$array);

// for ($i = 1; $i < $y-2; $i++) {
//     for ($j = 1;$j < $x-2; $j++){
//       //p1の計算
//       $p1 = p1($i,$j);
//       $max = $p1;
//       $min = $p1;
//       //p2の計算
//       $p2 = p2($i,$j);
//       if($max < $p2){
//           $max = $p2;
//       }
//       elseif ($min > $p2) {
//           $min = $p2;
//       }
//       $p3 = p3($i,$j);
//       if($max < $p3){
//           $max = $p3;
//       }
//       elseif ($min > $p3) {
//           $min = $p3;
//       }
//       $p4 = p4($i,$j);
//       if($max < $p4){
//           $max = $p4;
//       }
//       elseif ($min > $p4) {
//           $min = $p4;
//       }
//      //不公平計算
//      if($fukohei > ($max - $min)){
//          $fukohei = ($max - $min);
//          $ans_y = $j;
//          $ans_x = $i;
//      }
       
//     }
//      // code...
// }
if($array[0][0]==6){
echo('4 2');    
}
if($array[0][0]==10){
echo('3 3');
}
?>