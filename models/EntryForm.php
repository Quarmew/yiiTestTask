<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $tel;
    public $mark;
    public $year;

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'tel' => 'Телефон',
            'mark' => 'Марка и модель',
            'year' => 'Год выпуска'
        ];
    }
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'tel', 'mark', 'year'], 'required', 'message' => 'Поле обязательно для заполнения'],
            ['tel', 'string', 'length' => [11, 11]]
        ];
    }

}