<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.20
 * Time: 14:19
 */

namespace App\models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PRclients extends Model
{
    use SoftDeletes;

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