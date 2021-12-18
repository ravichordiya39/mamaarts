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

Route::get('/superadmin', function () {
    return view('superadminlogin');
});
Route::get('/adminlogin', function () {
    return view('login');
});

Route::post('superadminlogin', 'Auth\LoginController@superadminlogin')->name('superadminlogin');
Route::get('/', 'FrontController@index', function(){dd("hgjh");})->name('home');
Route::get('/jp', 'FrontController@uk')->name('uk');
Route::get('/uk', 'FrontController@uk')->name('uk');
Route::get('/blogs', 'FrontController@blogs')->name('blogs');
Route::get('/read-post/{slug}', 'FrontController@readpost')->name('read-post');
Route::get('/testemail', 'FrontController@testemail')->name('testemail');
Route::get('/pages/{slug}', 'FrontController@pagedata')->name('pagedata');
Route::get('/products', 'FrontController@product')->name('product');
Route::get('/our-clients', 'FrontController@clients')->name('clients');
Route::get('/virtual-show', 'FrontController@virtualshow')->name('virtualshow');
Route::get('/our-photo-gallery', 'FrontController@photo_gallery')->name('photo_gallery');
Route::get('/our-video-gallery', 'FrontController@video_gallery')->name('video_gallery');
Route::get('/get-products/{slug}', 'FrontController@getproduct')->name('getproduct');
Route::post('/send-enquiry', 'FrontController@sendenquiry')->name('sendenquiry');
Auth::routes();
Route::get('/post-blog', 'HomeController@blogs')->name('post-blog');
Route::get('/edit-blog/{slug}', 'HomeController@edit_blogs')->name('edit-blog');
Route::get('/delete-blog/{slug}', 'HomeController@deleteblog')->name('delete-blog');
Route::get('/view-blog', 'HomeController@view_blogs')->name('view-blog');
Route::post('/post-blog', 'HomeController@save_blogs')->name('save-blog');
Route::post('/update-blog', 'HomeController@updateblog')->name('update-blog');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all-products', 'HomeController@products')->name('allproducts'); 
Route::get('/home-content', 'HomeController@homecontent')->name('homecontent');
Route::get('/about-content', 'HomeController@aboutcontent')->name('aboutcontent');
Route::get('/our-business', 'HomeController@ourbusinesscontent')->name('ourbusinesscontent');
Route::get('/we-the-people', 'HomeController@wepeople')->name('wepeople');
Route::get('/recognition', 'HomeController@recognition')->name('recognition');
Route::get('/complaince', 'HomeController@complaince')->name('complaince');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/infrastructure', 'HomeController@infrastructure')->name('infrastructure');
Route::get('/add-pages', 'HomeController@add')->name('add');
Route::get('/view-pages', 'HomeController@view')->name('view');
Route::get('/add-links', 'HomeController@addlinks')->name('addlinks');
Route::get('/add-user', 'HomeController@adduser')->name('adduser');
Route::get('/view-user', 'HomeController@viewuser')->name('viewuser');
Route::post('/user/adduser', 'HomeController@makeuser')->name('makeuser');
Route::post('/user/updateuser', 'HomeController@updateuser')->name('updateuser');


Route::get('/videogallery', 'HomeController@videogallery')->name('videogallery');   
Route::get('/editvideogallery/{id}', 'HomeController@editvideogallery')->name('editvideogallery');
Route::get('/photogallery', 'HomeController@photogallery')->name('photogallery');
Route::get('/editphotogallery/{id}', 'HomeController@editphotogallery')->name('editphotogallery');
Route::get('/edituser/{id}', 'HomeController@edituser')->name('edituser');

Route::get('/enquiries', 'HomeController@enquiries')->name('enquiries');
Route::post('/savevideogallery', 'HomeController@savevideogallery')->name('savevideogallery');
Route::post('/savephotogallery', 'HomeController@savephotogallery')->name('savephotogallery');
Route::post('/updatevideogallery', 'HomeController@updatevideogallery')->name('updatevideogallery');
Route::post('/updatephotogallery', 'HomeController@updatephotogallery')->name('updatephotogallery');
Route::get('/deletevideogalllery/{id}', 'HomeController@deletevideogalllery')->name('deletevideogalllery');
Route::get('/deletephotogallery/{id}', 'HomeController@deletephotogallery')->name('deletephotogallery');
Route::get('/deleteuser/{id}', 'HomeController@deleteuser')->name('deleteuser');



