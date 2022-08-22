<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HtDepDrop;
use App\Http\Controllers\CRM\LeedsController;
use App\Http\Controllers\CRM\LeedsGroupController;
use App\Http\Controllers\Project\ProjectCategoryController;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\CRM\SuccessLeedsPanelController;
use App\Http\Controllers\CRM\QuotationController;
use App\Http\Controllers\product\ProductController;
use App\Http\Controllers\product\CategoryController;
use App\Http\Controllers\product\SubController;
use App\Http\Controllers\product\UnitController;
use App\Http\Controllers\product\BrandController;
use App\Http\Controllers\product\ModelController;
use App\Http\Controllers\product\SizeController;
use App\Http\Controllers\product\ColorController;
use App\Http\Controllers\supplier\SupplierController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Menu\MenuController;
use App\Http\Controllers\Menu\SubmenuController;
use App\Http\Controllers\Admin\AdminController;
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



Auth::routes();

Route::group(['name' => 'Home', 'middleware' => 'auth'], function() {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'log'])->name('log');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'log'])->name('dashboard');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::group(['name' => 'CRM_leeds', 'middleware' => 'auth'], function() {
    Route::get('/leeds', [LeedsController::class, 'index'])->name('leeds');
    Route::post('/newLeeds', [LeedsController::class, 'create'])->name('newLeeds');
    Route::get('/leedsList', [LeedsController::class, 'list'])->name('leedsList');
    Route::get('/editLeeds/{id}', [LeedsController::class, 'edit'])->name('editLeeds');
    Route::post('/updateLeeds/{id}', [LeedsController::class, 'update'])->name('updateLeeds');
    Route::post('/deleteLeeds/{id}', [LeedsController::class, 'delete'])->name('deleteLeeds');
    Route::get('/promote-demote-leed/{id}', [LeedsController::class, 'promoteDemoteLeed'])->name('promote-demote-leed');
});
Route::group(['name' => 'CRM_leedsGroup', 'middleware' => 'auth'], function() {
    Route::get('/allLeedsGroup', [LeedsGroupController::class, 'groupList'])->name('allLeedsGroup');
    Route::get('/add-group', [LeedsGroupController::class, 'addGroup'])->name('add-group');
    Route::post('/new-group', [LeedsGroupController::class, 'createGroup'])->name('new-group');
    Route::get('/edit-group/{id}', [LeedsGroupController::class, 'editGroup'])->name('edit-group');
    Route::post('/update-group/{id}', [LeedsGroupController::class, 'updateGroup'])->name('update-group');
    Route::post('/delete-group/{id}', [LeedsGroupController::class, 'deleteGroup'])->name('delete-group');
    Route::get('/search-group', [LeedsGroupController::class, 'searchGroup'])->name('search-group');
    Route::get('/search', [LeedsGroupController::class, 'getGroups'])->name('search');
    Route::get('/leeds-in-group/{id}', [LeedsGroupController::class, 'leedsInGroup'])->name('leeds-in-group');
});
Route::group(['name' => 'CRM_successLeeds', 'middleware' => 'auth'], function() {
    Route::get('/all-success-leeds', [LeedsController::class, 'successList'])->name('all-success-leeds');
});
Route::group(['name' => 'CRM_successLeedsPanel', 'middleware' => 'auth'], function() {
    Route::get('/success-leeds-panel/{id}', [SuccessLeedsPanelController::class, 'successLeedsPanel'])->name('success-leeds-panel');
    Route::get('/add-meeting/{id}', [SuccessLeedsPanelController::class, 'addMeeting'])->name('add-meeting');
    Route::post('/new-meeting/{id}', [SuccessLeedsPanelController::class, 'createMeeting'])->name('new-meeting');
    Route::get('/all-meeting/{id}', [SuccessLeedsPanelController::class, 'allMeeting'])->name('all-meeting');

    Route::get('/add-measurement/{id}', [SuccessLeedsPanelController::class, 'addMeasurement'])->name('add-measurement');
    Route::post('/new-measurement/{id}', [SuccessLeedsPanelController::class, 'createMeasurement'])->name('new-measurement');
    Route::get('/delete-measurement/{index}/{id}', [SuccessLeedsPanelController::class, 'deleteMeasurement'])->name('delete-measurement');

    Route::get('/all-house-area-type/{id}', [QuotationController::class, 'allHouseTypes'])->name('all-house-area-type');
    Route::get('/add-house-area-type/{id}', [QuotationController::class, 'addHouseTypes'])->name('add-house-area-type');
    Route::post('/new-house-area-type/{id}', [QuotationController::class, 'createHouseTypes'])->name('new-house-area-type');
    Route::get('/edit-house-area-type/{id}/{houseType}', [QuotationController::class, 'editHouseTypes'])->name('edit-house-area-type');
    Route::post('/update-house-area-type/{id}/{houseType}', [QuotationController::class, 'updateHouseTypes'])->name('update-house-area-type');
    Route::get('/delete-house-area-type/{id}/{houseType}', [QuotationController::class, 'deleteHouseTypes'])->name('delete-house-area-type');
    Route::get('/search-house-area-type/{id}', [QuotationController::class, 'searchHouseTypes'])->name('search-house-area-type');

    Route::get('/all-decoration-type/{id}', [QuotationController::class, 'allDecorationType'])->name('all-decoration-type');
    Route::get('/add-decoration-type/{id}', [QuotationController::class, 'addDecorationType'])->name('add-decoration-type');
    Route::post('/new-decoration-type/{id}', [QuotationController::class, 'createDecorationType'])->name('new-decoration-type');
    Route::get('/edit-decoration-type/{id}/{decor}', [QuotationController::class, 'editDecorationType'])->name('edit-decoration-type');
    Route::post('/update-decoration-type/{id}/{decor}', [QuotationController::class, 'updateDecorationType'])->name('update-decoration-type');
    Route::post('/delete-decoration-type/{id}/{decor}', [QuotationController::class, 'deleteDecorationType'])->name('delete-decoration-type');

//     Route::get('/all-sub-body/{id}', [QuotationController::class, 'allSubBody'])->name('all-sub-body');
//    Route::get('/add-sub-body/{id}', [QuotationController::class, 'addSubBody'])->name('add-sub-body');
//    Route::post('/new-sub-body/{id}', [QuotationController::class, 'createSubBody'])->name('new-sub-body');
      Route::get('/edit-sub-body/{id}', [QuotationController::class, 'editSubBody'])->name('edit-sub-body');
      Route::post('/update-sub-body/{id}/{sbId}', [QuotationController::class, 'updateSubBody'])->name('update-sub-body');
//    Route::post('/delete-sub-body/{id}/{sbId}', [QuotationController::class, 'deleteSubBody'])->name('delete-sub-body');

    Route::get('/all-quotation/{id}', [QuotationController::class, 'allQuotation'])->name('all-quotation');
    Route::get('/add-quotation/{id}', [QuotationController::class, 'addQuotation'])->name('add-quotation');
    Route::post('/new-quotation/{id}', [QuotationController::class, 'createQuotation'])->name('new-quotation');
    Route::post('/delete-quotation/{id}/{qId}', [QuotationController::class, 'deleteQuotation'])->name('delete-quotation');
});
Route::group(['name' => 'Cart', 'middleware' => 'auth'], function() {
    Route::get('/all-cart/{id}', [QuotationController::class, 'allCart'])->name('all-cart');
    Route::get('/add-cart/{id}', [QuotationController::class, 'addCart'])->name('add-cart');
    Route::post('/create-cart/{id}', [QuotationController::class, 'createCart'])->name('create-cart');
});
Route::group(['name' => 'Project', 'middleware' => 'auth'], function() {
    Route::get('/add-project-category', [ProjectCategoryController::class, 'addCategory'])->name('add-project-category');
    Route::post('/new-project-category', [ProjectCategoryController::class, 'createCategory'])->name('new-project-category');
    Route::get('/all-Project-Categories', [ProjectCategoryController::class, 'allCategory'])->name('all-Project-Categories');
});

