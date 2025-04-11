<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Commandes</title>
</head>
<body>

<div class="container">
    <h1>Liste des commandes</h1>
    <table>
        <thead>
            <tr>
                <th>ID Commande</th>
                <th>Client</th>
                <th>Status</th>
                <th>Montant</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->total }} €</td>
                <td>
                    <a href="#">Voir détails</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
