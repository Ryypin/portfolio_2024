<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Récupérer tous les projets
        $projects = Project::all();

        // Retourner la vue avec les projets
        return view('pages.index', compact('projects'));
    }
}