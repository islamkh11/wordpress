﻿<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'this is test<hr>';
//include './includes/autoloader.php';
include './includes/lang.php';
function getLang(){
    return 'ar';
}
$l = getExp('A');
echo $l;