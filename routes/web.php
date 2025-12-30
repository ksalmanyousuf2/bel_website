<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SolutionController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\GlobalPartnerController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndustrialCommercialController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\Admin\CareerController as AdminCareerController;
use App\Http\Controllers\Admin\JobApplicationController;
use App\Http\Controllers\CleaningServicesController;
use App\Http\Controllers\ReflexController;
use App\Http\Controllers\IntrixController;
use App\Http\Controllers\IntrixLvController;
use App\Http\Controllers\OnGridController;
use App\Http\Controllers\BessController;
use App\Http\Controllers\HybridSolarSolutionsController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home-variation-2', [HomeController::class, 'variation2'])->name('home.variation2');
Route::get('/home-variation-3', [HomeController::class, 'variation3'])->name('home.variation3');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/our-story', [AboutUsController::class, 'ourStory'])->name('our-story');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::post('/blogs/load-more', [BlogController::class, 'loadMore'])->name('blogs.load-more');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{slug}', [EventController::class, 'show'])->name('events.show');
Route::get('/commercial-business', [IndustrialCommercialController::class, 'index'])->name('commercial-business');
Route::get('/industrial-business', [IndustrialCommercialController::class, 'indexIndustrial'])->name('industrial-business');

Route::get('/support', [SupportController::class, 'index'])->name('support');
Route::get('/cleaning-services', [CleaningServicesController::class, 'index'])->name('cleaning-services');
Route::get('/reflex', [ReflexController::class, 'index'])->name('reflex');
Route::get('/intrix', [IntrixController::class, 'index'])->name('intrix');
Route::get('/intrix-lv', [IntrixLvController::class, 'index'])->name('intrix-lv');
Route::get('/on-grid', [OnGridController::class, 'index'])->name('on-grid');
Route::get('/bess', [BessController::class, 'index'])->name('bess');
Route::get('/hybrid-solar-solutions', [HybridSolarSolutionsController::class, 'index'])->name('hybrid-solar-solutions');
Route::get('/faqs', [FaqController::class, 'index'])->name('faqs.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Careers Routes
Route::get('/careers', [CareerController::class, 'index'])->name('careers.index');
Route::get('/careers/{slug}', [CareerController::class, 'show'])->name('careers.show');
Route::get('/careers/{slug}/apply', [CareerController::class, 'apply'])->name('careers.apply');
Route::post('/careers/{slug}/apply', [CareerController::class, 'storeApplication'])->name('careers.store-application');

// Dynamic Pages
Route::get('/pages/{slug}', [PageController::class, 'show'])->name('pages.show');

// Login route alias - redirects to admin login when session expires
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

// Admin Routes
Route::prefix('admin')->group(function () {
    // Auth Routes
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    // Protected Admin Routes
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        
        // Resources
        Route::resource('solutions', SolutionController::class)->names([
            'index' => 'admin.solutions.index',
            'create' => 'admin.solutions.create',
            'store' => 'admin.solutions.store',
            'show' => 'admin.solutions.show',
            'edit' => 'admin.solutions.edit',
            'update' => 'admin.solutions.update',
            'destroy' => 'admin.solutions.destroy',
        ]);
        Route::resource('blogs', AdminBlogController::class)->names([
            'index' => 'admin.blogs.index',
            'create' => 'admin.blogs.create',
            'store' => 'admin.blogs.store',
            'show' => 'admin.blogs.show',
            'edit' => 'admin.blogs.edit',
            'update' => 'admin.blogs.update',
            'destroy' => 'admin.blogs.destroy',
        ]);
        Route::resource('testimonials', TestimonialController::class)->names([
            'index' => 'admin.testimonials.index',
            'create' => 'admin.testimonials.create',
            'store' => 'admin.testimonials.store',
            'show' => 'admin.testimonials.show',
            'edit' => 'admin.testimonials.edit',
            'update' => 'admin.testimonials.update',
            'destroy' => 'admin.testimonials.destroy',
        ]);
        Route::resource('projects', AdminProjectController::class)->names([
            'index' => 'admin.projects.index',
            'create' => 'admin.projects.create',
            'store' => 'admin.projects.store',
            'show' => 'admin.projects.show',
            'edit' => 'admin.projects.edit',
            'update' => 'admin.projects.update',
            'destroy' => 'admin.projects.destroy',
        ]);
        Route::resource('events', AdminEventController::class)->names([
            'index' => 'admin.events.index',
            'create' => 'admin.events.create',
            'store' => 'admin.events.store',
            'show' => 'admin.events.show',
            'edit' => 'admin.events.edit',
            'update' => 'admin.events.update',
            'destroy' => 'admin.events.destroy',
        ]);
        Route::resource('global-partners', GlobalPartnerController::class)->names([
            'index' => 'admin.global-partners.index',
            'create' => 'admin.global-partners.create',
            'store' => 'admin.global-partners.store',
            'show' => 'admin.global-partners.show',
            'edit' => 'admin.global-partners.edit',
            'update' => 'admin.global-partners.update',
            'destroy' => 'admin.global-partners.destroy',
        ]);
        Route::resource('companies', CompanyController::class)->names([
            'index' => 'admin.companies.index',
            'create' => 'admin.companies.create',
            'store' => 'admin.companies.store',
            'show' => 'admin.companies.show',
            'edit' => 'admin.companies.edit',
            'update' => 'admin.companies.update',
            'destroy' => 'admin.companies.destroy',
        ]);
        Route::resource('pages', AdminPageController::class)->names([
            'index' => 'admin.pages.index',
            'create' => 'admin.pages.create',
            'store' => 'admin.pages.store',
            'show' => 'admin.pages.show',
            'edit' => 'admin.pages.edit',
            'update' => 'admin.pages.update',
            'destroy' => 'admin.pages.destroy',
        ]);
        Route::resource('faqs', AdminFaqController::class)->names([
            'index' => 'admin.faqs.index',
            'create' => 'admin.faqs.create',
            'store' => 'admin.faqs.store',
            'show' => 'admin.faqs.show',
            'edit' => 'admin.faqs.edit',
            'update' => 'admin.faqs.update',
            'destroy' => 'admin.faqs.destroy',
        ]);
        Route::resource('careers', AdminCareerController::class)->names([
            'index' => 'admin.careers.index',
            'create' => 'admin.careers.create',
            'store' => 'admin.careers.store',
            'show' => 'admin.careers.show',
            'edit' => 'admin.careers.edit',
            'update' => 'admin.careers.update',
            'destroy' => 'admin.careers.destroy',
        ]);
        Route::get('job-applications', [JobApplicationController::class, 'index'])->name('admin.job-applications.index');
        Route::get('job-applications/{jobApplication}', [JobApplicationController::class, 'show'])->name('admin.job-applications.show');
        Route::put('job-applications/{jobApplication}/status', [JobApplicationController::class, 'updateStatus'])->name('admin.job-applications.update-status');
        Route::get('job-applications/{jobApplication}/download-resume', [JobApplicationController::class, 'downloadResume'])->name('admin.job-applications.download-resume');
        Route::delete('job-applications/{jobApplication}', [JobApplicationController::class, 'destroy'])->name('admin.job-applications.destroy');
        
        // Project Images
        Route::post('/projects/{project}/images', [AdminProjectController::class, 'storeImage'])->name('admin.projects.images.store');
        Route::delete('/projects/{project}/images/{image}', [AdminProjectController::class, 'deleteImage'])->name('admin.projects.images.delete');
    });
});
