<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Task extends Model
{
    use HasFactory;
    use Sortable;

    protected $guarded = [];

    public $timestaps = true;

    public $primaryKey = 'id';

    public $sortable = ['id', 'name','idPosition','idDepartment','kpiValue', 'mandayValue', 'idParentTask'];
}
