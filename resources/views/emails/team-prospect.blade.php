<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f4f4f4; color: #333; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; }
        .header { background-color: #0B0B0B; color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
        .red-text { color: #FF2D2D; font-weight: bold; }
        .box { background: #f9f9f9; padding: 15px; margin: 10px 0; border-left: 4px solid #FF2D2D; }
        .footer { text-align: center; font-size: 12px; color: #777; margin-top: 20px; }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>SEA FAST BOAT & WICD</h1>
            <p>Nouvelle demande de prospect</p>
        </div>

        <div style="padding: 20px;">
            <h2 class="red-text">Détails du Client</h2>
            <div class="box">
                <p><strong>Nom :</strong> {{ $prospect->name }}</p>
                <p><strong>Email :</strong> {{ $prospect->email }}</p>
                <p><strong>Téléphone :</strong> {{ $prospect->phone }}</p>
            </div>

            <h2 class="red-text">Le Projet</h2>
            <div class="box">
                <p><strong>Type de bateau :</strong> {{ $prospect->boat_type ?? 'Non précisé' }}</p>
                <p><strong>Longueur :</strong> {{ $prospect->boat_length ?? 'Non précisé' }}</p>
                <p><strong>Services demandés :</strong> {{ implode(', ', $prospect->services ?? []) }}</p>
                <p><strong>Message :</strong></p>
                <p style="font-style: italic;">"{{ $prospect->message }}"</p>
            </div>

            {{-- <p>Connectez-vous à l'admin pour voir plus de détails.</p> --}}
        </div>

        <div class="footer">
            Sea Fast Boat Martinique - 2026
        </div>
    </div>
</body>
</html>
