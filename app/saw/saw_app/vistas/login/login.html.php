<?php ?>

<script type="text/javascript" src="js/pagina_login/gen_validatorv31.js"></script>
<script type='text/javascript' src='js/pagina_login/gen_validatorv31.js'></script>
 
<link rel="STYLESHEET" type="text/css" href="css/theme1/fg_membersite.css" />




<div id='fg_membersite'  style="position:absolute; left:50%;margin-left:-150px;margin-top:60px;">
<form id='login' action='login/dologin' method='post' accept-charset='UTF-8'>
<fieldset >


<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php //echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php //echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='login_username_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='password' >Password*:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" /><br/>
    <span id='login_password_errorloc' class='error'></span>
</div>

<div class='container'>
    <input type='submit' name='accion' value='login' />
</div>
<div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>