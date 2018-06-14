@extends('adminlte::page')

@section('title', 'HelpFACCAT')

@section('content_header')
    <h1>Peça seu Help!</h1>
    
@stop

@section('content')

   
   <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Criar Help!</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form"  action="{{ route('salvaHelp')}}" method='POST' >
              {{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <label>Título do Help</label>
                  <input type="text" class="form-control" name="titulo" placeholder="Preciso de ajuda..." @isset($lista[0]->titulo)value="{{$lista[0]->titulo}}"@endisset required>
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Descreva seu Help!</label>
                  <textarea class="form-control" rows="3" name="descricao" placeholder="Preciso de uma calculadora..." required>@isset($lista[0]->descricao){{$lista[0]->descricao}}@endisset</textarea>
                </div>
                <div class="form-group">
                <label>Como irá ser o contato para seu Help!</label>
                  <textarea class="form-control" rows="3" name="contato" placeholder="Me chamem no meu email aluno@sou.faccat.br ou na sala D201..." required>@isset($lista[0]->contato){{$lista[0]->contato}}@endisset</textarea>
                </div>
                <div class="form-group">
                    @isset($lista[0]->id_anuncio)
                        <input type="hidden" name="idanuncio" id="idanuncio" value='{{$lista[0]->id_anuncio}}'>
                    @endisset
                    @empty($lista[0]->titulo)
                        <button type="submit" class="btn btn-block btn-primary">Cadastrar Help</button> 
                    @else
                        @if($lista[0]->situacao == '2')
                          <td><button type="submit" class="btn btn-block btn-primary">Reanimar Help</button></td>
                        @else
                          <button type="submit" class="btn btn-block btn-primary">Editar Help</button>
                        @endif
                    @endempty
                </div>
              </form>
              @isset($lista[0]->titulo)
                <form action='{{ route('apagarHelp')}}' method='post'>
                {{ csrf_field() }}
                @isset($lista[0]->id_anuncio)
                    <input type="hidden" name="idanuncio" id="idanuncio" value='{{$lista[0]->id_anuncio}}'>
                @endisset
                <button type="submit" class="btn btn-block btn-danger">Apagar Help</button>
                </form>
              @endisset

            </div>
            <!-- /.box-body -->
          </div>
   
   
@stop