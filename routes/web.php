<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MenuLabelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SoftwareSettingsController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\UserThemeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdmissionDataController;
use App\Http\Controllers\TeamController;

// fronted 
use App\Http\Controllers\frontedController;
use App\Http\Controllers\HomeSettingController;


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

// fronted 
Route::controller(frontedController::class)->group(function () {
    Route::get('/', 'index');    
    Route::get('/about', 'about');
    Route::get('/graphic_design', 'graphic_design');
    Route::get('/web_design', 'web_design');
    Route::get('/web_dev', 'web_dev');
    Route::get('/app_dev', 'app_dev');
    Route::get('/ecommerce', 'ecommerce');
    Route::get('/seo', 'seo');
    Route::get('/team', 'team');
    Route::get('/clients', 'clients');
    Route::get('/data_entry', 'data_entry');
    Route::get('/web_app', 'web_app');
    Route::get('/customize', 'customize');
    Route::get('/contact', 'contact');
    Route::get('/photo_gallery', 'photo_gallery');
    Route::post('/sendMessage', 'sendMessage');
    Route::get('/admission', 'admission');
    Route::post('/OurCourse', 'OurCourse');
});
    

Route::resources([
    'home_setting'    => HomeSettingController::class,
 
]);

// fronted end 

// Route::get('/', function () {
    //return date('h:i:s a');
    // return(config('app.locale'));
    // return Hash::make('super@123');
    // return redirect('/login');

// });

Route::get('/agent',[BackendController::class,'agent']);

Route::post('changeLocale',[LanguageController::class,'changeLocale']);

// use change password
Route::get('reset_pass',[UserController::class,'reset_pass'])->name('user.reset_pass');
Route::post('submit_email',[UserController::class,'submit_email'])->name('user.submit_email');
Route::get('check_otp/{email}',[UserController::class,'check_otp'])->name('user.check_otp');
Route::get('checkingOtp/{otp}/{email}',[UserController::class,'checkingOtp']);
Route::get('resend_otp/{email}',[UserController::class,'resend_otp'])->name('user.resend_otp');
Route::post('submit_otp/{email}',[UserController::class,'submit_otp'])->name('user.submit_otp');
Route::get('new_pass/{email}',[UserController::class,'new_pass'])->name('user.new_pass');
Route::post('submit_pass',[UserController::class,'submit_pass'])->name('user.submit_pass');

Route::group(['middleware' => ['can:Dashboard index']], function () {

Route::post('webcamStore',[BackendController::class,'webcam'])->name('webcam.capture');

Route::get('/dashboard',[BackendController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard.index');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('getQuickMenu',[UserController::class,'getQuickMenu']);

    Route::resources([
        'menu_label'    => MenuLabelController::class,
        'user'          => UserController::class,
        'role'          => RoleController::class,
        'branch'        => BranchController::class,
        'menu'          => MenuController::class,
        'software_info' => SoftwareSettingsController::class,
        'user_theme' => UserThemeController::class,
        'messages' => MessageController::class,
        'admission_data' => AdmissionDataController::class,
        'our_team' => TeamController::class,
   ]);

    Route::get('retrive_message/{id}', [MessageController::class, 'retrive_message']);
    Route::get('permenantMessageDelete/{id}', [MessageController::class, 'permenantMessageDelete']);

    Route::get('retrive_student_admission/{id}', [AdmissionDataController::class, 'retrive_student_admission']);
    Route::get('permenantadmissionDelete/{id}', [AdmissionDataController::class, 'permenantadmissionDelete']);
    /*
    menu label extra routes are below
    */
    Route::get('menu_label_trash_list',[MenuLabelController::class,'trash_list'])->name('menu_label.trash_list');
    Route::get('menu_label_restore/{id}',[MenuLabelController::class,'restore'])->name('menu_label.restore');
    Route::get('menu_label_delete/{id}',[MenuLabelController::class,'delete'])->name('menu_label.delete');
    Route::get('menu_label_properties/{id}',[MenuLabelController::class,'properties'])->name('menu_label.properties');
    /* ==== */

    /*
    role extra routes are below
    */
    Route::get('role_trash_list',[RoleController::class,'trash_list'])->name('role.trash_list');
    Route::get('role_restore/{id}',[RoleController::class,'restore'])->name('role.restore');
    Route::get('role_delete/{id}',[RoleController::class,'delete'])->name('role.delete');
    Route::get('role_properties/{id}',[RoleController::class,'properties'])->name('role.properties');
    Route::post('role_permission/{id}',[RoleController::class,'permission'])->name('role.permission');
    /* ==== */


    /*
    branch extra routes are below
    */
    Route::get('branch_trash_list',[BranchController::class,'trash_list'])->name('branch.trash_list');
    Route::get('branch_restore/{id}',[BranchController::class,'restore'])->name('branch.restore');
    Route::get('branch_delete/{id}',[BranchController::class,'delete'])->name('branch.delete');
    Route::get('branch_properties/{id}',[BranchController::class,'properties'])->name('branch.properties');
    /* ==== */


    /*
    user extra routes are below
    */
    Route::get('user_trash_list',[UserController::class,'trash_list'])->name('user.trash_list');
    Route::get('user_restore/{id}',[UserController::class,'restore'])->name('user.restore');
    Route::get('user_delete/{id}',[UserController::class,'delete'])->name('user.delete');
    Route::get('user_properties/{id}',[UserController::class,'properties'])->name('user.properties');
    Route::post('user_image_upload',[UserController::class,'user_image_upload'])->name('user.image_update');
    Route::post('user_activity',[UserController::class,'user_activity'])->name('user.activity');

    /* ==== */


    /*
    menu extra routes are below
    */
    Route::post('menu_status_change',[MenuController::class,'status'])->name('menu.status');
    Route::get('menu_trash_list',[MenuController::class,'trash_list'])->name('menu.trash_list');
    Route::get('menu_restore/{id}',[MenuController::class,'restore'])->name('menu.restore');
    Route::get('menu_delete/{id}',[MenuController::class,'delete'])->name('menu.delete');
    Route::get('menu_properties/{id}',[MenuController::class,'properties'])->name('menu.properties');

    /* ==== */

});

require __DIR__.'/auth.php';
