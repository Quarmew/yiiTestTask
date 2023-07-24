<?php
namespace app\models;
use yii\db\ActiveRecord;
class AutoClass extends ActiveRecord{
    public static function tableName(){
        return 'auto_class';
    }
}