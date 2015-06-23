<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Post;
use App\Pdf;
use App\Category;


class ViewController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		/*$postAll	= Post::orderBy('title')->paginate();
		return view('view.news',compact('postAll'));*/
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
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$postAll	= Post::find($id);
		return view('view.show',compact('postAll'));
	}
	
	public function news($id)
	{
		$postAll	= Post::where('category_id','=',$id)->orderBy('title','desc')->paginate();
		$index = $postAll->perPage() * ($postAll->currentPage()-1) + 1;
		return view('view.news',compact('postAll','index'));
	}

	public function article($id)
	{
		if(isset($request['title']) && $request['title'] != ''){ $title="AND title LIKE '%". $request['title'] ."%'"; $titleView=$request['title']; } else { $title=""; $titleView=""; }
		$postSearch	= Post::whereRaw("id>0 $title")->orderBy('title')->paginate();
		$postAll	= Post::where('category_id','=',$id)->orderBy('title','desc')->paginate();
		$index = $postAll->perPage() * ($postAll->currentPage()-1) + 1;
		return view('view.article',compact('postAll','index','postSearch','titleView'));
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

	public function thalaikantu($id)
	{
		$postAll	= Pdf::find($id);
		return view('view.thalaikantu',compact('postAll'));
	}

	
}
