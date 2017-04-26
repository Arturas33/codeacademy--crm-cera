<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.21
 * Time: 09:30
 */

namespace App\models;




class PRproject extends CoreModel
{

    /**
     * Table name
     *
     * @var string
     */

    protected $table = 'PR_project';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'types_id', 'descrption', 'clients_id'];


    public function client()
    {
        return $this->hasOne(PRclients::class, 'id', 'clients_id');
    }

    public function types()
    {
        return $this->hasOne(PRprojetTypes::class, 'id', 'types_id');
    }

    public function person()
    {
        return $this->hasMany(PRpersons::class, 'id', 'person_id');
    }

    public function connection()
    {
        return $this->hasMany(PRprojectConnections::class, 'project_id', 'id');
    }


}
