<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Human extends Model
{
    use HasFactory;
    use Sortable;

    protected $guarded = [];

    public $timestaps = true;

    public $primaryKey = 'id';

    public $sortable = ['id', 'surName','code','idTitle','idPosition', 'phone', 'emailAccount', 'idDepartment',];
}
