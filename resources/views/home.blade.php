@extends('layouts.app')

@section('content')
  <div id="app">    
    <ul class="list-group">

        <last-visit v-for="household in households"></last-visit>

      <a class="list-group-item">
        <div class="flex-column">
          <div class="d-flex w-100 justify-content-between">
            <h5>Smith, Joe</h5>
            <p>Last Visit: 11/1/2018</p>
          </div>
          <div class="d-flex w-100 justify-content-between">
            <small>2200 W Apt #6</small>
            <small>801-234-5678</small>
            <h5><span class="badge badge-primary badge-pill">EQ</span></h5>
          </div>
        </div>
      </a>
      <a class="list-group-item">
        <div class="flex-column">
          <div class="d-flex w-100 justify-content-between">
            <h5>Simpson, Julie</h5>
            <p>Last Visit: 10/30/2018</p>
          </div>
          <div class="d-flex w-100 justify-content-between">
            <small>2200 W Apt #15</small>
            <small>385-987-1234</small>
            <h5><span class="badge badge-primary badge-pill">WML</span></h5>
          </div>
        </div>
      </a>
    </ul>
  </div>
@endsection
