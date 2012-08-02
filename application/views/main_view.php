<div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>flamestrap</h1>
        <p>FlameStrap combines CodeIgniter and Twitter Bootstrap for the rapid development of webapps with both a frontend and backend framework.</p>
        <p><a class="btn btn-primary btn-large" data-toggle="modal" href="#myModal">Sign In &raquo;</a></p>
      </div>
      
      <!-- Sign in modal -->
      
      <div class="modal hide fade" id="myModal" style="display: none; ">
        <div class="modal-header">
          <button class="close" data-dismiss="modal">×</button>
          <h3>Sign In</h3>
        </div>
        <div class="modal-body">
          $signInContent
            &nbsp;&nbsp;&nbsp;Or
            <br /><br />
            <a class="btn" data-dismiss="modal" data-toggle="modal" href="#registerModal">Sign Up &raquo;</a>
            </p>    
        </p>
        </div>
        <div class="modal-footer">
          <!--<a href="#" class="btn btn-primary">Save changes</a>-->
        </div>
      </div>
      
      
      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Contact Us</h2>
            <p>
                This will take you to the contact page.
           </p>
          <p><a class="btn" href="/?page=contact">Contact &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>About</h2>
           <p>
              This framework was made for the rapid development of webapps and the incorporation of 
              twitter bootstrap helps accomplish this by including a visually appealing front end
              framework as well.
           </p>
          <p><a class="btn" href="/?page=about">About &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Sign Up</h2>
          <p>
            Signing up with twitter, facebook, openid, and native signup coming soon.
          </p>
          <p><a class="btn" data-toggle="modal" href="#registerModal">Sign Up &raquo;</a></p>
        </div>
        <div class="modal hide fade" id="registerModal" style="display: none; ">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">×</button>
            <h3>Sign Up</h3>
          </div>
          
          <!-- Sign up modal -->
          
          <div class="modal-body">
            $signUpContent
            <p>
            &nbsp;&nbsp;&nbsp;Or
            <br /><br />
            <a class="btn" data-dismiss="modal" data-toggle="modal" href="#myModal">Sign In &raquo;</a>
            </p>
            </p>
          </div>
          
        </div>
      </div>
      <hr class="span12">