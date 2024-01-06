@component('mail::message')
    # Bulletin de Paie

    Bonjour

    Voici les détails de votre bulletin de paie :

    - **Nom:** {{$name}}
    - **Prénom:**
    - **Salaire:**

    ---
    **Note:** Vous pouvez télécharger votre bulletin de paie en cliquant sur le bouton ci-dessous.

    ---

    @component('mail::button', ['url' => '/bulletin/download/employee/{employee_id}' ])
        Télécharger Bulletin de Paie
    @endcomponent


    Merci,
    L'équipe de paie
@endcomponent
