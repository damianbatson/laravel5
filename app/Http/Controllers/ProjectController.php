<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Projects;
use App\ProjectImages;
use Illuminate\Support\Facades\Auth;
use Input;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Projects $projects, ProjectImages $projectimages, Auth $auth)
	{
		
		$this->projects = $projects;
		// $this->projectimages = $projectimages;
<<<<<<< HEAD
		$this->middleware ('auth');
=======
		$this->middleware ('auth', ['except' => ['show']]);
		// $this->middleware('can.handle.job', ['only' => ['show', 'edit', 'update']]);
>>>>>>> 32cac751fe0cc6a72d71c631417838d894ac265c
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
        $file = Input::file('image');

        $project = new projects;
        $project->exercise = $projectrequest->exercise;
        $project->description = $projectrequest->description;
        $project->exercise01 = $projectrequest->exercise01;
        $project->exercise01_weight = $projectrequest->exercise01_weight;
        $project->exercise01_reps = $projectrequest->exercise01_reps;

        
        // $destinationPath    = 'images/'; // The destination were you store the image.
        $filename           = $file->getClientOriginalName(); // Original file name that the end user used for it.
        $mime_type          = $file->getMimeType(); // Gets this example image/png
        $extension          = $file->getClientOriginalExtension(); // The original extension that the user used example .jpg or .png.
        $upload_success     = $file->move('images/', $filename); // Now we move the file to its new home.
        $project->image = 'images/'.$filename;
        $project->user_id = Auth::user()->id;
        $project->save();
        return redirect($this->redirectPath());

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
        // $projectimages = ProjectImages::find($id);

        return view('projects.show')->with('project', $project);

        // return view('projects.show')->with('projectimages', $projectimages);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project = projects::find($id);

        if(is_null($project))
        {
            return Redirect::route('projects.index');
        }

        return view('projects.edit')->with('project', $project);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
        // $file = array_except(Input::file('image'), '_files');
        $file = Input::file('image');

        // $v = Validator::make($input, Projects::$rules);

        // if($v->passes())
        // {
            $destinationPath    = 'images/'; // The destination were you store the image.
            // $filename           = $file->getClientOriginalName(); // Original file name that the end user used for it.
            // $mime_type          = $file->getMimeType(); // Gets this example image/png
            // $extension          = $file->getClientOriginalExtension(); // The original extension that the user used example .jpg or .png.
            // $upload_success     = $file->move($destinationPath, $filename); // Now we move the file to its new home.
            // $project->image = 'images/'.$filename;
            projects::find($id)->update($input);
            // Projects::find($id)->update($file);

            return redirect($this->redirectPath());
        // }

        // return Redirect::back()->withErrors($v);
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		projects::find($id)->delete();

        return redirect($this->redirectPath());
	}

}
