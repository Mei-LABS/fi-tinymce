<?php
Route::group(['prefix' => config('mei-labs-tinymce.file_manager'), 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
