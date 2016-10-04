<?php

    use yii\db\Migration;

    class m161004_055345_add_column_update_at_service_table extends Migration{
        public function up(){
            $this->addColumn('{{%service}}', 'create_at', $this->integer());
            $this->addColumn('{{%service}}', 'update_at', $this->integer());
        }

        public function down(){
            $this->dropColumn('{{service}}', 'create_at');
            $this->dropColumn('{{service}}', 'update_at');
        }
    }
