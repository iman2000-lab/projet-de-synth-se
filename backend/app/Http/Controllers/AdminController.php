<?php



namespace App\Http\Controllers;

//use App\Models\Product; // Si tu as un modèle pour les produits
//use App\Models\Order;   // Si tu as un modèle pour les commandes
//use App\Models\User;    // Si tu as un modèle pour les utilisateurs
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Récupère les produits, les commandes et les clients pour l'affichage dans le tableau de bord
        $products = Product::all();
        $orders = Order::all();
        $users = User::all();

        return view('admin.dashboard', compact('products', 'orders', 'users'));
    }

    public function manageProducts()
    {
        $products = Product::all();
        return view('admin.manageProducts', compact('products'));
    }

    public function manageOrders()
    {
        $orders = Order::all();
        return view('admin.manageOrders', compact('orders'));
    }

    public function manageUsers()
    {
        $users = User::all();
        return view('admin.manageUsers', compact('users'));
    }
}

