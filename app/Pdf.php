<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdf extends Model {

	protected $fillable = [
		'month_id',
		'name',
		'pdf_file',
		'directory'
	];

	public function month(){
		return $this->belongsTo('App\MonthPdf','month_id');
	}

}
