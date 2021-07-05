<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
require_once 'connection.php'; // подключаем скрипт

$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

$query ="SELECT * FROM users";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));


$data_array = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data_array[] =$row;
}
//
/*   echo "<pre>";
print_r($data_array);
    echo "</pre>";
//*/

//$newArray =array();
//foreach($data_array as $item){
//    if(!array_key_exists($item->gander == 1, $newArray)){
//        $newArray[$item->gander]= array();
//    }
//    $newArray[$item->gander][] = $item;
//}

$UsersGirl = [];
$UsersMen = [];
foreach($data_array as $users){

if($users['gender'] ==2){
    $UsersGirl[] = $users;

}
    if($users['gender'] ==1){
    $UsersMen[] =$users;
}



//if ( array_search(3, array_column($users, 'gender'))) {
//    echo "'61574' найдено\n";
//} else
//{
//
//    echo "не найдено";
//}

}

//echo "<pre>";
//print_r($UsersGirl);
//echo "</pre>";
$test = array_rand($UsersMen, 1);
echo "<pre>";
print_r($UsersMen);
echo "</pre>";

//   echo "<pre>";
//print_r($newArray);
//    echo "</pre>";
////

//if($result)
//{
//    $rows = mysqli_num_rows($result); // количество полученных строк
//
//    $row = mysqli_fetch_all($result);
//
//    echo "<pre>";
//    var_dump($result);
//    echo "</pre>";
//
//
//    echo "<table><tr><th>Id</th><th>users_id</th><th>username</th><th>cmd</th><th>vip_day</th><th>refer</th><th>age</th><th>gender</th><th>last_update</th><th>country</th><th>city</th><th>photo_profile</th><th>photo_profile</th><th>rating</th></tr>";
//    for ($i = 0 ; $i < $rows ; ++$i)
//    {
//        $row = mysqli_fetch_row($result);
//        echo "<tr>";
//        for ($j = 0 ; $j < 25 ; ++$j) echo "<td>$row[$j]</td>";
//        echo "</tr>";
//    }
//    echo "</table>";
//
//
//}
//
//
//
//mysqli_close($link);
?>
</body>
</html>