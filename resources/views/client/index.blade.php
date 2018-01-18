@extends('layouts.app')

@section('title', 'Client')

@section('delete_modal')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
<center>
    <div id="client_list_section" class="col-xs-12">
        <div class="x_panel">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="input-group stylish-input-group">
								<span class="input-group-addon">
									<button type="submit">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</span>
                    <input id="client_search" type="text" class="form-control" placeholder="クライアント名で検索してください（部分一致）">
                </div>
            </div>
            <table id="clientTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th class="col-md-1 text-center">ID</th>
                    <th class="col-md-8">クライアント名</th>
                    <th class="col-md-1"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($clients as $c)
                        <tr>
                            <td class="col-md-1">{{ $c->id }}</td>
                            <td>{{ $c->client_name }}</td>
                            <td class="col-md-1">
                                <div class="text-center">
                                    <a id="edit_client_{{ $c->id }}" value="{{ $c->id }}" href="client/edit/{{ $c->id }}"><i class="fa fa-edit"></i></a> | 
                                    <a id="delete_client_{{ $c->id }}" class="delete_client" data-record-id="{{ $c->id }}"  data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o" style="cursor:pointer"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary" id="add_client" href="client/create">新規クライアント追加</a>
        </div>
    </div>
</center>
@endsection
@section('js')
<script type="text/javascript" src="{{ URL::asset('https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/client.js') }}"></script>
@endsection