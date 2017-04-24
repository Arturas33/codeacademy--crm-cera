<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.20
 * Time: 14:19
 */

namespace App\models;






class PRclients extends CoreModel
{


    /**
     * Table name
     *
     * @var string
     */

    protected $table = 'PR_clients';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'type'];


}