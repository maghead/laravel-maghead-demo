<?php

namespace App\Model;

use Maghead\Schema\RuntimeSchema;
use Maghead\Schema\RuntimeColumn;
use Maghead\Schema\Relationship\Relationship;
use Maghead\Schema\Relationship\HasOne;
use Maghead\Schema\Relationship\HasMany;
use Maghead\Schema\Relationship\BelongsTo;
use Maghead\Schema\Relationship\ManyToMany;

class TodoSchemaProxy extends RuntimeSchema
{
    const SCHEMA_CLASS = 'App\\Model\\TodoSchema';

    const LABEL = 'Todo';

    const MODEL_NAME = 'Todo';

    const MODEL_NAMESPACE = 'App\\Model';

    const MODEL_CLASS = 'App\\Model\\Todo';

    const REPO_CLASS = 'App\\Model\\TodoRepoBase';

    const COLLECTION_CLASS = 'App\\Model\\TodoCollection';

    const TABLE = 'todos';

    const PRIMARY_KEY = 'id';

    const GLOBAL_PRIMARY_KEY = null;

    const LOCAL_PRIMARY_KEY = 'id';

    public static $column_hash = array(
      'id' => 1,
      'title' => 1,
      'done' => 1,
    );

    public static $mixin_classes = array(
    );

    public $columnNames = array(
      0 => 'id',
      1 => 'title',
      2 => 'done',
    );

    public $primaryKey = 'id';

    public $columnNamesIncludeVirtual = array(
      0 => 'id',
      1 => 'title',
      2 => 'done',
    );

    public $label = 'Todo';

    public $readSourceId = 'master';

    public $writeSourceId = 'master';

    public $relations;

    public function __construct()
    {
        $this->columns[ 'id' ] = new RuntimeColumn('id', array(
      'locales' => null,
      'attributes' => array(
          'autoIncrement' => true,
          'renderAs' => 'HiddenInput',
          'widgetAttributes' => array(
            ),
        ),
      'name' => 'id',
      'primary' => true,
      'unsigned' => true,
      'type' => 'int',
      'isa' => 'int',
      'notNull' => true,
      'enum' => null,
      'set' => null,
      'onUpdate' => null,
      'autoIncrement' => true,
      'renderAs' => 'HiddenInput',
      'widgetAttributes' => array(
        ),
    ));
        $this->columns[ 'title' ] = new RuntimeColumn('title', array(
      'locales' => null,
      'attributes' => array(
          'length' => 80,
          'label' => 'Todo',
        ),
      'name' => 'title',
      'primary' => null,
      'unsigned' => null,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => null,
      'enum' => null,
      'set' => null,
      'onUpdate' => null,
      'length' => 80,
      'label' => 'Todo',
    ));
        $this->columns[ 'done' ] = new RuntimeColumn('done', array(
      'locales' => null,
      'attributes' => array(
          'label' => 'Done',
          'default' => false,
        ),
      'name' => 'done',
      'primary' => null,
      'unsigned' => null,
      'type' => 'boolean',
      'isa' => 'bool',
      'notNull' => null,
      'enum' => null,
      'set' => null,
      'onUpdate' => null,
      'label' => 'Done',
      'default' => false,
    ));
    }
}
