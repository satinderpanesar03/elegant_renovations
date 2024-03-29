<?php

use App\Http\Controllers\admin\AdminFAQController;
use App\Http\Controllers\admin\BannerImageController;
use App\Http\Controllers\admin\ChangePasswordController;
use App\Http\Controllers\admin\CommonController;
use App\Http\Controllers\admin\ContactUsController;
use App\Http\Controllers\admin\ContentPageController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DbBackupController;
use App\Http\Controllers\admin\DesignController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\StaffController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\user\AboutUsController;
use App\Http\Controllers\user\BlogController;
use App\Http\Controllers\user\GalleryController;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\PricingController;
use App\Http\Controllers\user\RenovationController;
use App\Http\Controllers\user\ServiceController;
use App\Http\Controllers\admin\BlogController as AdminBlogController;
use App\Http\Controllers\admin\BlogCtaegoryController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\GalleryController as GalleryControllerAdmin;
use App\Http\Controllers\user\ContactUsController as UserContactUsController;
use App\Models\Permission;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'doLogin'])->name('dologin');

    Route::group(['middleware' => 'isLogin'], function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        Route::controller(ProfileController::class)->group(function () {
            Route::get('profile', 'profile')->name('profile');
            Route::post('profile', 'updateProfile')->name('update.profile');
        });

        Route::controller(TestimonialController::class)->group(function () {
            Route::get('testimonial', 'index')->name('testimonial.index');
            Route::get('testimonial-create', 'create')->name('testimonial.create');
            Route::post('testimonial-store', 'store')->name('testimonial.store');
            Route::get('testimonial-show/{id}', 'show')->name('testimonial.show');
            Route::post('testimonial-update', 'update')->name('testimonial.update');
            Route::get('testimonial/{id}', 'delete')->name('testimonial.delete');
        });

        Route::controller(GalleryControllerAdmin::class)->group(function () {
            Route::get('gallery', 'index')->name('gallery.index');
            Route::get('gallery-create', 'create')->name('gallery.create');
            Route::post('gallery-store', 'store')->name('gallery.store');
            Route::get('gallery-show/{id}', 'show')->name('gallery.show');
            Route::post('gallery-update', 'update')->name('gallery.update');
            Route::get('gallery/{id}', 'delete')->name('gallery.delete');
        });

        Route::controller(DesignController::class)->group(function () {
            Route::get('design', 'index')->name('design.index');
            Route::get('design-create', 'create')->name('design.create');
            Route::post('design-store', 'store')->name('design.store');
            Route::get('design-show/{id}', 'show')->name('design.show');
            Route::post('design-update', 'update')->name('design.update');
            Route::get('design/{id}', 'delete')->name('design.delete');
        });

        Route::controller(ChangePasswordController::class)->group(function () {
            Route::get('change-password', 'changePasswordForm')->name('change.password.form');
            Route::post('change-password', 'changePassword')->name('change.password');
        });

        Route::controller(UserController::class)->group(function () {
            Route::post('user/block', 'userBlock')->name('user.block');
            Route::post('user/dective', 'userDective')->name('user.dective');
        });

        Route::controller(AdminBlogController::class)->group(function () {
            Route::get('blog', 'index')->name('blogs.index');
            Route::get('blog-create', 'create')->name('blogs.create');
            Route::post('blog-store', 'store')->name('blogs.store');
            Route::get('blog-edit/{id}', 'edit')->name('blogs.edit');
            Route::post('blog-update', 'update')->name('blogs.update');
            Route::get('blog-publish/{id}', 'publish')->name('blogs.publish');
        });

        Route::controller(SettingController::class)->group(function () {
            Route::get('setting', 'index')->name('setting.index');
            Route::post('setting-store', 'store')->name('setting.store');
        });

        Route::controller(BlogCtaegoryController::class)->group(function () {
            Route::get('blog-category', 'index')->name('blog.category.index');
            Route::get('blog-category-add', 'create')->name('blog.category.create');
            Route::post('blog-category-store', 'store')->name('blog.category.store');
            Route::get('blog-category-edit/{id}', 'edit')->name('blog.category.edit');
            Route::post('blog-category-update', 'update')->name('blog.category.update');
            Route::get('blog-category-delete/{id}', 'delete')->name('blog.category.delete');
        });

        Route::post('product-visibility', [ProductController::class, 'visibility'])->name('product.visibility');

        Route::resources([
            'user' => UserController::class,
            'product' => ProductController::class,
        ]);
            //Staff

        // Staff Module
        // Route::get('staff', [StaffController::class,'index'])->name('staff_listing');
        // Route::get('staff/add', [StaffController::class,'create'])->name('staff_add_form');;
        // Route::post('staff/add', [StaffController::class,'store'])->name('staff_store');;
        // Route::get('staff/view/{id}',  [StaffController::class,'show'])->name('staff_show');
        // Route::get('staff/view/{id}',  [StaffController::class,'show'])->name('staff_show');
        // Route::get('staff/edit/{id}', [StaffController::class,'edit'])->name('staff_edit');
        // Route::post('staff/edit', [StaffController::class,'update'])->name('staff_update');
        // Route::get('staff/block-unblock/{id}', [StaffController::class,'block_unblock'])->name('staff_block_unblock');

        // Route::get('staff/delete/{id}', [StaffController::class,'destroy'])->name('staff_destroy');


        Route::middleware("ensure_permission:".Permission::Faqs)->controller(AdminFAQController::class)->group(function() {
             // FAQ Module
            Route::get('faq', 'index')->name('Faqlisting');
            Route::get('faq/add', 'create')->name('faqadd');
            Route::post('faq/add', 'store')->name('faqstore');
            Route::get('faq/edit/{id}', 'edit')->name('faqedit');
            Route::put('faq/edit/{id}', 'update')->name('faqupdate');
            Route::get('faq/delete/{id}', 'destroy')->name('faqdelete');;
        });

        Route::middleware("ensure_permission:".Permission::Contents)->controller(ContentPageController::class)->group(function() {
            Route::get('/content/{page}', 'index')->name('content_show');
            Route::get('/content/{page}/edit', 'edit')->name('content_edit');
            Route::post('/content/{page}', 'store')->name('content_store_update');
        });

        Route::get('homepage', [BannerImageController::class,'index'])->name('homepage_listing');

        Route::get('homepage/add', [BannerImageController::class,'create'])->name('homepage_banner_add');
        Route::post('homepage/add', [BannerImageController::class,'store'])->name('homepage_banner_store');
        Route::get('homepage/edit/{id}', [BannerImageController::class,'edit'])->name('homepage_banner_edit');

        Route::post('homepage/edit/{id}', [BannerImageController::class,'update'])->name('homepage_banner_update');
        Route::get('homepage/delete/{id}', [BannerImageController::class,'destroy'])->name('homepage_banner_delete');

        Route::middleware("ensure_permission:".Permission::Contact)->controller( ContactUsController::class)->group(function() {
            Route::get('/contact-us', 'index')->name('contactus');
            Route::get('/contact-us/{id}/delete', 'destroy')->name('contactus_delete');
            Route::get('/contact-us/{id}/resolved', 'resolved')->name('contactus.resolved');
            Route::get('/contact-us/{id}/pending', 'pending')->name('contactus.pending');
        });


        Route::middleware("ensure_permission:".Permission::DBBackup)->controller(DbBackupController::class)->group(function() {
            Route::get('database', 'index')->name('db.backup.form');
            Route::get('database-download', 'createDownload')->name('db.backup.download');

        });
    });
});
Route::get('/access-denied', function (){
    echo "access denied";
});

