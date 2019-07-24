<?php
use Migrations\AbstractMigration;

class CreateTestTabe extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
	$table = $this->table('test');
        $table->addColumn('name', 'string', [
            'null' => false
        ]);
        $table->addColumn('amount', 'integer', [
            'null' => true,
            'default' => 0
        ]);
        $table->addColumn('price', 'float', [
            'null' => true,
            'default' => 0
        ]);
        $table->addColumn('sell_count', 'integer', [
            'null' => true,
            'default' => 0
        ]);
        $table->addColumn('sum', 'float', [
            'null' => true,
            'default' => 0
        ]);

        $table->create();

    }
}
