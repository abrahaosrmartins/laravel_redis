<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Http\Requests\StoreNoticiaRequest;
use App\Http\Requests\UpdateNoticiaRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {

        // Cache::put('site', 'jorgesantanna.net.br', 10);
        // chave, valor, tempo em segundos até expirar o dado em memória
        //echo Cache::get('site');

        $noticias = [];

        if (Cache::has('dez_primeiras_noticias')) {
            Cache::get('dez_primeiras_noticias');
        } else {
            $noticias = Noticia::orderByDesc('created_at')->limit(10)->get();
            Cache::put('dez_primeiras_noticias', $noticias, 15);
        }

        return view('noticia', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort(405, 'Method not enabled');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreNoticiaRequest $request
     */
    public function store(StoreNoticiaRequest $request)
    {
        abort(405, 'Method not enabled');
    }

    /**
     * Display the specified resource.

     * @param Noticia $noticia
     */
    public function show(Noticia $noticia)
    {
        abort(405, 'Method not enabled');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Noticia  $noticia
     */
    public function edit(Noticia $noticia)
    {
        abort(405, 'Method not enabled');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateNoticiaRequest $request
     * @param  Noticia $noticia
     */
    public function update(UpdateNoticiaRequest $request, Noticia $noticia)
    {
        abort(405, 'Method not enabled');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Noticia $noticia
     */
    public function destroy(Noticia $noticia)
    {
        abort(405, 'Method not enabled');
    }
}
