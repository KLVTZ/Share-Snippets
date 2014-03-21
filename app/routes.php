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


Route::get('/', function()
{
	Queue::push('DoSomethingIntensive');

	return 'Done';
});

class DoSomethingIntensive
{
	public function fire()
	{
		File::append(app_path().'/queue.txt', time() . PHP_EOL);

		$job->delete();
	}
}
// Route::get('users/store', 'UsersController@store');
// Route::resource('users', 'UsersController');
//
// Route::post('queue', function()
// {
// 	return Queue::marshal();
// });
//
//
// Route::get('/', array('as' => 'new_snippet', 'uses' => 'SnippetsController@create'));
// Route::get('{num}', array('as' => 'snippet', 'uses' => 'SnippetsController@show'));
// Route::get('{num}/fork', array('as' => 'fork_snippet', 'uses' => 'SnippetsController@fork'));
// Route::post('/', array('uses' => 'SnippetsController@store'));
//

