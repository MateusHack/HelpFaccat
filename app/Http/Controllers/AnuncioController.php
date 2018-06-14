<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use RealRashid\SweetAlert\Facades\Alert;

class AnuncioController extends Controller
{
    public function criarHelp(){
        return View('criarhelp');
    }
    
    public function returnHome(){
        Alert::error("Ooppss!", "Requisição Inválida.");
        return redirect()->route('home');
    }
    
    public function salvaHelp(){
        if (Input::get('idanuncio') > 0){
            $help = \App\Anuncio::find(Input::get('idanuncio'));
            $help->titulo = Input::get('titulo');
            $help->contato = Input::get('contato');
            $help->descricao = Input::get('descricao');
            $help->situacao = '1';
            $help->save();
            Alert::success("Seu Help foi editado com sucesso!", "");
        }else {
            $help = new \App\Anuncio;
            $help->id_user = Auth::User()->id;
            $help->titulo = Input::get('titulo');
            $help->descricao = Input::get('descricao');
            $help->contato = Input::get('contato');
            $help->situacao = '1';
            $help->save();
            Alert::success("Seu Help foi incluido com sucesso!", "");
        }
        return redirect()->route('home');
        
    }
    
    public function listaHelp(){
        $lista = \App\Anuncio::where('situacao', '=','1')->get(); 
        return view('home',compact('lista'));
    }
    
    public function meusHelps(){
        $lista = \App\Anuncio::where('id_user', '=',Auth::User()->id)->get(); 
        return view('meushelps',compact('lista'));
    }
    
    public function editarHelp(){
        $lista = \App\Anuncio::where('id_anuncio', '=',Input::get('idanuncio'))->get(); 
        return view('criarhelp',compact('lista'));
    }
    
    public function apagarHelp(){
        $idanuncio = Input::get('idanuncio');
        $help = \App\Anuncio::find($idanuncio);
        $help->delete();
        Alert::success("Seu Help! foi excluído com sucesso!", "");
        return redirect()->route('meusHelps');
    }
    
    public function verHelp(){
        $lista = \App\Anuncio::where('id_anuncio', '=',Input::get('idanuncio'))->get(); 
        return view('verhelp',compact('lista'));
        
    }
    
    public function confirmaHelp(){
        $help = \App\Anuncio::where('id_anuncio', '=',Input::get('idanuncio'))->get();
        if($help[0]->id_user == Auth::User()->id){
           Alert::error("Ooppss!", "Você não pode dar um Help em suas solicitações.");
           return redirect()->route('home');
        }else{
        $helpnew = \App\Anuncio::find(Input::get('idanuncio'));
        $helpnew->situacao = '2';
        $helpnew->id_user_help = Auth::User()->id;
        $helpnew->save();
       
  
    
        Alert::success("Help enviado!", "Obrigado por ajudar seu Colega!");   
        return redirect()->route('home');
        
    }
        
    }
    
    public function helps(){
        $lista = \App\Anuncio::where('situacao', '=','2')
                             ->where(function($q) {
                             $q->where('id_user', '=', Auth::User()->id)
                             ->orWhere('id_user_help', '=', Auth::User()->id);
                             })->get();

        
        
        return view('helps',compact('lista'));
    }
    
    
    
}
