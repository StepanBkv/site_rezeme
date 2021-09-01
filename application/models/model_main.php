<?php

class Model_main extends Model{

   function __construct(){
        parent::__construct();
    }

   function get_data() {

	}
   public function menu_body_list_account(){
       if (isset($_SESSION['login']) and isset($_SESSION['password'])) {
         return '<li> <a href="account" class="menu__link account">Аккаунт</a> 
            <span class="menu__arrow"></span>
            <ul class="menu__sub-list">
               <li>
                  <a href="#"class="menu__sub-link exit">Выйти.</a>
               </li>
            </ul>
            </li>';
       }
         
       else
         return '<li><a href="login" class="menu__link autor">Авторизация</a> </li>';
   }
}