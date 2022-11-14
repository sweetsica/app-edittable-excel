<?php

namespace App\Imports;

use App\Models\Task;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TaskImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Task([
            'id'              => $row[0],
            'name'            => $row[1],
            'description'     => $row[2],
            'idPosition'      => $row[3],
            'idDepartment'    => $row[4],
            'kpiValue'        => $row[5],
            'mandayValue'     => $row[6],
            'idParentTask'    => $row[7],
            'status'          => $row[8],
            'code'            => $row[9],
        ]);
    }
//    public function headingRow(): int
//    {
//        return 1;
//    }
}