Route::group(['name' => 'Setting','middleware' => 'auth'],function(){
    Route::get('/add-company-info',[SettingController::class,'addCompanyInfo'])->name('add-company-info');
    Route::post('/createCompanyInfo',[SettingController::class,'createCompanyInfo'])->name('createCompanyInfo');
    Route::get('/allCompanyInfo',[SettingController::class,'allCompanyInfoList'])->name('allCompanyInfo');
    Route::get('/editCompanyInfo/{id}',[SettingController::class,'edit'])->name('editCompanyInfo');
    Route::post('/updateCompanyInfo/{id}',[SettingController::class,'update'])->name('updateCompanyInfo');
//    Route::post('/deleteCompanyInfo/{id}',[SettingController::class,'delete'])->name('deleteCompanyInfo');
    Route::post('/deleteCompanyInfo',[SettingController::class,'delete'])->name('deleteCompanyInfo');
    Route::get('/CompanyInfoSearch',[SettingController::class,'CompanyInfoSearch'])->name('CompanyInfoSearch');
    Route::get('/companyInfo/{id}',[SettingController::class,'getCategoryInformation'])->name('companyInfo');
});
Route::group(['name' => 'product', 'middleware' => 'auth'],function(){
     Route::get('/add-product-category',[CategoryController::class,'catagory']);
     Route::post('/addCategory',[CategoryController::class,'addCategory']);
     Route::get('/categoryList',[CategoryController::class,'categoryList'])->name('all-Product-Categories');
     Route::get('/edit/{id}',[CategoryController::class,'show']);
     Route::post('/delete',[CategoryController::class,'delete'])->name('deleteCategory');
     Route::get('/category-info/{id}',[CategoryController::class,'getCategoryInformation'])->name('categoryInfo');
     Route::post('/update/{id}',[CategoryController::class,'update']);
     Route::get('/category-search',[CategoryController::class,'categorySearch']);

     Route::get('/s-categorylist',[SubController::class ,'scategoryList']);
     Route::get('/add-scategory',[SubController::class,'addScategory']);
     Route::post('addscategory',[SubController::class,'addScatetory']);
     Route::get('/s-edit/{id}',[SubController::class,'showuptbl']);
     Route::post('/s-delete',[SubController::class,'Sdelete'])->name('deleteSubCategory');
     Route::get('/Scategory-info/{id}',[SubController::class,'getSubCategoryInformation'])->name('subCategoryInfo');
     Route::post('/s-update/{id}',[SubController::class,'Supdate']);
     Route::get('/sub-category-search',[SubController::class,'subCategorySearch']);

     Route::get('/unit-list',[UnitController::class,'unitlist']);
     Route::get('/add-unit',[UnitController::class,'addunit']);
     Route::post('/add-unit-element',[UnitController::class,'saveunit']);
     Route::get('/u-edit/{id}',[UnitController::class,'edit']);
     Route::post('/u-update/{id}',[UnitController::class,'Uupdate']);
     Route::post('/u-delete',[UnitController::class,'udelete'])->name('deleteUnit');
     Route::get('/unit-info/{id}',[UnitController::class,'getUnitInformation'])->name('UnitInfo');
     Route::get('/unit-search',[UnitController::class,'unitSearch']);

     Route::get('/brand-list',[BrandController::class,'brandlist']);
     Route::get('/add-brand',[BrandController::class,'addbrand']);
     Route::post('/addBrand',[BrandController::class,'addingBrand']);
     Route::get('/b-edit/{id}',[BrandController::class,'bedit']);
     Route::post('/b-delete',[BrandController::class,'bdelete'])->name('deleteBrand');
     Route::get('/brand-info/{id}',[BrandController::class,'getBrandInformation'])->name('BrandInfo');
     Route::post('/b-update/{id}',[BrandController::class,'Bupdate']);
     Route::get('/brand-search',[BrandController::class,'brandSearch']);

     Route::get('/model-list',[ModelController::class,'modelList']);
     Route::get('/add-model',[ModelController::class,'addmodelform']);
     Route::post('/addmodel',[ModelController::class,'addmodel']);
     Route::post('/m-delete',[ModelController::class,'mdelete'])->name('deleteModel');
     Route::get('/model-info/{id}',[ModelController::class,'getModelInformation'])->name('ModelInfo');
     Route::get('/m-edit/{id}',[ModelController::class,'medit']);
     Route::post('/m-update/{id}',[ModelController::class,'Mupdate']);
     Route::get('/model-search',[ModelController::class,'modelSearch']);

     Route::get('/size-list',[SizeController::class,'sizelist']);
     Route::get('/add-size',[SizeController::class,'addsizeform']);
     Route::post('/addSize',[SizeController::class,'addsize']);
     Route::post('/sz-delete',[SizeController::class,'szdelete'])->name('deleteSize');
     Route::get('/size-info/{id}',[SizeController::class,'getSizeInformation'])->name('SizeInfo');
     Route::get('/sz-edit/{id}',[SizeController::class,'szedit']);
     Route::post('/sz-update/{id}',[SizeController::class,'szupdate']);
     Route::get('/size-search',[SizeController::class,'sizeSearch']);

     Route::get('/color-list',[ColorController::class,'colorlist']);
     Route::get('/add-color',[ColorController::class,'addcolorform']);
     Route::post('/addColor',[ColorController::class,'addcolor']);
     Route::post('/clr-delete',[ColorController::class,'clrdelete'])->name('deleteColor');
     Route::get('/color-info/{id}',[ColorController::class,'getColorInformation'])->name('ColorInfo');
     Route::get('/c-edit/{id}',[ColorController::class,'cedit']);
     Route::post('/c-update/{id}',[ColorController::class,'cupdate']);
     Route::get('/color-search',[ColorController::class,'colorSearch']);

     Route::get('/product-list',[ProductController::class,'productList']);
     Route::get('/add-product',[ProductController::class,'addProductForm']);
     Route::post('/addProduct',[ProductController::class,'addProduct']);
     Route::get('/p-edit/{id}',[ProductController::class,'pedit']);
     Route::post('/p-delete',[ProductController::class,'pdelete'])->name('deleteProduct');
     Route::get('/product-info/{id}',[ProductController::class,'getProductInformation'])->name('ProductInfo');
     Route::post('/p-update/{id}',[ProductController::class,'pupdate']);
     Route::get('/product-search',[ProductController::class,'productSearch']);

});
Route::group(['name' => 'supplier', 'middleware' => 'auth'],function(){
     Route::get('/suppGrp-list',[SupplierController::class,'suppGrpList']);
     Route::get('/add-suppGrp',[SupplierController::class,'addSuppGrpForm']);
     Route::post('/addSuppGrp',[SupplierController::class,'addSuppGrp']);
     Route::post('/suppGrp-delete',[SupplierController::class,'suppGrpDelete'])->name('deleteSupplierGroup');
     Route::get('/suppGrp-info/{id}',[SupplierController::class,'getSuppGrpInformation'])->name('SupplierGroupInfo');
     Route::get('/suppGrp-edit/{id}',[SupplierController::class,'suppGrpEdit']);
     Route::post('/suppGrp-update/{id}',[SupplierController::class,'suppGrpUpdate']);
     Route::get('/suppGrp-search',[SupplierController::class,'suppGrpSearch']);

     Route::get('/supplier-list',[SupplierController::class,'supplierList']);
     Route::get('/add-supplier',[SupplierController::class,'addSupplierForm']);
     Route::post('/addSupplier',[SupplierController::class,'addSupplier']);
     Route::post('/supp-delete',[SupplierController::class,'suppDelete'])->name('deleteSupplier');
     Route::get('/supp-info/{id}',[SupplierController::class,'getSupplierInformation'])->name('SupplierInfo');
     Route::get('/supplier-edit/{id}',[SupplierController::class,'supplierEdit']);
     Route::post('/supplier-update/{id}',[SupplierController::class,'supplierUpdate']);
    Route::get('/supplier-search',[SupplierController::class,'supplierSearch']);
});
Route::group(['name' => 'role', 'middleware' => 'auth'],function(){

    Route::get('/add-role',[RoleController::class,'roleCreateForm'])->name('addRoleView');
    Route::post('/add-role-submit',[RoleController::class,'roleCreateSubmission'])->name('addRole');
    Route::get('/role-list',[RoleController::class,'RoleList'])->name('roleList');
    Route::get('/role-info/{id}',[RoleController::class,'getRoleInformation'])->name('roleInfo');
    Route::post('/role-delete',[RoleController::class,'deleteRole'])->name('deleteRole');

    Route::get('/role-edit/{id}',[RoleController::class,'roleEdit'])->name('RoleEdit');
    Route::post('/role-edit',[RoleController::class,'roleEditSubmit'])->name('RoleEditSubmit');

});

