<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.21
 * Time: 09:25
 */

namespace App\models;




class PRpojectLoginConnections extends CoreModel
{


    /**
     * Table name
     *
     * @var string
     */

    protected $table = 'PR_poject_login_connections';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'project_id', 'login_id'];


}