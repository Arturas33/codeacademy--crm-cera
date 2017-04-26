<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.24
 * Time: 10:18
 */

namespace App\Http\Controllers;


use App\models\PRclients;
use Illuminate\Routing\Controller;

class PRclientsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /prpersons
     *
     * @return Response
     */
    public function index()
    {


        $configuration = [];

        $configuration['clients'] = PRclients::with(['project'])->get();
        $configuration['totalCount'] = sizeof($configuration['clients']);


        return view('content.clients', $configuration);

        /**
         *
         *  return PRclients::with( ['project', 'persons'])->get();
         *
         * PRclients:: all();

         * $configuration = [
         * 'example' => 'Example Data',
         * 'client'=> PRclients::with(['project'])->get(),
         *
         * ];
         *
         * return view('data', $configuration);
         */
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
     * @param  int $id
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
     * @param  int $id
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
     * @param  int $id
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
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}