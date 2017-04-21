<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.21
 * Time: 09:15
 */

namespace App\models;




class PRLoginName extends CoreModel
{


    /**
     * Table name
     *
     * @var string
     */

    protected $table = 'PR_login_name';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'description' ];


}