<!DOCTYPE html>
<html lang='en'>
<head>
    <title>3KM Registeration</title>
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>
    <style type="text/css">
body{
    background-color: black;!important
}
    .fullcontainer{
    width: 30%;
    margin:auto;
    margin-top:165px;
    background-color: black;

    }

    .ui.piled.segment{
      background-color: black;
    }

    #white{
      color: white;
    }

    .black{
      color:white;
      margin:auto;
    }


</style>
</head>

<body>
    <div class="fullcontainer">
    <div class="ui piled segment">
  <div class="ui form">
      <div class="field">
        <h1 class="ui center aligned header" id="white">
          <div class="content">
          3KM Login
          <div class="sub header"id="white">Just Begin.</div>
          </div>
        </h1>
      </div>
      <div class="field">
        <div class="ui left icon input">
        <input placeholder="Identity Card" type="text">
            <i class="user icon"></i></div>
      </div>
      <div class="field">
        <div class="ui left icon input">
        <input placeholder="Password" type="password">
        <i class="key icon"></i>
      </div>
      </div>
    
    <div class="two inline field" style="text-align:center;">
    <div class="ui submit black button">Login</div>
    <div class="ui submit black button register3km">Register</div>
    </div>
  </div>
</div>
</div>

<div class="ui modal">
<div class="content">
   <div class="ui form">
      <div class="field">
        <h1 class="ui center aligned header" id="white">
          <div class="content" style="color:black;">
          3KM Registeration
          <div class="sub header"id="white">Just Begin.</div>
          </div>
        </h1>
      </div>
      <div class="field">
        <label>E-mail</label>
        <input placeholder="E-mail" type="text">
            </div>
            <div class="field">
        <label>Password</label>
        <input placeholder="Password" type="text">
            </div>
      <div class="field">
        <label>Full Name</label>
        <input placeholder="Full Name" type="text">
            </div>
            <div class="inline fields">
    <h4>Gender:</h4><hr/>
    <div class="field">
      <div class="ui radio checkbox">
        <input name="type" checked="checked" type="radio" value="1">
        <label><font size="+1">Male</font></label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input name="type" type="radio" value="2">
        <label><font size="+1">Female</font></label>
      </div>
    </div>
    </div>
          <div class="field">
        <label>NRIC</label>
        <input placeholder="NRIC" type="text">
            </div>        
            <div class="field">
        <label>Nickname</label>
        <input placeholder="Nickname" type="text">
            </div>
            <div class="field">
        <label>Address</label>
        <textarea row='3'></textarea>
            </div>
            <div class="field">
        <label>Contact Number</label>
        <input placeholder="Contact Number" type="text">
            </div>

        <div class="field">
        <label>Birthday</label>
        <div class="three fields">
        <div class="field"><label>
          <input placeholder="Day" type="number">
        </label></div>
        <div class="field"><label>
          <input placeholder="Month" type="number">
        </label></div>
        <div class="field"><label>
          <input placeholder="Year" type="number">
        </label></div>
            </div>
          </div>
      </div>
    <br>
    <div class="field">
    <div class="ui submit fluid black button">Register</div>
    </div>
  </div>
</div>
 </div>
</body>
<script type="text/javascript">
  $('.register3km').on('click',function(){
  $('.ui.modal').modal('show');
});
</script>
</html>