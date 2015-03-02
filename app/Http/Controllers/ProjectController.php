<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Projects;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Projects $projects, Auth $auth)
	{
		
		$this->projects = $projects;
		$this->auth = $auth;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = projects::where( 'user_id', '=', Auth::user()->id )->get();

        return view('projects.index')->with('projects', $projects);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProjectRequest $projectrequest)
    {

    	$projectrequest->all;
    	

        // $input = Input::all();
        // $file = Input::file('image');

        // $v = Validator::make($input, Projects::$rules);

        // if ($v->passes()) {

            $project = new projects;
            $project->name = $projectrequest->name;
            $project->description = $projectrequest->description;
        //     $project->exercise01 = Input::get('exercise01');
        //     $project->exercise01_weight = Input::get('exercise01_weight');
        //     $project->exercise01_reps = Input::get('exercise01_reps');

            
            // $destinationPath    = 'images/'; // The destination were you store the image.
            // $filename           = $file->getClientOriginalName(); // Original file name that the end user used for it.
            // $mime_type          = $file->getMimeType(); // Gets this example image/png
            // $extension          = $file->getClientOriginalExtension(); // The original extension that the user used example .jpg or .png.
            // $upload_success     = $file->move('images/', $filename); // Now we move the file to its new home.
            // $project->image = 'images/'.$filename;
            $project->user_id = Auth::user()->id;
            $project->save();
            return redirect($this->redirectPath());

        //     return Redirect::route('portfolios.index');
        // }

        // return Redirect::back()->withInput()->withErrors($v);
    }

    	public function redirectPath()
	{
		return property_exists($this, 'redirectTo') ? $this->redirectTo : 'projects';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = projects::find($id);
        // $projectimages = Projects::find($id)->projectimages;

        return view('projects.show')->with('project', $project);
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
