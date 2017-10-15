
<script type="text/javascript" src="<?php echo JS_PATH ?>form_script.js"></script>
<script type="text/javascript" src="<?php echo CONTACT_JS_PATH ?>contact.js" ></script>
<section id="contact-page">
    <div class="container mt-5" style="padding-top:50px;">
      <div class="row">
          <div class="col-md-8">
              <div class="well well-sm">
                  <form>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="name">
                                  Name</label>
                              <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" value="Sergio"/>
                              <span id="err_name"style='color:red;'></span>
                          </div>
                          <div class="form-group">
                              <label for="email">
                                  Email Address</label>
                              <div class="input-group">
                                  </span>
                                  <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" value="sergiete193@gmail.com"/></div>
                                  <span id="err_email"style='color:red;'></span>
                          </div>
                          <div class="form-group">
                              <label for="subject">
                                  Subject</label>
                              <select id="subject" name="subject" class="form-control" required="required">
                                  <option value="na" selected="">Choose One:</option>
                                  <option value="general">General</option>
                                  <option value="technical">Technical</option>
                                  <option value="other">Other</option>
                              </select>
                                <span id="err_subject"style='color:red;'></span>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="name">
                                  Message</label>
                              <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                  placeholder="Message"></textarea>
                              <span id="err_message"style='color:red;'></span>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <button type="button" id="boton" class="btn btn-primary pull-right">
                              Send Message</button>
                      </div>
                  </div>
                  </form>
              </div>
          </div>

      </div>
</div>
</section>
