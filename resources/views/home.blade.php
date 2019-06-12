@extends('layouts.app')

@section('content')

<div class="ui secondary pointing menu">
  <a class="item active" id="index-home">
  <i class="fas fa-home logosize"></i>&nbsp;Profile
  </a>
  <a class="item" id="index-message">
  <i class="fas fa-comment-alt logosize"></i>&nbsp;Steps
  </a>
  <a class="item" id="index-friends">
  <i class="fas fa-users logosize"></i>&nbsp;Add Steps
  </a>
  <div class="right menu">
    <div class="item">
      <div class="ui transparent icon input">
        <input type="text" placeholder="Search...">
        <i class="fas fa-search logosize"></i>
      </div>
    </div>
  </div>
</div>

<div class="ui segment">
  <p id="index-content"></p>

<<<<<<< HEAD
  <div id="index-step">
    <!-- <form action="/AddStep" method="post">
      {{ csrf_field() }}
      <label>Department:&nbsp;&nbsp;</label>
        <input type="text" name="department" />
          <br><label>Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" name="status" />
          <br><label>Description:</label>
        <input type="text" name="description" />
      <div><button type="submit" class="ui button">Okay</button></div>
    </form> -->
    <div class="empty">
    <div class="fill" draggable="true">Steps </div>
  </div>

  <div class="empty">
  </div>

  <div class="empty">
  </div>

  <div class="empty">
  </div>
=======
  <div id="index-step" style="display: none;">

<!-- BETWEEN DITO CODE NG DRAG AND DROP -->

    <div id="parentDropDown" class="ui fluid search selection dropdown">
      <input type="hidden" name="country">
      <i class="dropdown icon"></i>
      <div class="default text"><span id="parentText">Select Country<span></div>
      <div class="menu brobrobro">
        <div class="dropItem" data-value="af"><i class="af flag"></i>Afghanistan</div>
        <div class="dropItem" data-value="ax"><i class="ax flag"></i>Aland Islands</div>
        <div class="dropItem" data-value="al"><i class="al flag"></i>Albania</div>
        <div class="dropItem" data-value="dz"><i class="dz flag"></i>Algeria</div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-2 dropItem"><i class="af flag"></i>Afghanistan</div>
      <div class="col-sm-2 dropItem"><i class="ax flag"></i>Aland Islands</div>
      <div class="col-sm-2 dropItem"><i class="al flag"></i>Albania</div>
    </div>

    <!-- <div class="main_content" style="border-style: solid">
    <div class="dropItem" data-value="af"></div>
    <div class="dropItem" data-value="ax"></div>
    <div class="dropItem" data-value="al"></div>
    <div class="dropItem" data-value="dz"><i class="dz flag"></i>Algeria</div>
    <div class="dropItem" data-value="dz"><i class="dz flag"></i>Algeria</div>
    </div> -->
    
    <div id="DropZone" class="ui" style="width:800px; overflow:auto; height:300px; border-style: solid;">Drop Shit here</div>

<!-- BETWEEN DITO CODE NG DRAG AND DROP -->
>>>>>>> f334103711a1ddc329b8b333f9dec66dff2f1ee3

  <div class="empty">
  </div>
  
</div>
</div>
@endsection