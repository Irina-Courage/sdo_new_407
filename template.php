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
            <div class="col orangeBox"> <a href="/support">Поддержка</a></div>
            <div class="col greenBox"> <a href="#">Помощь</a></div>
        </div>

    </div>
    
    <?php echo $content ?>

    <footer>
    <br>
    <div class="container-fluid brownstripe">  
        <div class="container">
            <div class="row">
                <div class="col-3 footerText">
                    <a href="#">Новости и пресс-релизы</a>                    
                    </div>
                <div class="col-3 footerText">
                    <a href="#"> Информация для гостей</a>
                   </div>
                <div class="col-6">
                    <div class="empty_block">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-3 footerText">
                    <a href="#">Корпоративная этика</a>
                    </div>
                <div class="col-3 footerText">
                    <a href="#">Обратная связь</a>
                    </div>
                <div class="col-6">
                    <div class="empty_block">
                    </div>
                </div>
            </div>
 
            <br>
        </div>
    </div> 
    <br>
    <div class="container"> 
        <div class="row">
            <div class="col-1"></div>
                <div class="row">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg>   
                    </div>
                    <div class="col-1 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                          </svg>
                    </div>
                    <div class="col-1 ">
                        <!-- <button type="button class btn-secondary"> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                            </svg>
                        <!-- </button> -->
                    </div>
                    <div class="col-9 ">
                        <div class="empty_block">
                        </div>
                    </div>
                </div>
            <div class="col-11"></div>
        </div>
        <br>
        <P>©2021 права защищены </P>
        </div>
    <br>
</footer>

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