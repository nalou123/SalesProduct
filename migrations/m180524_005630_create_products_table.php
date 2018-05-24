<?php

use yii\db\Migration;

/**
 * Handles the creation of table `products`.
 */
class m180524_005630_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'brand_name' => $this->string(191)->notNull(),
            'description' => $this->string(255),
            'quantity' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('products');
    }
}
