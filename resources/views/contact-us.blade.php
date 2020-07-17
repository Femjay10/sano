@extends("layouts.frontend")

@section("title")

  {{ config("app.name") }} | contact us

@endsection

@section("main_content")

<!-- Section: inner-header -->
  @includeIf("layouts.breadcrumb", ["title" => "Contact Us", "subtitle" => "Contact Us"])

<!-- Section: Have Any Question -->
<section class="divider">
  <div class="container pt-60 pb-60">
    <div class="section-title mb-60">
      <div class="row">
        <div class="col-md-12">
          <div class="esc-heading small-border text-center">
            <h3>Have any Questions?</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center">
            <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
            <h4>Call Us</h4>
            <h6 class="text-gray">Phone: +262 695 2601</h6>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center">
            <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
            <h4>Address</h4>
            <h6 class="text-gray">121 King Street, Australia</h6>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center">
            <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
            <h4>Email</h4>
            <h6 class="text-gray">you@yourdomain.com</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Contact -->
<section data-bg-img="images/pattern/p4.png"> 
  <div class="container">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Contact</span> Us</h2>
        </div>
      </div>
    </div>
    <div class="section-content">          
      <div class="row">
        <div class="col-md-12">
        
          <!-- Contact Form -->
          <form id="contact_form" name="contact_form" class="contact-form-transparent" action="includes/sendmail.php" method="post">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Name <small>*</small></label>
                  <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Email <small>*</small></label>
                  <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Subject <small>*</small></label>
                  <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Phone</label>
                  <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Message</label>
              <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
            </div>
            <div class="form-group">
              <input name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="btn btn-dark btn-theme-colored btn-flat btn-block" data-loading-text="Please wait...">Send your message</button>
            </div>
          </form>
          
          <!-- Contact Form Validation-->
          <script>
            $("#contact_form").validate({
              submitHandler: function(form) {
                var form_btn = $(form).find('button[type="submit"]');
                var form_result_div = '#form-result';
                $(form_result_div).remove();
                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                var form_btn_old_msg = form_btn.html();
                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                $(form).ajaxSubmit({
                  dataType:  'json',
                  success: function(data) {
                    if( data.status === 'true' ) {
                      $(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    $(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                  }
                });
              }
            });
          </script>

        </div>
      </div>
    </div>
  </div>
</section>

@endsection