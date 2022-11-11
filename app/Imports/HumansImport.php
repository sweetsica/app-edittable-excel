<?php

namespace App\Imports;

use App\Models\Human;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class HumansImport implements ToModel,WithHeadingRow, SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
//        dd($row);
        $row['ngay_sinh'] = ($row['ngay_sinh'] == '') ? '0' : $row['ngay_sinh'];
        $row['ngay_thu_viec'] = ($row['ngay_thu_viec'] == '') ? '0' : $row['ngay_thu_viec'];
        $row['ngay_chinh_thuc'] = ($row['ngay_chinh_thuc'] == '') ? '0' : $row['ngay_chinh_thuc'];
        $row['ngay_nghi_viec'] = ($row['ngay_nghi_viec'] == '') ? '0' : $row['ngay_nghi_viec'];


        return new Human([
            'id'            => $row['stt'],
            'fullName'      => $row['ho_va_dem'],
            'name'          => $row['ten'],
            'surName'       => $row['ho_va_ten'],
            'phone'         => $row['sdt_lien_he'],
            'email'         => $row['email_lien_he'],
            'dateOfBirth'   => Date::excelToDateTimeObject($row['ngay_sinh'])->format('d/m/Y'),
            'sex'           => $row['gioi_tinh'],
            'address'       => $row['dia_chi'],
            'isUser'        => $row['la_nguoi_dung'],
            'emailAccount'  => $row['email_tai_khoan'],
            'statusUser'    => $row['trang_thai_nguoi_dung'],
            'statusCompany' => $row['la_nhan_vien_cong_ty'],
            'code'          => $row['ma_nhan_vien'],
            'emailCompany'  => $row['email_cong_ty'],
            'idDepartment'  => $row['don_vi_cong_tac'],
            'idPosition'    => $row['vi_tri_cong_viec'],
            'idTitle'       => $row['chuc_danh'],
            'idManager'     => $row['quan_ly_truc_tiep'],
            'joinTestDate'  => Date::excelToDateTimeObject($row['ngay_thu_viec'])->format('d/m/Y'),
            'joinDate'      => Date::excelToDateTimeObject($row['ngay_chinh_thuc'])->format('d/m/Y'),
            'statusWork'    => $row['trang_thai_lao_dong'],
            'leaveDate'     => Date::excelToDateTimeObject($row['ngay_nghi_viec'])->format('d/m/Y'),
        ]);
    }
    public function headingRow(): int
    {
        return 4;
    }
}
