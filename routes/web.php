<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ProductComponent;
use App\Http\Livewire\AddProductComponent;
use App\Http\Livewire\AddCategoryComponent;



use App\Http\Livewire\AddPurchaseComponent;
use App\Http\Livewire\AddQuotationComponent;
use App\Http\Livewire\CategoryListComponent;
use App\Http\Livewire\PerchaseListComponent;
use App\Http\Livewire\QuotationListComponent;
use App\Http\Livewire\AddSubCategoryComponent;
use App\Http\Livewire\SubCategoryListComponent;


use App\Http\Livewire\NewFournissuerComponent;
use App\Http\Livewire\FournissuerListComponent;



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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/CategoryList', CategoryListComponent::class)->name('CategoryList');
Route::get('/SubcategoryList', SubCategoryListComponent::class)->name('SubcategoryList');
Route::get('/AddsubCategory', AddSubCategoryComponent::class)->name('AddsubCategory');




Route::get('/productsList', ProductComponent::class)->name('ProductsList');
Route::get('/AddProduct', AddProductComponent::class)->name('AddProduct');





Route::get('/AddPurchase', AddPurchaseComponent::class)->name('AddPurchase');
Route::get('/PerchaseList', PerchaseListComponent::class)->name('PerchaseList');


Route::get('/QuotationList', QuotationListComponent::class)->name('QuotationList');
Route::get('AddQuotation', AddQuotationComponent::class)->name('AddQuotation');


route::get('/NewFournissuer', NewFournissuerComponent::class)->name('NewFournissuer');
route::get('/FournissuerList', FournissuerListComponent::class)->name('FournissuerList');
