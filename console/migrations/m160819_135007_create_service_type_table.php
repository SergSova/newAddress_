<?php

use yii\db\Migration;

/**
 * Handles the creation for table `service_type`.
 */
class m160819_135007_create_service_type_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%service_type}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(255)->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%service_type}}');
    }
}
