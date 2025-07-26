<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->get('category');

        $query = Project::query();

        if ($category) {
            $query->where('category', $category);
        }

        $projects = $query->orderBy('created_at', 'desc')->get();

        return view('projects.index', compact('projects', 'category'));
    }

    public function show(Project $project)
    {
        // Récupérer les projets similaires (même catégorie)
        $relatedProjects = Project::where('category', $project->category)
            ->where('id', '!=', $project->id)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('projects.show', compact('project', 'relatedProjects'));
    }
}
