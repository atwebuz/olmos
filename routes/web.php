<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('siteIndex');
Route::post('/send-contact-form', [PageController::class, 'contactForm'])->name('contactForm');
Route::post('/send-order', [PageController::class, 'store'])->name('sendDocument');
// Web pages
//

// Change language session condition
Route::get('/language/{lang}',function ($lang){
    $lang = strtolower($lang);
    if ($lang == 'ru' || $lang == 'uz')
    {
        session([
            'locale' => $lang
        ]);
    }
    return redirect()->back();
});