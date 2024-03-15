<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Excel;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Carbon\Carbon;
use Illuminate\Support\Collection;
class UsersExport implements FromCollection, Responsable
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;
    
    /**
    * It's required to define the fileName within
    * the export class when making use of Responsable.
    */
    private $fileName = 'invoices.xlsx';
    
    /**
    * Optional Writer Type
    */
    private $writerType = Excel::XLSX;
    
    /**
    * Optional headers
    */
    private $headers = [
        'Content-Type' => 'text/csv',
    ];
    public function collection()
    {
        $data = collect();
        $amountUsers2022 = [];
        $amountUsers2023 = [];

        $months = [];

        $currentYear = Carbon::now()->year;
        $lastYear = Carbon::now()->year - 1;

        for ($m=1; $m<=12; $m++) {
            $months[] = date('F', mktime(0,0,0,$m, 1, date('Y')));
        }

        for ($i = 1; $i <= 12; $i++) {
            $jan =User::whereYear('created_at',$currentYear)
            ->whereMonth('created_at', $i)
            ->get()->count();
            $amountUsers2022[$i] =$jan;


             // Add your custom values to the collection
        }
        for ($i = 1; $i <= 12; $i++) {
            $jan = User::whereYear('created_at', $lastYear)
            ->whereMonth('created_at', $i)
            ->get()->count();
            $amountUsers2023[$i] =$jan;


             // Add your custom values to the collection
        }

        
        $avarage2022 = array_sum($amountUsers2022)/12;

        $avarage2023 = array_sum($amountUsers2023)/12;

      
        $data->push(["Amount of created accounts in $currentYear"],[$months],[$amountUsers2022],["Avarage user account creation"],[$avarage2022],["Amount of created accounts in $lastYear"], [$currentYear],[$months],[$amountUsers2023], ["Avarage user account creation"],[$avarage2023], ["Ammount of accounts increase"], [(($avarage2023 - $avarage2022) / $avarage2022) * 100]);

       

        return $data;
    }
}
