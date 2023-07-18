<?php

namespace App\Http\Controllers\Api;


use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(5);

        return response()->json($projects);
    }

    public function show($id)
    {
        $project = Project::where('id', $id)->first();
        return response()->json([
            'success' => $project ? true : false,

            'results' => $project,
        ]);
    }
}
