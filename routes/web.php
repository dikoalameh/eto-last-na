<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->name('auth.logout');

Route::get('/send-otp', function () {
    return view('auth.send-otp');
})->name('send.otp');

Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('password.reset');

// admin
Route::get('/admin/research-records', function () {
    return view('admin.research-records');
})->name('admin.research.records');

Route::get('/admin/pending-accounts', function () {
    return view('admin.pending-accounts');
})->name('admin.pending.accounts');

Route::get('/admin/approved-accounts', function () {
    return view('admin.approved-accounts');
})->name('admin.approved.accounts');

Route::get('/admin/pending-reviews', function () {
    return view('admin.pending-reviews');
})->name('admin.pending.reviews');

Route::get('/admin/research-approval', function () {
    return view('admin.research-approval');
})->name('admin.research.approval');

Route::get('/admin/reviewers-checklist', function () {
    return view('admin.reviewers-checklist');
})->name('admin.reviewer.checklist');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/settings', function () {
    return view('admin.settings');
})->name('admin.settings');

// superadmin
Route::get('/superadmin/dashboard', function () {
    return view('superadmin.dashboard');
})->name('superadmin.dashboard');

Route::get('/superadmin/accounts-classifications', function () {
    return view('superadmin.accounts-classifications');
})->name('superadmin.accounts.classifications');

Route::get('/superadmin/pending-reviews', function () {
    return view('superadmin.pending-reviews');
})->name('superadmin.pending-reviews');

Route::get('/superadmin/permission-control', function () {
    return view('superadmin.permission-control');
})->name('superadmin.permission.control');

Route::get('/superadmin/research-approval', function () {
    return view('superadmin.research-approval');
})->name('superadmin.research.approval');

Route::get('/superadmin/research-records', function () {
    return view('superadmin.research-records');
})->name('superadmin.research.records');

Route::get('/superadmin/settings', function () {
    return view('superadmin.settings');
})->name('superadmin.settings');

// reviewer
Route::get('/reviewer/dashboard', function () {
    return view('reviewer.dashboard');
})->name('reviewer.dashboard');

Route::get('/reviewer/protocol-assign', function () {
    return view('reviewer.protocol-assign');
})->name('reviewer.protocol.assign');

Route::get('/reviewer/settings', function () {
    return view('reviewer.settings');
})->name('reviewer.settings');

// student
Route::get('/student/dashboard', function () {
    return view('student.dashboard');
})->name('student.dashboard');

Route::get('/student/track-reviews', function () {
    return view('student.track-reviews');
})->name('student.track.reviews');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
