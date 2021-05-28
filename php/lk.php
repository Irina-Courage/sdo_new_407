<?php session_start() ?>
<head>
<html lang="ru">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fontawesome -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/ba83c27d7d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">  
         <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">

    <title>Курсовая работа 407 ЛК</title>
</head>
<body>
    
    <header>
        <div class="container-flex subheader ">
            <div class="container" >
                <div class="row">
                    <div class="col-md-1 offset-md-1 subheader_logo">
                        <a href="#" > <img src="../img/logo.svg" alt="logo"  width="100%"></a>
                    </div>
                    <div class="col-md-7 ">
                        <div class="container mainHeader">
                            Портал обучения и развития
                        </div>                             
                    </div>
                    <div class="col-md-3 ">
                        <div class="container header_navigation">
                            <div class="row  block1">
                                <div class="col-md-4 block_align_bottom">
                                    <a href = "../index.html"><p>Выход</p></a>
                                </div>
                            </div>
                        </div>
                    </div>                               
                </div>
            </div>
        </div>

        <div class="container-fluid brownstripe">   
            <div class="container menu">  
                <div class="row">
                    <div class="col-md-1">                        
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                  </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Действие</a>
                              <a class="dropdown-item" href="#">Другое действие</a>
                              <a class="dropdown-item" href="#">Что-то еще здесь</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 menu_link ">
                        <div class="empty_block">
                        </div>
                    </div>
                    <div class="col-md-3 userbox"> 
                        <div class="userbox">    
                            <p><span><?= $_SESSION['name'] ?></span></p>
                            <p><span><?= $_SESSION['lastname'] ?></span></p> 
                        </div>                                                                       
                    </div>
                    <div class="col-md-7 menu_link">
                        <div class="container">
                            <div class="row block1">
                                <div class="col menu_link block_align_bottom menu_border"><a href = "#">2<br>Курсы</a></div>
                                <div class="col menu_link block_align_bottom menu_border"><a href = "#">1<br>Тесты</a></div>
                                <div class="col menu_link block_align_bottom menu_border"><a href = "#">Управление</a></div>
                                <div class="col menu_link block_align_bottom menu_border"><a href = "#">Отчетность</a></div>
                                <div class="col menu_link block_align_bottom menu_border"><a href = "#">Календарь</a></div>
                                <div class="col menu_link block_align_bottom menu_border"><a href = "#">Обратная связь</a></div>                                  
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </div>

        <div class="container path">
            <a href="#">Home>TRACK1>****</a>
            <br>
            <hr>
        </div>
    </header>  
    

    <div class="container  support">
        
        <div class= "container">
            <div class="row main_block_header">
                Основы ЗД
            </div>
            <div class="row secondary_block_header">
               <h1>УПРАВЛЕНИЕ</h1> 
            </div>
            <div class="row control">
                <div class="col brownBox"> <a href="#">Трек</a></div>
                <div class="col yellowBox"> <a href="#">Учебные цели</a></div>
                <div class="col redBox"> <a href="#">Серитфикация</a></div>
                <div class="col orangeBox"> <a href="#">Поддержка</a></div>
                <div class="col greenBox"> <a href="#">Помощь</a></div>
            </div>
            <div class="row secondary_block_header">
                <h1>Моя поддержка</h1>
            </div>
        </div>
        

            <div class="container rounded mySupportBox1 ">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse tempore cupiditate voluptatum perferendis dolor fuga blanditiis quos magnam nihil architecto. Quos beatae id ipsam, illo veniam suscipit quisquam corporis voluptates?</p>
                <div class="container rounded  mySupportBox2">
                    <div class="row">
                        <div class="col-6 card_header"> <h2>Мой наставник</h2></div>
                        <div class="col-6 card_header"> <h2>Территориальный управляющий</h2></div>
                    </div>
                    <div class="row">
                        <div class="col-6"> 
                            <div class="card mb-3">
                                <div class="row g-0">
                                <div class="col-md-4 tutor_pic">
                                    <img src="../img/card_img/face1.jpg" alt="card1">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <div class="card-title">Петрович Петр Петрович</div>
                                    <p class="card-text">Менеджер</p>
                                    <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laudantium omnis, sed deserunt asperiores placeat distinctio laboriosam quibusdam magnam iure porro sint ipsum molestias corporis possimus quisquam saepe excepturi animi. 
                                        <br> tel <a href="tel 223322">+12223322222</a>
                                        <br> email<a href="mailto 223322">aaaa44744@mail.ru</a>
                                    </small></p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6"> 
                            <div class="card mb-3">
                                <div class="row g-0">
                                <div class="col-md-4 tutor_pic">
                                    <img src="../img/card_img/face2.jpg" alt="card1">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title">Куликова Ольга Ивановна</h5>
                                    <p class="card-text">Руководитель</p>
                                    <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laudantium omnis, sed deserunt asperiores placeat distinctio laboriosam quibusdam magnam iure porro sint ipsum molestias corporis possimus quisquam saepe excepturi animi. 
                                        <br> tel <a href="tel 223322">+12223322222</a>
                                        <br> email<a href="mailto 223322">aaaa44744@mail.ru</a>
                                    </small></p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                
                    <div class="row">
                        <div class="col-6 card_header"> <h2>Наблюдатель</h2></div>
                        <div class="col-6 card_header"> <h2>Тренер</h2></div>
                    </div>
                    <div class="row">
                        <div class="col-6"> 
                            <div class="card mb-3">
                                <div class="row g-0">
                                <div class="col-md-4 tutor_pic">
                                    <img src="../img/card_img/face3.jpg" alt="card1">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="card-title">Сидорова Анна Ивановна</div>
                                        <p class="card-text">Старший менеджер</p>
                                        <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laudantium omnis, sed deserunt asperiores placeat distinctio laboriosam quibusdam magnam iure porro sint ipsum molestias corporis possimus quisquam saepe excepturi animi. 
                                            <br> tel <a href="tel 223322">+1 222 332 22 22</a>
                                            <br> email<a href="mailto 223322">aaaa44744@mail.ru</a>
                                        </small></p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6"> 
                            <div class="card mb-3" >
                                <div class="row g-0">
                                <div class="col-md-4 tutor_pic">
                                    <img src="../img/card_img/face4.jpg" alt="card1">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="card-title">Цилоковский Константин Павлович</div>
                                        <p class="card-text">Начальник</p>
                                    <div class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laudantium omnis, sed deserunt asperiores placeat distinctio laboriosam quibusdam magnam iure porro sint ipsum molestias corporis possimus quisquam saepe excepturi animi. 
                                        <br> tel <a href="tel 223322">+12223322222</a>
                                        <br> email<a href="mailto 223322">aaaa44744@mail.ru</a>
                                    </small></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>

    <script src="../js/main.js"></script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>