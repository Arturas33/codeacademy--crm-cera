<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.21
 * Time: 09:10
 */

namespace App\models;



class PRclientsPersonType extends CoreModel
{


    /**
     * Table name
     *
     * @var string
     */

    protected $table = 'PR_clients_person_type';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'discription'];


}