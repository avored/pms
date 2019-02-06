<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description'
    ];

    /**
     * Edit Link for Resource Model
     * @return string $link
     */
    public function editLink() 
    {
        $link = "<a href='". route('project.edit', $this->id) ."'>Edit</a>";
        return $link;
    }

    /**
     * Edit Link for Resource Model
     * @return string $link
     */
    public function destroyLink() 
    {
        $link = "<a href='". route('project.destroy', $this->id) ."' 
                    onclick='event.preventDefault();document.getElementById(\"project-destroy-". $this->id. "\").submit();'
                >Destroy</a>
                <form id='project-destroy-". $this->id ."' action='". route('project.destroy', $this->id) . "' 
                    method='POST' style='display: none;'>
                    <input type='hidden' name='_token' value='". csrf_token()."'/>>
                    <input type='hidden' name='_method' value='delete'/>>
                    
                </form>
                ";
        return $link;
    }
}
