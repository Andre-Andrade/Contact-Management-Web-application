<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Contato;
use App\Models\User;

class EditeInsereContatoTest extends TestCase
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
    
     public function testLoginFormDisplayed()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    
    public function testLoginAValidUser()
    {
            $response = $this->post('/login', [
            'email' => 'teste@gmail.com',
            'password' => 'admin1234',
             
        ]);
        $response->assertStatus(302);

        $this->assertAuthenticated();
    }
    
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
       
         
         
           $this->assertAuthenticated();
    }
    
     public function test_form_inserte_contato_valida_nome_menor5digitos()
    {
         $response = $this->post('/login', [
            'email' => 'teste@gmail.com',
            'password' => 'admin1234',
             
        ]);
        $response = $this->post('/contatos/create/store', [
            'nome' => 'Pa',
            'email' => 'dary5@gmail.com',
            'contato' => '123456789'
        ]);
        
       $response->assertStatus(422);
    }
    
    public function test_form_inserte_contato_valida_email_duplicado()
    {
         $response = $this->post('/login', [
            'email' => 'teste@gmail.com',
            'password' => 'admin1234',
             
        ]);
        $response = $this->post('/contatos/create/store', [
            'nome' => 'Sergio',
            'email' => 'levi181@gmail.com',
            'contato' => '223456789'
        ]);
        $response->assertStatus(422);
      
    }
    
    public function test_form_inserte_contato_valida_contato_duplicado()
    {
         $response = $this->post('/login', [
            'email' => 'teste@gmail.com',
            'password' => 'admin1234',
             
        ]);
        $response = $this->post('/contatos/create/store', [
            'nome' => 'Celio',
            'email' => 'celio@gmail.com',
            'contato' => '999999993'
        ]);
        $response->assertStatus(422);
      
    }
    public function test_form_edit_contato()
    {
         $response = $this->post('/login', [
            'email' => 'teste@gmail.com',
            'password' => 'admin1234'
             
        ]);
       
        $response = $this->put('/contatos/create/2', [
            'nome' => 'Levi2113',
            'email' => 'levi181@gmail.com',
            'contato' => '963258747',
        ]);
         
        
        $this->assertAuthenticated();
    }
    
     public function test_form_edit_contato_email_duplicado()
    {
         $response = $this->post('/login', [
            'email' => 'teste@gmail.com',
            'password' => 'admin1234'
             
        ]);
       
        $response = $this->put('/contatos/create/2', [
            'nome' => 'Levi222',
            'email' => 'marcelo@testes.com.br',
            'contato' => '963658748',
        ]);
         
        //dd($response);
        $response->assertStatus(422);
    }
    
     public function test_form_edit_contato_nome_menor5digitos()
    {
         $response = $this->post('/login', [
            'email' => 'teste@gmail.com',
            'password' => 'admin1234'
             
        ]);
       
        $response = $this->put('/contatos/create/2', [
            'nome' => 'Lev',
            'email' => 'levi181@gmail.com',
            'contato' => '963258747',
        ]);
         
        
       $response->assertStatus(422);
    }
     public function test_form_edit_contato_contato_duplicado()
    {
         $response = $this->post('/login', [
            'email' => 'teste@gmail.com',
            'password' => 'admin1234'
             
        ]);
       
        $response = $this->put('/contatos/create/2', [
            'nome' => 'Levi222',
            'email' => 'levi181@gmail.com',
            'contato' => '999999993',
        ]);
         
        
        $response->assertStatus(400);
    }

}