Route::get('/delete-links/{id}', 'HomeController@deletelinks')->name('deletelinks');
Route::get('/editbusinesspara/{id}', 'HomeController@editbusinesspara')->name('editbusinesspara');
Route::get('/editcontact/{id}', 'HomeController@editcontact')->name('editcontact');
Route::get('/editrecognitionteam/{id}', 'HomeController@editrecognitionteam')->name('editrecognitionteam');
Route::get('/editrecognition/{id}', 'HomeController@editrecognition')->name('editrecognition');
Route::get('/editweteam/{id}', 'HomeController@editweteam')->name('editweteam');
Route::get('/editcomcontent/{id}', 'HomeController@editcomcontent')->name('editcomcontent');
Route::get('/editwepeople/{id}', 'HomeController@editwepeople')->name('editwepeople');
Route::get('/editclientpara/{id}', 'HomeController@editclientpara')->name('editclientpara');

Route::get('/product-category', 'HomeController@productcategory')->name('productcategory');
Route::get('/clients', 'HomeController@clients')->name('clients');
Route::get('/testimonials', 'HomeController@testimonials')->name('clients');


Route::get('/editpage/{id}', 'HomeController@editpage')->name('editpage');
Route::get('/edit-links/{id}', 'HomeController@editlinks')->name('editlinks');
Route::get('/editabout/{id}', 'HomeController@editabout')->name('editabout');
Route::get('/editbusiness/{id}', 'HomeController@editbusiness')->name('editbusiness');
Route::get('/edittestimonial/{id}', 'HomeController@edittestimonial')->name('edittestimonial');
Route::get('/editproducts/{id}', 'HomeController@editproducts')->name('editproducts');


Route::get('/updatehome/{id}/{id2}', 'HomeController@updatehome')->name('updatehome');
Route::get('/deletehome/{id}', 'HomeController@deletehome')->name('deletehome');
Route::get('/deleteabout/{id}', 'HomeController@deleteabout')->name('deleteabout');
Route::get('/deletebusiness/{id}', 'HomeController@deletebusiness')->name('deletebusiness');
Route::get('/deletewepeople/{id}', 'HomeController@deletewepeople')->name('deletewepeople');
Route::get('/deleteweteam/{id}', 'HomeController@deleteweteam')->name('deleteweteam');
Route::get('/deleterecognition/{id}', 'HomeController@deleterecognition')->name('deleterecognition');
Route::get('/deleterecognitionteam/{id}', 'HomeController@deleterecognitionteam')->name('deleterecognitionteam');
Route::get('/deletephoto/{id}', 'HomeController@deletephoto')->name('deletephoto');
Route::get('/deletevideo/{id}', 'HomeController@deletevideo')->name('deletevideo');
Route::get('/deletecompara/{id}', 'HomeController@deletecompara')->name('deletecompara');
Route::get('/deletecomcontent/{id}', 'HomeController@deletecomcontent')->name('deletecomcontent');
Route::get('/deletecontact/{id}', 'HomeController@deletecontact')->name('deletecontact');
Route::get('/deletepage/{id}', 'HomeController@deletepage')->name('deletepage');
Route::get('/deletebusinesspara/{id}', 'HomeController@deletebusinesspara')->name('deletebusinesspara');
Route::get('/editinfra/{id}', 'HomeController@editinfra')->name('editinfra');
Route::get('/editcompara/{id}', 'HomeController@editcompara')->name('editcompara'); 
Route::get('/editclientlogo/{id}', 'HomeController@editclientlogo')->name('editclientlogo'); 

Route::get('/editcategory/{id}', 'HomeController@editcategory')->name('editcategory'); 

