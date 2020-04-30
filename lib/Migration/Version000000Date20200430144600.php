<?php

  namespace OCA\grafanadelamor\Migration;

  use Closure;
  use OCP\DB\ISchemaWrapper;
  use OCP\Migration\SimpleMigrationStep;
  use OCP\Migration\IOutput;

  class Version1400Date20181013124731 extends SimpleMigrationStep {

    /**
    * @param IOutput $output
    * @param Closure $schemaClosure The `\Closure` returns a `ISchemaWrapper`
    * @param array $options
    * @return null|ISchemaWrapper
    */
    public function changeSchema(IOutput $output, Closure $schemaClosure, array $options) {
        /** @var ISchemaWrapper $schema */
        $schema = $schemaClosure();

        if (!$schema->hasTable('grafanadelamor')) {
            $table = $schema->createTable('grafanadelamor');
            $table->addColumn('id', 'integer', [
                'autoincrement' => true,
                'notnull' => true,
            ]);
            $table->addColumn('title', 'string', [
                'notnull' => true,
                'length' => 200
            ]);
            $table->addColumn('user_id', 'string', [
                'notnull' => true,
                'length' => 200,
            ]);
            $table->addColumn('content', 'text', [
                'notnull' => true,
                'default' => ''
            ]);

            $table->setPrimaryKey(['id']);
            $table->addIndex(['user_id'], 'grafanadelamor_user_id_index');
        }
        return $schema;
    }
}