<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\personnelcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UnitController;
use  App\Http\Controllers\ItemController;
use  App\Http\Controllers\RoleController;
use  App\Http\Controllers\rankcontroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\InvoiceController;
use App\Models\Role;
use App\Models\User;
use App\Models\Product;
use App\Models\permission;
use App\Models\Category;
use App\Models\product_issue;
use App\Models\product_issuedetails;
use App\Models\Personnel;
use App\Models\product_replenish;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // return view('dashboard');
   
    $allDat = product_issuedetails::orderBy('date','desc')->orderBy('id','desc')->where('stat','0')->get();
    $total_roles = count(Role::select('id')->get());
    $total_users = count(User::select('id')->get());
    $total_permissions= count(permission::select('id')->get());
    $total_category = count(Category::select('id')->get());
    $total_product=count(Product::select('id')->get());
    return view('admin.index',compact('total_users', 'total_roles','total_permissions','total_category',
    'total_product','allDat'));
})->name('dashboard');

Route::get('logout',[PagesController::class, 'Logout'])->name('logout');

    Route::get('lookup',[PagesController::class, 'lookup']);
 
    Route::group(['prefix' => 'admin'], function () {
        Route::resource('roles', RoleController::class, ['names' => 'roles']); 
        Route::resource('users',UserController::class, ['names' => 'users']); 
     
    });

    Route::prefix('Unit')->group(function(){
    Route::get('/view',[UnitController::class,'View'])->name('viewunit');
    Route::get('/add',[UnitController::class,'Add'])->name('addunit');
    Route::post('/store',[UnitController::class,'Store'])->name('storeunit');
    Route::get('/edit{id}',[UnitController::class,'Edit'])->name('editunit');
    Route::post('/update',[UnitController::class,'Update'])->name('updateunit');
    Route::get('/delete{id}',[UnitController::class,'Delete'])->name('deleteunit');
    });

       Route::prefix('Category')->group(function(){
       Route::get('/category/view',[CategoryController::class,'View'])->name('viewindex');
       Route::get('/category/add',[CategoryController::class,'AddCate'])->name('viewcreate');
       Route::post('/category/store',[CategoryController::class,'Store'])->name('storecat');
       Route::get('/category/edit{id}',[CategoryController::class,'Edit'])->name('catedit');
       Route::post('/category/update',[CategoryController::class,'Update'])->name('upcate');
       Route::get('/category/delete{id}',[CategoryController::class,'Delete'])->name('catdelete');
});

    Route::prefix('Profile')->group(function(){
    Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profileview');
    Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
    Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
    Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');
    Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
});
    Route::prefix('Personnel_details')->group(function(){
    Route::get('/view', [personnelController::class, 'index'])->name('perview');
    Route::get('/add', [personnelController::class, 'create'])->name('percreate');
    Route::post('/store', [personnelController::class, 'store'])->name('perstore');
    Route::get('/edit{id}', [personnelController::class, 'edit'])->name('peredit');
    Route::post('/update', [personnelController::class, 'update'])->name('perupdate');
    Route::get('/delete{id}', [personnelController::class, 'delete'])->name('perdelete');
});

 Route::prefix('Supplier')->group(function(){
    Route::get('/view', [SupplierController::class, 'Index'])->name('viewsupp');
    Route::get('/add', [SupplierController::class, 'create'])->name('supadd');
    Route::post('/store', [SupplierController::class,'store'])->name('supstore');
    Route::get('/edit{id}', [SupplierController::class, 'Edit'])->name('supedit');
    Route::post('/update', [SupplierController::class, 'update'])->name('supupa');
    Route::get('/delete{id}', [SupplierController::class, 'delete'])->name('supdel');
});
Route::prefix('ranks')->group(function(){
    Route::get('/view', [rankcontroller::class, 'View'])->name('viewrank');
    Route::get('/add', [rankcontroller::class, 'RankAdd'])->name('rankadd');
    Route::post('/store', [rankcontroller::class,'Store'])->name('rankstore');
    Route::get('/edit{id}', [rankcontroller::class, 'Edit'])->name('rankedit');
    Route::post('/update', [rankcontroller::class, 'Update'])->name('rankupdate');
    Route::get('/delete{id}', [rankcontroller::class, 'Delete'])->name('rankdelete');
});
Route::prefix('Products')->group(function(){
    Route::get('/view', [ProductController::class, 'View'])->name('viewpro');
    Route::get('/add', [ProductController::class, 'Add'])->name('addpro');
    Route::post('/store', [ProductController::class,'Store'])->name('storepro');
    Route::get('/edit{id}', [ProductController::class, 'Edit'])->name('editpro');
    Route::post('/update', [ProductController::class, 'Update'])->name('updatepro');
    Route::get('/delete{id}', [ProductController::class, 'Delete'])->name('deletepro');
});
Route::prefix('Purchases')->group(function(){
    Route::get('/view', [PurchaseController::class, 'View'])->name('purview');
    Route::get('/add', [PurchaseController::class, 'Add'])->name('puradd');
    Route::post('/store', [PurchaseController::class, 'Store'])->name('purstore');
    Route::get('/delete{id}', [PurchaseController::class, 'Delete'])->name('purdelete');
    Route::get('/pending', [PurchaseController::class, 'Pending'])->name('purpending');
    Route::get('/approving{id}', [PurchaseController::class, 'Approve'])->name('purapprove');  
});
Route::prefix('Item')->group(function(){
   Route::get('/view', [InvoiceController::class, 'View'])->name('invoview');
   Route::get('/add', [InvoiceController::class, 'Add'])->name('invoadd');
   Route::post('/store', [InvoiceController::class, 'Store'])->name('invostore');
   Route::get('/pending', [InvoiceController::class, 'Pending'])->name('appending');
   Route::get('/delete{id}', [InvoiceController::class, 'Delete'])->name('indelete');
   Route::get('/approving{id}', [InvoiceController::class, 'Approve'])->name('appro');
   Route::post('/approvestore{id}', [InvoiceController::class, 'ApproveStore'])->name('approstore');
   Route::get('/invoice/list/print', [InvoiceController::class, 'PrintList'])->name('invoprint');
   Route::get('/invoice/print{id}', [InvoiceController::class, 'Print'])->name('printinvo');
   Route::get('/daily', [InvoiceController::class, 'DailyReport'])->name('daily');
   Route::get('/daily/report', [InvoiceController::class, 'DailyInvoicePdf'])->name('daily.pdf');
   Route::get('/reports/report', [InvoiceController::class, 'report'])->name('system.report');
   Route::get('/item/replenish', [InvoiceController::class, 'replenishview'])->name('replenish.view');
   Route::get('/items/replen', [InvoiceController::class, 'replenisnadd'])->name('replenish.add');
   Route::post('/replen', [InvoiceController::class, 'replenishstore'])->name('replenish.store');
});

Route::controller(DefaultController::class)->group(function () {
    Route::get('/get-category', 'GetCategory')->name('get-category'); 
    Route::get('/get-product', 'GetProduct')->name('get-product'); 
    Route::get('/check-product', 'GetStock')->name('check-product-stock'); 
     
});
