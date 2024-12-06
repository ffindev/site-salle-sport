@vite(['resources/css/accueil.css', 'resources/js/app.js'])

@extends('base')

@section('title', 'Accueil')

@section('content')



    <p id="story">Découvrez un espace dédié à votre bien-être et à votre performance. Chez FitZone, nous mettons tout en œuvre pour vous offrir une expérience sportive unique, adaptée à vos besoins et objectifs. Profitez d’un large choix de cours collectifs, d’équipements modernes et d’un encadrement par des coachs qualifiés. Ensemble, repoussons vos limites !
  </p>

    <div id="gymcardscontainer">

    <img class="gympresentationpics" src="{{ asset('img/gym-5977600_1920.jpg') }}" alt="Image numéro 1 libre de droit d'une salle de sport 1">

    <p class="gympicstext">Plongez dans un espace entièrement équipé pour répondre à vos attentes sportives. Des appareils modernes et variés, conçus pour accompagner vos séances de cardio, musculation ou entraînement fonctionnel, vous permettent d’évoluer à votre rythme et en toute sérénité. Que vous soyez un habitué ou un débutant, chaque zone est pensée pour maximiser votre confort et votre performance. Venez découvrir notre environnement spacieux et accueillant, où votre bien-être est notre priorité absolue.</p>

    <img class="gympresentationpics" src="{{ asset('img/sports-1962574_1920.jpg') }}" alt="Image numéro 2 libre de droit d'une salle de sport">

    <p class="gympicstext">Enfilez votre tenue de sport et plongez dans l’univers du cycling avec nos vélos de haute performance. Nos cours de vélo en salle, animés par des coachs passionnés, vous garantissent des sessions dynamiques et pleines d’énergie. Que vous souhaitiez brûler des calories, améliorer votre endurance ou simplement vous défouler, nos entraînements sont conçus pour tous les niveaux. Rejoignez-nous et ressentez l’effort et la satisfaction d’une séance de pédalage intense dans une ambiance électrisante.</p>

    <img class="gympresentationpics" src="{{ asset('img/weight-lifting-1284616_1920.jpg') }}" alt="Image numéro 3 libre de droit des altères dans une salle de sport">

    <p class="gympicstext">Plongez dans l’univers de la musculation avec nos espaces spécialement conçus pour développer votre force et sculpter votre silhouette. Nos installations modernes incluent des haltères, des machines guidées, des bancs de musculation et des poids libres, adaptés à tous les niveaux. Que vous soyez débutant ou confirmé, nos coachs sont là pour vous guider et optimiser vos séances en toute sécurité. Progressez à votre rythme dans un environnement motivant et atteignez vos objectifs de renforcement musculaire ou de performance.</p>

    <img class="gympresentationpics" src="{{ asset('img/gym-6888637_1920.jpg') }}" alt="Image numéro 4 libre de droit de la zone crossfit d'une salle de sport">

    <p class="gympicstext">Découvrez l’univers du CrossFit dans notre salle, un programme d’entraînement intense combinant force, endurance et agilité. Dans un espace dédié, vous aurez accès à des équipements spécifiques tels que des kettlebells, des box jump, et des barres de traction pour vos WOD (Workouts of the Day). Encadrés par des coachs certifiés, nos cours sont conçus pour vous aider à repousser vos limites, quel que soit votre niveau. Plongez dans une communauté passionnée où le dépassement de soi et l’esprit d’équipe sont à l’honneur.</p>

    </div>
    
@endsection
