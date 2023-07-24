<?php
namespace app\models;
use yii\db\ActiveRecord;
class AutoElement extends ActiveRecord{
    public static function tableName(){
        return 'auto_element';
    }
}