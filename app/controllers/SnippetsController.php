<?php

class SnippetsController extends BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('snippets.create')->
			with('snippet', '');	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$new_snippet = Snippet::create(array('snippet' => Input::get('snippet')));

		if($new_snippet) {
			return Redirect::route('snippet', $new_snippet->id);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$snippet = Snippet::find($id)->toArray();
		return View::make('snippets.show', $snippet);
	}


	public function fork($id) 
	{
		$snippet = Snippet::find($id);
		if(!$snippet) return Redirect::route('new_snippet');
		return $this->update($snippet->snippet);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($default_snippet = "")
	{
		return View::make('snippets.create')
			->with('snippet', $default_snippet);
	}

}
