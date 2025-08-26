<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NeedHelpController;
use App\Http\Controllers\WantHelpController;
use App\Http\Controllers\ProjectInfoController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ProjectInsertController;
use App\Http\Controllers\ProjectImageController;
use App\Http\Controllers\ProjectVideoController;
use App\Http\Controllers\ProjectImageViewController;
use App\Http\Controllers\NeedController;
use App\Http\Controllers\WantController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CorporateInfoController;
use App\Http\Controllers\InvestorRelationController;
use App\Http\Controllers\NewsEventsController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\Auth\MemberLoginController;
use App\Http\Middleware\MemberAuthenticate;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\Auth\RegisteredUserController;




Route::get('/', [FrontEndController::class, 'index']);
Route::get('/about-us', [FrontEndController::class,'about']);
Route::get('/corporate-info', [FrontEndController::class,'corporateinfo']);
Route::get('/investor-relation', [FrontEndController::class,'investor_relation']);
Route::get('/investor-relation', [FrontEndController::class,'investor_relation']);
Route::get('/news-events', [FrontEndController::class,'news_events']);
Route::get('/member-login', [FrontEndController::class,'member_login']);
Route::get('/get-thanas/{district_id}', [LocationController::class, 'getThanas'])->name('get.thanas');



Route::post('/member-login', [MemberLoginController::class, 'member_login']);
Route::get('/member/logout', [MemberLoginController::class, 'logout'])->name('member.logout');

Route::middleware('auth:member')->group(function () {
    Route::get('/member/dashboard', function () {
     return view('member_dashboard');
    });
});


Route::get('/signup', [SignupController::class,'signup']);
Route::post('/save-signup', [SignupController::class,'store']);
Route::post('/check-reference', [SignupController::class, 'checkReference'])->name('check.reference');

Route::get('/need-help', [NeedHelpController::class,'need']);
Route::post('/save-need-help', [NeedHelpController::class,'storeNeed']);

Route::get('/contact-us', [WantHelpController::class,'want']);
Route::post('/save-want-help', [WantHelpController::class,'storeWant']);

Route::get('/project', [ProjectInfoController::class,'projectShow']);
Route::get('/project-view/{id}', [ProjectInfoController::class,'project']);





Route::middleware('auth')->group(function () {

Route::get('/team', [TeamController::class,'add']);
Route::post('/save-team', [TeamController::class,'store']);
Route::get('/team-view', [TeamController::class,'member']);
Route::get('/team-delete/{id}', [TeamController::class,'delete']);
Route::get('/team-update/{id}', [TeamController::class,'update']);
Route::post('/update-team', [TeamController::class,'update_team']);

Route::get('/video', [VideoController::class,'add']);
Route::post('/video-upload', 'VideoController@store');
Route::get('/video-upload', [VideoController::class,'store']);
Route::get('/video-view', [VideoController::class,'show']);
Route::get('/video-delete/{id}', [VideoController::class,'delete']);



Route::get('/insert', [ProjectInsertController::class,'project_insert']);
Route::post('/save-project-info', [ProjectInsertController::class,'projectStore']);

Route::get('/district-add', [LocationController::class,'district_add']);
Route::post('/district/store', [LocationController::class,'storeDistrict'])->name('district.store');
Route::get('/thana-add', [LocationController::class,'thana_add']);
Route::post('/thana/store', [LocationController::class,'storeThana'])->name('thana.store');
Route::get('/view-district', [LocationController::class,'viewDistrict']);
Route::get('/view-thana', [LocationController::class,'viewThana']);
Route::get('/edit-district/{id}', [LocationController::class,'editDistrict']);
Route::post('/update-district', [LocationController::class,'updateDistrict'])->name('district.update');
Route::get('/edit-thana/{id}', [LocationController::class,'editThana']);
Route::post('/update-thana', [LocationController::class,'updateThana'])->name('update.thana');

Route::get('/upload', [ProjectImageController::class,'upload_image']);
Route::post('/save-project-image', [ProjectImageController::class,'storeImage']);

Route::get('/delete-proimage/{id}', [ProjectImageController::class,'delete_img']);

Route::get('/upload-video', [ProjectVideoController::class,'upload_video']);
Route::post('/save-video', [ProjectVideoController::class,'store_video']);
Route::get('/delete-video/{id}', [ProjectVideoController::class,'delete']);


Route::get('/view-project', [ProjectImageViewController::class,'show_project']);
Route::get('/view-project-info/{id}', [ProjectImageViewController::class,'info_project']);

Route::get('/update-project-info/{id}', [ProjectInsertController::class,'update_project']);
Route::post('/update-project', [ProjectInsertController::class,'update']);
Route::get('/delete-project-info/{id}', [ProjectInsertController::class,'delete_project']);

Route::get('/need-help-view', [NeedController::class,'view_need']);
Route::get('/need-help-info/{id}', [NeedController::class,'info_need']);

Route::get('/want-help-view', [WantController::class,'view_want']);
Route::get('/want-help-info/{id}', [WantController::class,'info_want']);
Route::get('/slider-upload', [SliderController::class,'image_up']);

Route::post('/save-slider', [SliderController::class,'storeSlider']);

Route::get('/slider-view', [SliderController::class,'slider']);
Route::get('/delete-slider/{id}', [SliderController::class,'delete_slider']);
Route::get('/member-pending-info', [DashboardController::class,'member_pending_info']);
Route::get('/view/{id}', [DashboardController::class, 'member_info'])->name('view.member_info');
Route::get('/pending/{id}', [DashboardController::class, 'check'])->name('pending.check');
Route::get('/edit/{id}', [DashboardController::class, 'member_update'])->name('edit.member_update');
Route::post('/update/{id}', [DashboardController::class, 'update'])->name('update.registration');

Route::get('/member-check-info', [DashboardController::class,'member_checking_info']);
Route::get('/aproved/{id}', [DashboardController::class, 'aproved'])->name('aproved');
Route::get('/view-check-member/{id}', [DashboardController::class, 'check_member_info'])->name('view.check_member');
Route::get('/reject-member/{id}', [DashboardController::class, 'reject_member'])->name('reject');
Route::get('/member-aprove-list', [DashboardController::class, 'member_aproved_list']);




});




Route::get('/dashboard', [DashboardController::class, 'home'])
->middleware(['auth', 'verified'])
->name('dashboard');


Route::middleware('auth')->group(function () {
     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