Route::group(['name' => 'user', 'middleware' => 'auth'],function(){
    Route::get('/add-user',[UserController::class,'userCreateForm'])->name('addUserView');
    Route::post('/add-user-post',[UserController::class,'userCreateSubmit'])->name('addUser');
    Route::get('/user-list',[UserController::class,'userList'])->name('userList');
    Route::get('/user-info/{id}',[UserController::class,'getUserInformation'])->name('userInfo');
    Route::get('/user-edit/{id}',[UserController::class,'userEdit'])->name('userEdit');
    Route::post('/user-edit',[UserController::class,'userEditSubmit'])->name('userEditSubmit');
    Route::post('/user-delete',[UserController::class,'deleteUser'])->name('deleteUser');

});

Route::group(['name' => 'menu', 'middleware' => 'auth'],function(){
    Route::get('/add-menu',[MenuController::class,'menuCreateForm'])->name('addMenuView');
    Route::get('/menu-list',[MenuController::class,'menuList'])->name('menuList');
    Route::post('/add-menu-submit',[MenuController::class,'menuCreateSubmission'])->name('addMenu');
    Route::get('/menu-edit/{id}',[MenuController::class,'menuEdit'])->name('MenuEdit');
    Route::post('/menu-edit',[MenuController::class,'menuEditSubmit'])->name('MenuEditSubmit');
    Route::get('/menu-info/{id}',[MenuController::class,'getMenuInformation'])->name('menuInfo');
    Route::post('/menu-delete',[MenuController::class,'deleteMenu'])->name('deleteMenu');
});
Route::group(['name' => 'submenu', 'middleware' => 'auth'],function(){
    Route::get('/add-submenu',[SubmenuController::class,'SubmenuCreateForm'])->name('addSubMenuView');
    Route::get('/sub-menu-list',[SubmenuController::class,'SubmenuList'])->name('SubmenuList');
    Route::post('/add-sub-menu-submit',[SubmenuController::class,'SubmenuCreateSubmission'])->name('addSubMenu');
    Route::get('/sub-menu-info/{id}',[SubmenuController::class,'getSubMenuInformation'])->name('submenuInfo');
    Route::get('/submenu-edit/{id}',[SubmenuController::class,'submenuEdit'])->name('SubMenuEdit');
    Route::post('/submenu-edit',[SubmenuController::class,'submenuEditSubmit'])->name('SubmenuEditSubmit');
    Route::post('/submenu-delete',[SubmenuController::class,'deleteSubMenu'])->name('deleteSubMenu');
});
Route::group(['name' => 'Admin','middleware' => 'auth'],function() {
    Route::get('/updateAdminPassword',[AdminController::class,'updateAdminPassword'])->name('updateAdminPassword');
    Route::get('/updateAdminDetails',[AdminController::class,'updateAdminDetails'])->name('updateAdminDetails');
    Route::post('/updateAdminDetails1',[AdminController::class,'updateAdminDetails1'])->name('updateAdminDetails1');
    Route::post('/updateAdminPassword',[AdminController::class,'updateAdminPassword1'])->name('updateAdminPassword1');
    Route::post('/check-admin-password',[AdminController::class,'checkAdminPassword']);
});





















