<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.24
 * Time: 13:45
 */

namespace App\Http\Controllers;


use App\models\PRpojectLoginConnections;

class PRpojectLoginConnectionsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /prpersons
     *
     * @return Response
     */
    public function index()
    {
        return PRpojectLoginConnections:: get();

    }

    /**
     * Show the form for creating a new resource.
     * GET /prpersons/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /prpersons
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /prpersons/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /prpersons/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /prpersons/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /prpersons/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}