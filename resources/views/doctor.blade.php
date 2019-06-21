@extends('layouts.app')
<!-- 
@section('content') -->

<div class="ui grid">
  <div class="four wide column">
    <div class="ui vertical fluid tabular menu">
      <a class="item" id="index-menu_profile">
        Profile
      </a>
      <a class="item" id="index-menu_medicalRecords">
        Medical Records
      </a>
    </div>
  </div>
  <div class="twelve wide stretched column">
    <div class="ui segment">
      <div id="index-content" style="display: none;"></div>
      <div id="index-medicalRecords" style="display: none;"></div>
    </div>
  </div>
</div>

<?php
  $incoming = json_decode($data->steps,true);
  print_r($incoming);
  echo $incoming[1][1];
?>

<input type="text" value="<?php echo $data->name; ?>"/>


@endsection