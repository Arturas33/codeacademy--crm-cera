<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.21
 * Time: 09:23
 */

namespace App\models;




class PRpersons extends CoreModel
{


    /**
     * Table name
     *
     * @var string
     */

    protected $table = 'PR_persons';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'mail', 'phone', 'project_id'];


}