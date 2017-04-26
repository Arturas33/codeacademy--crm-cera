<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.21
 * Time: 09:27
 */

namespace App\models;




class PRprojectConnections extends CoreModel
{


    /**
     * Table name
     *
     * @var string
     */

    protected $table = 'PR_project_connections';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'project_id', 'perso_type_id', 'person_id'];

    public function person()
    {
        return $this->hasOne(PRpersons::class, 'id' , 'person_id');
    }
    public function project()
    {
        return $this->hasMany(PRproject::class, 'id' , 'project_id');
    }

    public function personType()
    {
        return $this->hasOne(PRpersonTypes::class, 'id' , 'perso_type_id');
    }


}
