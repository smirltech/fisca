<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bulletin de paie</title>
    @vite(['/resources/css/app.css'])
</head>
<body class="bg-red-500">
    <div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div class="flex mb-4">
            <h2 class="text-2xl font-semibold leading-tight">Bulletin de paie</h2>
        </div>
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full leading-normal">
                <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Nom complet
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Salaire mensuel
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Salaire quotidien
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Salaire horaire
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Heures supplémentaires
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Salaire des heures supplémentaires
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Salaire total
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $full_name }}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $monthly_salary }}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $daily_salary }}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $hourly_salary }}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $total_hours_of_overtime_of_this_month }}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $overtime_salary }}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $total_salary }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
