<?php
use App\Http\Livewire\Lock;
use App\Http\Livewire\Post;
use App\Http\Livewire\Index;

use App\Http\Livewire\Users;
use App\Http\Livewire\Err404;
use App\Http\Livewire\Err500;
use App\Http\Livewire\Profile;
use App\Http\Livewire\PostEdit;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\LiveTable;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\EmeteurEdit;
use App\Http\Livewire\EmeteurList;
use App\Http\Livewire\ViewDetails;
use App\Http\Livewire\CourrierEdit;
use App\Http\Livewire\CourrierList;
use App\Http\Livewire\CourrierShow;
use App\Http\Livewire\CourrierUser;
use App\Http\Livewire\EmeteurIndex;
use App\Http\Livewire\LoginExample;
use App\Http\Livewire\Notification;
use App\Http\Livewire\PostEditEdit;
use App\Http\Livewire\Transactions;
use App\Http\Livewire\UpgradeToPro;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\CourrierIndex;
use App\Http\Livewire\ResetPassword;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\ProfileExample;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\BootstrapTables;
use App\Http\Livewire\EmplacementEdit;
use App\Http\Livewire\EmplacementList;
use App\Http\Livewire\EmplacementShow;
use App\Http\Livewire\RegisterExample;
use App\Http\Livewire\Components\Forms;
use App\Http\Livewire\EmplacementIndex;
use App\Http\Controllers\MailController;
use App\Http\Livewire\Components\Modals;
use App\Http\Livewire\Components\Buttons;
use App\Http\Livewire\ResetPasswordExample;




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
Route::view('users', 'livewire.home');
Route::redirect('/', '/index');
Route::redirect('/', '/login');
Route::get('/live-table', LiveTable::class)->name('live-table');


Route::get('/register', Register::class)->name('register');

Route::get('/login', Login::class)->name('login');

Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');


Route::get('/post',  Post::class)->name('post');


Route::get('/post-edit',  PostEdit::class)->name('post-edit');

Route::get('postes/{id}/edit',  PostEditEdit::class)->name('post-edit-edit');

Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

Route::get('/404', Err404::class)->name('404');
Route::get('/500', Err500::class)->name('500');
Route::get('/upgrade-to-pro', UpgradeToPro::class)->name('upgrade-to-pro');

Route::middleware('auth')->group(function () {
    Route::get('users/{id}/edit', Profile::class)->name('profile')->middleware('auth.modifier le profil des utilisateurs');

    Route::get('/profile-example', ProfileExample::class)->name('profile-example');

    Route::get('users/{id}/view-details',  ViewDetails::class)->name('view-details');

    Route::get('/users', Users::class)->name('users');
    Route::get('/login-example', LoginExample::class)->name('login-example');
    Route::get('/register-example', RegisterExample::class)->name('register-example');
    Route::get('/reset-password-example', ResetPasswordExample::class)->name('reset-password-example');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/transactions', Transactions::class)->name('transactions');
    Route::get('/bootstrap-tables', BootstrapTables::class)->name('bootstrap-tables');
    Route::get('/lock', Lock::class)->name('lock');
    Route::get('/buttons', Buttons::class)->name('buttons');
    Route::get('/forms', Forms::class)->name('forms');
    Route::get('/modals', Modals::class)->name('modals');
    Route::get('/courrier-list', CourrierList::class)->name('courrier-list')->middleware('auth.ajouter les courriers');
    Route::get('/courrier-index', CourrierIndex::class)->name('courrier-index')->middleware('auth.consulter la liste des courriers');
    Route::get('courrier/{id}/edit', CourrierEdit::class)->name('courrier-edit') ->middleware('auth.modifier les courriers');
    Route::get('courrier/{courrier}', CourrierShow::class)->name('courrier-show') ->middleware('auth.voir les courriers');
    Route::get('/courrier-user', CourrierUser::class)->name('courrier-user')->middleware('auth.valider la réception des courriers');
    Route::get('/emeteur-list',EmeteurList::class)->name('emeteur-list') ->middleware('auth.ajouter les émetteurs');
    Route::get('/emeteur-index',EmeteurIndex::class)->name('emeteur-index') ->middleware('auth.consulter la liste des émetteurs');
    Route::get('emeteur/{id}/edit',EmeteurEdit::class)->name('emeteur-edit') ->middleware('auth.modifier les émetteurs');
    Route::get('/emplacement-list',EmplacementList::class)->name('emplacement-list') ->middleware('auth.ajouter les emplacements');
    Route::get('/emplacement-index',EmplacementIndex::class)->name('emplacement-index') ->middleware('auth.consulter la liste des emplacements');
    Route::get('emplacement/{id}/edit', EmplacementEdit::class)->name('emplacement-edit') ->middleware('auth.modifier les emplacements');
    Route::get('emplacement/{emplacement}',EmplacementShow::class)->name('emplacement-show') ->middleware('auth.voir les emplacements');

    Route::get('notiffication',Notification::class)->name('notification');



});
