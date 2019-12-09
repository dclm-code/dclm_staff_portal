<?php
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

Route::get(
    '/', function () {
        return view('welcome');
    }
);

Route::get(
    'logout', function () {
        Auth::logout();
        redirect('/');
    }
);

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Web routes for countries
 */
Route::get(
    'countries/getFile', 'CountryController@getFile'
)->name('countries.getFile');

Route::post(
    'countries/upload', 'CountryController@upload'
)->name('countries.upload');

Route::resource('countries', 'CountryController');

/**
 * Web routes for departments
 */
Route::get(
    'departments/getFile', 'DepartmentController@getFile'
)->name('departments.getFile');

Route::post(
    'departments/upload', 'DepartmentController@upload'
)->name('departments.upload');

Route::resource('departments', 'DepartmentController');

/**
 * Web routes for disciplines
 */
Route::get(
    'disciplines/getFile', 'DisciplineController@getFile'
)->name('disciplines.getFile');

Route::post(
    'disciplines/upload', 'DisciplineController@upload'
)->name('disciplines.upload');

Route::resource('disciplines', 'DisciplineController');

/**
 * Web routes for document_types
 */
Route::get(
    'document_types/getFile', 'DocumentTypeController@getFile'
)->name('document_types.getFile');

Route::post(
    'document_types/upload', 'DocumentTypeController@upload'
)->name('document_types.upload');

Route::resource('document_types', 'DocumentTypeController');

/**
 * Web routes for documents
 */
Route::get(
    'documents/getFile', 'DocumentController@getFile'
)->name('documents.getFile');

Route::post(
    'documents/upload', 'DocumentController@upload'
)->name('documents.upload');

Route::resource('documents', 'DocumentController');

/**
 * Web routes for fuels
 */
Route::get('fuels/getFile', 'FuelController@getFile')->name('fuels.getFile');
Route::post('fuels/upload', 'FuelController@upload')->name('fuels.upload');
Route::resource('fuels', 'FuelController');

/**
 * Web routes for grade_levels
 */
Route::get(
    'grade_levels/getFile', 'GradeLevelController@getFile'
)->name('grade_levels.getFile');

Route::post(
    'grade_levels/upload', 'GradeLevelController@upload'
)->name('grade_levels.upload');

Route::resource('grade_levels', 'GradeLevelController');

/**
 * Web routes for group_lgas
 */
Route::get(
    'group_lgas/getFile', 'GroupLgaController@getFile'
)->name('group_lgas.getFile');

Route::post('group_lgas/upload', 'GroupLgaController@upload')->name('group_lgas.upload');
Route::resource('group_lgas','GroupLgaController');

/**
 * Web routes for leave_approvals
 */
Route::get('leave_approvals/getFile', 'LeaveApprovalController@getFile')->name('leave_approvals.getFile');
Route::post('leave_approvals/upload', 'LeaveApprovalController@upload')->name('leave_approvals.upload');
Route::resource('leave_approvals','LeaveApprovalController');

/**
 * Web routes for leave_remarks
 */
Route::get('leave_remarks/getFile', 'LeaveRemarkController@getFile')->name('leave_remarks.getFile');
Route::post('leave_remarks/upload', 'LeaveRemarkController@upload')->name('leave_remarks.upload');
Route::resource('leave_remarks','LeaveRemarkController');

/**
 * Web routes for leaves
 */
Route::get('leaves/getFile', 'LeafeController@getFile')->name('leaves.getFile');
Route::post('leaves/upload', 'LeafeController@upload')->name('leaves.upload');
Route::resource('leaves','LeafeController');

/**
 * Web routes for locations
 */
Route::get('locations/getFile', 'LocationController@getFile')->name('locations.getFile');
Route::post('locations/upload', 'LocationController@upload')->name('locations.upload');
Route::resource('locations','LocationController');

/**
 * Web routes for messages
 */
Route::get('messages/getFile', 'MessageController@getFile')->name('messages.getFile');
Route::post('messages/upload', 'MessageController@upload')->name('messages.upload');
Route::resource('messages','MessageController');

/**
 * Web routes for next_of_kins
 */
Route::get('next_of_kins/getFile', 'NextOfKinController@getFile')->name('next_of_kins.getFile');
Route::post('next_of_kins/upload', 'NextOfKinController@upload')->name('next_of_kins.upload');
Route::resource('next_of_kins','NextOfKinController');

/**
 * Web routes for password_resets
 */
Route::get('password_resets/getFile', 'PasswordResetController@getFile')->name('password_resets.getFile');
Route::post('password_resets/upload', 'PasswordResetController@upload')->name('password_resets.upload');
Route::resource('password_resets','PasswordResetController');

/**
 * Web routes for promotions
 */
Route::get('promotions/getFile', 'PromotionController@getFile')->name('promotions.getFile');
Route::post('promotions/upload', 'PromotionController@upload')->name('promotions.upload');
Route::resource('promotions','PromotionController');

/**
 * Web routes for qualifications
 */
Route::get('qualifications/getFile', 'QualificationController@getFile')->name('qualifications.getFile');
Route::post('qualifications/upload', 'QualificationController@upload')->name('qualifications.upload');
Route::resource('qualifications','QualificationController');

/**
 * Web routes for recommendations
 */
Route::get('recommendations/getFile', 'RecommendationController@getFile')->name('recommendations.getFile');
Route::post('recommendations/upload', 'RecommendationController@upload')->name('recommendations.upload');
Route::resource('recommendations','RecommendationController');

/**
 * Web routes for regions
 */
Route::get('regions/getFile', 'RegionController@getFile')->name('regions.getFile');
Route::post('regions/upload', 'RegionController@upload')->name('regions.upload');
Route::resource('regions','RegionController');

/**
 * Web routes for roles
 */
Route::get('roles/getFile', 'RoleController@getFile')->name('roles.getFile');
Route::post('roles/upload', 'RoleController@upload')->name('roles.upload');
Route::resource('roles','RoleController');

/**
 * Web routes for sections
 */
Route::get('sections/getFile', 'SectionController@getFile')->name('sections.getFile');
Route::post('sections/upload', 'SectionController@upload')->name('sections.upload');
Route::resource('sections','SectionController');

/**
 * Web routes for staff
 */
Route::get('staff/getFile', 'StaffController@getFile')->name('staff.getFile');
Route::post('staff/upload', 'StaffController@upload')->name('staff.upload');
Route::resource('staff','StaffController');

/**
 * Web routes for states
 */
Route::get('states/getFile', 'StateController@getFile')->name('states.getFile');
Route::post('states/upload', 'StateController@upload')->name('states.upload');
Route::resource('states','StateController');

/**
 * Web routes for users
 */
Route::get('users/getFile', 'UserController@getFile')->name('users.getFile');
Route::post('users/upload', 'UserController@upload')->name('users.upload');
Route::resource('users','UserController');

