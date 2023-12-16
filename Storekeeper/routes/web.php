use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'dashboard']);
Route::get('/form', [ProductController::class, 'showForm']);
Route::post('/form', [ProductController::class, 'storeProduct']);
Route::get('/history', [ProductController::class, 'showHistory']);
