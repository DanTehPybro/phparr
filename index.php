<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="num1">
        <h2>№1</h2>
<?php


$array = ['Danil', 'Ruslan', 'Mikhail', 'Ray', 'Denis'];


$count = count($array);
echo $count . '<br>';

if (in_array('Sidorov', $array)){
    echo '<br> True';
}
else{
    echo 'False' . '<br>';
}

$expelled = $array[4];
array_pop($array);
echo $expelled;
?></div>
<div class="num2">
    <h2>№2</h2>
<?
$lessons =[
    'Спортивный' => 'Сидоров',
    'Художественный' => 'Емелина',
    'Музыкальый' => 'Иванова',
    'Литературный' => 'Петров',
    'Биологичекий' => 'Антонова'
];
sort($lessons);

foreach ($lessons as $key => $value){
    echo $key . ' - ' . $value, '<br>';
}

?>
</div>
<div class="num3">
    <h2>№3</h2>
<?
$student =[
    'name' => 'Danil',
    'surename' => 'Matveev',
    'group' => '427 WEB',
    'hobbies' => ['gaming', 'military', 'history'],
    'socials' => ['vkontakte' => 'Данил Матвеев', 'youtube' => 'DanTehPybro', 'reddit' => 'DanTehPybro']
];

echo $student['name'], '<br>';
echo $student['surename'], '<br>';
echo $student['group'], '<br>';
echo $student['hobbies'][0] . '<br>' . $student['hobbies'][1] . '<br>' . $student['hobbies'][2], '<br>';
echo $student['socials']['vkontakte'], '<br>';
echo $student['socials']['youtube'], '<br>';
echo $student['socials']['reddit'], '<br>';
?></div>
</body>
</html>
