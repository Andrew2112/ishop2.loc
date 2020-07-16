<?php
namespace app\controllers;

use ishop\Cache;

class MainController extends AppController
{

        public function indexAction(){
            //создаюм переменную, которая будет принимать из БД
            $brands=\R::find('brand', 'LIMIT 4');
            //переменная $hits для вывода на экран хитовой продукции
            $hits=\R::find('product', "hit='1' AND status='1' LIMIT 8");
            $this->setMeta('Главная', 'Описание...', 'Ключевики');
            $this->set(compact('brands', 'hits'));


    }
}