var catalog_btn_1 = document.getElementById('catalog_btn_1');
var catalog_btn_2 = document.getElementById('catalog_btn_2');
var catalog_btn_3 = document.getElementById('catalog_btn_3');
var catalog_btn_4 = document.getElementById('catalog_btn_4');


catalog_btn_1.onclick = change_catalog_active_btn_1;
catalog_btn_2.onclick = change_catalog_active_btn_2;
catalog_btn_3.onclick = change_catalog_active_btn_3;
catalog_btn_4.onclick = change_catalog_active_btn_4;

function change_catalog_active_btn_1()
{
      document.getElementById('catalog_btn_1').classList.add('catalog_btn_active');
      document.getElementById('catalog_btn_2').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_3').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_4').classList.remove('catalog_btn_active');
      show_all();
}
function change_catalog_active_btn_2()
{
      document.getElementById('catalog_btn_1').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_2').classList.add('catalog_btn_active');
      document.getElementById('catalog_btn_3').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_4').classList.remove('catalog_btn_active');
      show_new();
}
function change_catalog_active_btn_3()
{
      document.getElementById('catalog_btn_1').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_2').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_3').classList.add('catalog_btn_active');
      document.getElementById('catalog_btn_4').classList.remove('catalog_btn_active');
      show_best_com();
}

function change_catalog_active_btn_4()
{
      document.getElementById('catalog_btn_1').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_2').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_3').classList.remove('catalog_btn_active');
      document.getElementById('catalog_btn_4').classList.add('catalog_btn_active');
      show_best_all();
}

function show_all(){
      document.getElementById('new').style.display = "block";
      document.getElementById('best_com').style.display = "block";
      document.getElementById('best_all').style.display = "block";
}

function show_new(){
      document.getElementById('new').style.display = "block";
      document.getElementById('best_com').style.display = "none";
      document.getElementById('best_all').style.display = "none";
}
function show_best_com(){
      document.getElementById('new').style.display = "none";
      document.getElementById('best_com').style.display = "block";
      document.getElementById('best_all').style.display = "none";
}
function show_best_all(){
      document.getElementById('new').style.display = "none";
      document.getElementById('best_com').style.display = "none";
      document.getElementById('best_all').style.display = "block";
}
function show(state)
{
      document.getElementById('window_reg_auth').style.display = state;
      document.getElementById('gray_mask').style.display = state;
}

function show_auth(state)
{
      document.getElementById('window_auth_reg').style.display = state;
      document.getElementById('gray_mask').style.display = state;
}

function show_laptop_menu(state)
{
      document.getElementById('header_laptop_menu').style.display = state;
      document.getElementById('gray_mask').style.display = state;
}



jQuery(document).ready(function($) {
      $('#review_scroll_new').lightSlider({
            //auto:true,
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('#review_scroll_new').removeClass('cS-hidden');
            }
        });

});
jQuery(document).ready(function($) {
      $('#review_scroll_best_com').lightSlider({
            //auto:true,
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                  $('#review_scroll_best_com').removeClass('cS-hidden');
            }
      });

});

jQuery(document).ready(function($) {
      $('#review_scroll_best_all').lightSlider({
            //auto:true,
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                  $('#review_scroll_best_all').removeClass('cS-hidden');
            }
      });

});


jQuery(document).ready(function($) {
      $('#autoWidth').lightSlider({

            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('#autoWidth').removeClass('cS-hidden');
            }
        });

});


jQuery(document).ready(function($) {
      $('#laptop_scroll').lightSlider({
            auto:true,
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('#laptop_scroll').removeClass('cS-hidden');
            }
        });

});

