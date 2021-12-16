<?php require "functions.php";  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--   <meta name="viewport" content="width=1200"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/super_style.css">
<link rel="stylesheet" href="css/lightslider.css"/>




  <title>Shamy</title>





</head>
<body>
    <!--  ------Header----------------- -->

    <header class="header_f">
      <div class="container head">
        <div class="header_f_inner">
            <img class="logo_img" src="img/interaction/logo.png" alt="">
            <button class="btn_header" >Большой каталог</button>
<!--            <input class="header_input" value="" >-->
                <input type="text" class="header_input" >
                <button class="header_button" type="submit">
                    &#128270;</button>







            <?php
            if($_SESSION['user']['login'] !== NULL){
                print ('<a href="account.php" class="login_text">'."Привет, ".$_SESSION['user']['nik'].'</a>');
                print ('<button id="out_butt" onclick="scripts.js/out_user()" class="btn_header" >Выйти</button>');
            }
            else{
                print ('<p class="text_big">'.$_SESSION['user']['nik'].'</p>');
                print ('<button onclick="scripts.js/show(\'block\')" class="btn_header" >Войти</button>');
            }
            ?>
        </div>
      </div>
    </header>
    <!--  ------Header----------------- -->
    <!-- ----------laptop menu----------- -->
    <header class="header_laptop">
      <div class="container head">
        <div class="header_f_inner">
            <img class="logo_img" src="img/interaction/logo.png" alt="">
            <input class="header_input" value="" >
            <button onclick="scripts.js/show_laptop_menu('block')" class="btn_header" >	&#926;</button>
        </div>
      </div>
    </header>
     <!-- -------------laptop block menu ------------ -->
    <header id="header_laptop_menu">
      <div class="container head">
        <div class="header_f_inner laptop">
          <button class="btn_header" >Большой каталог</button>
          <a onclick="scripts.js/show_laptop_menu('none'), scripts.js/show('block')" class="btn_header" >Войти</a>
        </div>
      </div>
    </header>
    <!-- -------------laptop block menu ------------ -->
    <!-- ----------laptop menu----------- -->
    <div id="gray_mask" onclick="scripts.js/show('none'), scripts.js/show_auth('none'), scripts.js/show_laptop_menu('none')"></div>
    <!-- --------Форма регистрации/входа------- -->
    <div id="window_reg_auth">
      <img  class="close" src="img/interaction/close.png" alt="" onclick="scripts.js/show('none')">
      <div class="form_reg_auth">
          <a class="second_choise" href="#" onclick="scripts.js/show('none'), scripts.js/show_auth('block')">Вход</a>
        <h2 class="hed_r_a">&#8594;Регистрация&#8592;</h2>
        <form action="index.html" name="f1">
          <input type="text" oninput='this.value=this.value.replace(/[^\w\d]*/gi,"");' placeholder="Логин" id="reg_login" value="login_login" class="input_r_a">
           <p id="error_login" class="info_reg">&#11014;ошибка&#11014;</p>
          <input type="text" oninput='this.value=this.value.replace(/[^\w\d]*/gi,"");' placeholder="Ник-нейм" id="reg_nick" value="nik-nik" class="input_r_a">
            <p id="error_nick" class="info_reg">&#11014;ошибка&#11014;</p>
          <input type="email"  placeholder="Почта (sample@mail.ru)" value="sample@mail.ru" id="reg_mail" class="input_r_a">
            <p id="error_mail" class="info_reg">&#11014;ошибка&#11014;</p>
          <input type="password" oninput='this.value=this.value.replace(/[^\w\d]*/gi,"");' placeholder="Пароль" value="123" id="reg_pass_1" class="input_r_a">
            <p id="error_pass" class="info_reg">&#11014;ошибка&#11014;</p>
          <input type="password" oninput='this.value=this.value.replace(/[^\w\d]*/gi,"");' placeholder="Подтвердите пароль" value="123" id="reg_pass_2" class="input_r_a">
          <input type='tel' oninput='this.value=this.value.replace(/[^\d]*/gi,"");' placeholder="Мобильный телефон" id="reg_phone" class="input_r_a">
          <div class="help_box_2"></div>
          <a onclick="scripts.js/reg_user()" class="btn_reg" >Зарегестрироваться</a>
            <div class="help_box_2"></div>
          <p><input type="checkbox" id="reg_chbox" value=""> Соглашение на обработку личных данных</p>

        </form>
      </div>
    </div>
    <div id="window_auth_reg">
      <img  class="close" src="img/interaction/close.png" alt="" onclick="scripts.js/show_auth('none')">
      <div class="form_reg_auth">
          <a class="second_choise" href="#" onclick=" scripts.js/show_auth('none'), scripts.js/show('block')">Регистрация</a>
        <h2 class="hed_r_a">&#8594;Вход&#8592;</h2>
        <form action="index.html" name="f1">
          <input  oninput='this.value=this.value.replace(/[^\w\d]*/gi,"");'type="text" placeholder="Логин" id="auth_login"  class="input_r_a">
            <p  id="error_login_auth" class="info_reg">&#11014;ошибка&#11014;</p>
          <input oninput='this.value=this.value.replace(/[^\d]*/gi,"");' type="password" placeholder="Пароль" id="auth_password"  class="input_r_a">
            <p id="error_password_auth" class="info_reg">&#11014;ошибка&#11014;</p>
            <div class="help_box_2"></div>
          <a  class="btn_reg"  onclick="scripts.js/auth_user()"> Войти </a>
        </form>
      </div>
    </div>
    <!-- --------Форма регистрации/входа------- -->
    <!--  ------Первый слайд----------------- -->
    <section>
        <p><?php coonectDB_reviews_best(); ?></p>
      <div class="main">
        <div class="container content_down">
          <div class="box content_main">
            <p class="large_text_ad">Темный рыцарь </p>
          </div>
          <div class="box content_main">
            <div class="link_main">
              <a href="#"><p class="small_text rotate_text text_main">самое самое</p></a>
            </div>
            <div class="content_main posters_main">
                <?php
                $best =  coonectDB_reviews_best();
                for ($i=0; $i < count($best); $i++) {
                    $picture = $best[$i]['picture'];
                    $name = $best[$i]['name'];
                    $comment = $best[$i]['counts'];
                    $visit = $best[$i]['visit'];
                    print('
                      <div class="item container_main">    
                        <img class="item_img" src="'.$picture.'" alt="">
                        <button class="item_btn poster_btn" >Отзыв</button>
                        <div class="item_mask">
                          <div class="item_text film_name_main">
                            '.$name.'
                          </div>
                          <div class="item_text stat_main">
                            <img class="img_stat_mini" src="img/interaction/comment.svg" alt="">
                            '.$comment.'
                            <img class="img_stat_mini" src="img/interaction/eye.svg" alt="">
                            '.$visit.'
                          </div>
                        </div>
                      </div>
                      ');
                }
                ?>
            </div>
          </div>
        </div>
        <div class="laptop_scroll">
          <div class="help_box"></div>
          <p>Самое самое</p>
          <ul id="laptop_scroll">
              <?php
              $best =  coonectDB_reviews_best();
              for ($i=0; $i < count($best); $i++) {
                  $picture = $best[$i]['picture'];
                  $name = $best[$i]['name'];
                  $comment = $best[$i]['counts'];
                  $visit = $best[$i]['visit'];
                  print('
                    
                       <li>
                          <div class="item container_main">    
                            <img class="item_img" src="'.$picture.'" alt="">
                            <button class="item_btn poster_btn" >Отзыв</button>
                            <div class="item_mask">
                              <div class="item_text film_name_main">
                                '.$name.'
                              </div>
                              <div class="item_text stat_main">
                                <img class="img_stat_mini" src="img/interaction/comment.svg" alt="">
                                 '.$comment.'
                                <img class="img_stat_mini" src="img/interaction/eye.svg" alt="">
                                '.$visit.'
                              </div>
                            </div>
                          </div>
                       </li>
                      ');
              }
              ?>
          </ul>
        </div>
        <div class="main_mask"></div>
      </div>
    </section>
    <!--  ------Первый слайд----------------- -->


    <!-- ------------------Второй слайд-------------- -->
  
    <section>
      <div class="container_for_micro">
          <!-- Шапка каталога -->
          <div class="section_header">
            <h3  class="small_text">все самое лучшше для вас</h3>
            <h2 class="middle_text">Каталог фильмов</h2>
              <button id="catalog_btn_1" class="item_btn catalog_btn catalog_btn_active" >Все</button>
              <button  id="catalog_btn_2" class="item_btn catalog_btn" >Новинки</button>
              <button  id="catalog_btn_3" class="item_btn catalog_btn" >Самое обсуждаемое</button>
              <button  id="catalog_btn_4" class="item_btn catalog_btn" >Лучшее</button>
          </div>


          <div id="new" class="container_for_scroll">
              <h3  class="small_text">Новинки</h3>
                <ul id="review_scroll_new" class="cs-hidden">

                      <?php
                          $review =  coonectDB_reviews_new();
                          for ($i=0; $i < count($review); $i++) {
                              $picture = $review[$i]['picture'];
                              $name = $review[$i]['name'];
                              $comment = $review[$i]['counts'];
                              $visit = $review[$i]['visit'];
                              print('
                              <li>                 
                                <div class="item catalog_container">   
                                    <img class="item_img" src='.$picture.' alt="">
                                    <button class="item_btn poster_btn" >Отзыв</button> 
                                    <div class="item_mask catalog_mask">
                                        <div class="item_text film_name">
                                            <p class="text_big">'.$name.'</p> 
                                        </div>
                                        <div class="item_text stat">
                                            <img class="picture_catalog" src="img/interaction/comment.svg" alt="">
                                            <p class="text_big">'.$comment.'</p>
                                            <img class="picture_catalog" src="img/interaction/eye.svg" alt="">
                                            <p class="text_big">'.$visit.'</p> 
                                        </div>
                                    </div>
                                </div>
                              </li>
                              ');
                          }
                      ?>
                    </ul>
        </div>






          <div id="best_com" class="container_for_scroll">
              <h3  class="small_text">Самое обсуждаемое</h3>
              <ul id="review_scroll_best_com" class="cs-hidden">

                  <?php
                  $review =  coonectDB_reviews_besr_com();
                  for ($i=0; $i < count($review); $i++) {
                      $picture = $review[$i]['picture'];
                      $name = $review[$i]['name'];
                      $comment = $review[$i]['counts'];
                      $visit = $review[$i]['visit'];
                      print('
                      <li>                 
                        <div class="item catalog_container">   
                            <img class="item_img" src='.$picture.' alt="">
                            <button class="item_btn poster_btn" >Отзыв</button> 
                            <div class="item_mask catalog_mask">
                                <div class="item_text film_name">
                                    <p class="text_big">'.$name.'</p> 
                                </div>
                                <div class="item_text stat">
                                    <img class="picture_catalog" src="img/interaction/comment.svg" alt="">
                                    <p class="text_big">'.$comment.'</p>
                                    <img class="picture_catalog" src="img/interaction/eye.svg" alt="">
                                    <p class="text_big">'.$visit.'</p> 
                                </div>
                            </div>
                        </div>
                      </li>
                      ');
                  }
                  ?>
              </ul>
          </div>


          <div id="best_all" class="container_for_scroll">
              <h3  class="small_text">Лучшее</h3>
              <ul id="review_scroll_best_all" class="cs-hidden">

                  <?php
                  $review =  coonectDB_reviews_besr_all();
                  for ($i=0; $i < count($review); $i++) {
                      $picture = $review[$i]['picture'];
                      $name = $review[$i]['name'];
                      $comment = $review[$i]['counts'];
                      $visit = $review[$i]['visit'];
                      print('
                      <li>                 
                        <div class="item catalog_container">   
                            <img class="item_img" src='.$picture.' alt="">
                            <button class="item_btn poster_btn" >Отзыв</button> 
                            <div class="item_mask catalog_mask">
                                <div class="item_text film_name">
                                    <p class="text_big">'.$name.'</p> 
                                </div>
                                <div class="item_text stat">
                                    <img class="picture_catalog" src="img/interaction/comment.svg" alt="">
                                    <p class="text_big">'.$comment.'</p>
                                    <img class="picture_catalog" src="img/interaction/eye.svg" alt="">
                                    <p class="text_big">'.$visit.'</p> 
                                </div>
                            </div>
                        </div>
                      </li>
                      ');
                  }
                  ?>
              </ul>
          </div>



              
      </div>
    </section>
    <!-- ------------------Второй слайд-------------- -->
    <!-- ------------------Третий слайд-------------- -->
    <section>
      <div class="container">
        <div class="section_header">
          <h2 class="middle_text">Выбор редакции</h2>
        </div>
          <?php
                $rec = coonectDB_reviews_rec();
                $big_box_1 = $rec[0];
                $small_box_1 = $rec[1];
                $big_box_2 = $rec[3];
                $small_box_2 = $rec[2];
                print('
                    <div class="gallery-block">
                      <div class="box">
                        <div class="gallery_content_box_big">
                            <img class="img_recomend" src="'.$big_box_1['picture'].'">
                            <button class="item_btn poster_btn_recomend">Отзыв</button>
                            <div class="item_mask_recomend">
                            <div class="item_text film_name_recomend">
                                '.$big_box_1['name'].'
                            </div>
                            <div class="item_text stat_recomend">
                            <img class="picture_recomend_last" src="img/interaction/comment.svg" alt="">
                            <p class="text_very_but_not_big">'.$big_box_1['counts'].'</p>
                            <img class="picture_recomend_last" src="img/interaction/eye.svg" alt="">
                            <p class="text_very_but_not_big">'.$big_box_1['visit'].'</p>
                        </div>
                     </div>
                    </div>
                        <div class="gallery_content_box_small">
                            <img class="img_recomend" src="'.$small_box_1['picture'].'">
                            <button class="item_btn poster_btn_recomend">Отзыв</button>
                            <div class="item_mask_recomend">
                            <div class="item_text film_name_recomend">
                                '.$small_box_1['name'].'
                            </div>
                            <div class="item_text stat_recomend">
                            <img class="picture_recomend_last" src="img/interaction/comment.svg" alt="">
                            <p class="text_very_but_not_big">'.$small_box_1['counts'].'</p>
                            <img class="picture_recomend_last" src="img/interaction/eye.svg" alt="">
                            <p class="text_very_but_not_big">'.$small_box_1['visit'].'</p>
                        </div>

                    </div>
                </div>
            </div>
            
             <div class="box">
                <div class="gallery_content_box_small">
                <img class="img_recomend" src="'.$small_box_2['picture'].'">
                <button class="item_btn poster_btn_recomend">Отзыв</button>
                <div class="item_mask_recomend">
                <div class="item_text film_name_recomend">
                  '.$small_box_2['name'].'
                </div>
                <div class="item_text stat_recomend">
                    <img class="picture_recomend_last" src="img/interaction/comment.svg" alt="">
                    <p class="text_very_but_not_big">'.$small_box_2['counts'].'</p>
                    <img class="picture_recomend_last" src="img/interaction/eye.svg" alt="">
                    <p class="text_very_but_not_big">'.$small_box_2['visit'].'</p>
                </div>
              </div>
            </div>
            <div class="gallery_content_box_big">
              <img class="img_recomend" src="'.$big_box_2['picture'].'">
              <button class="item_btn poster_btn_recomend">Отзыв</button>

              <div class="item_mask_recomend">

                <div class="item_text film_name_recomend">
                  '.$big_box_2['name'].'
                </div>
                <div class="item_text stat_recomend">
                    <img class="picture_recomend_last" src="img/interaction/comment.svg" alt="">
                    <p class="text_very_but_not_big">'.$big_box_2['counts'].'</p>
                    <img class="picture_recomend_last" src="img/interaction/eye.svg" alt="">
                    <p class="text_very_but_not_big">'.$big_box_2['visit'].'</p>
                </div>

              </div>
            </div>
                ');
          ?>








          </div>
       </div>
      </section>
      <!-- ------------------Третий слайд-------------- -->


      <!-- ------------------Четвертый слайд-------------- -->

      <section>
        <div class="container">
          <div>
            <p class="middle_text blog_theme_text">Свежее в блоге</p>
          </div>
          <div class="blog_box">
            <ul id="autoWidth" class="cs-hidden">              
                <?php
                $news =  coonectDB_news();
                for ($i=0; $i < count($news); $i++) {
                    $picture = $news[$i]['picture'];
                    $text_preview = $news[$i]['text_preview'];
                    $comment = $news[$i]['counts'];
                    $visit = $news[$i]['visit'];
                    print('
                  <li>                 
                    <div class="third_box">
                      <img class="blog_img"
                        src="'.$picture.'"
                        alt="">
                      <p  class="small_text blog_text">
                      '.$text_preview.'
                      </p>
                      <div class="reaction_blog">
                        <img class="picture_catalog" src="img/interaction/comment.svg" alt="">
                        <p class="text_big">
                          '.$comment.'
                        </p>
                        <img class="picture_catalog" src="img/interaction/eye.svg" alt="">
                        <p class="text_big">
                        '.$visit.'
                        </p> 
                      </div>
                    </div>

                  </li>
                  ');
                }


                ?>
            </ul>
            
          </div>
            
          <div class="blog_btn">
            <a href="blog.html"><p class="small_text blog_btn">Все публикации</p></a>
          </div>
        </div>
      </section>
      <!-- ------------------Четвертый слайд-------------- -->

      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/lightslider.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
<!-- 1 -->
