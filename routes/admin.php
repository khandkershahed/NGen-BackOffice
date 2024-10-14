<?php

use App\Models\EmployeeProject;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RfqController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\EmailSettingController;
use App\Http\Controllers\Admin\EmployeeTaskController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\EmployeeProjecController;
use App\Http\Controllers\Admin\TeamManagementController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\EmployeeProjectController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::middleware('guest:admin')->name('admin.')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('check-password', [PasswordController::class, 'checkPassword'])->name('checkPassword');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::resources(
        [
            // 'faq-category'    => FaqCategoryController::class, //done
        ],
        ['except' => ['show', 'index', 'create', 'edit']]
    );
    Route::resources(
        [
            // 'faq'             => FaqController::class,
        ],
        ['except' => ['show', 'create', 'edit']]
    );
    Route::resources(
        [
            'role' => RoleController::class,
            'permission' => PermissionController::class,
            'email-settings' => EmailSettingController::class,
        ],
        ['except' => ['show']]
    );
    Route::resources(
        [
            'user'                  => UserController::class, //done
            'staff'                 => StaffController::class, //done
            'user-management'       => UserManagementController::class, //done
            'admin-managemnet'      => UserManagementController::class, //done
            'team-managemnet'       => TeamManagementController::class, //done
            'brands'                => BrandController::class, //done
            'contacts'              => ContactController::class,
            'product'               => ProductController::class,
            'employee-task'         => EmployeeTaskController::class,
            'employee-task'         => EmployeeTaskController::class,
            'rfq'                   => RfqController::class,
        ],
    );

    // Route::controller(StockManagementController::class)->group(function () {
    //     Route::get('/stock-management', 'index')->name('stock-management.index');
    // });
    // Route::controller(OrderManagementController::class)->group(function () {
    //     Route::get('/order-management', 'index')->name('order-management.index');
    //     Route::get('/order/{id}/details', 'orderDetails')->name('orderDetails');
    //     Route::get('/order/report', 'orderReport')->name('orderReport');
    // });

    Route::get('active-mail-configuration', [EmailSettingController::class, 'activeMailConfiguration'])->name('active.mail.configuration');
    Route::put('email-settings', [EmailSettingController::class, 'emailUpdateOrCreate'])->name('email.settings.updateOrCreate');
    Route::post('send-test-mail', [EmailSettingController::class, 'sendTestMail'])->name('send.test.mail');

    Route::post('email-settings/toggle-status/{id}', [EmailSettingController::class, 'toggleStatus'])->name('email-settings.toggle-status');

    Route::get('/backup', [Controller::class, 'downloadBackup']);

    Route::get('role/{roleId}/give-permission', [RoleController::class, 'givePermission'])->name('role.give-permission');
    Route::patch('role/{roleId}/give-permission', [RoleController::class, 'storePermission'])->name('role.store-permission');

    Route::delete('multiimage/{id}', [ProductController::class, 'multiImageDestroy'])->name('multiimage.destroy');

    Route::get('activity_logs', [ActivityLogController::class, 'index'])->name('activity_logs.index');
    Route::get('activity_logs/{activity_log}', [ActivityLogController::class, 'show'])->name('activity_logs.show');
    Route::delete('activity_logs/{activity_log}', [ActivityLogController::class, 'destroy'])->name('activity_logs.destroy');

    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'updateOrcreateSetting'])->name('settings.updateOrCreate');

    //employee-project-status
    Route::put('/admin/employee-project/status/{id}', [EmployeeProjectController::class, 'updateStatus'])->name('status.update');
    //employee-task-status
    Route::put('/admin/employee-task/status/{id}', [EmployeeTaskController::class, 'updateStatusTask'])->name('status.update.task');
});
