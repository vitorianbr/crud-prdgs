@extends('parent')

@section('main')


<table class="table table-bordered table-striped">
  <tr>
    <th width="35%">Nome</th>
    <th width="35%">Email</th>
  </tr>
  @foreach($data as $row)
  <tr>
    <td>{{ $row->nome }}</td>
    <td>{{ $row->email }}</td>
    <td>

    </td>
  </tr>
  @endforeach
</table>
{!! $data->links() !!}
@endsection