<?php

namespace App\Http\Controllers;

use App\Calculadora;
use Illuminate\Http\Request;
use App\Http\Controllers\GuzzleHttp\Client;

class CalculadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "GG";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function suma()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', 'https://localhost:5001/api/calculadora/suma',
        ['verify' => false,'form_params'=>['valor1'=>10,'valor2'=>5]]);
        return $res->getBody();
        
    }
    public function resta(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', 'https://localhost:5001/api/calculadora/resta',
        ['verify' => false,'form_params'=>['valor1'=>10,'valor2'=>5]]);
        return $res->getBody();
    }
    public function multiplicacion(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', 'https://localhost:5001/api/calculadora/multiplicacion',
        ['verify' => false,'form_params'=>['valor1'=>10,'valor2'=>5]]);
        return $res->getBody();
    }
    public function division(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', 'https://localhost:5001/api/calculadora/division',
        ['verify' => false,'form_params'=>['valor1'=>10,'valor2'=>5]]);
        return $res->getBody();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Calculadora  $calculadora
     * @return \Illuminate\Http\Response
     */
    public function show(Calculadora $calculadora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Calculadora  $calculadora
     * @return \Illuminate\Http\Response
     */
    public function edit(Calculadora $calculadora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calculadora  $calculadora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calculadora $calculadora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calculadora  $calculadora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calculadora $calculadora)
    {
        //
    }
}
