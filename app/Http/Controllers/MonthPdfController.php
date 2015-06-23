<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\MonthPdf;

class MonthPdfController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$monthAll = MonthPdf::orderBy('name')->paginate();
		$index = $monthAll->perPage() * ($monthAll->currentPage()-1) + 1;
		return View('monthpdf.index',compact('monthAll','index'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request )
	{
		$rules	= ['name'=>'required'];
		$this->validate($request, $rules);
		$dir = uniqid();
		mkdir('upload/'.$dir);
		$request['directory'] = 'upload/'.$dir.'/';
		MonthPdf::create($request->except('_token'));

		return redirect('monthpdf');
	

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$monthAll = MonthPdf::orderBy('name')->paginate();
		$index = $monthAll->perPage() * ($monthAll->currentPage()-1) + 1;
		$monthById = MonthPdf::find($id);
		return View('monthpdf.edit',compact('monthAll','index','monthById'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules	= ['name'=>'required'];
		$this->validate($request, $rules);

		$month = MonthPdf::find($id);
		$month->name = $request['name'];
		$month->save();

		return redirect('monthpdf');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		MonthPdf::destroy($id);
		return redirect('monthpdf');
	}

}
