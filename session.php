<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 2/28/2017
 * Time: 9:41 PM
 */

session_start();

if(isset($_SESSION['page_visit'])){
    $_SESSION['page_visit']+=1;
}else{
    $_SESSION['page_visit']=1;
}
echo "you have visited this page for " . $_SESSION['page_visit'] . " times";


