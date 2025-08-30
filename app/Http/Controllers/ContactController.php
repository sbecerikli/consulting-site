<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        $settings = SiteSettings::getSettings();
        return view('contact', compact('settings'));
    }

    public function store(Request $request)
    {
        // Debug log
        \Log::info('Contact form submitted', $request->all());
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ], [
            'name.required' => 'Ad alanı gereklidir.',
            'email.required' => 'E-posta alanı gereklidir.',
            'email.email' => 'Geçerli bir e-posta adresi giriniz.',
            'subject.required' => 'Konu alanı gereklidir.',
            'message.required' => 'Mesaj alanı gereklidir.',
            'message.max' => 'Mesaj en fazla 2000 karakter olabilir.',
        ]);

        if ($validator->fails()) {
            \Log::info('Validation failed', $validator->errors()->toArray());
            return response()->json([
                'success' => false,
                'message' => 'Lütfen tüm gerekli alanları doldurunuz.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $contactMessage = ContactMessage::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'company' => $request->company,
                'subject' => $request->subject,
                'message' => $request->message,
                'is_read' => false,
            ]);
            
            \Log::info('Contact message created', ['id' => $contactMessage->id]);

            return response()->json([
                'success' => true,
                'message' => 'Mesajınız başarıyla gönderildi. En kısa sürede size dönüş yapacağız.'
            ]);
        } catch (\Exception $e) {
            \Log::error('Contact message creation failed', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Bir hata oluştu. Lütfen tekrar deneyiniz.'
            ], 500);
        }
    }
}
