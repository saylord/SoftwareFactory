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
    <title>Document</title>
    <link rel="stylesheet" href="css/forgotpasswrod.css">
    <link rel="stylesheet" href="build/mainPage.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="http://rawgit.com/notifyjs/notifyjs/master/dist/notify.js"></script>
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

    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">

            <div class="w-full xl:w-3/4 lg:w-11/12 flex">

                <div
                    class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                    style="background-image: url('https://source.unsplash.com/oWTW-jNGl9I/600x800')"
                ></div>
                
                <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <div class="px-8 mb-4 text-center">
                        <h3 class="pt-4 mb-2 text-2xl">???????????? ?????????????</h3>
                        <p class="mb-4 text-sm text-gray-700">
                            ???? ????????????, ???????????? ??????????????????. ???????????? ?????????????? ???????? ?????????? ?????????????????????? ?????????? ????????, ?? ???? ?????????????? ??????
                            ???????????? ?????? ???????????? ????????????!
                        </p>
                    </div>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action='changepassword.php' method='post' id='form'>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password1">
                                ????????????
                            </label>
                            <input
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id='password1'
                                name="password1"
                                type="password"
                                placeholder="?????????????? ????????????"/>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password2">
                                ????????????
                            </label>
                            <input
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id='password2'
                                name="password2"
                                type="password"
                                placeholder="?????????????? ????????????"/>
                        </div>
                        <div class="mb-6 text-center">
                            <input
                                class="w-full px-4 py-2 font-bold text-white bg-red-500 rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline"
                                name="login" id="send"
                                type="button"
                                
                            value='???????????????? ????????????'>
                        </div>
                        <hr class="mb-6 border-t" />
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

   <!-----------------------------------------F O O T E R------------------------------------------->

   <?php 
   
   include("footer.php");

   ?>

        <script>
           
            var errorPassword = true;

var errorPassword1 = true, errorNull = true;

var checkNull = function(){
  $(this).val($(this).val().trim());
  if ($(this).val() =="") {
    $(this).notify("The field must be filled in", "error");
    $(this).addClass("errtextbox");
    errorNull = true;
  } else {
    errorNull = false;
    $(this).removeClass("errtextbox");
  }
};

$("#password2").focusout(checkNull);
$("#password1").focusout(checkNull);


$("#password1").focusout(function(){
    var value = $(this).val();
    if (value.length <= 4) { 
      $(this).notify("Minimum of 5 characters", "error");
      $(this).addClass("errtextbox");
      errorPassword1 = true;
    } else {
      if (value.length > 16) {
        $(this).notify("Maximum of 16 characters", "error");
        $(this).addClass("errtextbox");
        errorPassword1 = true;
      } else {
        errorPassword1 = false;
        $(this).removeClass("errtextbox");
      }
    }
});

$("#password2").focusout(function(){
    var value = $(this).val();
    if (value != $("#password1").val()) {
      $(this).notify("The password doesn't match", "error");
      $(this).addClass("errtextbox");
      errorPassword2 = true;
    } else {
      errorPassword2 = false;
      $(this).removeClass("errtextbox");     
    }
});

$("#send").click(function(){
    if (!(errorPassword1 || errorNull)) {
      $("#form").submit();
    } else {
      $(this).notify("The form is empty or filled in incorrectly", "error");
    }
  });
        </script>
</body>
</html>