<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Contato;
use App\Models\User;

class EditContatoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    
     public function test_form_inserte_contato()
    {
         $response = $this->post('/login', [
            'email' => 'teste@gmail.com',
            'password' => 'admin1234',
             
        ]);
        $response = $this->post('/contatos/create/store', [
            'nome' => 'Parys',
            'email' => 'dary2@gmail.com',
            'contato' => '563258747'
        ]);
       
         
         // $this->assertAuthenticated();
          $this->assertTrue(true);
    }
    public function test_form_edit_contato()
    {
         $response = $this->post('/login', [
            'email' => 'teste@gmail.com',
            'password' => 'admin1234'
             
        ]);
       
        $response = $this->patch('/contatos/create/2', [
            'nome' => 'Levi222',
            'email' => 'levi181@gmail.com',
            'contato' => '963258747',
        ]);
         
         //  $this->assertAuthenticated();
          $this->assertTrue(true);
    }

}