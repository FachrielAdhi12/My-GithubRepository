<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Project;

class PortfolioController extends Controller
{
    // Nama username GitHub kamu
    private $githubUsername = 'FachrielAdhi12'; 

    // Tampilan Halaman Utama (User)
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('home', compact('projects'));
    }

    // Tampilan Panel Admin
    public function admin()
    {
        $projects = Project::all();
        return view('admin', compact('projects'));
    }

    // Fungsi Sinkronisasi Manual dari Admin Panel
    public function syncGithub()
    {
        $response = Http::withHeaders([
            'User-Agent' => 'Laravel-Portfolio'
        ])->get("https://api.github.com/users/{$this->githubUsername}/repos?sort=updated");

        if ($response->successful()) {
            $repos = $response->json();

            foreach ($repos as $repo) {
                Project::updateOrCreate(
                    ['github_id' => $repo['id']],
                    [
                        'name' => $repo['name'],
                        'description' => $repo['description'],
                        'html_url' => $repo['html_url'],
                        'language' => $repo['language'] ?? 'N/A',
                    ]
                );
            }
            return redirect()->back()->with('success', 'Portofolio berhasil disinkronisasi dengan GitHub!');
        }

        return redirect()->back()->with('error', 'Gagal mengambil data dari GitHub.');
    }
}
