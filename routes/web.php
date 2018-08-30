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
Route::get('/about', function () {
    return view('pages.about');
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

//province
Route::get('/central', function () {
    return view('ExploreSL.central');
});
Route::get('/west', function () {
    return view('ExploreSL.west');
});
Route::get('/east', function () {
    return view('ExploreSL.east');
});
Route::get('/south', function () {
    return view('ExploreSL.south');
});
Route::get('/north', function () {
    return view('ExploreSL.north');
});

//packages
Route::get('/one', function () {
    return view('packages.one');
});
Route::get('/two', function () {
    return view('packages.two');
});
Route::get('/three', function () {
    return view('packages.three');
});
Route::get('/four', function () {
    return view('packages.four');
});


// Route::get('/sendbasicemail','MailController@basic_email');

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
Route::post('/contactus', 'contactusController@contactus');
Route::post('/requestMoreDetails1', 'packagesController@packageContactPackage1');
Route::post('/requestMoreDetails2', 'packagesController@packageContactPackage2');
Route::post('/requestMoreDetails3', 'packagesController@packageContactPackage3');
Route::post('/requestMoreDetails4', 'packagesController@packageContactPackage4');





// Route::post('/save_admin', 'staffAdminController@saveAdmin');