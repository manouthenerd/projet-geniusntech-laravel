<div style="font-family: Arial, sans-serif; color: #222;">
    <h2>Nouveau message de contact</h2>
    <p><strong>Nom :</strong> {{ $name }}</p>
    <p><strong>Prénom :</strong> {{ $surname }}</p>
    <p><strong>Téléphone :</strong> {{ $phone }}</p>
    <p><strong>Email :</strong> {{ $email }}</p>
    <p><strong>Message :</strong></p>
    <div style="background: #f5f5f5; padding: 1em; border-radius: 5px;">
        {{ $messageContent }}
    </div>
</div>