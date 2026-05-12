<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f4f4f4; color: #333; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; }
        .header { background-color: #FF2D2D; color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
        .btn { display: inline-block; background: #0B0B0B; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Bonjour {{ $prospect->name }} !</h1>
        </div>
        <div style="padding: 20px;">
            <p>Merci de votre confiance. Nous avons bien reçu votre demande concernant votre bateau.</p>

            <p>Voici un récapitulatif de votre demande :</p>
            <ul>
                <li><strong>Bateau :</strong> {{ $prospect->boat_type }}</li>
                <li><strong>Services :</strong> {{ implode(', ', $prospect->services ?? []) }}</li>
            </ul>

            <p>Notre équipe d'experts vous recontactera au <strong>{{ $prospect->phone }}</strong> sous 24h.</p>

            <div style="text-align: center;">
                <a href="https://seafastboat.fr" class="btn">Visiter le site</a>
            </div>
        </div>
    </div>
</body>
</html>
