<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*//**
* Users registration endpoint.
*/
Route::post('register', 'Auth\RegisterController@register');

/**
 * User e-mail verification endpoint
 */
Route::post('verify', 'Auth\RegisterController@verifymail');

/**
 *  Login route (endpoint)
 */
Route::post('login', 'Auth\LoginController@login');

/**
 * Logout route (endpoint)
 */
Route::post('logout', 'Auth\LoginController@logout');

/**
 * Password reset endpoint
 */
Route::post('password/email', 'Auth\ForgotPasswordController@getResetToken');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

/**
 * API endpoints for country
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('country', 'CountryController');


/**
 * API endpoints for department
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('department', 'DepartmentController');


/**
 * API endpoints for discipline
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('discipline', 'DisciplineController');


/**
 * API endpoints for document_type
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('document_type', 'DocumentTypeController');


/**
 * API endpoints for document
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('document', 'DocumentController');


/**
 * API endpoints for fuel
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('fuel', 'FuelController');


/**
 * API endpoints for grade_level
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('grade_level', 'GradeLevelController');


/**
 * API endpoints for group_lga
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('group_lga', 'GroupLgaController');


/**
 * API endpoints for leave_approval
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('leave_approval', 'LeaveApprovalController');


/**
 * API endpoints for leave_remark
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('leave_remark', 'LeaveRemarkController');


/**
 * API endpoints for leafe
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('leafe', 'LeafeController');


/**
 * API endpoints for location
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('location', 'LocationController');


/**
 * API endpoints for message
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('message', 'MessageController');


/**
 * API endpoints for next_of_kin
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('next_of_kin', 'NextOfKinController');


/**
 * API endpoints for password_reset
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('password_reset', 'PasswordResetController');


/**
 * API endpoints for promotion
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('promotion', 'PromotionController');


/**
 * API endpoints for qualification
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('qualification', 'QualificationController');


/**
 * API endpoints for recommendation
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('recommendation', 'RecommendationController');


/**
 * API endpoints for region
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('region', 'RegionController');


/**
 * API endpoints for role
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('role', 'RoleController');


/**
 * API endpoints for section
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('section', 'SectionController');


/**
 * API endpoints for staff
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('staff', 'StaffController');


/**
 * API endpoints for state
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('state', 'StateController');


/**
 * API endpoints for user
 * responding to all API calls
 * GET, POST, PUT/PATCH, DELETE
 */
Route::apiResource('user', 'UserController');
