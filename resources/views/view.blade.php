@extends('parent')

@section('main')

<div class="jumbotron text-center">
    <div align="right">
        <a href="{{ route('crud.index') }}" class="btn btn-default">Voltar</a>
    </div>
    <br />
    <h3>Nome - {{ $data->nome }} </h3>
    <h3>Email - {{ $data->email }}</h3>
</div>
@endsection