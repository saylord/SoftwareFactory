<?php
    session_start();
    require('connect.php');
    include("functions.php");
    $user_data = check_login($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>PsychoToday - Глоссарий</title>
	<meta charset="utf-8">
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
	

    <div class="w-full bg-cover bg-center" style="height:32rem; background-image: url(https://images.unsplash.com/photo-1526378787940-576a539ba69d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=749&q=80);">
    <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
    <div class="text-center mb-20">
          <h1 class="sm:text-3xl text-2xl font-medium text-center title-font mb-4" style="color:#EDFEFF;">
            Глоссарий
          </h1>
          
        </div>
    </div>
  </div>


<div>
    <section class="text-gray-700">
      <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
          
          <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">
            Глоссарий психических заболеваний
          </p>
        </div>
          
        <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">

            <?php

                $sql = "SELECT * FROM glossary";
                $result = mysqli_query($conn, $sql);
                $terms = mysqli_fetch_all($result, MYSQLI_NUM);
                $j = 0;
                
                function compareByName($a, $b) {
                    return strcmp($a[2], $b[2]);
                }
                usort($terms, 'compareByName');

                print "<div class='w-full lg:w-1/2 px-4 py-2'>";
                for ($i = 0; $i < count($terms); $i++) {
                    if ($terms[$i][1] == 2) {
                        if ($j % 2 == 0) {
                            print "
                                        <details class='mb-4'>
                                            <summary class='font-semibold  bg-gray-200 rounded-md py-2 px-4'>";
                            print $terms[$i][2];
                            print "         </summary>
                                            <span>";
                            print $terms[$i][3];
                            print "         </span>
                                        </details>";
                        }
                        $j++;
                    }
                }
                print "</div>";
                
                $j = 0;
                print "<div class='w-full lg:w-1/2 px-4 py-2'>";
                for ($i = 0; $i < count($terms); $i++) {
                    if ($terms[$i][1] == 2) {
                        if ($j % 2 == 1) {
                            print "
                                        <details class='mb-4'>
                                            <summary class='font-semibold  bg-gray-200 rounded-md py-2 px-4'>";
                            print $terms[$i][2];
                            print "         </summary>
                                            <span class='px-4 py-2'>";
                            print $terms[$i][3];
                            print "         </span>
                                        </details>";
                        }
                        $j++;
                    }
                }
                print "</div>";
            ?>

        </div>
      </div>
    </section>
</div>




<!-----------------------------------------F O O T E R------------------------------------------->
<?php 
   
   include("footer.php");

   ?>
</body>
</html>