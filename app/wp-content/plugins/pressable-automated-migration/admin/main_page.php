<?php
    $_error = NULL;
    if (array_key_exists('error', $_REQUEST)) {
      $_error = $_REQUEST['error'];
    }
?>
    <div class="logo-container" style="padding: 50px 0px 10px 20px">
      <a href="http://pressable.com" style="padding-right: 20px;"><img src="<?php echo plugins_url($this->getPluginLogo(), __FILE__); ?>" style="width:200px;" /></a>
      <a href="http://blogvault.net/"><img src="<?php echo plugins_url('../assets/img/blogvault-logo-120.png', __FILE__); ?>" style="width:150px;"></a>
    </div>

    <div id="wrapper" class="toplevel_page_pressable-automated-migration">
      <h1>Migrate Your Sites to Pressable</h1>
      <div class="grid">
        <div class="grid__col grid__col--6-of-12" style= "float: left; width: 50%;">
        <form id="pressable_migrate_form" dummy=">" action="<?php echo $this->bvmain->appUrl(); ?>/home/migrate" onsubmit="document.getElementById('migratesubmit').disabled = true;" style="padding:0 2% 2em 1%;" method="post" name="signup">
				<p><font size="3">The Pressable automated migration plugin makes moving sites to the Pressable platform effortless. It doesn't matter if you're a qualified developer or someone teaching yourself for the first time, this plugin does all the hard work for you. Move as many sites as you need quickly, and with minimal interaction with support.</font></p>
				<p>Find a complete guide to the automated migration plugin in the <a href='https://kb.pressable.com/article/using-the-pressable-automated-migration-plugin/'>Pressable Knowledge Base</a>.</p>
<?php if ($_error == "email") {
echo '<div class="error" style="padding-bottom:0.5%;"><p>There is already an account with this email.</p></div>';
    } else if ($_error == "blog") {
      echo '<div class="error" style="padding-bottom:0.5%;"><p>Could not create an account. Please contact <a href="http://blogvault.net/contact/">blogVault Support</a><br />
        <font color="red">NOTE: We do not support automated migration of locally hosted sites.</font></p></div>';
    } else if (($_error == "custom") && isset($_REQUEST['bvnonce']) && wp_verify_nonce($_REQUEST['bvnonce'], "bvnonce")) {
      echo '<div class="error" style="padding-bottom:0.5%;"><p>'.base64_decode($_REQUEST['message']).'</p></div>';
    }
?>

          <input type="hidden" name="bvsrc" value="wpplugin" />
          <input type="hidden" name="migrate" value="pressable" />
          <input type="hidden" name="type" value="sftp" />
          <input type="hidden" name="address" value="sftp.pressable.com" />
<?php echo $this->siteInfoTags(); ?>
          <div class="row-fluid">
            <div class="span5" style="border-right: 1px solid #EEE; padding-top:1%;">
              <label id='label_email'>Email</label>
              <div class="control-group">
                <div class="controls">
                  <input type="text" id="email" name="email" placeholder="ex. user@mydomain.com">
                </div>
              </div>
              <label class="control-label" for="input02">Destination Site URL</label>
              <div class="control-group">
                <div class="controls">
                  <input type="text" class="input-large" name="newurl" placeholder="http://examplesite.mystagingwebsite.com">
                </div>
              </div>
              <label class="control-label" for="inputip">Site Name</label>
              <div class="control-group">
                <div class="controls">
									<input type="text" class="input-large" placeholder="ex. examplesite" name="sitename">
                </div>
              </div>
              <label class="control-label" for="input01">SFTP User</label>
              <div class="control-group">
                <div class="controls">
                  <input type="text" class="input-large" placeholder="ex. username" name="username">
                </div>
              </div>
              <label class="control-label" for="input02">SFTP Password</label>
              <div class="control-group">
                <div class="controls">
                  <input type="password" class="input-large" name="passwd" placeholder="********">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input type="checkbox" name="consent" onchange="document.getElementById('migratesubmit').disabled = !this.checked;" value="1"/>I agree to Blogvault <a href="https://blogvault.net/tos" target="_blank" rel="noopener noreferrer">Terms of Service</a> and <a href="https://blogvault.net/privacy" target="_blank" rel="noopener noreferrer">Privacy Policy</a>
                </div>
              </div>
            </div>
          </div>
          <input type='submit' disabled id='migratesubmit' value='Migrate' class="button button-primary" style="width: 100px;">
        </form>
        </div>
        <div class="grid__col grid__col--6-of-12" style="float: left; width: 45%;">
          <div style="background-color:#FFF;padding:9px;">
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/0M_5tqwEkLM" style="width: 100%; height: 100%;"></iframe>
            </div>
					<div>
          <p style="text-align: center; font-weight: bold;">The above video will guide you through the migration process.</p>
        </div>
      </div>
    </div>
  </div>
</div> <!-- wrapper ends here -->