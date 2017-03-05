<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Record;

class RecordsController extends Controller
{
	public function index()
	{
		$records = Record::all();

		return view('records.index', compact('records'));
	}

    public function show($id)
    {
		$record = Record::find($id);
		return view('records.show', compact('record'));
    }

	 public function create()
	 {
	 	return view('records.create');
	 }

	 public function store(Request $request)
	 {
	 	$this->validate($request, [
			'first_name' => 'required|max:15',
			'last_name'=> 'required|max:25',
			'phone' => 'required',
			'email' => 'required|email',
			'address' => 'required|min:10'
		]);

		$record = new Record($request->all());
		$record->save();
		return redirect()->to('/');
	 }

	 public function destroy($id)
	 {
	 	Record::destroy($id);
		return redirect()->to('/');
	 }

	 public function edit($id)
	 {
	 	$record = Record::find($id);
		return view('records.edit', compact('record'));
	 }

	 public function update(Request $request, $id)
	 {
		 $record = Record::find($id);
		 $record->update($request->all());
		 return redirect()->to('/');
	 }
}
