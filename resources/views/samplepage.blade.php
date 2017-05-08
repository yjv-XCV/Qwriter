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
    background-color: #222222;
}

.container {

    text-align: center;
    display: table-cell;
    vertical-align: middle;

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

@stop

@section('content')
 <div class="container">
 <div class="container_center">
  <img class="ui top aligned centered tiny image" src="/img/q.png"></img>
 <!-- start of container_center -->
<div class="ui link cards">
  <div class="card">
<!--     <div class="image">
      <img src="/images/avatar2/large/matthew.png">
    </div> -->
    <div class="content">
      <div class="header">Title:</div>
      <div class="meta">
        <a>type(novel/article)</a>
      </div>
      <p class="description">
        Desciption of the novel. 
      </p>
    </div>
    <div class="extra content">
      <span class="right floated">
        <i class="wait icon"></i>
        Created date<br>a
      </span>
      <span class="left floated">
        <i class="write icon"></i>
        Last Update<br>a
      </span>
    </div>
  </div>
</div>
<!-- end of container_center -->         
 </div>
 </div>
@stop

@section('js')


@stop