<?php
namespace app\models;
use yii\db\ActiveRecord;
class OrderAutoElement extends ActiveRecord{
    public static function tableName(){
        return 'order_auto_element';
    }
}