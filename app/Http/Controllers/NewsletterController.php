<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletters,email',
        ], [
            'email.required' => 'E-posta adresi gereklidir.',
            'email.email' => 'Geçerli bir e-posta adresi giriniz.',
            'email.unique' => 'Bu e-posta adresi zaten abonedir.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ], 422);
        }

        try {
            Newsletter::create([
                'email' => $request->email,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Bülten aboneliğiniz başarıyla gerçekleşti!',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Bir hata oluştu. Lütfen tekrar deneyiniz.',
            ], 500);
        }
    }

    public function unsubscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:newsletters,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Geçersiz e-posta adresi.',
            ], 422);
        }

        try {
            $newsletter = Newsletter::where('email', $request->email)->first();
            $newsletter->update([
                'is_active' => false,
                'unsubscribed_at' => now(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Bülten aboneliğiniz iptal edildi.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Bir hata oluştu. Lütfen tekrar deneyiniz.',
            ], 500);
        }
    }
}
