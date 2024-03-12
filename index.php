<?php

// This is Globle NameSapce

namespace  User;

include __DIR__ . '/User/Profile.php';  // User Profile
include __DIR__ . '/Admin/Profile.php'; // Admin Profile

use Admin\Profile;

# Before Switch this context to admin namespace
// $admin = new User\Profile('1000');
// echo '<br>';
// $user = new Admin\Profile('2000');

#After Declare namespace Admin;
// $admin = new \User\Profile('1000'); // this mean start from root \user\profile
// echo '<br>';
// $user = new Profile('2000'); // by default will add Admin\ to Profile


$admin = new Profile('1000');
// echo '<br>';
// var_dump($admin);
// $user = new Profile('2000');