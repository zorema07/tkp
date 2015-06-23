<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Pdf;
use App\MonthPdf;

class PdfController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$month_id = $_GET['month_id'];
		$pdfByMonth = Pdf::where('month_id','=',$month_id)->orderBy('id','desc')->paginate();
		$index = $pdfByMonth->perPage() * ($pdfByMonth->currentPage()-1) + 1;


		return View('pdf.index',compact('pdfByMonth','index','month_id')); 
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
	public function store(Request $request)
	{
		$rules	= [
			'name' 	=> 'required',
		];
		$this->validate($request, $rules);

		$input 	= $request->all();
		$monthDir = MonthPdf::find($input['month_id']);

		$pdf 	= New Pdf();
		if($request->hasFile('pdf_file')){
			$extension = $request->file('pdf_file')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('pdf_file')->move($monthDir->directory, $fileName);
			$pdf->pdf_file	= $fileName;
		}

		$pdf->directory 		= $monthDir->directory;
		$pdf->name 			= $input['name'];
		$pdf->month_id 		= $input['month_id'];
		$pdf->save();

		return redirect("pdf?month_id=".$input['month_id']);
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
