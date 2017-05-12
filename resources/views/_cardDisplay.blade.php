 <div class="ui bottom attached tab segment" data-tab="{{$tabValue}}">
    <div class="ui white visible sidebar inverted vertical menu">
    
    <a class="item">
      {{$book->title}}
    </a>
    @if($display==1)
    @foreach($cards as $card)
    <a class="item">
      {{$card->name}}
    </a>
    @endforeach
    @elseif($display==2)
    <a class="item">Synopsis:</a>
    @foreach($cardsA as $card)
    <a class="item">
      {{$card->name}}
    </a>
    @endforeach
    <a class="item">Settings:</a>
    @foreach($cardsB as $card)
    <a class="item">
      {{$card->name}}
    </a>
    @endforeach
    @elseif($display==3)
    @foreach($cards as $card)
    <a class="item">
      {{$card->name}}
    </a>
    @foreach($card->subcards() as $subcard)
    <a class="item">
      -{{$subcard->name}}
    </a>
    @endforeach
    @endforeach
    @endif
    <a class="item">
    </a>

  </div>
  <div class="pusher">
    <!-- Site content !-->
  </div>
</div>