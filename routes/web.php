<?php

use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\System\ProfileController;
use App\Http\Controllers\System\AboutController;
use App\Http\Controllers\System\FactController;
use App\Http\Controllers\System\SkillController;
use App\Http\Controllers\System\ResumeController;
use App\Http\Controllers\System\EducationController;
use App\Http\Controllers\System\ProfessionalExperienceController;
use App\Http\Controllers\System\PortfolioController;
use App\Http\Controllers\System\ProjectCategoryController;
use App\Http\Controllers\System\ProjectController;
use App\Http\Controllers\System\ServiceController;
use App\Http\Controllers\System\TypeServiceController;
use App\Http\Controllers\System\TestimonialController;
use App\Http\Controllers\System\PersonalReferenceController;
use App\Http\Controllers\System\ContactController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\System\SystemController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/privacy_policies', function (){
    return view('privacy_policies');
});


Route::get('/terms_conditions', function (){
    return view('terms_conditions');
});

Auth::routes();

/**
 * Rutas para el inicio de sesion con redes sociales
 */

Route::get('/login/facebook', [SocialController::class, 'facebookRedirect'])->name('login.facebook');
Route::get('/login/facebook/callback', [SocialController::class, 'loginWithFacebook']);

Route::get('/login/google', [SocialController::class, 'googleRedirect'])->name('login.google');
Route::get('/login/google/callback', [SocialController::class, 'loginWithGoogle']);

Route::get('/login/github', [SocialController::class, 'githubRedirect'])->name('login.github');
Route::get('/login/github/callback', [SocialController::class, 'loginWithGithub']);


Route::controller(PortafolioController::class)->group(function (){
    Route::get('/', 'index')->name('portafolio');
});

Route::controller(PortafolioController::class)->group(function (){
    Route::get('/privacy-policies', 'privacyPolicy')->name('privacy-policies');
});

Route::controller(PortafolioController::class)->group(function (){
    Route::get('/terms-and-conditions', 'termsAndConditions')->name('terms-and-conditions');
});

/**
 * Rutas para el uso de system
 */
Route::controller(SystemController::class)->group(function (){
    Route::get('/system', 'index')->name('system.index');
});

Route::controller(ProfileController::class)->middleware('auth')->group(function (){
    Route::get('/system/profile', 'index')->name('system.profile.index');

    Route::put('/system/profile/{id}', 'update')->name('system.profile.update');
    Route::put('/system/profile/url_photo/{id}', 'updateProfileUrlPhoto')->name('system.profile.url_photo.update');
    Route::put('/system/profile/url_photo_background/{id}', 'updateProfileUrlPhotoBackground')->name('system.profile.url_photo_background.update');
});

Route::controller(AboutController::class)->group(function (){
    Route::get('/system/about', 'index')->name('system.about.index');

    Route::put('/system/about/{id}', 'update')->name('system.about.update');
    Route::put('/system/about/facts_description/{id}', 'updateFactsDescription')->name('system.about.updateFactsDescription');
    Route::put('/system/about/skills_description/{id}', 'updateSkillsDescription')->name('system.about.updateSkillsDescription');
});

Route::controller(FactController::class)->group(function (){
    Route::get('/system/about/facts', 'index')->name('system.about.facts.index');

    Route::post('system/about/facts/', 'store')->name('system.about.facts.store');
    Route::delete('system/about/facts/{id}', 'destroy')->name('system.about.facts.destroy');
    //Route::put('system/about/facts/{id}');
});

Route::controller(SkillController::class)->group(function (){
    Route::get('/system/about/skills', 'index')->name('system.about.skills.index');

    Route::post('system/about/skills/', 'store')->name('system.about.skills.store');
    Route::delete('system/about/skills/{id}', 'destroy')->name('system.about.skills.destroy');
});

Route::controller(ResumeController::class)->group(function (){
    Route::get('system/resume', 'index')->name('system.resume.index');

    Route::put('system/resume/{id}', 'update')->name('system.resume.update');
});

Route::controller(EducationController::class)->group(function (){
    Route::get('system/resume/educations', 'index')->name('system.resume.educations.index');

    Route::post('system/resume/educations', 'store')->name('system.resume.educations.store');
    Route::delete('system/resume/educations/{id}', 'destroy')->name('system.resume.educations.destroy');
});

Route::controller(ProfessionalExperienceController::class)->group(function (){
    Route::get('system/resume/professional_experiences', 'index')->name('system.resume.professional_experiences.index');

    Route::post('system/resume/professional_experiences', 'store')->name('system.resume.professional_experiences.store');
    Route::delete('system/resume/professional_experiences/{id}', 'destroy')->name('system.resume.professional_experiences.destroy');
});

Route::controller(PortfolioController::class)->group(function (){
    Route::get('system/portfolio', 'index')->name('system.portfolio.index');

    Route::put('system/portfolio/{id}', 'update')->name('system.portfolio.update');
});

Route::controller(ProjectCategoryController::class)->group(function (){

    Route::post('system/portfolio/project_category/', 'store')->name('system.portfolio.project_categories.update');
});

Route::controller(ProjectController::class)->group(function (){
    Route::get('system/portfolio/projects/{id}/edit', 'edit')->name('system.portfolio.projects.edit');

    Route::post('system/portfolio/projects', 'store')->name('system.portfolio.projects.store');
    Route::post('system/portfolio/projects/{id}/images', 'storeImages')->name('system.portfolio.projects.store.images');
    Route::put('system/portfolio/projects/{id}', 'update')->name('system.portfolio.projects.update');
    Route::delete('system/portafolio/projects/{id}', 'destroy')->name('system.portafolio.projects.destroy');
});

Route::controller(ServiceController::class)->group(function (){
    Route::get('system/services', 'index')->name('system.services.index');

    Route::put('system/services/{id}', 'update')->name('system.services.update');
});

Route::controller(TypeServiceController::class)->group(function (){

    Route::post('system/services/type_services', 'store')->name('system.services.type_services.store');
    Route::delete('system/services/type_services/{id}', 'destroy')->name('system.services.type_services.destroy');
});

Route::controller(TestimonialController::class)->group(function (){
    Route::get('system/testimonials', 'index')->name('system.testimonials.index');

    Route::put('system/testimonials/{id}', 'update')->name('system.testimonials.update');
});

Route::controller(PersonalReferenceController::class)->group(function (){

    Route::post('system/testimonials/personal_references', 'store')->name('system.testimonials.personal_references.store');
});

Route::controller(ContactController::class)->group(function (){
    Route::get('system/contact', 'index')->name('system.contact.index');

    Route::put('system/contact/{id}', 'update')->name('system.contact.update');
});

Route::controller(MailController::class)->group(function (){
    Route::get('/email/sent_successfully', 'sentSuccessfully')->name('mail.sent_successfully');
    Route::get('/email/error_send', 'errorSend')->name('mail.error_send');

    Route::post('mail', 'send')->name('mail.send');
});
