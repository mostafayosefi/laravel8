<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\User\WalletController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\FinicalController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\MyDomainController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\CaptchaServiceController;
use App\Http\Controllers\Service\DomainController;
use App\Http\Controllers\Index\LoginuserController;
use App\Http\Controllers\Index\SitemapXmlController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\User\NameserverController;

Route::namespace('Auth')->prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');
    });

    Route::prefix('user')->name('user.')->middleware([ 'userauth'])->group(function () {

        Route::resource('nameserver', NameserverController::class);

    });




        Route::namespace('Index')->name('index.')->group(function () {
            Route::get('/', [IndexController::class, 'index'])->name('home');
            Route::get('/service/{title}', [IndexController::class, 'page'])->name('page');
            Route::get('/user/login', [LoginuserController::class, 'login'])->name('user.login');
            Route::post('/user/login', [LoginuserController::class, 'authenticate'])->name('user.login.post');
            Route::post('/user/logout', [LoginuserController::class, 'logout'])->name('user.logout');
            Route::get('/sitemap.xml', [SitemapXmlController::class, 'sitemap']);

            //domain

            Route::get('/check_domain/{name?}', [MyDomainController::class, 'CheckDomain'])->name('check');
            Route::post('/check_domain', [MyDomainController::class, 'CheckDomainPost'])->name('check.post');


        });



        Route::prefix('user')->namespace('User')->name('user.')->middleware([ 'userauth'])->group(function () {

            Route::prefix('panel')->name('panel.')->group(function () {
                Route::get('/', [IndexController::class, 'panel'])->name('index');
            });


            //profile
            Route::prefix('profile')->name('profile.')->group(function () {
                Route::get('/', [ProfileController::class, 'index'])->name('index');
                Route::get('/show', [ProfileController::class, 'show'])->name('show');
                Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
                Route::put('/update', [ProfileController::class, 'update'])->name('update');
                Route::get('/secret', [ProfileController::class, 'secret'])->name('secret');
            });





            //domain
            Route::prefix('domain')->name('domain.')->group(function () {
                Route::get('/', [MyDomainController::class, 'index'])->name('index');
                Route::get('/check_domain/{name?}', [MyDomainController::class, 'CheckDomain'])->name('check');
                Route::post('/check_domain', [MyDomainController::class, 'CheckDomainPost'])->name('check.post');

                Route::post('/buy', [MyDomainController::class, 'BuyPost'])->name('buy.post');
            });


            Route::prefix('order')->name('order.')->group(function () {
                Route::get('/', [OrderController::class, 'index'])->name('index');
                Route::get('/{id}', [OrderController::class, 'show'])->name('show');
                Route::put('/{id}', [OrderController::class, 'payment'])->name('payment');
                Route::delete('/{id}', [OrderController::class, 'destroy'])->name('destroy');


            });

            Route::prefix('contact')->name('contact.')->group(function () {
                Route::get('/', [ContactController::class, 'index'])->name('index');
                Route::get('/create', [ContactController::class, 'create'])->name('create');
                Route::post('/', [ContactController::class, 'store'])->name('store');
                Route::get('/{id}', [ContactController::class, 'show'])->name('show');
                Route::get('/{id}/edit', [ContactController::class, 'edit'])->name('edit');
                Route::put('/{id}', [ContactController::class, 'update'])->name('update');
                Route::delete('/{id}', [ContactController::class, 'destroy'])->name('destroy');
                Route::get('/{id}/default', [ContactController::class, 'default'])->name('default');

            });
            Route::prefix('finical')->name('finical.')->group(function () {



                Route::get('/', [FinicalController::class, 'index'])->name('index');


                     Route::prefix('wallet')->name('wallet.')->group(function () {
                        Route::get('/', [WalletController::class, 'index'])->name('index');
                        Route::get('/create', [WalletController::class, 'create'])->name('create');
                        Route::post('/', [WalletController::class, 'store'])->name('store');


                      });

            });

        });



Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);

