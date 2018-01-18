@extends('layouts.app')

@section('title', 'Client')

@section('sidebar')
    @parent
@endsection

@section('content')
<center>
    <div id="client_edit_section" class="col-xs-12">
        <div class="panel panel-primary">
            <div id="client_panel_tittle" class="panel-heading">クライアント{{ Request::is('client/create') ? '登録' : '編集' }}</div>
            <div class="panel-body">
                <form id="addclient_form" method="post" action="{{ route('client.save')}}" class="form-horizontal" data-toggle="validator" role="form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="client_name" class="col-sm-2 control-label">クライアント名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="client_name" name="client_name"
                                value="{{ Request::is('client/edit/*') ? $client->client_name : '' }}" maxlength="255" data-error="クライアント名は既に存在しています。" placeholder="クライアント名" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input id="id" name="id" type="hidden" value="{{ Request::is('client/edit/*') ? $client->id : '' }}"/>
                        <label class="col-sm-2 control-label">担当営業局</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="pic_division" name="pic_division">
                                <option value="1">1営</option>
                                <option value="2">2営</option>
                                <option value="3">3営</option>
                                <option value="4">4営</option>
                                <option value="5">5営</option>
                                <option value="6">6営</option>
                                <option value="7">7営</option>
                                <option value="8">8営</option>
                                <option value="9">9営</option>
                                <option value="10">10営</option>
                                <option value="11">11営</option>
                                <option value="12">12営</option>
                                <option value="13">13営</option>
                                <option value="14">14営</option>
                                <option value="15">15営</option>
                                <option value="16">16営</option>
                                <option value="17">17営</option>
                                <option value="18">18営</option>
                                <option value="19">19営</option>
                                <option value="20">20営</option>
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pic_esq_id" class="col-sm-2 control-label">営業担当ESQ_ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pic_esq_id" name="pic_esq_id" value="{{ Request::is('client/edit/*') ? $client->pic_esq_id : '' }}" maxlength="255" data-error="営業担当ESQ_IDは既に存在しています。" placeholder="営業担当ESQ_ID" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="iAnalyse_login_info" class="col-sm-2 control-label">iAnalyseログイン情報連絡先</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="iAnalyse_login_info" name="iAnalyse_login_info" value="{{ Request::is('client/edit/*') ? $client->iAnalyse_login_info : '' }}" maxlength="255" data-error="iAnalyseログイン情報連絡先は既に存在しています。" placeholder="iAnalyseログイン情報連絡先" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="iAnalyse_login_user" class="col-sm-2 control-label">iAnalyseログインユーザー</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="iAnalyse_login_user" name="iAnalyse_login_user" value="{{ Request::is('client/edit/*') ? $client->iAnalyse_login_user : '' }}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="iAnalyse_login_password" class="col-sm-2 control-label">iAnalyseログインPW</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="iAnalyse_login_password" name="iAnalyse_login_password" value="{{ Request::is('client/edit/*') ? $client->iAnalyse_login_password : '' }}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">iAnalyseテンプレートType</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="iAnalyse_template_type" name="iAnalyse_template_type">
                                <option value="CPA">CPA</option>
                                <option value="CPC">CPC</option>
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button id="save_client" type="submit" class="btn btn-primary">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</center>
@endsection

@section('js')
<script type="text/javascript" src="{{ URL::asset('js/validator.js') }}"></script>
<script type="text/javascript">
@if(Request::is('client/edit/*'))
    var pic_division = '{{ $client->pic_division }}';
    var iAnalyse_type = '{{ $client->iAnalyse_template_type }}';
    $('select#pic_division').val(pic_division);
    $('select#iAnalyse_template_type').val(iAnalyse_type);
@endif
</script>
@endsection