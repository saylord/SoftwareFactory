<?php 
    session_start();
    require('connect.php');
    include("functions.php");
    $user_data = check_login($conn);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    <title>PsychoToday - Профайл</title>
  </head>

  
<style>
 html {
    scroll-behavior: smooth;
}
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



    .gradient-back {
    background: linear-gradient(130deg, #8008e1, #ecb710);
    background-size: 400% 400%;

    -webkit-animation: AnimationName 4s ease infinite;
    -moz-animation: AnimationName 4s ease infinite;
    animation: AnimationName 4s ease infinite;
}

</style>

  <body class="text-gray-800 antialiased">
      
<!--==================================HEADER=====================================-->
<?php 
    include("header.php");
?>
    <main class="profile-page ">
      <section class="relative block" style="height: 500px;">
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80");'
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-50 bg-black"
          ></span>
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-gray-300 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
      </section>
      <section class="relative py-16 bg-gray-300">
        <div class="container mx-auto px-4">
          <div
            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64"
          >
            <div class="px-6">
              <div class="flex flex-wrap justify-center">
                <div
                  class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center"
                >
                  <div class="relative">
                    
                  </div>
                </div>
                <div
                  class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center"
                >
                  <form class="py-6 px-3 mt-32 sm:mt-0" action="logout.php">
                    <button
                      class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1"
                      type="sumbit"
                      style="transition: all 0.15s ease 0s;"
                    >
                      Выйти 
                    </button>
                    </form>
                </div>
                <div class="w-full lg:w-4/12 px-4 lg:order-1">
                  <div class="flex justify-center py-4 lg:pt-4 pt-8">
                    <div class="mr-4 p-3 text-center">
                      <span
                        class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                        ></span
                      ><span class="text-sm text-gray-500"></span>
                    </div>
                    <div class="mr-4 p-3 text-center">
                      <span
                        class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                        ><?php 
                            $sql = "SELECT * FROM user_news WHERE user_id = '" . $user_data['id'] . "'";
                            $result = mysqli_query($conn, $sql);
                            $user_news = mysqli_fetch_all($result, MYSQLI_NUM);
                            $sum1 = 0;
                            for ($i = 0; $i < count($user_news); $i++) {
                                $sum1++;
                                
                            } echo $sum1; 
                        ?></span
                      ><span class="text-sm text-gray-500">Новости</span>
                    </div>
                    <div class="lg:mr-4 p-3 text-center">
                      <span
                        class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                        ><?php 
                            $sql2 = "SELECT * FROM user_book WHERE user_id = '" . $user_data['id'] . "'";
                            $result2 = mysqli_query($conn, $sql2);
                            $user_book = mysqli_fetch_all($result2, MYSQLI_NUM);
                            $sum = 0;
                            for ($i = 0; $i < count($user_book); $i++) {
                                $sum++;
                                
                            } echo $sum; 
                        ?></span
                      ><span class="text-sm text-gray-500">Книги</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center mt-12">
                <h3
                  class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2"
                >
                  <?php print $user_data['username']; ?>
                </h3>
               
                <div class="mb-2 text-gray-700 mt-10">
                  <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i
                  >Избранное
                </div>
                
              </div>
              <div class="mt-10 py-10 border-t border-gray-300 text-center">
                <div class="flex flex-wrap justify-center">
                  <div class="w-full lg:w-9/12 px-4">
                    <p class="mb-4 text-lg leading-relaxed text-gray-800">
                    
                    <?php 
        $sql3 = "SELECT * FROM news WHERE news_id in (SELECT news_id FROM user_news WHERE ". $user_data['id'] ." = user_id)";
        $result3 = mysqli_query($conn, $sql3);
        $news = mysqli_fetch_all($result3, MYSQLI_NUM);

        for ($j = 0; $j < count($news); $j++) {
       
            print "<div class='mt-12' style='border:1px solid purple;'>
            <div class='flex flex-wrap '>
                                <div class='w-full flex-none text-xs text-blue-700 font-medium '>
                                    Новости
                                </div>
                                <h2 class='flex-auto text-lg font-medium'>"; echo $news[$j][1]; print "</h2>
                            </div>
                            <p class='mt-3'></p>
                            <div class='flex py-4  text-sm text-gray-600'>
                                <div class='flex-1 inline-flex items-center'>
                                    <svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5 mr-3' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                        <img src='
                                        free-icon-user-profile-14660.svg' alt='' class='h-5 w-5 mr-3' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                    </svg>
                                    <p class=''>"; print $news[$j][2]; print "</p>
                                </div>
                                
                            </div>
            </div>";}
            

            $sql4 = "SELECT * FROM books WHERE book_id in (SELECT book_id FROM user_book WHERE ". $user_data['id'] ." = user_id)";
        $result4 = mysqli_query($conn, $sql4);
        $books = mysqli_fetch_all($result4, MYSQLI_NUM);

        for ($i = 0; $i < count($books); $i++) {
       
            print "<div class='mt-12' style='border:1px solid purple;'>
            <div class='flex flex-wrap '>
                                <div class='w-full flex-none text-xs text-blue-700 font-medium '>
                                    Книги
                                </div>
                                <h2 class='flex-auto text-lg font-medium'>"; echo $books[$i][1]; print "</h2>
                            </div>
                            <p class='mt-3'></p>
                            <div class='flex py-4  text-sm text-gray-600'>
                                <div class='flex-1 inline-flex items-center'>
                                    <svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5 mr-3' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                        <img src='
                                        free-icon-user-profile-14660.svg' alt='' class='h-5 w-5 mr-3' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                    </svg>
                                    <p class=''>"; print $books[$i][2]; print "</p>
                                </div>
                                
                            </div>
            </div>";}
    ?>

                    </p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    
    <!-----------------------------------------F O O T E R------------------------------------------->


      
  </body>
  
</html>
