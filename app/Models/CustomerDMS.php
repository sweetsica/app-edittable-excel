<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class CustomerDMS extends Model
{
    use HasFactory;
    use Sortable;

    protected $guarded = [];
    protected $table = 'customer_d_m_s';
    public $timestaps = true;

    public $primaryKey = 'id';

    public $sortable = ['id', 'ma_khach_hang', 'khach_hang','sdt', 'kenh', 'dia_chi',];
}
