@extends('layouts.master')

@section('page-title')
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse">
        Inserir
    </button>
@endsection

@section('content')
    <div class="collapse" id="collapse">
        <form method="post" action="{{ action('FormattertestController@postData') }}">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div class="form-group">
                <label for="date">Data</label>
                <input type="text" class="form-control" id="date" name="date" placeholder="Campo de Data">
            </div>
            <div class="form-group">
                <label for="datetime">Date e Horário</label>
                <input type="text" class="form-control" id="datetime" name="datetime" placeholder="Campo DateTime">
            </div>
            <div class="form-group">
                <label for="money">Monetário</label>
                <input type="text" class="form-control" id="money" name="money" placeholder="Campo Monetário">
            </div>
            <div class="form-group">
                <label for="numeric">Numérico</label>
                <input type="text" class="form-control" name="numeric" id="numeric" placeholder="Campo Numérico">
            </div>
            <div class="form-group">
                <label for="boolean">Bolleano</label>
                <input type="text" class="form-control" id="boolean" name="boolean" placeholder="Campo Booleano">
            </div>
            <button type="submit" class="btn btn-success pull-left">Inserir</button>
        </form>
    </div>
    <table class="table mt-4">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Data</th>
            <th scope="col">Datetime</th>
            <th scope="col">Money</th>
            <th scope="col">Numeric</th>
            <th scope="col">Boolean</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>
                    {{ $item->id }}
                </td>
                <td>
                    {{ $item->date }}
                </td>
                <td>
                    {{ $item->datetime }}
                </td>
                <td>
                    {{ $item->money }}
                </td>
                <td>
                    {{ $item->numeric }}
                </td>
                <td>
                    {{ $item->boolean }}
                </td>
                <td>
                    {{ $item->created_at }}
                </td>
                <td>
                    {{ $item->updated_at }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
