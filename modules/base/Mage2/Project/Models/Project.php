<?php

namespace Mage2\Project\Models;

use Mage2\Setup\Models\Status;
use Mage2\Project\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Mage2\Project\Models\ProjectUpdate;

class Project extends Model {

    protected $fillable = ['name', 'description', 'assign_to_contact_id', 'due_date', 'status_id'];
    
    
    /**
     *
     * Date Mutatator for the Projects
     */
    protected $dates = ['due_date', 'updated_at', 'created_at'];

    /**
     * Project can be assign to one contact
     * 
     * @return \Mage2\Project\Models\Contact
     */
    public function assignToContact() {
        return $this->belongsTo(Contact::class, 'assign_to_contact_id');
    }


    /**
     * Project can have many Project Updates
     * 
     * @return \Mage2\Project\Models\Contact
     */
    public function updates() {
        return $this->hasMany(ProjectUpdate::class,'project_id');
    }

    /**
     * Project has one status
     * 
     * @return \Mage2\Setup\Models\Status
     */
    public function status() {
        return $this->belongsTo(Status::class);
    }

    /**
     * get the assign to contact full name
     * 
     * @return string
     */
    public function getAssignToContactName() {
        return $this->assignToContact->full_name;
    }

    /**
     * get the assign to contact full name
     * 
     * @return string
     */
    public function getStatusName() {
        return $this->status->name;
    }

}
