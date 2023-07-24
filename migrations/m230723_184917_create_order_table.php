<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m230723_184917_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'tel' => $this->string(12),
            'mark' => $this->string(),
            'year' => $this->string(4),
            'auto_class_id' => $this->integer()->notNull()
        ]);
        $this->createIndex(
            '{{%idx-order-auto_class_id}}',
            '{{%order}}',
            'auto_class_id'
        );

        // add foreign key for table `{{%order}}`
        $this->addForeignKey(
            '{{%fk-order-auto_class_id}}',
            '{{%order}}',
            'auto_class_id',
            '{{%auto_class}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order}}');
    }
}