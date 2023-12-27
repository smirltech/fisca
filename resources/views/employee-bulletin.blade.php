<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulletin de paie</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-3xl mx-auto bg-white p-8 shadow-md">
    <!-- Entête -->
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold">Bulletin de paie</h1>
        <p class="text-gray-500">Entreprise XYZ</p>
    </div>

    <!-- Informations sur l'employé -->
    <div class="mb-6">
        <p class="font-bold">Nom de l'employé: John Doe</p>
        <p class="text-sm text-gray-500">Poste: Développeur Web</p>
    </div>

    <!-- Tableau des détails du salaire -->
    <table class="w-full border-collapse border border-gray-300 mb-6">
        <thead>
        <tr class="bg-gray-200">
            <th class="border p-2">Description</th>
            <th class="border p-2">Quantité</th>
            <th class="border p-2">Taux</th>
            <th class="border p-2">Montant</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="border p-2">Salaire journalier</td>
            <td class="border p-2">20 jours</td>
            <td class="border p-2">$100</td>
            <td class="border p-2">$2000</td>
        </tr>
        <tr>
            <td class="border p-2">Salaire horaire</td>
            <td class="border p-2">160 heures</td>
            <td class="border p-2">$15</td>
            <td class="border p-2">$2400</td>
        </tr>
        <!-- Ajoutez d'autres lignes pour les heures supplémentaires, etc. -->
        <tr class="font-bold">
            <td class="border p-2" colspan="3">Salaire total</td>
            <td class="border p-2">$4400</td>
        </tr>
        </tbody>
    </table>

    <!-- Pied de page -->
    <div class="text-gray-500 text-xs">
        <p>© 2023 Entreprise XYZ</p>
    </div>
</div>
</body>
</html>
