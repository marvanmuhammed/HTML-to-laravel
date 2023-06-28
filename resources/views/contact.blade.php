@extends('layout.header')
@section('main')

     <!-- contact section -->

    <section class="contact_section layout_padding"> 
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
            <div class="form_container">
              <div class="heading_container">
                <h2>
                  Contact Us
                </h2>
              </div>
              <div id="success_messages"></div>
              <form action="" id="contactUs">
                <div>
                  <input type="text" placeholder="Full Name " id="name"/>
                </div>
                <div>
                  <input type="text" placeholder="Phone number" id="phone" />
                </div>
                <div>
                  <input type="email" placeholder="Email" id="email"/>
                </div>
                <div>
                  <input type="text" class="message-box" placeholder="Message" id="message"/>
                </div>
                <div class="d-flex ">
                  <button type="button" class="add_message">
                    SEND NOW
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6  px-0">
            <div class="map_container">
              <div class="map">
                <div id="googleMap"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end contact section -->


    <!-- Inserting data -->

@include('operations.insertContact')
@endsection