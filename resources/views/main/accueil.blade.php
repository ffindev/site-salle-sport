@vite(['resources/css/accueil.css', 'resources/js/app.js'])

@extends('base')

@section('title', 'Accueil')

@section('content')

    <h2 id="pagestart">Vous êtes sur la page d'accueil.</h2>

    <p id="story">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, incidunt. Hic placeat sapiente minima voluptate consequatur atque repellat! Magni exercitationem ducimus rerum illum hic quis corporis animi odio, illo nesciunt.
    Dicta provident dolores, ducimus sint ex soluta? Hic fuga deserunt porro consequuntur culpa quo reiciendis rerum autem, labore ab sed ea, dolore dolores error, cumque voluptate incidunt! Animi, dolor ipsum?
    Voluptate ullam sed nostrum, voluptas repellendus eius deserunt sequi amet quo autem. Hic vitae rerum cupiditate labore eligendi tempora veritatis ratione alias eum unde, beatae ipsa quia ut itaque fugiat!</p>

    <img class="gympresentationpics" src="{{ asset('img/gym-5977600_1920.jpg') }}" alt="Image numéro 1 libre de droit d'une salle de sport 1">

    <p class="gympicstext">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt modi, officiis, reiciendis vitae cumque ut iure molestiae ea ad cum eius. Voluptas quos nam delectus provident omnis consequuntur dolorem sit.
    Modi obcaecati voluptatibus vitae fuga, alias atque minus dolore, aut facere repellendus expedita velit nam, sunt temporibus esse eius culpa. Sapiente, deleniti tenetur. Quas repellat veritatis itaque id aspernatur dolorem!</p>

    <img class="gympresentationpics" src="{{ asset('img/sports-1962574_1920.jpg') }}" alt="Image numéro 2 libre de droit d'une salle de sport">

    <p class="gympicstext">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt modi, officiis, reiciendis vitae cumque ut iure molestiae ea ad cum eius. Voluptas quos nam delectus provident omnis consequuntur dolorem sit.
    Modi obcaecati voluptatibus vitae fuga, alias atque minus dolore, aut facere repellendus expedita velit nam, sunt temporibus esse eius culpa. Sapiente, deleniti tenetur. Quas repellat veritatis itaque id aspernatur dolorem!</p>

    <img class="gympresentationpics" src="{{ asset('img/weight-lifting-1284616_1920.jpg') }}" alt="Image numéro 3 libre de droit des altères dans une salle de sport">

    <p class="gympicstext">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt modi, officiis, reiciendis vitae cumque ut iure molestiae ea ad cum eius. Voluptas quos nam delectus provident omnis consequuntur dolorem sit.
    Modi obcaecati voluptatibus vitae fuga, alias atque minus dolore, aut facere repellendus expedita velit nam, sunt temporibus esse eius culpa. Sapiente, deleniti tenetur. Quas repellat veritatis itaque id aspernatur dolorem!</p>

    <img class="gympresentationpics" src="{{ asset('img/gym-6888637_1920.jpg') }}" alt="Image numéro 4 libre de droit de la zone crossfit d'une salle de sport">

    <p class="gympicstext">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt modi, officiis, reiciendis vitae cumque ut iure molestiae ea ad cum eius. Voluptas quos nam delectus provident omnis consequuntur dolorem sit.
    Modi obcaecati voluptatibus vitae fuga, alias atque minus dolore, aut facere repellendus expedita velit nam, sunt temporibus esse eius culpa. Sapiente, deleniti tenetur. Quas repellat veritatis itaque id aspernatur dolorem!</p>
    
@endsection
