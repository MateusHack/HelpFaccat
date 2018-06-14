@extends('adminlte::page')

@section('title', 'HelpFACCAT')

@section('content_header')
    <h1>Dê um Help!</h1>
@stop

@include('sweet::alert')

@section('content')
<div class="box">
  <div class="box box-solid">
    <div class="box-header with-border">
      <i class="fa fa-plus-square"></i>
      <h3 class="box-title">{{$lista[0]->titulo}}</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <dl class="dl-horizontal">
        <dt>Quem precisa:</dt>
        <dd>{{$lista[0]->user->name}}</dd>
        <dt>E-mail:</dt>
        <dd>{{$lista[0]->user->email}}</dd>
        <dt>Data do Help:</dt>
        <dd>{{date( 'd/m/Y' , strtotime($lista[0]->updated_at))}}</dd>
        <dt>Situação:</dt>
        @if($lista[0]->situacao == '2')
        <dd><span class="label label-success">Help Correspondido</span></dd>
        @else
        <dd><span class="label label-warning">Buscando Helper</span></dd>
        @endif
        <dt>Descrição:</dt>
        <dd>{{$lista[0]->descricao}}</dd>
        <dt>Como Contatar:</dt>
        <dd>{{$lista[0]->contato}}</dd>
      </dl>
      <div class="dl-horizontal">
        @if($lista[0]->situacao == '1')
        <form action='{{route('confirmaHelp')}}' method='post'>
        {{ csrf_field() }}
          <input type="hidden" name="idanuncio" id="idanuncio" value='{{$lista[0]->id_anuncio}}'>
          <button type="submit" class="btn btn-block btn-primary btn-xs">Confirmar Help!</button>
        </form>
        @else
           <dl class="dl-horizontal">
            <dt>Quem ajudou:</dt>
            <dd>{{$lista[0]->iduserhelp->name}}</dd>
            <dt>E-mail:</dt>
            <dd>{{$lista[0]->iduserhelp->email}}</dd>
          </dl>
         <a href="{{ route('helps')}}"><span  class="btn btn-block btn-info btn-xs">Voltar</span></a>
        @endif
        </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  </div>
@stop