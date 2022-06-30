<?php

//TASK 1 Найти все положительные элементы массива
$array = [1, 2, 3, 4, -5, -10, 20];
$values =[];
foreach ($array as $v){
    if($v >0){
        $values[] = $v;
    }
}
var_dump($values);
// второй способ
$array = [1, 2, 3, 4, -5, -10, 20];
$res = array_filter($array, function ($element){
    return $element > 0;
});
echo '<pre>';
print_r($res);
echo '</pre>';
echo '<br>';

//TASK 2 Найти элементы массива, которые больше среднеарифметического значения и вывести их индексы

$array2 = [1, 2, 3, 4, 5, 10, 20];
$nums = array_sum($array2)/count($array2);
echo 'Среднее арифметическое значение: '.$nums;
$res2 = array_filter($array2, function ($element){
    return $element;
});
echo '<pre>';
print_r($res2);
echo '</pre>';
echo '<br>';

// TASK 3 Вывести элементы массива, которые болье предыдущего
$number = [-12, 23, 2 ,6,12,22];
for ($i=1; $i < count($number);$i++){
    if ($number[$i] > $number[$i-1]){
        echo $number[$i].' ';
    } 
}





//TASK 4  Определить , есть ли в массиве повторяющиеся элементы

$array3 = [1, 2, 3, 4, 5, 10, 20,10,20,1];
$res3 =array_count_values($array3);

echo '<pre>';
print_r($res3);
echo '</pre>';
echo '<br>';

//TASK 5 удалить из массива элементы, которые встречаются более двух раз
$number_2= [2,0,2,10,5,10,10,22,30,151,151,5,-18];
$array_count = array_count_values($number_2);
$result =[];
foreach ($array_count as $key => $value){
    if ($value <2){
        $result[]=$key;
    }
}


//TASK 6   Опредленить, является ли массив двумерным

$array_2=[
    "one" => [1,2,3,4,5],
    2 => ['a','b'],
    'name' => ["Maxim","Max"]
];
if ((count($array_2, COUNT_RECURSIVE)== count($array_2))){
    echo 'Массив - одномерный';

}else{
    echo 'Массив - многоверный'
};

//Task 7  Вывести таблицу умножения
 $x=1;
 $y=10;
 for ($i = $x; $i<=$y;$i++){
    echo 'Таблица умножения на '.$i.'<br>';
    for ($j=$x; $j <=$y;$j++){
        echo $i.'*'.$j.'='$i*$j.'<br>';
    }
 } 