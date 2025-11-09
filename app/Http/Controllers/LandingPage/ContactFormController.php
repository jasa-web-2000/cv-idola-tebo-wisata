<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
    public function __invoke(ContactFormRequest $request)
    {

        $validated = $request->validated();

        if ($validated) {
            return redirect()->to(whatsapp(null, "Halo admin\n" . web()->title . "\nSaya ingin memesan tiket travel\n\n*Nama*: {$validated['name']},\n*Asal*: {$validated['origin']},\n*Tujuan*: {$validated['destination']},\n*Penumpang*: {$validated['ticket']} tiket\n\n" . request()->url()));
        }

        return redirect()->back()->withErrors($request->errors());
    }
}
