<?php if (!defined("IN_WALLET")) { die("Auth Error"); } ?>
                <h1><?php echo $lang['PAGE_HEADER']; ?></h1>
                <?php
                if (!empty($error))
                {
                    echo "<p style='font-weight: bold; color: red;'>" . $error['message']; "</p>";
                }
                ?>
                <h3>CRYPTIC CASH - Peer-to-Peer Electronic Cash System</h3>
            	<p>Our technology is revolutionizing the financial services industry by empowering millions across the globe to authenticate and transact immediately and without costly intermediaries.</p>
            	                          
                
                
            </br> 
            <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Log in to Cryptic Cash Wallet</a>
      </h3>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
       <form action="index.php" method="POST" class="clearfix">
                    <input type="hidden" name="action" value="login" />
                    <div class="col-md-2"><input type="text" class="form-control" name="username" placeholder="<?php echo $lang['FORM_USER']; ?>"></div>
                    <div class="col-md-2"><input type="password" class="form-control" name="password" placeholder="<?php echo $lang['FORM_PASS']; ?>"></div>
                  
                    <div class="col-md-2"><button type="submit" class="btn btn-default"><?php echo $lang['FORM_LOGIN']; ?></button></div>
                </form>
  </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Sign Up Cryptic Cash Wallet</a>
      </h3>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body"><form action="index.php" method="POST" class="clearfix">
                    <input type="hidden" name="action" value="register" />
                    <div class="col-md-2"><input type="text" class="form-control" name="username" placeholder="<?php echo $lang['FORM_USER']; ?>"></div>
                    <div class="col-md-2"><input type="password" class="form-control" name="password" placeholder="<?php echo $lang['FORM_PASS']; ?>"></div>
                    <div class="col-md-2"><input type="password" class="form-control" name="confirmPassword" placeholder="<?php echo $lang['FORM_PASSCONF']; ?>"></div>
                    <div class="col-md-2"><button type="submit" class="btn btn-default"><?php echo $lang['FORM_SIGNUP']; ?></button></div>
                </form>

  </div>
  
  
</div>
</div>
<h3>PRODUCT BASED ON BLOCKCHAIN</h3>
<p>The future shines brightly with unrestricted growth, global adoption, permissionless innovation, and decentralized development..
Porwerfull and Easy to use. No hassles,Reliable. A network that runs without congestion. Transact in seconds, Get confirmed in minutes.
A payment system that's a proven store of value.
</p>         
            
		
  
            

	


