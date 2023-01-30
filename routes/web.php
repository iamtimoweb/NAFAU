<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* frontend */
Route::namespace('Frontend')->name('frontend.')->group(function () {
    Route::get('', 'AppController@welcome')->name('welcome');
    // our work
    Route::view('what-we-do', 'frontend.our_work.work')->name('work');
    // our training on coffee farming
    Route::view('what-we-do/training_on_coffee_farming', 'frontend.our_work..training_on_coffee_farming')->name('training_on_coffee_farming');
    // coffee processing
    Route::view('what-we-do/coffee_processing', 'frontend.our_work.coffee_processing')->name('coffee_processing');
    // coffee demo garden
    Route::view('what-we-do/coffee_demo_garden', 'frontend.our_work.coffee_demo_garden')->name('coffee_demo_garden');
    // nurser bed and seedlings
    Route::view('what-we-do/nursery_bed', 'frontend.our_work.nursery_bed')->name('nursery_bed');
    // About
    Route::get('about', 'AppController@about')->name('about');
//    // programes
    Route::view('programes/trade_and_marketing', 'frontend.programes.trade_and_marketing')->name('trade_and_marketing');
    // Education
    Route::view('programes/new-horizon-community-school', 'frontend.programes.education')->name('education');
    // Farming
    Route::view('programes/farming', 'frontend.programes.farming.farming')->name('farming');
    Route::view('programes/farming/inter-cropping', 'frontend.programes.farming.inter-cropping')->name('inter-cropping');
    Route::view('programes/farming/fish-farming', 'frontend.programes.farming.fishing')->name('fish-farming');
    Route::view('programes/farming/animal-farming', 'frontend.programes.farming.animal-farming')->name('animal-farming');
    // Social Services
    Route::view('programes/social_services', 'frontend.programes.social_services')->name('social_services');
    Route::view('programes/youth_programes', 'frontend.programes.youth_programes')->name('youth_programes');

    Route::view('strategy-2021-2025', 'frontend.strategy')->name('full__strategy');
    Route::get('strategy-2021-2025/download', 'AppController@download__strategy__pdf')->name('download__strategy__pdf');

    // compaigns
    Route::view('compaigns', 'frontend.compaigns')->name('compaigns');
    Route::view('compaigns/malnutrition', 'frontend.compaigns.malnutrition')->name('compaigns.malnutrition');
    Route::view('compaigns/education', 'frontend.compaigns.education')->name('compaigns.education');
    Route::view('compaigns/water-and-sanitation', 'frontend.compaigns.water__and__sanitation')->name('compaigns.water__and__sanitation');
    Route::view('compaigns/sustainable-coffee-production', 'frontend.compaigns.sustainable__coffee__production')->name('compaigns.sustainable__coffee__production');

    // clinic
    Route::view('clinic/nafau_clinic', 'frontend.clinic.nafau_clinic')->name('nafau_clinic');
    // malnutrition
    Route::view('clinic/malnutrition_program', 'frontend.clinic.malnutrition_program')->name('malnutrition_program');
    // our-coffee
    Route::view('our-coffee', 'frontend.our_coffee')->name('our_coffee');
    // contact form
    Route::get('contact', 'AppController@contact')->name('contact');
    Route::post('contact', 'AppController@contact')->name('contact');

    // privacy policy
    Route::view('privacy-policy', 'frontend.privacy_policy')->name('privacy-policy');
    Route::view('thank-you', 'frontend.thank-you')->name('thank-you');

});

Auth::routes();

/* backend */
Route::namespace('Backend')->prefix('backend')->name('backend.')->group(function () {
    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');

    // users
    Route::resource('users', 'UserController')->except(['show']);;

    Route::get('user/{id}/profile', 'UserController@getProfile')->name('get.profile');

    Route::post('user/{id}/profile/update', 'UserController@updateProfile')->name('update.profile');

    Route::post('change-password', 'UserController@changePassword')->name('change-password');
    // education
    Route::resource('education', 'EducationController')->except(['show']);

    // members
    Route::resource('members', 'MemberController');

    // Geolocation
    Route::view('/geolocation/members', 'backend.members.geolocation')->name('member-geolocation');

    // loans
    Route::get('paid-loans', 'LoanController@getPaidLoans')->name('paid-loans');
    Route::resource('loans', 'LoanController');

    // payments
    Route::resource('payments', 'PaymentController');

    Route::resource('entries', 'EntryController')->except(['show']);

    // students
    Route::resource('students', 'StudentController');

    // sliders
    Route::resource('sliders', 'SliderController')->except(['show']);

    // roles
    Route::resource('roles', 'RoleController')->except(['show']);

    // settings
    Route::get('settings', 'SiteMetaController@settings')->name('site.get_settings');

    Route::post('settings', 'SiteMetaController@settings')->name('site.post_settings');

    Route::resource('testimonials', 'TestimonialController')->except(['show']);

    // coffee
    Route::resource('red-cherries', 'RedCherriesController');
    Route::resource('kiboko', 'KibokoController');
    Route::resource('kase', 'KaseController');


    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->name('app_log')->middleware('auth');


});
