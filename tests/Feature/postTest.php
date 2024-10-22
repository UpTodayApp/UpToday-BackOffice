<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class postTest extends TestCase
{


        public function test_CrearUnPost()
    {
        $estructuraEsperable = [
            'id',
            'usuario_id',
            'contenido',
            'created_at',
            'updated_at'

        ];

        $datosDePost = [
            "usuario_id" => 1,
            "contenido" => "super post"
        ];

        $response = $this->post('/crearPost', $datosDePost);
        $response->assertStatus(302);


        $this->assertDatabaseHas('post', [
            "usuario_id" => 1,
            "contenido" => "super post"
        ]);
    }

    
    public function test_ObtenerListadoDePost()
    {
        $estructuraEsperable = [
            '*' => [
                'id',
                'usuario_id',
                'contenido',
                'megusta',
                'ubicacion',
                'etiquetas',
                'created_at',
                'updated_at',
                'deleted_at'
            ]
        ];

        $response = $this->get('listarPost');
        $response->assertStatus(302);

    }

    public function test_ObtenerUnaPostQueNoExiste()
    {
        $response = $this->get('/api/post/{{ 99999 }}');
        $response->assertStatus(404);
    }


    public function test_ModificarPost()
    {

        $datosDePost = [
            "id" => 10,
            "usuario_id" => 1,
            "contenido" => "Soy un arbol"
        ];

        $response = $this->post('/modificarPost',$datosDePost);
        $response->assertStatus(302);
        $response->assertLocation('listarPost');
        
        $this->assertDatabaseHas('post', [
            "id" => 10,
            "usuario_id" => 1,
            "contenido" => "Soy un arbol"
        ]);
    }

    public function test_ModificarPostQueNoExiste()
    {
        $response = $this->put('/api/post/99999');
        $response->assertStatus(404);
    }



    }

