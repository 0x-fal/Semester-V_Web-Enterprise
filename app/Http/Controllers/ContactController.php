<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'pesan' => 'required|string',
            'g-recaptcha-response' => 'required'
        ]);

        // Verifikasi reCAPTCHA
        $recaptchaSecret = env('RECAPTCHA_SECRET_KEY');
        $recaptchaResponse = $request->input('g-recaptcha-response');

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $recaptchaSecret,
            'response' => $recaptchaResponse,
            'remoteip' => $request->ip()
        ]);

        $result = $response->json();

        if (!$result['success']) {
            return response()->json([
                'success' => false,
                'message' => 'Verifikasi reCAPTCHA gagal. Silakan coba lagi.'
            ], 422);
        }

        // Jika reCAPTCHA valid, proses data
        // Contoh: simpan ke database atau kirim email
        
        // Mail::to('admin@inaklug.id')->send(new ContactMail($request->all()));

        return response()->json([
            'success' => true,
            'message' => 'Pesan berhasil terkirim!'
        ]);
    }
}