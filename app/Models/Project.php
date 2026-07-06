<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['github_id', 'name', 'description', 'html_url', 'language'];
}