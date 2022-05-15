<header>
        <section>
            
            <a href="Main.php" id="logo">PsychoToday</a>
    
            <label for="toggle-1" class="toggle-menu"><ul><li></li> <li></li> <li></li></ul></label>
            <input type="checkbox" id="toggle-1">
    
                <nav>
                    <ul>
                        
                        <li><a href="NewsPageNEW.php">Статьи</a></li>            
                        <li><a href="BooksPageNEW.php" >Книги</a></li>                        
                        <li><a href="Lifehack.php" >Советы</a></li>
                        <li><a href="Test.php" >Тесты</a></li>
                        <li><a href="Relax/MainCalm.html" >Релакс</a></li>
                        <li class="dropdown">
                            <a class="dropbtn">                           
                                Глоссарий
                                <div class="dropdown-content">
                                    <a href="Glossary.php" style="font-size:12px;">Словарь основных психологических терминов</a>
                                    <a href="Glossary2.php" style="font-size:12px;">Глоссарий психических заболеваний</a>
                                    <a href="Glossary3.php" style="font-size:12px;">Глоссарий нервных заболеваний</a>
                                </div>
                            </a>
                        </li>
                        <li><a href="Contacts.php" >Контакты</a></li>
                        <li class="dropdown">
                            <?php

                                if(isset($_SESSION['user_id']))
                                {
                                    print "<a class='dropbtn'>";
                                    print $user_data['username'];
                                    print "<div class='dropdown-content'>
                                    <a href='profile.php' style='font-size:12px;'>Профиль</a>
                                    <a href='logout.php' style='font-size:12px;'>Выйти</a>
                                    </div>
                                </a>";

                                } else {
                                    print "<a class='dropbtn'>Вход
                                    <div class='dropdown-content'>
                                        <a href='login.php' style='font-size:12px;'>Войти</a>
                                        <a href='register.php' style='font-size:12px;'>Регистрация</a>
                                    </div>
                                </a>";
                                }


                            ?>
                            
                        </li>
                        
                    </ul>
                </nav>
        </header>
    
    </section>