Route::get('/deleteenquiry/{id}', 'HomeController@deleteenquiry')->name('deleteenquiry'); 
Route::get('/deletecategory/{id}', 'HomeController@deletecategory')->name('deletecategory'); 
Route::get('/deleteproducts/{id}', 'HomeController@deleteproducts')->name('deleteproducts'); 
Route::get('/deleteclientlogo/{id}', 'HomeController@deleteclientlogo')->name('deleteclientlogo'); 
Route::get('/deleteclient/{id}', 'HomeController@deleteclient')->name('deleteclient'); 
Route::get('/deletetestimonial/{id}', 'HomeController@deletetestimonial')->name('deletetestimonial'); 


Route::post('categorymaster', 'HomeController@categorymaster')->name('categorymaster'); 
Route::post('video/save', 'HomeController@savevideo')->name('savevideo'); 
Route::post('about/save', 'HomeController@saveabout')->name('saveabout');
Route::post('about/update', 'HomeController@updateabout')->name('updateabout');
Route::post('ourbusiness/save', 'HomeController@saveourbusiness')->name('saveourbusiness');
Route::post('ourbusiness/updateourbusiness', 'HomeController@updateourbusiness')->name('updateourbusiness');
Route::post('ourbusiness/savebusinesspara', 'HomeController@savebusinesspara')->name('savebusinesspara');
Route::post('ourbusiness/updatebusinesspara', 'HomeController@updatebusinesspara')->name('updatebusinesspara');
Route::post('wepeople/save', 'HomeController@savewepeople')->name('savewepeople');
Route::post('wepeople/saveteam', 'HomeController@saveteam')->name('saveteam');
Route::post('recognition/saveteam', 'HomeController@saverteam')->name('saverteam');
Route::post('recognition/recognitionpara', 'HomeController@saverecognitionpara')->name('saverecognitionpara');
Route::post('compliance/savepara', 'HomeController@savepara')->name('savepara');
Route::post('compliance/save', 'HomeController@savecompliance')->name('savecompliance');
Route::post('contact/save', 'HomeController@savecontact')->name('savecontact');
Route::post('infrastructure/saveinfra', 'HomeController@saveinfra')->name('saveinfra');
Route::post('infrastructure/saveimages', 'HomeController@saveimages')->name('saveimages');
Route::post('cms/savepage', 'HomeController@savepage')->name('savepage');
Route::post('clients/saveclients', 'HomeController@saveclients')->name('saveclients');
Route::post('cms/updatepage', 'HomeController@updatepage')->name('updatepage');
Route::post('links/savelinks', 'HomeController@savelinks')->name('savelinks');
Route::post('links/updatelinks', 'HomeController@updatelinks')->name('updatelinks');
Route::post('contact/updatecontact', 'HomeController@updatecontact')->name('updatecontact');
Route::post('recognition/updateteam', 'HomeController@updateteam')->name('updateteam');
Route::post('recognition/updaterecognitionpara', 'HomeController@updaterecognitionpara')->name('updaterecognitionpara');
Route::post('wepeople/updatewpteam', 'HomeController@updatewpteam')->name('updatewpteam');
Route::post('infrastructure/updateinfra', 'HomeController@updateinfra')->name('updateinfra');
Route::post('compliance/updatecompara', 'HomeController@updatecompara')->name('updatecompara');
Route::post('compliance/updatecomplaince', 'HomeController@updatecomplaince')->name('updatecomplaince');

Route::post('product/save', 'HomeController@savecategory')->name('savecategory');
Route::post('product/addproduct', 'HomeController@addproduct')->name('addproduct');

Route::post('product/updatecategory', 'HomeController@updatecategory')->name('updatecategory');
Route::post('wepeople/updatewecontent', 'HomeController@updatewecontent')->name('updatewecontent');
Route::post('clients/savepara', 'HomeController@saveclientspara')->name('saveclientspara');
Route::post('clients/savetestimonials', 'HomeController@savetestimonials')->name('savetestimonials');
Route::post('clients/updatetestimonials', 'HomeController@updatetestimonials')->name('updatetestimonials');
Route::post('clients/updateclientslogo', 'HomeController@updateclientslogo')->name('updateclientslogo');
Route::post('clients/updatepara', 'HomeController@updateparacontent')->name('updateparacontent');
Route::post('product/updateproduct', 'HomeController@updateproduct')->name('updateproduct');







