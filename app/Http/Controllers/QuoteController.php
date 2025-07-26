<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    public function index()
    {
        return view('quote.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'project_type' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'budget' => 'nullable|string|max:255',
        ]);

        $quote = Quote::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'project_type' => $request->project_type,
            'description' => $request->description,
            'budget' => $request->budget,
        ]);

        // Ici vous pouvez ajouter l'envoi d'email de notification
        // Mail::to('contact@startup.com')->send(new QuoteNotification($quote));

        return redirect()->route('quote')->with('success', 'Votre demande de devis a été envoyée avec succès ! Nous vous répondrons dans les plus brefs délais.');
    }
}
