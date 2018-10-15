<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!/new_Email_Templates
|
*/

use \DrewM\MailChimp\MailChimp;

Route::get('/', 'frontend\HomeController@index')->name('home');
Route::post('/', function () {

$list_id = '6b24943d56'; // ListID
$MC_key = new Mailchimp('62a175812c7c4f5f058bfcea86ea89d8-us19'); //Mailchimp ID

$result = $MC_key->post("lists/$list_id/members", [
                'email_address' =>  request()->input('email'),
                'status'        => 'subscribed',
            ]);
            //when subscription successful, return to subscribe view
    return  redirect()->back();
});

Auth::routes(); 
Route::prefix('admin')->group(function() {
    Route::get('/login',
    'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
 
     Route::get('/', 'HomeController@index')->name('admin.dashboard');
Route::post('/admin/save','dashboard\AdminController@saved');
Route::post('/admin/saved','dashbo\AdminController@save');
Route::post('/profilad','dashboard\AdminController@upload');

Route::get('/Settings', 'dashboard\SettingsController@index');
Route::post('/Settings/save', 'dashboard\SettingsController@save');


Route::get('/Pages', 'dashboard\PagesController@index');
Route::get('/page/edit/{id}', 'dashboard\PagesController@edit');
Route::get('/page/view/{id}', 'dashboard\PagesController@view');
Route::get('/page/create', 'dashboard\PagesController@create');
Route::get('/page/delete/{id}', 'dashboard\PagesController@delete');
Route::post('/page/save/{id}','dashboard\PagesController@save');

Route::get('/Email_Templates', 'dashboard\EmailTemplatesController@index');
Route::get('/Email_Templates/edit/{id}', 'dashboard\EmailTemplatesController@edit');
Route::get('/Email_Templates/create', 'dashboard\EmailTemplatesController@create');
Route::get('/Email_Templates/delete/{id}', 'dashboard\EmailTemplatesController@delete');
Route::post('/Email_Templates/save/{id}','dashboard\EmailTemplatesController@save');
 

Route::get('/Home_Page_Content', 'dashboard\HomePageContentController@index');
Route::post('/Home_Page_Content/save','dashboard\HomePageContentController@saved');



Route::get('/Manage', 'dashboard\ManageController@index');
Route::get('/Manage/edit/{id}', 'dashboard\ManageController@edit');
Route::get('/Manage/create', 'dashboard\ManageController@create');
Route::post('/Manage/delete', 'dashboard\ManageController@delete');
Route::post('/Manage/save/{id}','dashboard\ManageController@save');

Route::get('/News', 'dashboard\NewsController@index');
Route::get('/News/edit/{id}', 'dashboard\NewsController@edit');
Route::get('/News/create', 'dashboard\NewsController@create');
Route::post('/News/delete', 'dashboard\NewsController@delete');
Route::post('/News/save/{id}','dashboard\NewsController@save');


Route::get('/FAQs', 'dashboard\FAQsController@index');
Route::get('/FAQs/edit/{id}', 'dashboard\FAQsController@edit');
Route::get('/FAQs/create', 'dashboard\FAQsController@create');
Route::get('/FAQs/delete/{id}', 'dashboard\FAQsController@delete');
Route::post('/FAQs/save/{id}','dashboard\FAQsController@save');
Route::post('/FAQs/newFaq', 'dashboard\FAQsController@newFaq');
Route::post('/FAQs/delete', 'dashboard\FAQsController@delete');

Route::get('/Style', 'dashboard\StyleController@index');
Route::get('/Style/edit/{id}', 'dashboard\StyleController@edit');
Route::get('/Style/create', 'dashboard\StyleController@create');
Route::post('/Style/delete', 'dashboard\StyleController@delete');
Route::post('/Style/save/{id}','dashboard\StyleController@save');
Route::get('/Style/save/{id}','dashboard\StyleController@save');

Route::get('/Membership_Plans', 'dashboard\MembershipPlansController@index');
Route::get('/Membership_Plans/edit/{id}', 'dashboard\MembershipPlansController@edit');
Route::get('/Membership_Plans/create', 'dashboard\MembershipPlansController@create');
Route::post('/Membership_Plans/delete', 'dashboard\MembershipPlansController@delete');
Route::post('/Membership_Plans/save/{id}','dashboard\MembershipPlansController@save');

Route::get('/Manage_Designers', 'dashboard\ManageDesignersController@index');
Route::get('/Manage_Designers/edit/{id}', 'dashboard\ManageDesignersController@edit');
Route::get('/view/{id}', 'dashboard\ManageDesignersController@view');
Route::get('/Manage_Designers/create', 'dashboard\ManageDesignersController@create');
Route::post('/Manage_Designers/delete', 'dashboard\ManageDesignersController@delete');
Route::post('/Manage_Designers/save/{id}','dashboard\ManageDesignersController@save');
Route::post('/Manage_Designers/changestatus/{id}','dashboard\ManageDesignersController@changeStatus');


Route::get('/Manage_Users', 'dashboard\ManageUsersController@index');
Route::get('/Manage_Users/edit/{id}', 'dashboard\ManageUsersController@edit');
Route::get('/view/{id}', 'dashboard\ManageUsersController@view');
Route::get('/Manage_Users/create', 'dashboard\ManageUsersController@create');
Route::post('/Manage_Users/delete', 'dashboard\ManageUsersController@delete');
Route::post('/Manage_Users/save/{id}','dashboard\ManageUsersController@save');
Route::post('/Manage_Users/changestatus/{id}','dashboard\ManageUsersController@changeStatus');


Route::get('/Transaction_History', 'dashboard\TransactionhistoryController@index');


Route::get('/Categories', 'dashboard\CategoesController@index');
Route::get('/Categories/edit/{id}', 'dashboard\CategoriesController@edit');
Route::get('/Categories/create', 'dashboard\CategoriesController@create');
Route::post('/Categories/delete', 'dashboard\CategoriesController@delete');
Route::post('/Categories/save/{id}','dashboard\CategoriesController@save');
Route::post('/Categories/changestatus/{id}','dashboard\CategoriesController@changeStatus');




Route::get('/Sub_categories', 'dashboard\SubcategoriesController@index');
Route::get('/Sub_categories/edit/{id}', 'dashboard\SubcategoriesController@edit');
Route::get('/Sub_categories/create', 'dashboard\SubcategoriesController@create');
Route::post('/Sub_categories/delete', 'dashboard\SubcategoriesController@delete');
Route::post('/Sub_categories/save/{id}','dashboard\SubcategoriesController@save');


Route::get('/Addon_Packages', 'dashboard\AddController@index');
Route::post('/Addon_Packages/save/{id}', 'dashboard\AddonpackagesController@save');
Route::get('/Addon_Packages/edit/{id}', 'dashboard\AddonpackagesController@edit');
Route::get('/Skill_Category', 'dashboard\SkillCategoryController@index');
Route::get('/Skill_Category/create', 'dashboard\SkillCategoryController@create');
Route::post('/Skill_Category/save/{id}', 'dashboard\SkillCategoryController@save');
Route::get('/Skill_Category/edit/{id}', 'dashboard\SkillCategoryController@edit');
Route::post('/Skill_Category/delete', 'dashboard\SkillCategoryController@delete');


Route::get('/Skill_sub_category', 'dashboard\SkillsubcategoryController@index');
Route::get('/Skill_sub_category/create', 'dashboard\SkillsubcategoryController@create');
Route::post('/Skill_sub_category/save/{id}', 'dashboard\SkillsubcategoryController@save');
Route::get('/Skill_sub_category/edit/{id}', 'dashboard\SkillsubcategoryController@edit');
Route::post('/Skill_sub_category/delete', 'dashboard\SkillsubcategoryController@delete');

Route::get('/Designer_Portfolios', 'dashboard\DesignerPortfoliosController@index');
Route::get('/Admin_Portfolios', 'dashboard\AdminPoosController@index');
Route::get('/Discover_Spaces', 'dashboard\DiscoverSpacesController@index');

/*********   rcj ******************/
Route::get('/AddPortfolio', 'dashboard\AdminPortfoliosController@create');
Route::get('/AddPortfolio/{id}', 'dashboard\AdminPortfsController@detail');
Route::post('/AddPortfolio/add/{id}', 'dashboard\AdminPortfoliosController@add');
Route::get('/Trending_Now', 'dashboard\TrendingNowController@index');
Route::post('/Discover_Spaces', 'dashboard\DiscoverSpacesController@publish');
Route::post('/Trending_Now', 'dashboard\TrendingNowController@publish');
Route::post('/AddPortfolio/delete', 'dashboard\AdminPortfoliosController@delete');
   }); 


/******************************** */


//frontend----------------------//

Route::get('/login',
'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.submit');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home',  function(){return redirect('/');})->name('home');
Route::get('/about', 'frontend\AboutController@index');
Route::get('/category/commercial', 'frontend\CategoryController@index');
Route::get('/design/Nail', 'frontend\DesignController@index');

Route::get('/homeowners', 'frontend\HomeownersController@index');
Route::get('/professionals', 'frontend\ProfessionalsController@index');
Route::get('/contactus', 'frontend\ContactusController@index');

Route::get('/signin', 'frontend\SigninController@index');
// Route::get('/register', 'frontend\RegisterController@index')->name('register');
Route::get('/forget-password', 'frontend\ForgetpasswordController@index');
Route::get('/profile', 'frontend\ProfileController@index');
Route::get('/profile1', 'frontend\Profile1Controller@index');
Route::get('/profile2', 'frontend\Profile2Controller@index');
Route::get('/profile3', 'frontend\Profile3Controller@index');
Route::get('/myportfolio', 'frontend\MyPortfolioController@index');
Route::get('/profile5', 'frontend\Profile5Controller@index');

/////////////// rcj ////////////////////////
Route::get('/design/{id}', 'frontend\HomeController@design');
Route::get('/design/sub/{id}', 'frontend\DesignController@getdesign');
Route::get('/category/{id}', 'frontend\CategoryController@getcategory');
Route::get('/design-ideas', 'frontend\DesignIdeaController@index');
Route::post('/design-ideas/search', 'frontend\DesignIdeaController@search');
Route::get('/design-ideas/search', 'frontend\DesignIdeaController@normalsearch');
Route::get('/sign-in/fav', 'frontend\AddFavController@index');
Route::get('/sign-in/like', 'frontend\AddLikeController@index');
Route::get('/addToFav/{id}', 'frontend\AddFavController@add');
Route::get('/addToLike/{id}', 'frontend\AddLikeController@add');

Route::get('/profile/profileSettings', 'frontend\MyProfileController@profileSettings');
Route::get('/profile/addmoreaccomplishment/count/{id}', 'frontend\MyProfileController@addmore');
Route::get('/profile/removeaccomplishment/{id}', 'frontend\MyProfileController@removeaccomplishment');
Route::get('/profile/remove_customeskill/{id}', 'frontend\MyProfileController@remove_customeskill');

Route::get('/CreditHistory', 'frontend\CreditHistoryController@index');
Route::get('/MyPortfolio ', 'frontend\MyPortfolioController@index');
Route::get('/upload-portfolio', 'frontend\UploadPortfolioController@index');
Route::get('/designer/getsubcat/cat_id/{id}', 'frontend\UploadPortfolioController@getsubcategory');

Route::post('/designer/uploadportfolioimage', 'frontend\UploadPortfolioController@uploadimages');
Route::get('/designer/uploadportfolioimage', 'frontend\UploadPortfolioController@getimages');
Route::post('/checkimagesize', 'frontend\UploadPortfolioController@checkimagesize');
Route::get('/uploadimage/delete', 'frontend\UploadPortfolioController@deleteimage');
Route::post('/designer/saveprotfolio', 'frontend\UploadPortfolioController@save');
Route::post('/designer/updateportfolio/{id}', 'frontend\UploadPortfolioController@save');

Route::get('/MyProfile', 'frontend\MyProfileController@index');


// TIGER ROUTE 
Route::post('/profile/profile_seting/{id}','frontend\MyProfileController@profileSave');
Route::get('/profile/changepassword','frontend\MyProfileController@profilechangepassword');
Route::post('/profile/changepassword','frontend\MyProfileController@changepassword');
Route::post('/profile/profilesave','frontend\ProfileController@save');
Route::get('/profile/credithistory', 'frontend\CreditHistoryController@index');
Route::get('/profile/favourite', 'frontend\MyProfileController@favourite');


Route::get('/profile/add_credits', 'frontend\CreditHistoryController@add_credits');
Route::post('/payment/add-funds/paypal', 'PaymentController@payWithpaypal');
Route::get('/payment/status/{id}', 'PaymentController@getPaymentStatus');
Route::get('/remove-portfolio/{id}','frontend\UploadPortfolioController@remove');
Route::get('/edit-portfolio/{id}','frontend\UploadPortfolioController@update');
Route::get('/profile/membership','frontend\MembershipController@index')->name('front.membership');

Route::get('/about', 'frontend\PagesController@aboutus');
Route::get('/homeowners', 'frontend\PagesController@homeowners');
Route::get('/professionals', 'frontend\PagesController@professionals');
Route::get('/terms_of_use', 'frontend\PagesController@terms');
Route::get('/privacy_policy', 'frontend\PagesController@privacy');
Route::get('/terms_and_condition', 'frontend\PagesController@acceptable');

Route::post('/payment/paywithcreditcard','PaymentController@paywithcreditcard')->name('paypal.creditcard');
Route::post('/payment/membership','PaymentController@membership')->name('membership.paypal');
Route::get('/membership/success/{planid}/{plantype}','PaymentController@membershipsuccess')->name('membership.success');

Route::post('/change-profile','frontend\ProfileController@photochange');
Route::post('/contactus','frontend\ContactusController@save');

Route::get('/googleLogin', 'Auth\LoginController@redirectToProvider')->name('auth.google.login');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/fbLogin', 'Auth\LoginController@fbLogin')->name('auth.facebook.login');
Route::get('/fbcallback', 'Auth\LoginController@callback');

Route::get('/admin/passwordLoginController@passwordrequest')->name('admin.password.request');
Route::post('/admin/password/request', 'Auth\AdminLoginController@requestpassword')->name('admin.email.request');
Route::get('/admin/password/reset/{token}','Auth\AdminLoginController@resetform')->name('activate.admin');
Route::post('/admin/password/reset','Auth\AdminLoginController@resetpassword')->name('admin.email.reset');

Route::get('/faq','frontend\FaqController@index')->name('front.faq');
Route::get('/blog', 'frontend\BlogController@index')->name('blog');
Route::get('/blogs/{tag}', 'frontend\BlogController@tag')->name('tag');
Route::get('/blog/{slug}', 'frontend\BlogController@detail')->name('blog.detail');
Route::get('/profile/{id}','frontend\HomeController@userprofile')->name('user.profile');




Route::get('/designerReg', 'frontend\designerSignupController@index');
Route::post('/designerReg','frontend\designerSignupController@save');

Route::get('/3Mcommand', 'frontend\contestcommandController@index');
Route::post('/3Mcommand', 'frontend\contestcommandController@save');


Route::get('/portfoliotest', 'frontend\DesignDisplayController@index');