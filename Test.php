<?php
    session_start();
    require('connect.php');
    include("functions.php");
    $user_data = check_login($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PsychoToday - Тесты</title>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
   :root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
    
    *{
        text-decoration:none; 
        list-style:none; 
        margin:0px; 
        padding:0px; 
        outline:none;
      
    }

    body{
        margin:0px;
        padding:0px; 
        font-family: 'Open Sans', sans-serif;
    }

    section{
        width:100%; 
        max-width:1200px; 
        margin:0px auto; 
        display:table; 
        position:relative;
    }

    h1{
        margin:0px auto;
        display:table; 
        font-size:26px; 
        padding:40px 0px; 
        color:#002e5b; 
        
    }

    h1 span{
        font-weight:500;
    }

    header{
        width:100%;
        display:table; 
        background-color:whitesmoke; 
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-bottom:px;
    }

    #logo{
        float:left; 
        font-size:24px; 
        text-transform:uppercase; 
        color:#002e5b; 
        font-weight:600; 
        padding:20px 0px;
    }

    nav{
        width:auto; 
        float:right;
    }

    nav ul{
        display:table; 
        float:right;
    }

    nav ul li{
        float:left;
    }

    nav ul li:last-child{
        padding-right:0px;
    }

    nav ul li a{
        color:#002e5b; 
        font-size:18px; 
        padding: 25px 20px; 
        display:inline-block; 
        transition: all 0.5s ease 0s;
    }

    nav ul li a:hover{
        background-color:#002e5b; 
        color:whitesmoke; 
        transition: all 0.5s ease 0s;
    }

    nav ul li a:hover i{
        color:whitesmoke; 
        transition: all 0.5s ease 0s;
    }

    nav ul li a i{
        padding-right:10px; 
        color:#002e5b; 
        transition: all 0.5s ease 0s;
    }

    .toggle-menu ul{
        display:table; 
        width:25px;
    }

    .toggle-menu ul li{
        width:100%; 
        height:3px; 
        background-color:#002e5b; 
        margin-bottom:4px;
    }

    .toggle-menu ul li:last-child{
        margin-bottom:0px;
    }

    input[type=checkbox], label{
        display:none;
    }

    .content{
        display:table; 
        margin-bottom:60px; 
        width:900px;
    }

    .content h2{
        font-size:18px; 
        font-weight:500; 
        color:#002e5b; 
        border-bottom:1px solid whitesmoke;
        display:table; 
        padding-bottom:10px; 
        margin-bottom:10px;
    }

    .content p{
        font-size:14px; 
        line-height:22px; 
        color:#7c7c7c; 
        text-align:justify;
    }

    footer{
        display:table;
        padding-bottom:30px;
        width:100%;
    }
    
    .social{
        margin:0px auto; 
        display:table; 
        display:table;
    }

    .social li{
        float:left; 
        padding:0px 10px;
    }

    .social li a{
        color:#002e5b; 
        transition: all 0.5s ease 0s;
    }

    .social li a:hover{
        color:whitesmoke; 
        transition: all 0.5s ease 0s;
    }

    @media only screen and (max-width: 1440px) {
        section{max-width:95%;}
    }

    @media only screen and (max-width: 1250px) {
        header{
            padding:20px 0px;
        }

        #logo{
            padding:0px;
        }

        input[type=checkbox] {
            position: absolute; 
            top: -9999px; 
            left: -9999px; 
            background:none;
        }

        input[type=checkbox]:fous{
            background:none;
        }

        label {
            float:right; 
            padding:8px 0px; 
            display:inline-block; 
            cursor:pointer; 
        }

        input[type=checkbox]:checked ~ nav {
            display:block;
        }

        nav{
            display:none; 
            position:absolute; 
            right:0px; top:53px; 
            background-color:#002e5b;
            padding:0px; 
            z-index:99;
        }

        nav ul{
            width:auto;
        }

        nav ul li{
            float:none; 
            padding:0px;
            width:100%; 
            display:table;
        }

        nav ul li a{
            color:#FFF; 
            font-size:15px; 
            padding:10px 20px; 
            display:block; 
            border-bottom: 1px solid rgba(225,225,225,0.1);
        }
        nav ul li a div{
            color:#FFF; 
            font-size:15px; 
            padding:10px 20px; 
            display:block; 
            border-bottom: 1px solid rgba(225,225,225,0.1);
        }

        nav ul li a i{
            color:whitesmoke;
            padding-right:13px;
        }
    }

    @media only screen and (max-width: 980px) {
        .content{width:90%;}
    }

    @media only screen and (max-width: 568px) {
        h1{padding:25px 0px;}
        h1 span{display:block;}
    }

    @media only screen and (max-width: 480px) {
        section {max-width: 90%;}
    }

    @media only screen and (max-width: 360px) {
        h1{font-size:20px;}
        label{padding:5px 0px;}
        #logo{font-size: 20px;}
        nav{top:47px;}
    }

    @media only screen and (max-width: 320px) {
        h1 {padding: 20px 0px;}
    }

    
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black !important;
        padding: 12px 26px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content {background-color: #ddd;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown-content>a:hover {background-color: white;}

    nav ul a div{
        float:left;
    }

    nav ul li a div{
        color:#002e5b; 
        font-size:18px; 
        padding: 25px 20px; 
        display:inline-block; 
        transition: all 0.5s ease 0s;
    }

    nav ul li a:hover{
        background-color:#002e5b; 
        color:whitesmoke; 
        transition: all 0.5s ease 0s;
    }

</style>
<body>

	
<!--==================================HEADER=====================================-->

<?php 
    include("header.php");
?>


    <div class="box-content w-11/12 p-4 border-4 border-purple-400 rounded-xl content-center bg-purple-400 lg:ml-10 hideme" style="padding-bottom: 150px; padding-top: 40px;">
        <?php 

            if(isset($_SESSION['user_id'])) { ?>
    
        <h1 class="text-6xl text-center text-white" style="padding-bottom: 50px;">Тесты</h1>


        <div class="flex justify-around">
          <!-- component -->
        <div class="max-w-xs bg-white shadow-lg rounded-lg overflow-hidden my-10">
            <div class="px-4 py-2">
              <h1 class="text-gray-900 font-bold text-3xl uppercase">Депрессия</h1>
              <p class="text-gray-600 text-sm mt-1"></p>
            </div>
            <img class="h-56 w-full object-cover mt-2" src="https://images.unsplash.com/photo-1518640467707-6811f4a6ab73?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="NIKE AIR">
            <div class="flex items-center justify-center px-4 py-2 bg-white">
              <h1 class="text-gray-200 font-bold text-xl"></h1>
              <a href="./tests/main_test1.html"><button class="px-3 py-1 mr-3 bg-gray-200 text-sm text-gray-900 font-semibold rounded">Узнать больше</button></a>
              <a href="./tests/test1.html"><button class="px-3 py-1 bg-gray-200 text-sm text-gray-900 font-semibold rounded">Пройти</button></a>
            </div>
          </div>
        
          <div class="max-w-xs bg-white shadow-lg rounded-lg overflow-hidden my-10">
            <div class="px-4 py-2">
              <h1 class="text-gray-900 font-bold text-3xl uppercase">Темперамент</h1>
              <p class="text-gray-600 text-sm mt-1"></p>
            </div>
            <img class="h-56 w-full object-cover mt-2" src="https://images.unsplash.com/photo-1484581400079-58a319a15a2a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=676&q=80" alt="NIKE AIR">
            <div class="flex items-center justify-center px-4 py-2 bg-white">
              <h1 class="text-gray-200 font-bold text-xl"></h1>
              <a href="./tests/main_test2.html"><button class="px-3 py-1 mr-3 bg-gray-200 text-sm text-gray-900 font-semibold rounded">Узнать больше</button></a>
              <a href="./tests/test2.html"><button class="px-3 py-1 bg-gray-200 text-sm text-gray-900 font-semibold rounded">Пройти</button></a>
            </div>
          </div>
        
          <div class="max-w-xs bg-white shadow-lg rounded-lg overflow-hidden my-10">
            <div class="px-4 py-2">
              <h1 class="text-gray-900 font-bold text-3xl uppercase">Фрустрация </h1>
              <p class="text-gray-600 text-sm mt-1"> Каждый ответ оценивается с точки зрения двух критериев: направления реакции и типа реакции.</p>
            </div>
            <img class="h-56 w-full object-cover mt-2" src="https://images.unsplash.com/photo-1528459709161-157d86910939?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1016&q=80" alt="NIKE AIR">
            <div class="flex items-center justify-center px-4 py-2 bg-white">
              <h1 class="text-gray-200 font-bold text-xl"></h1>
              <a href="./tests/thirdpage.html"><button class="px-3 py-1 mr-3 bg-gray-200 text-sm text-gray-900 font-semibold rounded">Узнать больше</button></a>
              <a href="./tests/test3.html"><button class="px-3 py-1 bg-gray-200 text-sm text-gray-900 font-semibold rounded">Пройти</button></a>
            </div>
          </div>
        </div>
    
        <div class="flex justify-around">
          <!-- component -->
          <div class="max-w-xs bg-white shadow-lg rounded-lg overflow-hidden my-10">
              <div class="px-4 py-2">
                <h1 class="text-gray-900 font-bold text-3xl uppercase">Межличностные отношения</h1>
                <p class="text-gray-600 text-sm mt-1"></p>
              </div>
              <img class="h-56 w-full object-cover mt-2" src="https://images.unsplash.com/photo-1614155432292-c642ff94b8f6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1334&q=80" alt="NIKE AIR">
              <div class="flex items-center justify-center px-4 py-2 bg-white">
                <h1 class="text-gray-200 font-bold text-xl"></h1>
                <a href="./tests/main_test4.html"><button class="px-3 py-1 mr-3 bg-gray-200 text-sm text-gray-900 font-semibold rounded">Узнать больше</button></a>
                <a href="./tests/test4.html"><button class="px-3 py-1 bg-gray-200 text-sm text-gray-900 font-semibold rounded">Пройти</button></a>
              </div>
            </div>
        
            <div class="max-w-xs bg-white shadow-lg rounded-lg overflow-hidden my-10">
              <div class="px-4 py-2">
                <h1 class="text-gray-900 font-bold text-3xl uppercase">Эмоциональная направленность</h1>
                <p class="text-gray-600 text-sm mt-1"></p>
              </div>
              <img class="h-56 w-full object-cover mt-2" src="https://images.unsplash.com/photo-1613045947970-324867b13be9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80" alt="NIKE AIR">
              <div class="flex items-center justify-center px-4 py-2 bg-white">
                <h1 class="text-gray-200 font-bold text-xl"></h1>
                <a href="./tests/main_test5.html"><button class="px-3 py-1 mr-3 bg-gray-200 text-sm text-gray-900 font-semibold rounded">Узнать больше</button></a>
                <a href="./tests/test5.html"><button class="px-3 py-1 bg-gray-200 text-sm text-gray-900 font-semibold rounded">Пройти</button></a>
              </div>
            </div>
        </div>

        <?php 
        } else{
            ?>
            <h1 class="text-2xl text-center text-white" style="padding-bottom: 50px;">Пожалуйста пройдите регистрацию или войдите в свой аккаунт</h1>
        <?php
        } ?>
    </div>

    <!-----------------------------------------F O O T E R------------------------------------------->

    <?php 
   
   include("footer.php");

   ?>

</body>