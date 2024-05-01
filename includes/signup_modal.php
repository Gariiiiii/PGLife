 <!-- Signup Modal -->    
 <div class="modal fade" id="signup-modal" role="dialog" tabindex="-1" aria-labelledby="signup-heading" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
                 <div class="modal-content">
                     <!-- header-->
                     <div class="modal-header">
                         <h5 class="modal-title" id="signup-heading">Signup with PGLife</h5>
                         <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <!-- Signup Modal body -->
                     <div class="modal-body">
                         <form class="form" id="signup-form" role="form" method="post" action= "api/signup_submit.php">
                             <div class="input-group form-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text">                                   
                                         <i class="fas fa-user"></i>
                                     </span>
                                 </div>
                                 <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
                             </div>
                             <div class="input-group form-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text">                                   
                                         <i class="fas fa-phone-alt"></i>
                                     </span>
                                 </div>
                                 <input type="text" class="form-control" name="phone" placeholder="Phone Number" minlength="10" maxlength="10" required>
                             </div>
                             <div class="input-group form-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text">                                   
                                         <i class="fas fa-envelope"></i>
                                     </span>
                                 </div>
                                 <input type="email" class="form-control" name="email" placeholder="Email Id" required>
                             </div>
                             <div class="input-group form-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text">                                   
                                         <i class="fas fa-lock"></i>
                                     </span>
                                 </div>
                                 <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                             </div>
                             <div class="input-group form-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text">                                   
                                         <i class="fas fa-university"></i>
                                     </span>
                                 </div>
                                 <input type="text" class="form-control" name="college_name" placeholder="College Name" maxlength="150" required>
                             </div>
                             <div class="form-group">
                                 <span>I'm a</span>
                                 <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" style="margin-left: 16px;">
                                 <label for="gender-male">Male</label>
                                 <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" style="margin-left: 16px;">
                                 <label for="gender-female">Female</label>                              
                             </div>
                             <div class="form-group">
                                 <button class="btn btn-block btn-primary" type="submit">Create Account</button>
                             </div>
                         </form>
                     </div>
                     <!-- Signup Modal footer -->
                     <div class="modal-footer">
                         <span>Already have an account?
                             <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                         </span>
                     </div>
                 </div>
             </div>
         </div>