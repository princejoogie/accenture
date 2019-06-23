@extends('layouts.app')

@section('content')

<!-- <div class="ui secondary pointing menu">
  <a class="item" id="index-menu_profile">
    <i class="fas fa-home logosize"></i>&nbsp;Profile
  </a>
  <a class="item" id="index-menu_steps">
    <i class="fas fa-comment-alt logosize"></i>&nbsp;Steps
  </a>
  <a class="item" id="index-menu_addsteps">
    <i class="fas fa-users logosize"></i>&nbsp;Add Steps
  </a>
  <a class="item" id="index-menu_records">
  <i class="fas fa-file-medical"></i>&nbsp;Medical Records
  </a>
  <div class="right menu">
    <div class="item">
      <div class="ui transparent icon input">
        <input type="text" placeholder="Search...">
        <i class="fas fa-search logosize"></i>
      </div>
    </div>
  </div>
</div> -->
<div class="ui grid">
  <div class="three wide column">
    <div class="ui vertical fluid tabular menu">
      <a class="item" id="index-menu_profile">
        Profile
      </a>
      <a class="item" id="index-menu_medicalRecords">
        Medical Records
      </a>
    </div>
  </div>
  <div class="thirteen wide stretched column">
    <div class="ui segment">

      <div id="index-content" style="display: none;">
        <!-- start of profile -->
        <div class="container">
          <div class="row profile">
            <div class="col-md-3">
              <div class="profile-sidebar">
                <div class="profile-img">
                <img src="https://1.semantic-ui.com/images/avatar/large/elliot.jpg" alt="" />
                  <div class="file btn btn-lg btn-primary">
                    Change Photo
                    <input type="file" name="file" />
                  </div>
                </div>
              <div class="profile-usertitle"> </div>
            <div class="profile-usertitle-name" id="name"> </div>
          </div>
        </div>
      <div class="col-md-9">
        <div class="profile-content">
          <div class="row">
            <div class="col-md-12">
              <h4>Your Profile</h4>
              <br>
            </div>
          </div>
            <table class="table table-user-information">
            <tbody>
                <tr>
                <td>Allergy:</td>
                <td>None</td>
                </tr>
                <tr>
                <td>Blood Type:</td>
                <td>O+</td>
                </tr>
                <tr>
                <td>Date of Birth</td>
                <td>03/11/2009</td>
                </tr>
                <tr>
                <tr>
                <td>Gender</td>
                <td>Male</td>
                </tr>
                <tr>
                <td>Home Address</td>
                <td>Makati City</td>
                </tr>
                <tr>
                <td>Email</td>
                <td id="email">
                </td>
                </tr>
                <tr>
                <td>Phone Number</td>
                <td>237-4567-890(Landline)</td>
                </tr>
                <tr>
                <td>Occupation</td>
                <td>Chemist</td>
                </tr>
            </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- end of profile -->
      <div id="index-records" style="display: none;">
        <!-- start of medicalRecords -->
        <form class="ui form mr">
          <h4 class="ui dividing header">A. Past Medical History</h4>
            <div class="field">
              <label>Allergies</label>
              <div class="fields" id="allergies">
                <!-- something here from js -->
              </div>
            </div>
          <div class="field">
            <label>Billing Address</label>
            <div class="fields">
              <div class="twelve wide field">
                <input type="text" name="shipping[address]" placeholder="Street Address">
              </div>
              <div class="four wide field">
                <input type="text" name="shipping[address-2]" placeholder="Apt #">
              </div>
            </div>
          </div>
        </form>
        <!-- end of medicalRecords -->
      </div>
    </div>
  </div>
</div>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


<!-- <div class="ui segment">
  <div id="index-content" style="display: none;">

  <div id="index-steps" style="display: none;">

  <div id="index-addstep" style="display: none;">

    <div id="parentDropDown" class="ui fluid search selection dropdown">
      <input type="hidden" name="country">
      <i class="dropdown icon"></i>
      <div class="default text"><span id="parentText">Select Country<span></div>
      <div class="menu brobrobro">
        <div class="dropItem" data-value="af"><i class="fas fa-x-ray"></i>&nbsp;&nbsp;&nbsp;X-Ray</div>
        <div class="dropItem" data-value="ax"><i class="fas fa-file-medical-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Check-Up</div>
        <div class="dropItem" data-value="al"><i class="heartbeat icon"></i>&nbsp;Cardiology</div>
        <div class="dropItem" data-value="dz"><i class="fas fa-tint"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blood Donation</div>
      </div>
    </div> -->
    
    <!-- <div class="row">
      <div class="col-sm-2 dropItem"><i class="af flag"></i>Afghanistan</div>
      <div class="col-sm-2 dropItem"><i class="ax flag"></i>Aland Islands</div>
      <div class="col-sm-2 dropItem"><i class="al flag"></i>Albania</div>
    </div> -->

    <!-- <div class="main_content" style="border-style: solid">
    <div class="dropItem" data-value="af"></div>
    <div class="dropItem" data-value="ax"></div>
    <div class="dropItem" data-value="al"></div>
    <div class="dropItem" data-value="dz"><i class="dz flag"></i>Algeria</div>
    <div class="dropItem" data-value="dz"><i class="dz flag"></i>Algeria</div>
    </div> -->
    
    <!-- <div id="DropZone" class="ui divider" style="overflow:hidden; height:350px;"><br><br>Put steps here:</div> -->

<!-- BETWEEN DITO CODE NG DRAG AND DROP -->
  
</div>
</div>
@endsection