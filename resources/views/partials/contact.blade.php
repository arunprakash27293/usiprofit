
<section id="contact">
    <div id="google-map" class="wow fadeIn" data-latitude="13.019620" data-longitude="77.592414" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
        </div>
        <style type="text/css">
          #con{
            border-width: 5px !important;
          }
          #contact-bg{
            color: white !important;
          }
           
        </style>

        <div class="contact-form wow fadeIn"  data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
          <div class="col-md-3"></div>
            <div class="col-sm-6">
              <form id="main-contact-form con" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                     <b> <input type="text" name="name" class="form-control" placeholder="Name" required="required"></b>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                </div>    

                <div class="form-group" id="contact-bg">
                  <button type="submit" class="btn-submit">Send Now</button>
                </div>
              </form>   
            </div>
            
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->