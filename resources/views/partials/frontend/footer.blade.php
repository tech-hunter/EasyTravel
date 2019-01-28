<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator" style="margin-top: 50px;">
                <img src="{{ asset('frontend/images/home/under.png') }}" class="img-responsive inline" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="testimonial bottom">
                    <h2>Testimonial</h2>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img src="{{ asset('frontend/images/avatars/t-5.png') }}" alt=""></a>
                        </div>
                        <div class="media-body">
                            <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                            <h3><a href="#">- Jhon Kalis</a></h3>
                        </div>
                     </div>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img src="{{ asset('frontend/images/avatars/t-4.png') }}" alt=""></a>
                        </div>
                        <div class="media-body">
                            <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                            <h3><a href="">- Abraham Josef</a></h3>
                        </div>
                    </div>   
                </div> 
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="contact-info bottom">
                    <h2>Contacts</h2>
                    <address>
                    E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                    Phone: +1 (123) 456 7890 <br> 
                    Fax: +1 (123) 456 7891 <br> 
                    </address>

                    <h2>Address</h2>
                    <address>
                    Unit C2, St.Vincent's Trading Est., <br> 
                    Feeder Road, <br> 
                    Bristol, BS2 0UY <br> 
                    United Kingdom <br> 
                    </address>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="contact-form bottom">
                    <h2>Newsletter</h2>
                    <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                        </div>                      
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="copyright-text text-center">
                    <p>&copy; Easy Travel 2019. All Rights Reserved.</p>
                    <p>Designed by <a target="_blank" href="#">Easy Travel</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/#footer-->