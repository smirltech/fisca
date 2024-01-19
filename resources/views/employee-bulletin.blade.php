<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulletin de paie</title>
    <script src="https://cdn.tailwindcss.com"></script>
{{--    @vite('resources/css/app.css')--}}
</head>
<body class="bg-gray-300 p-8">
<div class="max-w-3xl mx-auto bg-white p-8 shadow-md">
    <!-- Entête -->
    @if(! $download)
        <div class="">
            <a href="{{ route('index') }}" class="text-blue-500 font-bold">home</a>
        </div>
    @endif
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold">Bulletin de paie</h1>
        <p class="text-gray-500">SmirlTech</p>
    </div>

    <!-- Informations sur l'employé -->
    <div class="mb-6">

        <p class="text-sm text-gray-500">N° d'affiliation de l'Employeur à la Sécurité sociale: {{ $cnss->affiliation_number ?? 'CNSS 0000' }}</p>
        <p class="text-sm text-gray-500">Nom de l'employeur: SmilrTech </p>
        <p class="text-sm text-gray-500">Branche d'activité: Developpement de logiciel</p>
        <p class="text-sm text-gray-500">Feuille de paie du {{ now()->toDateString() }}</p>
    </div>

    <!-- Tableau des détails du salaire -->
    <table class="w-full border-collapse border border-gray-300 mb-6">
        <tbody>
        {{--<tr>
            <td class="border p-2">Salaire journalier</td>
            <td class="border p-2">26 jours</td>
            <td class="border p-2">{{ Number::currency($daily_salary) }}</td>
            <td class="border p-2">{{ Number::currency($monthly_salary) }}</td>
        </tr>--}}

        <tr>
            <th class=" p-2 bg-gray-200" colspan="3">Identification du Travailleur</th>
        </tr>

        <tr>
            <td class="border p-2">Numéro d'ordre</td>
            <td class="border p-2" colspan="2">{{ $employee->order_number ?? '0000' }}</td>
        </tr>
        <tr>
            <td class="border p-2">Nom et Prénoms du Travailleur</td>
            <td class="border p-2" colspan="2">{{ $full_name }}</td>
        </tr>
        <tr>
            <td class="border p-2">Emploi et Catégorie</td>
            <td class="border p-2" colspan="2">{{ $employee->categorie }}</td>
        </tr>
        <tr>
            <td class="border p-2">Numéro d'immatriculation à la sécurité sociale</td>
            <td class="border p-2" colspan="2">{{ $social_security_number }}</td>
        </tr>

        <tr>
            <th class=" p-2 bg-gray-200" colspan="3">Salaire de Base </th>
        </tr>

        <tr>
            <td class="border p-2" rowspan="3">Salaire</td>
            <td class="border p-2" >Jour, Heure, Mois</td>
            <td class="border p-2" >{{ $salary->hourly }}</td>
        </tr>
        <tr>
            <td class="border p-2" >Jour, heure payés à 100%</td>
            <td class="border p-2" >{{ $salary->numberOfHours }}</td>
        </tr>
        <tr>
            <td class="border p-2 font-bold" >Total du</td>
            <td class="border p-2 font-bold" >{{ $salary->total }}</td>
        </tr>

        <tr>
            <th class=" p-2 bg-gray-200" colspan="3">Rémunération de Base</th>
        </tr>

        <tr>
            <td class="border p-2" rowspan="3">Heures supplementaires</td>
            <td class="border p-2" >Nombre d'heures</td>
            <td class="border p-2" >{{ $overtimes->nbOfHours }}</td>
        </tr>
        <tr>
            <td class="border p-2" >Taux</td>
            <td class="border p-2" >{{ $overtimes->rate }}</td>
        </tr>
        <tr>
            <td class="border p-2 font-bold" >Total du</td>
            <td class="border p-2 font-bold" >{{ $overtimes->total }}</td>
        </tr>
        <tr>
            <th class=" p-2 bg-gray-200" colspan="3">Suppléments et Bonus</th>
        </tr>

        <tr>
            <td class="border p-2">Supplement du travail du samedi, du dimanche et jours feries</td>
            <td class="border p-2" colspan="2">{{ $supp_and_bonus->weekEnd }}</td>
        </tr>
        <tr>
            <td class="border p-2">Primes</td>
            <td class="border p-2" colspan="2">{{ $supp_and_bonus->primes }}</td>
        </tr>
        <tr>
            <td class="border p-2">Divers</td>
            <td class="border p-2" colspan="2">{{ $supp_and_bonus->divers }}</td>
        </tr>


        <tr>
            <th class=" p-2 bg-gray-200" colspan="3">Avantages et Absences</th>
        </tr>

        <tr>
            <td class="border p-2" rowspan="3">Congés payés</td>
            <td class="border p-2" >Jours</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2" >Taux</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2 font-bold" >Total du</td>
            <td class="border p-2 font-bold" > {{'$' . $total_salary }} </td>
        </tr>
        <tr>
            <td class="border p-2" rowspan="3">Maladie ou accident</td>
            <td class="border p-2" >Jours payés aux 2/3</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2" >Taux journalier</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2 font-bold" >Total du</td>
            <td class="border p-2 font-bold" ></td>
        </tr>

        <tr>
            <th class=" p-2 bg-gray-200" colspan="3">Total Brut du Salaire</th>

        <tr>
            <td class="border p-2 font-bold">Total brut du</td>
            <td class="border p-2" colspan="2"></td>
        </tr>

        <tr>
            <th class=" p-2 bg-gray-200" colspan="3">Déductions </th>

        <tr>
            <td class="border p-2" rowspan="5">Déductions</td>
            <td class="border p-2" >Pension</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2" >Indemnités Compensatrices</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2  " >Avances</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2  " >Divers</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2  " >Retenues fiscales</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2 font-bold " >Total des déductions</td>
            <td class="border p-2" colspan="2" ></td>
        </tr>

        <tr>
            <th class=" p-2 bg-gray-200" colspan="3">Allocations Familiales </th>
        </tr>

        <tr>
            <td class="border p-2" rowspan="4">Allocations Familiales</td>
            <td class="border p-2" >Nombre d'enfant bénéficiaire</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2" >Nombre de jours</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2  " >Taux Journalier</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2 font-bold " >Total à payer</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <th class=" p-2 bg-gray-200" colspan="3">Total Net à Payer </th>
        <tr>
            <td class="border p-2 font-bold " >Net a payer </td>
            <td class="border p-2" colspan="2"></td>
        </tr>
        <tr>
            <th class=" p-2 bg-gray-200" colspan="3">Montant des cotisations INSS</th>
        <tr>
        <tr>
            <td class="border p-2 font-bold " >Montant pris en consideration pour le calcul des cotisitions INSS </td>
        </tr>
        <tr>
            <th class=" p-2 bg-gray-200" colspan="3">Observations</th>
        <tr>
        <tr>
            <td class="border p-2 font-bold " >Observations</td>
            <td class="border p-2" colspan="2"></td>
        </tr>
        </tbody>
    </table>
    @if(! $download)
        <div class="flex justify-end">
            <a href="{{ route('bulletin.download', ['employee_id' => $employee->id]) }}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Download
                </button>
            </a>
        </div>
    @endif

    <!-- Pied de page -->
    <div class="text-gray-500 text-xs">
        <p>© {{ now()->year }} SmirlTech</p>
    </div>


</div>
</body>
</html>
