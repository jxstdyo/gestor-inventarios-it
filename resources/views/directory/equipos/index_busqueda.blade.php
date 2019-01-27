@extends('layouts.master')@section('content')    <h1>@lang('form.equipos')<a href="{{ url('equipos/create') }}" class="btn btn-primary pull-right btn-sm">@lang('form.addnew') Equipo</a></h1>    <div class="table">        <table class="table table-bordered table-striped table-hover">            <thead>                <tr>                    <th>@lang('form.sno')</th><th>Orden De Compra Id</th><th>Custodio Id</th><th>Estacione Id</th><th>Actions</th>                </tr>            </thead>            <tbody>            @php $x=0; @endphp            @foreach($equipos as $item)                @php $x++;@endphp                <tr>                    <td>{{ $x }}</td>                    <td><a href="{{ url('equipos', $item->id) }}">{{ $item->orden_de_compra_id }}</a></td><td>{{ $item->custodio_id }}</td><td>{{ $item->estacione_id }}</td>                    <td>                        <a href="{{ url('equipos/' . $item->id . '/edit') }}">                            <button type="submit" class="btn btn-sm btn-light m-1">@lang('form.update')</button>                        </a> /                        {!! Form::open([                            'method'=>'DELETE',                            'url' => ['equipos', $item->id],                            'style' => 'display:inline'                        ]) !!}                        {!! Form::button(__('form.deletee'), ['class' => 'btn btn-sm btn-light m-1','type' => 'submit']) !!}                        {!! Form::close() !!}                    </td>                </tr>            @endforeach            </tbody>        </table>        <div class="pagination"> {!! $equipos->render() !!} </div>    </div>@endsection