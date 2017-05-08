@extends('_share')

@section('content')
<div class="ui thin sidebar inverted vertical menu">
  <div>
    	<br><br>
    </div>
    <a class="item" data-tab="overview">
    </a>
    <a class="item" data-tab="overview">
      Overview
    </a>
    <a class="item" data-tab="characters">
      Characters
    </a>
    <a class="item" data-tab="locations">
      Locations
    </a>
    <a class="item" data-tab="scenes">
      Scenes
    </a>
    <a class="item" data-tab="histories">
      Histories
    </a>
    <a class="item" data-tab="items">
      Items
    </a>
  </div>
</div>
<div class="ui bottom attached active tab segment" data-tab="overview">
  overview
</div>
<div class="ui bottom attached tab segment" data-tab="characters">
  characters
</div>
<div class="ui bottom attached tab segment" data-tab="locations">
  locations
</div>
<div class="ui bottom attached tab segment" data-tab="scenes">
  scenes
</div>
<div class="ui bottom attached tab segment" data-tab="histories">
  histories
</div>
<div class="ui bottom attached tab segment" data-tab="items">
  items
</div>
@stop

@section('js')
$('.menu .item').tab();
<!-- $('.ui.sidebar').sidebar('show'); -->
$(document).mousemove(function(event){
    if(event.pageX<30){
    $('.ui.sidebar').sidebar('show');
}
	if(event.pageX>200){
    $('.ui.sidebar').sidebar('hide');
}

});
@stop