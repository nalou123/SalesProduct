<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sales`.
 */
class m180524_071544_create_sales_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('sales', [
            'id' => $this->primaryKey(),
            'persons_id' => $this->integer()->notNull(),
            'products_id' => $this->integer()->notNull(),
            'quantity' => $this->integer()->notNull(),
            'date' => $this->date('DATE')

        ]);
        $this->createIndex(
            'idx-sales-persons_id',
            'sales','persons_id'
        );

        $this->addForeignKey(
            'fk-sales-persons',
            'sales','persons_id',
            'persons', 'id'
        );

        $this->createIndex(
            'idx-sales-products_id',
            'sales','products_id'
        );

        $this->addForeignKey(
            'fk-sales-products',
            'sales','products_id',
            'products', 'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-sales-persons', 'sales');
        $this->dropForeignKey('fk-sales-products', 'sales');
        $this->dropIndex('idx-sales-persons_id','sales');
        $this->dropIndex('idx-sales-products_id','sales');
        $this->dropTable('sales');
    }
}
