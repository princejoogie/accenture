{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="ui pointing menu">
        <a id="index-home" class="item">
            <i class="fas fa-home logosize"></i>&nbsp;Home
        </a>
        <a id="index-message" class="item">
            <i class="fas fa-comment-alt logosize"></i>&nbsp;Steps
        </a>
        <a id="index-friends" class="item">
            <i class="fas fa-users logosize"></i>&nbsp;Billing
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