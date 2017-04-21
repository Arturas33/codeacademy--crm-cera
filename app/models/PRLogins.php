<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.21
 * Time: 09:18
 */

namespace App\models;




class PRLogins extends CoreModel
{


    /**
     * Table name
     *
     * @var string
     */

    protected $table = 'PR_logins';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'user', 'password' , 'login_url', 'login_name_id' ];


}