<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace DungDt\Faq\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        /**
         * Create table 'greeting_message'
         */
        $table = $setup->getConnection()
            ->newTable($setup->getTable('faqs'))
            ->addColumn(
                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Faq ID'
            )
            ->addColumn(
                'question',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, null ,
                ['nullable' => false, 'default' => ''],
                'Question'
            )->addColumn(
                'answer',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, null ,
                ['nullable' => false, 'default' => ''],
                'Answer'
            )->addColumn(
                'author',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255 ,
                ['nullable' => false, 'default' => ''],
                'Author'
            )->addColumn(
                'position',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null ,
                ['nullable' => false, 'default' => '0'],
                'Position'
            )->setComment("Greeting Faq table");
        $setup->getConnection()->createTable($table);
    }
}