<?php

Route::get('/', function () {
    return view('layout.bodyContent');
});
Route::get('/contactUs', function () {
    return view('pages.contactus');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/galleryVehicle', function () {
    return view('pages.galleryVehicle');
});
Route::get('/packages', function () {
    return view('pages.packages');
});
Route::get('/USERLogin', function () {
    return view('pages.account');
});
Route::get('/USERAdminHomeMenu', function () {
    return view('admin.adminMenu');
});
Route::get('/USERAdminGallery', function () {
    return view('admin.manageGallery');
});
Route::get('/USERAdminOffer', function () {
    return view('admin.manageSpecialOffer');
});
Route::get('/USERAdminAccount', function () {
    return view('admin.manageAccount');
});
Route::get('/adminVehicle', function () {
    return view('admin.adminVehicle');
});
Route::get('/adminStory', function () {
    return view('admin.adminStory');
});

Route::get('/sendbasicemail','MailController@basic_email');

//----------------------------------------------------------------------------------------------------------
// Controllers
Route::post('/LoginAuth', 'AdminController@loginAuth');
Route::get('/LogoutAuth', 'AdminController@logoutAuth');
Route::post('/imageVehicleUpload', 'AdminController@imageVehicleUpload');
Route::post('/imageStoryUpload', 'AdminController@imageStoryUpload');
Route::get('/deletePicStory', 'AdminController@deletePicStory');
Route::get('/deletePicVehicle', 'AdminController@deletePicVehicle');
Route::get('/forgotPassword', 'AdminController@forgotPassword');
Route::post('/resetPass', 'AdminController@resetPass');

// Route::post('/save_admin', 'staffAdminController@saveAdmin');