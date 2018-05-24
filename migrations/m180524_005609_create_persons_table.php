<?php

use yii\db\Migration;

/**
 * Handles the creation of table `persons`.
 */
class m180524_005609_create_persons_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('persons', [
            'id' => $this->primaryKey(),
            'last_name' => $this->string(100)->notNull(),
            'first_name' => $this->string(100)->notNull(),
            'age' => $this->string(99),
            'address' => $this->string(100)->notNull(),
            'phone' => $this->string(12)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('persons');
    }
}


