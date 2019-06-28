@extends('layouts.app')

@section('content')

<style>
  .grid_container {
    display: grid;
    grid-template-columns: auto auto;
    background-color: #3e2723;
    padding: 1px;
    border-radius: 5px;
  }

  .brooo {
    overflow: 300px;
    width: 320px;
  }

  .grid_items {
    background-color: #FFFFFF;
    border: 1px solid #000000;
    padding: 10px;
    font-size: 30px;
    text-align: center;
  }

  .grid_item {
    cursor: grab;
    background-color: #80cbc4;
    padding: 10px;
    font-size: 30px;
    text-align: center;
  }
</style>

<style>
  .addBlur {
      filter: blur(4px);
  }
</style>

<div class="ui grid addBlur" id="reisterRuedas">
  <div class="three wide column">
    <div class="ui vertical fluid tabular menu">
      <a class="item" id="index-menu_profile">
        Profile
      </a>
      <a class="item" id="index-menu_medicalRecords">
        Medical Records
      </a>
      <a class="item" id="index-menu_steps">
        Steps
      </a>
    </div>
  </div>
  <div class="thirteen wide stretched column">
    <div class="ui segment">
    <!-- <div id="loading" class="ui active centered inline loader"></div> -->

    <div id="index-steps" style="display: none;">
        <h1 class="title-steps">Steps</h1>
    
      <div class="grid_container">
        <div class="grid_items" id="drop_zonee">
          <div class="ui vertical steps brooo" id="drop_here">
            <!-- here goes dragged items -->
          </div>  
        </div>

        <div class="grid_items">
          <div class="ui vertical steps">
            <div class="completed step grid_item">
              <i class="truck icon"></i>
              <div class="content">
                <div class="title">X-Ray</div>
                <div class="description">X-Ray for Dental check-up</div>
              </div>
            </div>
            <div class="completed step grid_item">
              <i class="credit card icon"></i>
              <div class="content">
                <div class="title">Dental</div>
                <div class="description">Removal of impacted tooth</div>
              </div>
            </div>
            <div class="completed step grid_item">
              <i class="info icon"></i>
              <div class="content">
                <div class="title">Optalmologist</div>
                <div class="description">Annual eye Check-up</div>
              </div>
            </div>
            <div class="completed step grid_item">
              <i class="credit card icon"></i>
              <div class="content">
                <div class="title">Cadiologist</div>
                <div class="description">Check of hypertension status</div>
              </div>
            </div>
            <div class="completed step grid_item">
              <i class="credit card icon"></i>
              <div class="content">
                <div class="title">Check-Up</div>
                <div class="description">Check-up for office</div>
              </div>
            </div>
            <div class="completed step grid_item">
              <i class="credit card icon"></i>
              <div class="content">
                <div class="title">Payment</div>
                <div class="description">Payment of bill statement</div>
              </div>
            </div>
          </div>  
        </div>
      </div>

    </div> 
    <!-- end of index-steps -->

      <div id="index-content" style="display: none;">
        <!-- start of profile -->
        <div class="container">
          <div class="row profile">
            <div class="col-md-3">
              <div class="profile-sidebar">
                <div class="profile-img">
                <img src="https://semantic-ui.com/images/avatar2/large/matthew.png" alt="" />
                  <div class="file btn btn-lg btn-primary">
                    Change Photo
                    <input type="file" name="file" />
                  </div>
                </div>
                <div class="profile-usertitle"> </div>
              <div class="profile-usertitle-name" id="mainName"> </div>
            </div>
          </div>
      <div class="col-md-9">
        <div class="profile-content">
          <div class="row">
            <div class="col-md-12">
            <h4 class="ui dividing header">Basic Profile Information</h4>
              <br>
            </div>
          </div>
            <table class="table table-user-information">
              <div class="ui form">
            
              <!-- qweqweqweqwew -->
                <div class="fields">
                  <div class="five wide field">
                    <label>First name</label>
                      <input type="text" id="firstName" placeholder="First Name">
                    </div>
                  <div class="five wide field">
                    <label>Middle name</label>
                      <input type="text" id="middleName" placeholder="Middle Name">
                    </div>
                  <div class="five wide field">
                    <label>Last name</label>
                    <input type="text" id="lastName" placeholder="Last Name">
                  </div>
                </div>
              </div>

              <div class="ui form">
                <div class="fields">
                  <div class="two wide field">
                  <label>Age</label>
                    <input type="text" id="age" placeholder="Age">
                  </div>
                  <div class="four wide field">
                    <label>Birthdate</label>
                    <input type="text" id="bday" placeholder="mm/dd/yyyy">
                  </div>
                  <div class="four wide field">
                    <label>Gender</label>
                    <input type="text" id="gender" placeholder="Gender">
                  </div>
                  <div class="five wide field">
                    <label>Phone Number</label>
                    <input type="text" id="phoneNumber" placeholder="Phone number">
                  </div>
                </div>
              </div>

              <div class="ui form">
                <div class="fields">
                  <div class="fifteen wide column field">
                    <label>Address</label>
                    <input type="text" id="address" placeholder="Address">
                  </div>
                </div>
              </div>

              <div class="ui form">
                <div class="fields">
                  <div class="fifteen wide column field">
                    <label>Email</label>
                    <input type="text" id="email" placeholder="Email Address">
                  </div>
                </div>
              </div>

              <div class="ui form">
                <div class="fields">
                  <div class="twelve wide column field">
                    <label>Emergency Contacts</label>
                    <!-- <input type="text" id="address" placeholder="Phone number"> -->
                  
                    <div class="ui list" id="emergencyContacts"
                              style="
                                padding: 8px;
                                border: 1px solid #A0A0A0;
                                border-radius: 5px;
                                ">
                      <!-- <div class="item">
                        <img class="ui avatar image" src="https://semantic-ui.com/images/avatar2/small/rachel.png">
                        <div class="content">
                          <a class="header">Rachel</a>
                          <div class="description">Last seen watching <a><b>Arrested Development</b></a> just now.</div>
                        </div>
                      </div> -->
                      <!-- <div class="item">
                        <img class="ui avatar image" src="https://semantic-ui.com/images/avatar2/small/matthew.png">
                        <div class="content">
                          <a class="header">Veronika Ossi</a>
                          <div class="description">Has not watched anything recently</div>
                        </div>
                      </div> -->
                    </div>

                    <!-- qwewe -->
                  </div>
                </div>
              </div>

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
              <label>Skin Diseases</label>
              <div class="fields" id="skinDiseases">
              </div>
            </div>
            <div class="field">

              <label>Diabetes</label>
              <div class="fields">
                <div class="two wide field">
                  <input type="text" id="diabetes" placeholder="Classification">
                </div>
              </div>
              
              <label>Hepatits</label>
              <div class="fields">
                <div class="two wide field">
                  <input type="text" id="hepatitis" placeholder="Classification">
                </div>
              </div>
              
              <label>Hepatits</label>
              <div class="fields">
                <div class="two wide field">
                  <input type="text" id="hepatitis" placeholder="Classification">
                </div>
              </div>
              
              <label>Hepatits</label>
              <div class="fields">
                <div class="two wide field">
                  <input type="text" id="hepatitis" placeholder="Classification">
                </div>
              </div>

              <label>Hypertension</label>
              <div class="fields">
                <div class="two wide field">
                  <input type="text" id="hypertension" placeholder="Classification">
                </div>
              </div>

            </div>
            <h4 class="ui dividing header">B. Family History</h4>

            <div class="ui form">
              <div class="fields">

                <div class="three wide column field">
                  <label>Bronchial Asthma</label>
                  <input type="text" id="bronchialAsthma" placeholder="Status">
                </div>

                <div class="three wide column field">
                  <label>Hypertension</label>
                  <input type="text" id="hypertension" placeholder="Status">
                </div>

                <div class="three wide column field">
                  <label>Tubercolosis</label>
                  <input type="text" id="tubercolosis" placeholder="Status">
                </div>

                <div class="seven wide column field">
                  <label>Others</label>
                  <input type="text" id="others" placeholder="Others">
                </div>

              </div>
            </div>

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