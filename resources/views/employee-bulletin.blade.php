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

        <p class="text-sm text-gray-500">N° d'affiliation de l'Employeur à la Sécurité sociale: </p>
        <p class="text-sm text-gray-500">Nom de l'employeur: </p>
        <p class="text-sm text-gray-500">Branche d'activité: </p>
        <p class="text-sm text-gray-500">Feuille de paie du </p>
    </div>

    <!-- Tableau des détails du salaire -->
    <table class="w-full border-collapse border border-gray-300 mb-6">
        <thead>
        <tr class="bg-gray-200">
            <th class="border p-2">Description</th>
            <th class="border p-2">Quantité</th>
            <th class="border p-2">Montant</th>
        </tr>
        </thead>
        <tbody>
        {{--<tr>
            <td class="border p-2">Salaire journalier</td>
            <td class="border p-2">26 jours</td>
            <td class="border p-2">{{ Number::currency($daily_salary) }}</td>
            <td class="border p-2">{{ Number::currency($monthly_salary) }}</td>
        </tr>--}}

        <tr>
            <td class="border p-2">Numero d'ordre</td>
            <td class="border p-2"></td>
            <td class="border p-2"></td>
        </tr>
        <tr>
            <td class="border p-2">Nom et Prenoms du Travailleur</td>
            <td class="border p-2"></td>
            <td class="border p-2"></td>
        </tr>
        <tr>
            <td class="border p-2">Emploi et Categorie</td>
            <td class="border p-2"></td>
            <td class="border p-2"></td>
        </tr>
        <tr>
            <td class="border p-2">Numero d'immatriculation a la securite socaial</td>
            <td class="border p-2"></td>
            <td class="border p-2"></td>
        </tr>
        <tr>
            <td class="border p-2" rowspan="3">Salaire</td>
            <td class="border p-2" >Taux,Jour, heure, mois</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2" >Jour, heure payes a 100 %</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2 font-bold" >Total du</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2" rowspan="3">Heures supplementaires</td>
            <td class="border p-2" >Nombre d'heure</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2" >Taux</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2 font-bold" >Total du</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2">Supplement du travail du samedi, du dimanche et jours feries</td>
            <td class="border p-2"></td>
            <td class="border p-2"></td>
        </tr>
        <tr>
            <td class="border p-2">Primes</td>
            <td class="border p-2"></td>
            <td class="border p-2"></td>
        </tr>
        <tr>
            <td class="border p-2">Divers</td>
            <td class="border p-2"></td>
            <td class="border p-2"></td>
        </tr>
        <tr>
            <td class="border p-2" rowspan="3">Conges payes</td>
            <td class="border p-2" >Jours</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2" >Taux</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2 font-bold" >Total du</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2" rowspan="3">Maladie ou accident</td>
            <td class="border p-2" >Jours paayes aux 2/3</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2" >Taux journalier</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2 font-bold" >Total du 20 Total</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2 font-bold">Total brut du</td>
            <td class="border p-2" ></td>
            <td class="border p-2"></td>
        </tr>
        <tr>
            <td class="border p-2" rowspan="5">Deduction</td>
            <td class="border p-2" >Pension</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2" >Indemnites Compensatrices</td>
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
            <td class="border p-2 font-bold " >Total des deductions</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2" rowspan="4">Allocations familiales</td>
            <td class="border p-2" >Nombre d'enfant beneficiaire</td>
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
            <td class="border p-2 font-bold " >Total a payer</td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2 font-bold " >Net a payer </td>
            <td class="border p-2" ></td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2 font-bold " >Montant pris en consideration pour le calcul des cotisitions INSS </td>
            <td class="border p-2" ></td>
            <td class="border p-2" ></td>
        </tr>
        <tr>
            <td class="border p-2 font-bold " >Observations</td>
            <td class="border p-2" ></td>
            <td class="border p-2" ></td>
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
