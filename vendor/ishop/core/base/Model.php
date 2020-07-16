<?php
namespace ishop\base;
//класс модели отвечает за работу с данными, в первую очередь с базой данных

use ishop\Db;
use Valitron\Validator;

abstract class Model
{//будет хранится массив свойств модели
    public $attributes=[];
    //складываем туда ошибки
    public $errors=[];
//для правил валидации данных
    public $rules=[];

    public function __construct(){
        Db::instance();
    }

    public function load($data){
        foreach($this->attributes as $name => $value){
            if(isset($data[$name])){
                $this->attributes[$name] = $data[$name];
            }
        }
    }

    public function save($table, $valid=true){
        if ($valid){
            $tbl = \R::dispense($table);
        }else{
            $tbl = \R::xdispense($table);
        }

        foreach($this->attributes as $name => $value){
            $tbl->$name = $value;
        }
        return \R::store($tbl);
    }

    public function update($table, $id){
        $bean = \R::load($table, $id);
        foreach($this->attributes as $name => $value){
            $bean->$name = $value;
        }
        return \R::store($bean);
    }

    public function validate($data){
        //Validator::langDir(WWW . '/../vendor/valitron/lang');
        Validator::lang('ru');
        $v = new Validator($data);
        $v->rules($this->rules);
        if($v->validate()){
            return true;
        }
        $this->errors = $v->errors();
        return false;
    }

    public function getErrors(){
        $errors = '<ul>';
        foreach($this->errors as $error){
            foreach($error as $item){
                $errors .= "<li>$item</li>";
            }
        }
        $errors .= '</ul>';
        $_SESSION['error'] = $errors;
    }


}