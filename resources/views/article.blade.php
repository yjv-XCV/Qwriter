@extends('_share')
@section('style')
html, body {
        height: 100%;
            }

body {
    margin: 0;
    padding: 0;
    width: 100%;
    display: table;
}

.container {

    text-align: center;
    width:100%;
    height:100%;
    display: table-cell;
    vertical-align: middle;
    background-image: url("/img/background.jpg")!important;
}

.container_center {
    text-align: center;
    display: inline-block;
    color: #000000;
}

.description{
  height:380px;
  overflow-y:auto;
}

.image{
  margin-top:-25px;
  padding:15px 0px;
}

.create{
  margin:auto;
}

@stop

@section('content')




<div class="ui grey inverted pointing vertical sidebar labeled icon menu">
    <a class="item" href="\home">
      <i class="home icon"></i>
      Home
    </a>
    <a class="active item" data-tab="overview">
      <i class="book icon"></i>
      Overview
    </a>
    <a class="item" data-tab="quotes">
      <i class="street view icon"></i>
      Quotes
    </a>
    <a class="item" data-tab="locations">
      <i class="marker icon"></i>
      Locations
    </a>
    <a class="item" data-tab="scenes">
      <i class="unhide icon"></i>
      Scenes
    </a>
    <a class="item" data-tab="histories">
      <i class="wait icon"></i>
      Histories
    </a>
    <a class="item" data-tab="items">
      <i class="diamond icon"></i>
      Items
    </a>
    <a class="item" data-tab="brainstorm">
      <i class="spinner icon"></i>
      Brain Storm
    </a>
  </div>


 <div class="container pusher">
 <div class="container_center">
   <!-- begin of container_center -->
   <div class="ui bottom attached active tab segment" data-tab="overview">
  overview
</div>
<div class="ui bottom attached tab segment" data-tab="quotes">
  quotes
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
<div class="ui bottom attached tab segment" data-tab="brainstorm">
  brain storm
</div>
<!-- end of container_center -->         
  </div>
 </div>

@stop

@section('js')
$(document).mousemove(function(event){
    if(event.pageX<30){
    $('.ui.sidebar').sidebar('setting', 'transition', 'push').sidebar('show');
}
  if(event.pageX>300){
    $('.ui.sidebar').sidebar('setting', 'transition', 'push').sidebar('hide');
}
  
});

$('.dropdown').dropdown();
$('.menu .item').tab();

@stop