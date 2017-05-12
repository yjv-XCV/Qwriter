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




<div class="ui grey inverted vertical major sidebar labeled icon menu">
    <a class="item" href="\home">
      <i class="home icon"></i>
      Home
    </a>
    @include('_sideTabButton',['tabText'=>'Summary'],['iconType'=>'book'])
    @include('_sideTabButton',['tabText'=>'Ideas'],['iconType'=>'idea'])
    @include('_sideTabButton',['tabText'=>'Quotes'],['iconType'=>'quote left'])
    @include('_sideTabButton',['tabText'=>'Facts'],['iconType'=>'world'])
    @include('_sideTabButton',['tabText'=>'Explanations'],['iconType'=>'talk outline'])
    @include('_sideTabButton',['tabText'=>'Brainstorms'],['iconType'=>'spinner'])
    @include('_sideTabButton',['tabText'=>'References'],['iconType'=>'bookmark'])
    
   
    <a class="item delete">
      <i class="trash icon"></i>
      Delete
    </a>
  </div>


 <div class="container pusher">
 <div class="container_center">
   <!-- begin of container_center -->
    <div class="ui bottom attached active tab segment" data-tab="n/a">
  <h1> {{$book->title}}</h1>
</div>
  @include('_cardDisplay',['tabValue'=>'Summary'])
  @include('_cardDisplay',['tabValue'=>'Ideas'])
  @include('_cardDisplay',['tabValue'=>'Quotes'])
  @include('_cardDisplay',['tabValue'=>'Facts'])
  @include('_cardDisplay',['tabValue'=>'Explanations'])
  @include('_cardDisplay',['tabValue'=>'Brainstorms'])
  @include('_cardDisplay',['tabValue'=>'References'])
<!-- end of container_center -->         
  </div>
 </div>


 <!-- Deleting -->
 <div class="ui basic modal">
  <div class="ui icon header">
    <i class="trash icon"></i>
    <br>
    <h2>Are you sure you want to delete this book?</h2>
  </div>
  <div class="actions">
 <form action="\home" method="POST"><input name="_token" type="hidden" value="{{ csrf_token() }}">
  <input name="id" type="hidden" value="{{$book->id}}">
    <div class="ui red basic cancel inverted button">
      <i class="remove icon"></i>
      Cancel
    </div>
    <button class="ui red ok inverted button" type="submit">
      <i class="trash icon"></i>
      Delete
      </button>
  </form>
  </div>
</div>

@stop

@section('js')
$(document).mousemove(function(event){
    if(event.pageX<30){
    $('.ui.major.sidebar').sidebar('setting', 'transition', 'push').sidebar('show');
}
  if(event.pageX>300){
    $('.ui.major.sidebar').sidebar('setting', 'transition', 'push').sidebar('hide');
}
  
});

$('.delete').on('click',function(){
  $('.ui.basic.modal').modal('show');
});

$('.dropdown').dropdown();
$('.menu .item').tab();

@stop