<html>
<head>
    <title>Dentsu CCI - @yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
</head>
<body>
@section('delete_modal')
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body">
               <h4 class="text-center">
                <p>本当に削除しますか？</p>
				</h4>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">OK</a>
            </div>
        </div>
    </div>
</div>
@show
<!-- Main page -->
<div class="row col-xs-12">
@section('sidebar')
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
        <div class="list-group">
            <a href="{{ URL::asset('client') }}" class="list-group-item text-center {!! Request::is('client*')? 'active' : '' !!}">
                <h4 class="glyphicon glyphicon-home"></h4><br/>クライアント管理
            </a>
            <a href="/k/73/?view=5351565" class="list-group-item text-center">
                <i class="fa fa-tag fa-2x" aria-hidden="true"></i><br/>ブランド管理
            </a>
            <a href="/k/73/?view=5351749" class="list-group-item text-center">
                <i class="fa fa-database fa-2x" aria-hidden="true"></i><br/>予算ラベル管理
            </a>
            <a href="/k/73/?view=5351468" class="list-group-item text-center">
                <i class="fa fa-bandcamp fa-2x" aria-hidden="true"></i><br/>アカウント管理
            </a>
            <a href="/k/73/?view=5351781" class="list-group-item text-center">
                <i class="fa fa-flag-checkered fa-2x" aria-hidden="true"></i><br/>キャンペーン管理
            </a>
            <a href="#" class="list-group-item text-center">
                <h4 class="glyphicon glyphicon-road"></h4><br/>予算/KPI管理
            </a>
            <a href="/k/73/?view=5351517" class="list-group-item text-center">
                <i class="fa fa-users fa-2x" aria-hidden="true"></i><br/>ユーザー管理
            </a>
            <a href="/k/73/?view=5351625" class="list-group-item text-center">
                <i class="fa fa-random fa-2x" aria-hidden="true"></i><br/>DDコンサル用<br/>iAnalyseアカウント提供
            </a>
            <a href="/k/73/?view=5351673" class="list-group-item text-center">
                <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i><br/>Excel &amp; PPT 提供
            </a>
            <a href="#" id="logout" class="list-group-item text-center">
                <h4 class="glyphicon glyphicon-off"></h4><br/>サインアウト
            </a>
        </div>
    </div>
@show

    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
        <div class="bhoechie-tab-content">
            @yield('content')
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('https://code.jquery.com/ui/1.12.1/jquery-ui.min.js') }}"></script>
@yield('js')
</body>
</html>