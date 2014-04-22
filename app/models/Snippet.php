
<?php
class Snippet extends Eloquent {
	protected $guarded = array();
	public $timestamps = false;
	protected $fillable = array('snippet');

	public static $rules = array(
		'snippet' => 'required'
	);

	public static function validate($input)
	{
		$v = Validator::make($input, static::$rules);

		return $v->messages()->all();
	}

}
