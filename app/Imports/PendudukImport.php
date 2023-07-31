<?php

namespace App\Imports;

use App\Models\Penduduk;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithHeadingRow;



class PendudukImport implements ToModel, WithHeadingRow, SkipsOnError
{
    use Importable, SkipsErrors;

    public function startRow(): int
    {
        return 2;
    }

 
    
    public function model(array $row)
    {
        return new Penduduk([
            'nama' => $row['nama'],
            'nik' => $row['nik'],
            'nohp' => $row['nohp'],
            'kelamin' => $row['kelamin'],
            'pendidikan' => $row['pendidikan'],
            'pekerjaan' => $row['pekerjaan'],
            'agama' => $row['agama'],
            'perkawinan' => $row['perkawinan'],
        ]);
    }

}