function auth_user(){
       document.getElementById('auth_login').style.background = "rgb(255, 255, 255)";
       document.getElementById('auth_password').style.background = "rgb(255, 255, 255)";
    document.getElementById('error_login_auth').style.display = "none";
    document.getElementById('error_password_auth').style.display = "none";
       var login = document.getElementById('auth_login').value.trim();
       var password = document.getElementById('auth_password').value.trim();
       if(login == ""){
             document.getElementById('auth_login').style.background = "rgb(255, 199, 199)";
           document.getElementById('error_login_auth').style.display = "block";
           document.getElementById('error_login_auth').textContent = "Данное поле обязательно для заполнения";
       }
       if(password == ""){
             document.getElementById('auth_password').style.background = "rgb(255, 199, 199)";
           document.getElementById('error_password_auth').style.display = "block";
           document.getElementById('error_password_auth').textContent = "Данное поле обязательно для заполнения";
       }else{
             $.ajax({
                   url: '/authUsers.php',
                   type: 'POST',
                   dataType: 'json',
                   data: {
                         login: login,
                         pass: password
                   },
                   success(data) {
                         if (data['status']) {
                                window.location.href = 'account.php';
                               //console.log("Успех авторизации") ;
                         }
                         if (!data['status']) {
                             //console.log("Ошибка авторизации");
                             document.getElementById('auth_login').style.background = "rgb(255, 199, 199)";
                             document.getElementById('error_login_auth').style.display = "block";
                             document.getElementById('error_login_auth').textContent = "Неверный логин или пароль";
                             document.getElementById('auth_password').style.background = "rgb(255, 199, 199)";
                         }
                   }
             });
       }
}
function out_user(){
    $.ajax({

        url: '/out_user.php',
        type: 'POST'
        ,
        success(data) {

            window.location.href = 'index.php';
        }
    });
}
function reg_user() {
       document.getElementById('reg_login').style.background = "rgb(255, 255, 255)";
       document.getElementById('reg_nick').style.background = "rgb(255, 255, 255)";
       document.getElementById('reg_mail').style.background = "rgb(255, 255, 255)";
       document.getElementById('reg_pass_1').style.background = "rgb(255, 255, 255)";
       document.getElementById('reg_pass_2').style.background = "rgb(255, 255, 255)";
       document.getElementById('reg_phone').style.background = "rgb(255, 255, 255)";
        document.getElementById('error_login').style.display = "none";
        document.getElementById('error_nick').style.display = "none";
        document.getElementById('error_mail').style.display = "none";
        document.getElementById('error_pass').style.display = "none";


       var login = document.getElementById('reg_login').value.trim();
       var nick = document.getElementById('reg_nick').value.trim();
       var mail = document.getElementById('reg_mail').value.trim();
       var pass_1 = document.getElementById('reg_pass_1').value.trim();
       var pass_2 = document.getElementById('reg_pass_2').value.trim();
       var phone = document.getElementById('reg_phone').value.trim();
       var chbox = document.getElementById('reg_chbox');


       var re = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
       var cheked_mail = mail;
       var valid = re.test(cheked_mail);
       var phone_dispatch = "-";
       if (chbox.checked) {
             if (valid && login !== "" && nick !== "" &&
                 pass_1 == pass_2 && pass_1 !== "") {
                   if (phone !== "") {
                       phone_dispatch = phone;
                   }
                   $.ajax({

                        url: '/regUser.php',
                         type: 'POST',
                        dataType: 'json',
                         data: {
                              login: login,
                               nick: nick,
                               mail: mail,
                              pass: pass_1,
                               phone: phone_dispatch
                         },
                        success(data) {
                              if (data['status']) {
                                     console.log("Пользователь успешно добавлен");
                                   // console.log(data['info']);
                                  window.location.href = 'account.php';
                              }
                               if (!data['status']) {
                                   //console.log("Ошибка регистрации");
                                   document.getElementById('reg_login').style.background = "rgb(255, 199, 199)";
                                   document.getElementById('error_login').style.display = "block";
                                   document.getElementById('error_login').textContent = "Данный логин возможно занят";
                                   document.getElementById('reg_mail').style.background = "rgb(255, 199, 199)";
                                   document.getElementById('error_mail').style.display = "block";
                                   document.getElementById('error_mail').textContent = "Данная почта возможно занята";
                               }
                         }
                   });
             }
             else{
                 if (login == "") {
                     document.getElementById('reg_login').style.background = "rgb(255, 199, 199)";
                     document.getElementById('error_login').style.display = "block";
                     document.getElementById('error_login').textContent = "Данное поле обязательно для заполнения";
                 }
                 if (nick == "") {
                     document.getElementById('reg_nick').style.background = "rgb(255, 199, 199)";
                     document.getElementById('error_nick').style.display = "block";
                     document.getElementById('error_nick').textContent = "Данное поле обязательно для заполнения";
                 }
                 if (!valid) {
                     document.getElementById('reg_mail').style.background = "rgb(255, 199, 199)";
                     document.getElementById('error_mail').style.display = "block";
                     document.getElementById('error_mail').textContent = "Образец почты: sample@mail.ru";
                 }
                 if (pass_1 !== pass_2 || (pass_1 == "" || pass_1 == "")) {
                     document.getElementById('reg_pass_1').style.background = "rgb(255, 199, 199)";
                     document.getElementById('reg_pass_2').style.background = "rgb(255, 199, 199)";
                     document.getElementById('error_pass').style.display = "block";
                     document.getElementById('error_pass').textContent = "Пароли не совпадают";
                 }

             }
       }
}

