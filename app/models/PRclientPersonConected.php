<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.21
 * Time: 09:07
 */

namespace App\models;




class PRclientPersonConected extends CoreModel
{


    /**
     * Table name
     *
     * @var string
     */

    protected $table = 'PR_client_person_conected_id';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'cllients_id', 'person_id', 'client_person_type_id'];


}