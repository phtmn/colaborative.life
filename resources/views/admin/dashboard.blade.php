@extends('admin.home')

@section('content')
    <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                <div class="count">{{$users}}</div>
                <h3>Usuarios</h3>
{{--                <p>Lorem ipsum psdea itgum rixt.</p>--}}
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-comments-o"></i></div>
                <div class="count">{{ $oscs }}</div>
                <h3>OSCS</h3>
{{--                <p>Lorem ipsum psdea itgum rixt.</p>--}}
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                <div class="count">{{$projetos}}</div>
                <h3>Projetos</h3>
{{--                <p>Lorem ipsum psdea itgum rixt.</p>--}}
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
{{--                <div class="icon"><i class="fa fa-check-square-o"></i></div>--}}
                <div class="count">{{ number_format($investimentos,2,',','.') }}</div>
                <h3>Investimentos(R$)</h3>
{{--                <p>Lorem ipsum psdea itgum rixt.</p>--}}
            </div>
        </div>
    </div>

@stop