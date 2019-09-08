<?php

namespace App\Http\Controllers\API;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Project::latest()
            ->with('images')
            ->paginate(6);
    }

    public function ProjectList()
    {

        return Project::orderBy('title')
            ->get(['id', 'title as label']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        $project = Project::create($request->all());
        return ['message' => 'Proyecto creado', 'id' => $project->id];
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($projectId)
    {
        $project = Project::find($projectId);
        return $project;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $project->update($request->all());
        return ['message' => 'Proyecto actualizado', 'id' => $project->id];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($item)
    {
        // Get model
        $item = Project::where('slug', $item->slug)->firstOrFail();

        // Delete the model
        $itemDeleted = $item->delete();

        return response()->json(
            ['message' => ($itemDeleted ? 'Item deleted' : 'Could not delete item')]
        );
    }

}
