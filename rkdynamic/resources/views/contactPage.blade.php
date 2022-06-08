@extends('layouts.master_layout');
@section('title', 'Contact Us')


@section('content')

<!-- ======= Contact Section ======= -->
<div class="map-section">
    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
</div>

<section id="contact" class="contact">
    <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

            <div class="col-lg-10">

                <div class="info-wrap">
                    <div class="row">
                        <div class="col-lg-4 info">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street<br>New York, NY 535022</p>
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com<br>contact@example.com</p>
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">
                <form action="{{route('contact.store')}}" method="post" class="contact_form_new" id="main_form">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"/>
                            <span class="validate name_validate"></span>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
                            <span class="validate email_validate"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"/>
                        <span class="validate subject_validate"></span>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                        <span class="validate message_validate"></span>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button class="btn btn-success" type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->



<style>

    /*--------------------------------------------------------------
    # Contact
    --------------------------------------------------------------*/
    .contact .info-wrap {
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    .contact .info {
        background: #fff;
    }

    .contact .info i {
        font-size: 20px;
        color: #1bbd36;
        float: left;
        width: 44px;
        height: 44px;
        border: 1px solid #1bbd36;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50px;
        transition: all 0.3s;
    }

    .contact .info h4 {
        padding: 0 0 0 60px;
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 5px;
        color: #111;
    }

    .contact .info p {
        padding: 0 0 0 60px;
        margin-bottom: 0;
        font-size: 14px;
        color: #444444;
    }

    .contact .info:hover i {
        background: #1bbd36;
        color: #fff;
    }

    .contact .contact_form_new {
        width: 100%;
        box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
        padding: 30px;
        background: #fff;
    }

    .contact .contact_form_new .form-group {
        padding-bottom: 8px;
    }

    .contact .contact_form_new .validate {
        color: red;
        margin: 0 0 15px 0;
        font-weight: 400;
        font-size: 13px;
    }

    .contact .contact_form_new .error-message {
        display: none;
        color: #fff;
        background: #ed3c0d;
        text-align: left;
        padding: 15px;
        font-weight: 600;
    }

    .contact .contact_form_new .error-message br + br {
        margin-top: 25px;
    }

    .contact .contact_form_new .sent-message {
        display: none;
        color: #fff;
        background: #18d26e;
        text-align: center;
        padding: 15px;
        font-weight: 600;
    }

    .contact .contact_form_new .loading {
        display: none;
        background: #fff;
        text-align: center;
        padding: 15px;
    }

    .contact .contact_form_new .loading:before {
        content: "";
        display: inline-block;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        margin: 0 10px -6px 0;
        border: 3px solid #18d26e;
        border-top-color: #eee;
        -webkit-animation: animate-loading 1s linear infinite;
        animation: animate-loading 1s linear infinite;
    }

    .contact .contact_form_new input, .contact .contact_form_new textarea {
        border-radius: 0;
        box-shadow: none;
        font-size: 14px;
        border-radius: 4px;
    }

    .contact .contact_form_new input:focus, .contact .contact_form_new textarea:focus {
        border-color: #1bbd36;
    }

    .contact .contact_form_new input {
        height: 44px;
    }

    .contact .contact_form_new textarea {
        padding: 10px 12px;
    }

    .contact .contact_form_new button[type="submit"] {
        background: #1bbd36;
        border: 0;
        padding: 10px 24px;
        color: #fff;
        transition: 0.4s;
        border-radius: 4px;
    }

    .contact .contact_form_new button[type="submit"]:hover {
        background: #2ae149;
    }

    @-webkit-keyframes animate-loading {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes animate-loading {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

</style>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script>




    $(function(){

        $('#main_form').on('submit', function (e){

            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });

            $.ajax({
                url:$(this).attr('action'),
                method:$(this).attr('method'),
                data:new FormData(this),
                processData:false,
                dataType:'json',
                currentType:false,
                beforeSend:function (){


                    $(document).find('span.validate').text('');

                },

                success:function (data){

                    if(data.status == 0){

                        $.each(data.error, function (prefix, val){



                            $('span.'+prefix+'_validate').text(val[0]);
                        });

                    }

                    if(data.status == 1){

                        alert(data.success_message);
                    }

                }
            });

        });

    });


</script>


@endsection
