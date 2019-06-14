<section class="section section-lg">
   
<div class="container">
    <div class="row">
        
        <div class="row">
            @forelse($galerias as $g)
			
			
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb">
			<div class="hovereffect">
				<img class="img-responsive" src="{{$g->aws_url}}" alt="{{$g->legenda}}" style="width:255px; height:200px;">
				<div class="overlay">				   
				   <a class="info thumbnail" data-toggle="modal" data-image="{{$g->aws_url}}" data-target="#image-gallery" href="{{$g->aws_url}}">
				   <i class="ni ni-image"></i>
				   </a>
				</div>
			</div>
		</div>
			
			{{--	<hr>  --}}
            {{--<div class="col-lg-3 col-md-4 col-xs-6 thumb"> --}}
                {{--<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""--}}
                   {{--data-image="{{$g->aws_url}}"  --}}
                   {{--data-target="#image-gallery"> --}}
                    {{--<img class="" style="width:300px; height:200px;"--}}
                        {{-- src="{{$g->aws_url}}" --}}
                         {{--alt="{{$g->legenda}}"> --}}
                {{--</a> --}}
            {{--</div> --}}
            @empty
            <p>não há fotos para exibir</p>
            @endforelse
        </div>


        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12 " src="" style="width:100%; height:80%;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>


@section('css')
    <style>
.hovereffect {
width:100%;
height:100%;
float:left;
overflow:hidden;
position:relative;
text-align:center;
cursor:default;
}

.hovereffect .overlay {
width:100%;
height:100%;
position:absolute;
overflow:hidden;
top:0;
left:0;
opacity:0;
background-color:rgba(0,0,0,0.5);
-webkit-transition:all .4s ease-in-out;
transition:all .4s ease-in-out
}

.hovereffect img {
display:block;
position:relative;
-webkit-transition:all .4s linear;
transition:all .4s linear;
}

.hovereffect h2 {
text-transform:uppercase;
color:#fff;
text-align:center;
position:relative;
font-size:17px;
background:rgba(0,0,0,0.6);
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}

.hovereffect a.info {
text-decoration:none;
display:inline-block;
text-transform:uppercase;
color:#fff;
border:1px solid #fff;
background-color:transparent;
opacity:0;
filter:alpha(opacity=0);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
margin:50px 0 0;
padding:7px 14px;
}

.hovereffect a.info:hover {
box-shadow:0 0 5px #fff;
}

.hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
}

.hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}

.hovereffect:hover a.info {
-webkit-transition-delay:.2s;
transition-delay:.2s;
}

    </style>
@stop