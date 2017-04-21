<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.21
 * Time: 09:32
 */

namespace App\models;




class PRprojetTypes extends CoreModel
{

    /**
     * Table name
     *
     * @var string
     */

    protected $table = 'PR_projet_types';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'discription'];


}