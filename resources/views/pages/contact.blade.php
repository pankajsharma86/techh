@extends('layouts.front')

@section('content')
<!-- main content -->
<main class="main-content" id="MainContent">
  <div class="parallax"></div>
<br>
<section id="services">
        <div class="container">
            <div class="row">
                
              <div class="row text-left">
            <div class="box">
            
           <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Inquiry</h2>
                    <h3 class="section-subheading text-muted">Do you need any assistance?.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">SCOPING AND DESIGN</h4>
                    <p class="text-muted">Techbasha  is particularly expert in dealing with both residential and commercial multi-dwelling units, such as apartment buildings, shopping centres and other commercial premises.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Technical Resources</h4>
                    <p class="text-muted">Techbasha provides the requisite technical resource know-how to manage our clients’ work on a daily basis. </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">QA & HSE COMPLIANCE</h4>
                    <p class="text-muted">Techbasha Quality, and Health, Safety and Environment Management systems are recognised and certified as compliant to standards</p>
                </div>
            </div>
        </div>

        
        </div>
    
      <div class="box" id="contact">
                        <h1>Contact</h1>

                        <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
                        <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>

                        <hr>

                        <div class="row">
                            <div class="col-sm-4">
                                <h3><i class="fa fa-map-marker"></i> Address</h3>
                                <p>5D Lorien Place
                                    <br>East Tamaki
                                    <br>Auckland
                                    
                                    <br>
                                    <strong>New Zealand</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-phone"></i> Call center</h3>
                                <p class="text-muted">We are pleased to help you out from problem. Call us.</p>
                                <p><strong>092157278</strong><br>
                
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                <p class="text-muted">Please feel free to write an email to us for any inquiry.</p>
                                <ul>
                                    <li><strong><a href="mailto:">shop.techbasha@gmail.com</a></strong>
                                    </li>
                                   
                                </ul>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->

                        <hr>

                        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3188.7328066674745!2d174.878191415294!3d-36.94455167991911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d4c6c5fa9bb37%3A0xb134dde80cf9a6c5!2s5D+Lorien+Pl%2C+East+Tamaki%2C+Auckland+2013!5e0!3m2!1sen!2snz!4v1510630394997" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

                        <hr>
                        <h2>Contact form</h2>

                        <form action="mailto:varun7860001@gmail.com" method="post" enctype="text/plain">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        <input type="text" class="form-control" name="firstname" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" class="form-control" name="lastname" id="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control"  id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" name="subject" class="form-control" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>

                                </div>
                            </div>
                            <!-- /.row -->
                        </form>


                    </div>
    </div>
        </div>
    </div>
        <br>
    </section>
      
  
</main>

@endsection
