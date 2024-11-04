@vite(['resources/css/contact.css', 'resources/js/app.js'])

@extends('base')

@section('title', 'Contact')

@section('content')

    <h2 id="pagestart">Vous êtes sur la page contact.</h2>

    <div id="container">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80989.35214028238!2d2.9880037697563266!3d50.628653943693216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d59118928ab7%3A0xd0f3b05faaf1c4c!2sLe%20Cnam!5e0!3m2!1sfr!2sfr!4v1730760793087!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>

        <form action="#" method="post">

            <label for="telephone">Téléphone :</label><br>
            <input type="tel" id="telephone" name="telephone" placeholder="06 00 00 00 00" required><br><br>

            <label for="adresse">Adresse :</label><br>
            <input type="text" id="adresse" name="adresse" placeholder="5 bd Louis XIV 59000 Lille" required><br><br>

            <label for="email">Email :</label><br>
            <input type="email" id="email" name="email" placeholder="votre.email@example.com" required><br><br>

            <label for="demande">Votre Demande :</label><br>
            <input type="text" id="demande" name="demande" placeholder="Objet de votre demande" required><br><br>

            <label for="message">Votre Message :</label><br>
            <textarea id="message" name="message" rows="4" cols="50" placeholder="Ecrivez votre message ici" required></textarea><br><br>

            <button type="submit">Envoyer</button>

        </form>
    </div>

@endsection