<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        $validated['ip_address'] = $request->ip();
        $validated['source_page'] = 'contact';

        $message = ContactMessage::create($validated);

        if (config('mail.mailers.smtp.transport') ?? false) {
            try {
                Mail::raw(
                    "Yeni iletişim mesajı:\n\n".
                    "Ad: {$message->name}\n".
                    "E-posta: {$message->email}\n".
                    "Telefon: {$message->phone}\n".
                    "Konu: {$message->subject}\n\n".
                    $message->message,
                    function ($mail) use ($message) {
                        $mail->to(config('mail.from.address'))
                            ->subject('Yeni iletişim mesajı: '.($message->subject ?: 'Konu yok'));
                    }
                );
            } catch (\Throwable $e) {
                // Sessizce devam et, loglamak isterseniz buraya ekleyebilirsiniz.
            }
        }

        return redirect()->back()->with('status', 'Mesajınız alındı. Teşekkürler!');
    }
}
