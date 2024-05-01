 <!-- Login Modal -->
 <div class="modal fade" id="login-modal" role="dialog" tabindex="-1" aria-labelledby="login-heading" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
                 <div class="modal-content">
                     <!-- header -->
                     <div class="modal-header">
                         <h5 class="login-title" id="login-heading">Login with PGLife</h5>
                         <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <!-- body -->
                     <div class="modal-body">
                         <form class="form" id="login-form" role="form" method="post" action="api/login_submit.php">
                             <div class="input-group form-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text">
                                         <i class="fas fa-user"></i>
                                     </span>
                                 </div>
                                 <input type="email" class="form-control" name="email" placeholder="Email" required>
                             </div>
                             <div class="input-group form-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text">
                                         <i class="fas fa-lock"></i>
                                     </span>
                                 </div>
                                 <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                             </div>
                             <div class="form-group">
                                 <button class="btn btn-block btn-primary" type="submit">Login</button>
                             </div>
                         </form>
                     </div>
                     <!-- footer -->
                     <div class="modal-footer">
                         <span>
                             <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click here</a>
                             to register a new account
                         </span>
                     </div>
                 </div>
             </div>
 </div>