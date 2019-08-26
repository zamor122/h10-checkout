<?php get_header(); ?>


<!-- Body Content here -->
<main>
  <div class="container">
      <h2 class="py-3 title-join">Welcome to your Prime Day level-up</h2>      
      <div class="row step-one">
            <div class="col-sm-6 v-line">
                <p>Please select the option that best describes you:</p>
                <form id="h10-form">
                    <div class="form-group">
                        <div class="h10-radio">
                            <input type="radio" name="user" id="existUser" >
                            <label for="existUser">
                                <h4>Existing Helium 10 User</h4>
                                <p>I already have a free Helium 10 account and</p>
                                <p>want to upgrade</p>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="h10-radio">
                            <input type="radio" name="user" id="newUser" checked="checked">
                            <label for="newUser">
                                <h4>New User</h4>
                                <p>I am new to Helium 10; or I want to create a new</p>
                                <p>account</p>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" id="userName" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" id="userEmail" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" id="userPassword" name="password"
                               placeholder="Password">
                    </div>
                    <div class="form-group catcha-field" style="display: none;">
                        <input class="form-control" style="display: inline-block; width: 70%;" type="text" id="captcha"
                               name="captcha" placeholder="Verification code">
                        <img id="captcha-image">
                    </div>
                    <div class="validation-error"
                         style="display: none; color: #c00; margin-bottom: 15px; font-size: 12px;"></div>
                    <div class="form-group text-right">
                        <button class="btn btn-primary" type="submit" id="review-order-btn">Review your order</button>
                    </div>
                    <input type="hidden" name="coupon" value="PRIMEDAY" id="coupon">
                    <input type="hidden" name="plan" value="Helium10_Platinum" id="plan">
                </form>
            </div>
            <div class="col-sm-6 sidebar">
                <p>This is your opportunity to take your business to the next level (or to get started).</p>
                    <p>
                        <strong>Join Helium 10 by Wednesday, July 17 at 11:59 p.m. PST for 75% off your first month (It'll be $97 afterward).</strong>
                    </p>
                    <p>
                            Whether you're a beginner looking for a product, an advanced seller looking to get ahead, 
                            or a business looking for better management solutions, 
                            Helium 10 has everything you need to sell on Amazon.
                    </p>
                    <p>    
                            Our all-in-one software suite is designed to help you save time, manage your business better, and make better decisions through accurate data and analytics. 
                            From product research down to refunds and automated email communication, get clear advantages across your entire sales pipeline.
                    </p>
                   
                    

            </div>
        </div>
        <div class="row step-two d-none">
            <div class="col-sm-6 v-line">
                <div class="form-group"><span class="h10-label">User:</span>
                    <span id="user-email-review"></span>
                </div>
                <div class="form-group"><span class="h10-label">Plan:</span>
                    PLATINUM
                </div>
                <div class="form-group"><span class="h10-label">Total:</span>
                    <span id="total-amount"></span>
                    <small class="text-muted">(first month, $97/month afterwards)</small>
                </div>
                <div class="validation-error-2"
                     style="display: none; color: #c00; margin-bottom: 15px; font-size: 12px;"></div>
                <div class="action-buttons">
                    <div class="form-group text-right pt-3">
                        <button class="btn btn-light" type="button" id="back-btn">Back</button>
                        <button class="btn btn-primary ml-2" type="button" id="pay-btn">Pay</button>
                    </div>
                    <div class="text-right"><a class="change-payment" href="#" style="display: none;">Change Payment
                        Method</a></div>
                </div>

                <div class="form-group text-muted" style="margin-top: 40px">
                    *IMPORTANT: Please note that your first month with the Helium 10 Platinum Plan will cost only $24.25. 
                    However, after the first month your Platinum Plan subscription will cost $97 for the second month and all months thereafter.

                </div>
            </div>
            <div class="col-sm-6 sidebar">
                    <p>This is your opportunity to take your business to the next level (or to get started).</p>
                    <p>
                        <strong>Join Helium 10 by Wednesday, July 17 at 11:59 p.m. PST for 75% off your first month (It'll be $97 afterward).</strong>
                    </p>
                    <p>
                            Whether you're a beginner looking for a product, an advanced seller looking to get ahead, 
                            or a business looking for better management solutions, 
                            Helium 10 has everything you need to sell on Amazon.
                    </p>
                    <p>    
                            Our all-in-one software suite is designed to help you save time, manage your business better, and make better decisions through accurate data and analytics. 
                            From product research down to refunds and automated email communication, get clear advantages across your entire sales pipeline.
                    </p>
                                   
        </div>
        </div>


        <div class="row step-three d-none" style="margin-top:40px">
            <div class="sidebar">
                        <h3 class="h10-title">Congratulations on joining Helium 10!</h3>

<p>
    Thanks for taking advantage of this exclusive offer! We hope you enjoy the Helium 10 Platinum plan as much as the successful Amazon sellers who use it today.     
</p>
<p>If you have any questions or problems with your Platinum Plan, the Helium 10 support team will be happy to assist you. You can reach them at <a href="mailto:support@helium10.com?subject=Helium10 at Prosper">support@helium10.com</a></p>

<p>Keep on Crushing It!</p>

<p>The Helium 10 Team</p>


     
                    </div>
            </div>
  </div>
</main>
<?php get_footer(); ?>