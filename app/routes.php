<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// Route::get('users/store', 'UsersController@store');
// Route::resource('users', 'UsersController');
Route::get('/', function()
{
	Queue::push('FileTimeWriter', ['time' => time()]);
});

Route::post('queue', function()
{
	return Queue::marshal();
});

class FileTimeWriter
{
	public function fire($job, $date)
	{
		File::append(app_path() . '/time.txt', $date['time'] . " $job " . PHP_EOL);
	}
}


// Route::get('/', array('as' => 'new_snippet', 'uses' => 'SnippetsController@create'));
// Route::get('{num}', array('as' => 'snippet', 'uses' => 'SnippetsController@show'));
// Route::get('{num}/fork', array('as' => 'fork_snippet', 'uses' => 'SnippetsController@fork'));
// Route::post('/', array('uses' => 'SnippetsController@store'));
//

