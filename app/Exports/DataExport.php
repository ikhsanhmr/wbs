<?php

namespace App\Exports;

use App\Models\Data;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class DataExport implements FromCollection, WithHeadings, WithMapping, WithEvents, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Data::all();
    }

    public function map($row): array{
        
        $no = 1;
        
        $fields = [
            $row->penjelasan,
            $row->laporan_kejadian,
            $row->waktu_kejadian,
            $row->lokasi_kejadian,
            $row->nama_terlapor,
            $row->status_terlapor,
            $row->nama_pihak_lain,
            $row->saksi,
            $row->status_saksi,
            $row->kronologi,
            $row->kerugian,
            $row->informasi
        ];
        return $fields;
    }

    public function headings(): array
    {
        return [
            'Penjelasan',
            'Laporan Kejadian',
            'Waktu Kejadian',
            'Lokasi Kejadian',
            'Nama Terlapor',
            'Status Terlapor',
            'Nama Pihak Lain',
            'saksi',
            'Status Saksi',
            'Kronologi',
            'Kerugian',
            'Informasi',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event){
                $event->sheet->getDelegate()->getColumnDimension('A')->setWidth(14);
                $event->sheet->getDelegate()->getColumnDimension('B')->setWidth(15);
                $event->sheet->getDelegate()->getColumnDimension('C')->setWidth(15);
                $event->sheet->getDelegate()->getColumnDimension('D')->setWidth(15);
                $event->sheet->getDelegate()->getColumnDimension('E')->setWidth(15);
                $event->sheet->getDelegate()->getColumnDimension('F')->setWidth(15);
                $event->sheet->getDelegate()->getColumnDimension('G')->setWidth(15);
                $event->sheet->getDelegate()->getColumnDimension('H')->setWidth(15);
                $event->sheet->getDelegate()->getColumnDimension('I')->setWidth(15);
                $event->sheet->getDelegate()->getColumnDimension('J')->setWidth(30);
                $event->sheet->getDelegate()->getColumnDimension('K')->setWidth(12);
                $event->sheet->getDelegate()->getColumnDimension('L')->setWidth(20);

                $event->sheet->getDelegate()->getStyle('A1:J1')
                                ->getAlignment()
                                ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            },
        ];
    }

    public function styles(Worksheet $sheet){
        return[
            1    => ['font' => ['bold' => true]],
        ];
    }
}
