<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Admin</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px; }
        .container { max-width: 1200px; margin: 0 auto; }
        .card { background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
        .card h3 { margin-bottom: 15px; }
        .card .stats { display: flex; justify-content: space-between; }
        .card .stats div { background: #007bff; color: white; padding: 10px; border-radius: 5px; width: 22%; text-align: center; }
    </style>
</head>
<body>

<div class="container">
    <h1>Bienvenue sur le Tableau de Bord Admin</h1>
    <div class="card">
        <h3>Statistiques du site</h3>
        <div class="stats">
            <div>
                <h4>Produits</h4>
                <p>{{ count($products) }}</p>
            </div>
            <div>
                <h4>Commandes</h4>
                <p>{{ count($orders) }}</p>
            </div>
            <div>
                <h4>Clients</h4>
                <p>{{ count($users) }}</p>
            </div>
            <div>
                <h4>Ventes</h4>
                <p>{{ $orders->sum('total') }} €</p>
            </div>
        </div>
    </div>

    <div class="card">
        <h3>Gestion des sections</h3>
        <ul>
            <li><a href="{{ route('admin.products') }}">Gérer les produits</a></li>
            <li><a href="{{ route('admin.orders') }}">Gérer les commandes</a></li>
            <li><a href="{{ route('admin.users') }}">Gérer les utilisateurs</a></li>
        </ul>
    </div>
</div>

</body>
</html>
