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
    protected $fillable = ['id', 'project_id', 'perso_type_id'];

}
