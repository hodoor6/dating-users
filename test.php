<?php
$UsersGirl = [];
$UsersMen = [];

foreach($users_info as $users) {

    if ($users['gender'] == 2) {
        $UsersGirl[] = $users;

    }
    if ($users['gender'] == 1) {
        $UsersMen[] = $users;
    }

}

$numberGirl =  array_rand($UsersGirl,1);
$numberMen =  array_rand($UsersMen,1);