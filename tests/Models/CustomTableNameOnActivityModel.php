<?php

namespace Powermu\Activitylog\Test\Models;

use Powermu\Activitylog\Models\Activity;

class CustomTableNameOnActivityModel extends Activity
{
    protected $table = 'custom_table_name';
}
