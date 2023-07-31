<?php

namespace App\Exports;

use App\Models\Penduduk;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendudukExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penduduk::select('nama','nik', 'nohp', 'kelamin', 'pendidikan','pekerjaan','agama','perkawinan')->get();
    }

    public function headings(): array{
        return ["NAMA","NIK", "NOHP", "KELAMIN", "PENDIDIKAN", "PEKERJAAN", "AGAMA", "PERKAWINAN"];
    }

}
