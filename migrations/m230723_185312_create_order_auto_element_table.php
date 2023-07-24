<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_auto_element}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%order}}`
 * - `{{%auto_element}}`
 */
class m230723_185312_create_order_auto_element_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_auto_element}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer()->notNull(),
            'auto_element_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `order_id`
        $this->createIndex(
            '{{%idx-order_auto_element-order_id}}',
            '{{%order_auto_element}}',
            'order_id'
        );

        // add foreign key for table `{{%order}}`
        $this->addForeignKey(
            '{{%fk-order_auto_element-order_id}}',
            '{{%order_auto_element}}',
            'order_id',
            '{{%order}}',
            'id',
            'CASCADE'
        );

        // creates index for column `auto_element_id`
        $this->createIndex(
            '{{%idx-order_auto_element-auto_element_id}}',
            '{{%order_auto_element}}',
            'auto_element_id'
        );

        // add foreign key for table `{{%auto_element}}`
        $this->addForeignKey(
            '{{%fk-order_auto_element-auto_element_id}}',
            '{{%order_auto_element}}',
            'auto_element_id',
            '{{%auto_element}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%order}}`
        $this->dropForeignKey(
            '{{%fk-order_auto_element-order_id}}',
            '{{%order_auto_element}}'
        );

        // drops index for column `order_id`
        $this->dropIndex(
            '{{%idx-order_auto_element-order_id}}',
            '{{%order_auto_element}}'
        );

        // drops foreign key for table `{{%auto_element}}`
        $this->dropForeignKey(
            '{{%fk-order_auto_element-auto_element_id}}',
            '{{%order_auto_element}}'
        );

        // drops index for column `auto_element_id`
        $this->dropIndex(
            '{{%idx-order_auto_element-auto_element_id}}',
            '{{%order_auto_element}}'
        );

        $this->dropTable('{{%order_auto_element}}');
    }
}
