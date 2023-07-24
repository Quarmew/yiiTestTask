<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%auto_class}}`.
 */
class m230723_182621_create_auto_class_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%auto_class}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'coefficient' => $this->integer()
        ]);
        $this->batchInsert('{{%auto_class}}', ['name','coefficient'], [['Малый класс','0'], ['Средний класс','1'],['Большой класс','3']]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%auto_class}}');
    }
}