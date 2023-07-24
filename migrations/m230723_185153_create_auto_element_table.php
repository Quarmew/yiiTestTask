<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%auto_element}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%auto_class}}`
 */
class m230723_185153_create_auto_element_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%auto_element}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'default_price' => $this->integer(),
        ]);
        $this->batchInsert('{{%auto_element}}', ['name','default_price'], [['Дверь передняя','8316'],['Переднее крыло','6804'],['Задняя дверь','7938'],['Передний бампер','8200'],['Капот','8748'],['Крыша','9990'],['Крыло заднее','7182'],['Бампер задний','7776'],['Порог','6426'],['Крышка багажника','8494'],['Зеркало','1080']]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%auto_class}}`
        $this->dropForeignKey(
            '{{%fk-auto_element-auto_class_id}}',
            '{{%auto_element}}'
        );

        // drops index for column `auto_class_id`
        $this->dropIndex(
            '{{%idx-auto_element-auto_class_id}}',
            '{{%auto_element}}'
        );

        $this->dropTable('{{%auto_element}}');
    }
}
