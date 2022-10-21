<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\logincontroller;

use Illuminate\Support\Facades\Route;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Support\Facades\DB;

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



Route::controller(FormController::class)->group(function () {
    Route::get('/formulaire', 'create');
    Route::post('/store_formulaire', 'store');
    Route::get('/show_formulaire', 'all_show');
    Route::get('/showStudents/{school}', 'show');
    Route::get('/edit_formulaire/{school}', 'edit');
    Route::post('/update_Student/{id}', 'update');
    Route::get('/delete_Student/{school}', 'destroy');
    Route::get('/all_delete_base', 'alldestroy');
    Route::get('/search', 'operation_search')->name('users.search');
    Route::get('/all_delete_base', 'alldestroy');
    Route::get('/download',function(){

        $formData=DB::table('school')->get();
        return(new FastExcel($formData))->download('school.xlsx');
        });

});

//Route::get('/formulaire',[FormController::class,'create']);
//Route::post('/store_formulaire',[FormController::class,'store']);
//Route::get('/show_formulaire',[FormController::class,'all_show']);

//Route::get('/showStudents/{school}',[FormController::class,'show']);

//Route::get('/edit_formulaire/{school}',[FormController::class,'edit']);
//Route::post('/update_Student/{id}', [FormController::class, 'update']);

//Route::get('/delete_Student/{school}',[FormController::class,'destroy']);
//Route::get('/all_delete_base',[FormController::class,'alldestroy']);

//Route::get('/student_export',[FormController::class, 'get_student_data'])->name('student.export');
//Route::get('generate-pdf', [FormController::class, 'generate_and_save_pdf'])->name('student.pdf');

//Route::get('/search',[FormController::class, 'operation_search'])->name('web.search');
//Route::get('/find',[FormController::class, 'find'])->name('web.find');




Route::get('/', [logincontroller::class,'index']);
Route::post('/login', [logincontroller::class,'login']);
Route::get('/logout',[logincontroller::class,'logout']);
//Route::get('/detail_eleves/pdf/{school}', [FormController::class,'pdf']);

//Route::get('/pdf', [FormController::class, 'createPDF']);
