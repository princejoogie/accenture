@extends('layouts.app')

@section('content')
<div class="ui pointing menu">
        <a id="index-home" class="item  ">
            <i class="fas fa-home logosize"></i>&nbsp;Profile
        </a>
        <a id="index-message" class="item">
            <i class="fas fa-comment-alt logosize"></i>&nbsp;Steps
        </a>
        <a id="index-friends" class="item">
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
      </div>
@endsection