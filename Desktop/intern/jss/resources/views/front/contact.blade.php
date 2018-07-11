@extends('shared.shared')
@section('css')


@endsection

@section('content')
    <!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 p-b-30">
                        <div class="p-r-20 p-r-0-lg">
                            <div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14134.71081593275!2d85.34979855!3d27.6654416!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1525934522898"  frameborder="0" style="border:0" allowfullscreen></iframe>
                          <br><br><br><br>
                                <li>Conatct: +97789564534,01393875</li>
                              <li>Address:New Road,Kathmandu</li>
                            </div>
                       
                        </div>
                    </div>
                    
                    <div class="col-md-6 p-b-30">
                    <form class="leave-comment" action="{{route('contact.newupdate')}}" method="post">
                            <h4 class="m-text26 p-b-36 p-t-15">
                                Send us your message
                            </h4>
    
                            <div class="bo4 of-hidden size15 m-b-20">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name">
                            </div>
    
                            <div class="bo4 of-hidden size15 m-b-20">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone_number" placeholder="Phone Number">
                            </div>
    
                            <div class="bo4 of-hidden size15 m-b-20">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
                            </div>
    
                            <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message"></textarea>
    
                            <div class="w-size25">
                                <!-- Button -->
                                <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" type="submit">
                                    Send
                                </button>
                            </div>
                            {{ csrf_field() }}
                           
                        </form>
                    </div>
                </div>
            </div>
        </section>
  @endsection      