@component('mail::message')
    # Bulletin de Paie

    Bonjour

    Voici les détails de votre bulletin de paie :

    - **First_name:** {{$first_name}}
    - **Last_name:** {{$last_name}}
    - **Middle_name:** {{$middle_name}}
    - **Departement:** {{$departement}}
    - **Salary:** {{$salary}}

    **Note:** Vous pouvez télécharger votre bulletin de paie en cliquant sur le bouton ci-dessous.

    @component('mail::button', ['url' => '/bulletin/download/employee/3'  ,])
        Télécharger Bulletin de Paie
    @endcomponent


    Merci,
    L'équipe de paie

@endcomponent
