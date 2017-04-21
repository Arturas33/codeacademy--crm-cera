<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.21
 * Time: 09:21
 */

namespace App\models;




class PRpersonTypes extends CoreModel
{

    /**
     * Table name
     *
     * @var string
     */

    protected $table = 'PR_person_types';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'description'];


}