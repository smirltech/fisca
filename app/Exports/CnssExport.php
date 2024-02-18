<?php

namespace App\Exports;

use DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CnssExport implements FromCollection, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {

        return DB::table('employees')
            ->leftJoin('cnss_data', 'cnss_data.employee_id', '=', 'employees.id')
            ->select('employees.matriculate', 'cnss_data.social_security_number', 'employees.first_name', 'employees.middle_name', 'employees.last_name', 'employees.middle_name', 'cnss_data.type_of_worker', 'employees.address', 'cnss_data.contributed_period', 'cnss_data.contributed_amount', 'cnss_data.number_of_workdays', 'cnss_data.gross_taxable_amount', '0')
            ->get();
    }

    public function headings(): array
    {
        return [
            'Matricule',
            'Numéro de sécurité sociale',
            'Nom',
            'Prénom',
            'Nom',
            'Prénom',
            'Type de travailleur',
            'Adresse',
            'Période cotisée',
            'Montant cotisé',
            'Nombre de jours travaillés',
            'Montant brut imposable',
            'indemnite de transport',
        ];
    }
}
