@extends('parent')

@section('main')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div align="right">
    <a href="{{ route('crud.index') }}" class="btn btn-default">Voltar</a>
</div>
<br />
<form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label class="col-md-4 text-right">Digite seu nome:</label>
        <div class="col-md-8">
            <input type="text" name="nome" value="{{ $data->nome }}" class="form-control input-lg" />
        </div>
    </div>
    <br />
    <br />
    <br />
    <div class="form-group">
        <label class="col-md-4 text-right">Digite seu email:</label>
        <div class="col-md-8">
            <input type="email" name="email" value="{{ $data->email }}" class="form-control input-lg" />
        </div>
    </div>
    <br />
    <br />
    <br />
    <div class="form-group text-center">
        <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
    </div>
</form>

@endsection