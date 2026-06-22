<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function showCheckout($plan)
    {
        // Forzamos el plan a mayúsculas para evitar errores
        $planUpper = strtoupper($plan);
        $price = 0;

        // Asignamos el precio real según el plan seleccionado
        switch ($planUpper) {
            case 'BASIC':
                $price = 99.9;
                break;
            case 'STANDARD':
                $price = 259.0;
                break;
            case 'PREMIUM':
                $price = 599.0;
                break;
            default:
                return redirect()->route('subscriptions')->with('error', 'Plan no válido');
        }

        return view('checkout', compact('planUpper', 'price'));
    }

public function processPayment(Request $request)
    {
        // 1. Validamos los datos recibidos del formulario
        $request->validate([
            'plan_name' => 'required',
            'card_name' => 'required|string|max:100',
            'card_number' => 'required|string|min:16',
            'expiry' => 'required|string',
            'cvv' => 'required|string|min:3|max:4',
            'amount' => 'required|numeric', // Aseguramos recibir el monto
        ]);

        // 2. Guardamos en la base de datos usando el modelo Subscription
        Subscription::create([
            'user_id' => 1, // ID temporal hasta implementar sistema de usuarios
            'plan' => $request->plan_name,
            'monto' => $request->amount,
            'estado' => 'activa'
        ]);

        // 3. Redireccionamos a la página de suscripciones con un mensaje de éxito
        return redirect('/suscripciones')->with('success', '¡Gracias por tu compra! Tu plan ' . $request->plan_name . ' ya está activo.');
    }
}