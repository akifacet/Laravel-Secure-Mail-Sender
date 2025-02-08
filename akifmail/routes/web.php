<?php
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
Route::get('/contact', [MailController::class, 'showForm']); 
Route::post('/send-mail/akif965485', [MailController::class, 'sendMail'])->name('send.mail')->middleware('throttle:5,1'); 
