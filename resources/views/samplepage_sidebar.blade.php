@extends('_share')

@section('content')
 <div class="ui thin sidebar inverted vertical menu">
    <div>
    	BigBig<br>Gap
    </div>
    <a class="item">
      Overview
    </a>
    <a class="item">
      Characters
    </a>
    <a class="item">
      Locations
    </a>
    <a class="item">
      Scenes
    </a>
    <a class="item">
      History
    </a>
    <a class="item">
      Items
    </a>
  </div>
  <div class="pusher">
  <button>Click Me</button>
  </div>
@stop

@section('js')
$('button').on('click',function(){
	$('.ui.sidebar').sidebar('toggle');
});
@stop