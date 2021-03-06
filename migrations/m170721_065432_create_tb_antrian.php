<?php

use yii\db\Migration;

class m170721_065432_create_tb_antrian extends Migration
{
    const tb_name = 'tb_antrian';

    public function safeUp()
    {
        $this->createTable($this::tb_name,[
            'id_antrian' => $this->primaryKey(),
            'no_antrian' => $this->bigInteger()->notNull()->defaultValue(0),
            'tgl_antrian' => $this->dateTime()
        
        ]);   
    }

    public function safeDown()
    {
        $this->dropTable($this::tb_name);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170721_065432_create_tb_antrian cannot be reverted.\n";

        return false;
    }
    */
}
