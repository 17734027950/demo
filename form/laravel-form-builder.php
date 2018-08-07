<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\SongForm;

class SongsController extends BaseController {

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->createByArray([
                        [
                            'name' => 'name',
                            'type' => 'text',
                        ],
                        [
                            'name' => 'lyrics',
                            'type' => 'textarea',
                        ], 
                        [
                            'name' => 'publish',
                            'type' => 'checkbox'
                        ],
                    ]
            ,[
            'method' => 'POST',
            'url' => route('song.store')
        ]);

        return view('song.create', compact('form'));
    }
}