<?php

    use yii\db\Migration;

    class m161202_121255_alter_realty_table extends Migration{
        public function up(){
            $tableName = '{{%realty}}';
            $this->addColumn($tableName, 'seo_title', 'string');
            $this->addColumn($tableName, 'seo_keywords', 'string');
            $this->addColumn($tableName, 'seo_description', 'string');
            $this->addColumn($tableName, 'seo_header', 'string');
        }

        public function down(){
            echo "m161202_121255_alter_realty_table cannot be reverted.\n";

            return false;
        }
    }
