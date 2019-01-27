@extends('layouts.frontend')

@section('page_title', '| CONTACT')

@section('stylesheet')
    {{--  External CSS  --}}
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet"> 
@endsection

@section('content')
    {{--  Body Contents Here  --}}
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Contact US</h1>
                            <p>Stay close</p>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action--> 

    <!-- Contact us -->
    <div class="contact">
            <div class="contact_background fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="contact_image">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact_form_container" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="contact_title">get in touch</div>
                                <form action="#" id="contact_form" class="contact_form">
                                    <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
    
                                    <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
    
                                    <input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
    
                                    <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
    
    
    
                                    <button type="submit" id="" class="hvr-rectangle-out btn btn-default button">send message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Contact us -->
    
@endsection

@section('scripts')
    {{--  External Javascript  --}}
    
@endsection