Route::get('/', function (){
   return redirect('/admin/login');
});
Route::get('images/{filename}', [CommonController::class,'show_image'])->name('image.displayImage');


//user routes
Route::group(['as' => 'user.'], function() {

    Route::controller(HomeController::class)->group(function(){
        Route::get('/', 'homePage');
    });
    Route::controller(ContentPageController::class)->group(function(){
        Route::get('/info/{page}', 'index_user')->name('content_static.index');
    });



    Route::controller(BlogController::class)->group(function(){
        Route::get('/blogs', 'index')->name('blogs.index');
        Route::get('/blog/{id}', 'blogDetail')->name('blog.detail.index');
    });

    Route::controller(AboutUsController::class)->group(function(){
        Route::get('/about-us', 'index')->name('aboutus.index');
    });

    Route::controller(GalleryController::class)->group(function(){
        Route::get('/gallery', 'index')->name('gallery.index');
    });

    Route::controller(PricingController::class)->group(function(){
        Route::get('/pricing', 'index')->name('pricing.index');
    });

    Route::controller(RenovationController::class)->group(function(){
        Route::get('/kitchen-renovation-calgary', 'KrCalgary')->name('kitchen.renovation.calgary');
        Route::get('/kitchen-renovation-edmonton', 'KrEdmonton')->name('kitchen.renovation.edmonton');
        Route::get('/homes-renovation-vancouver', 'KrVancouver')->name('kitchen.renovation.vancouver');
        Route::get('/kitchen-designer', 'kitchenDesign')->name('kitchen.designer');
        Route::get('/recent-design-listing/{id}', 'recentDesignListing')->name('recent.design.listing');
    });

    Route::controller(ServiceController::class)->group(function() {
        Route::get('/flooring-installation', 'flooring')->name('flooring.installation');
        Route::get('/building-services-in-vancouver', 'buildingServices')->name('building.services');
        Route::get('/basement-renovation-and-development', 'basementRenovation')->name('basement.renovation');
    });

    Route::controller(UserContactUsController::class)->group(function() {
        Route::get('contact-us', 'contactUs')->name('contact.us');
        Route::post('contact-us-store', 'store')->name('contact.us.store');
    });

})->middleware('track_visitor');

Route::get('/start-setup', [\App\Http\Controllers\SetupProjectController::class,'startSetup']);

Route::get('/run-command', [\App\Http\Controllers\SetupProjectController::class,'startSetupGet']);
