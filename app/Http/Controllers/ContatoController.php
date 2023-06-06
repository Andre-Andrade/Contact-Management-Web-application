<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
   
    public function index()
    {
        
        return view('contatos.index');
    }

    public function indexcontatos()
    {
        $contatos = Contato::all();
        return view('contatos.contato', compact('contatos'));
    }

    
    public function create()
    {

        return view('contatos.create');
    }

   
    public function store(Request $request)
    {
        // Another way to save data in database
        // $input = $request->all();
        // Contato::create($input);

        $request->validate([
            'nome' => 'required|min:5',
            'email' => 'required|email|unique:contato',
            'contato' => 'required|digits:9|unique:contato'
           
        ]);

        $contato = new Contato();

        $contato->nome = $request->nome;
        $contato->email = $request->email;
        $contato->contato = $request->contato;
       

      //  Mail::to('peixoto@hotmail.com')->send(new ContactMail($contato));

        $contato->save();

        return redirect()->route('contatos')->with('message', 'Contato Successfully Added!');
    }

  
    public function edit($id)
    {
        $contatos = Contato::find($id);
        return view('contatos.edit')->with('contatos', $contatos);
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|min:5',
            'email' => 'required|email|unique:contato',
            'contato' => 'required|digits:9|unique:contato'
            
        ]);

        $contatos = Contato::find($id);
        $input = $request->all();
        $contatos->update($input);
        return redirect('contatos')->with('updated', 'Contato Successfully Updated!');
    }

   
    public function destroy($id)
    {
        // Another way to delete -> Contato::destroy($id);

        $user = Contato::findOrFail($id);
        $user->delete();

        return redirect('contatos')->with('deleted', 'Contato Deleted!');
    }
}

