<?php namespace App\Http\Controllers;

use App\Commands\PurchaseCommand;
use App\Projects;

class IndexController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Projects $projects)
	{
		$this->middleware('guest');
		$this->projects = $projects;
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		// // $talk = Talk::findOrFail($talkId);
		// $this->dispatch(new PurchaseCommand(1, 2));
		// return view('index');
		$projects = projects::all();

		return view('index')->with('projects', $projects);
	}

}
