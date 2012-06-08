<div class="four columns">
	<div class="panel">
	<!-- Begin MailChimp Signup Form  <link href="http://cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css"> -->
		<div id="mc_embed_signup" style="background:none;">
			<form action="http://prestigeanimalhospital.us5.list-manage.com/subscribe/post?u=4001dde2b909598d7f16643b7&amp;id=5c6a8f28b0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="nice validate" target="_blank">
				<h5>Newsletter</h5>
				<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
				<div class="mc-field-group">
					<label for="mce-MMERGE1">Name  <span class="asterisk">*</span>
					</label>
					<input type="text" value="" name="MMERGE1" class="expand input-text required" id="mce-MMERGE1">
				</div>
				<div class="mc-field-group">
					<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
					</label>
					<input type="email" value="" name="EMAIL" class="expand input-text required email" id="mce-EMAIL">
				</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>
                <div class="clear">
                   	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                </div>
			</form>
		</div>
					
<script type="text/javascript">
var fnames = new Array();var ftypes = new Array();fnames[1]='MMERGE1';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';
var head= document.getElementsByTagName('head')[0];

var script = document.createElement('script');
script.type = 'text/javascript';
script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
head.appendChild(script);
var err_style = '';
try{
    err_style = mc_custom_error_style;
} catch(e){
    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
}
var head= document.getElementsByTagName('head')[0];
var style= document.createElement('style');
style.type= 'text/css';
if (style.styleSheet) {
  style.styleSheet.cssText = err_style;
} else {
  style.appendChild(document.createTextNode(err_style));
}
head.appendChild(style);
setTimeout('mce_preload_check();', 250);

var mce_preload_checks = 0;
function mce_preload_check(){
    if (mce_preload_checks>40) return;
    mce_preload_checks++;
    try {
        var jqueryLoaded=jQuery;
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    try {
        var validatorLoaded=jQuery("#fake-form").validate({});
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    mce_init_form();
}
function mce_init_form(){
    jQuery(document).ready( function($) {
      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
      options = { url: 'http://prestigeanimalhospital.us5.list-manage.com/subscribe/post-json?u=4001dde2b909598d7f16643b7&id=5c6a8f28b0&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                    beforeSubmit: function(){
                        $('#mce_tmp_error_msg').remove();
                        $('.datefield','#mc_embed_signup').each(
                            function(){
                                var txt = 'filled';
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        var bday = false;
                                        if (fields.length == 2){
                                            bday = true;
                                            fields[2] = {'value':1970};//trick birthdays into having years
                                        }
                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else {
									        if (/\[day\]/.test(fields[0].name)){
    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
									        } else {
    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
	                                        }
	                                    }
                                    });
                            });
                        return mce_validator.form();
                    }, 
                    success: mce_success_cb
                };
      $('#mc-embedded-subscribe-form').ajaxForm(options);
      
      
    });
}
function mce_success_cb(resp){
    $('#mce-success-response').hide();
    $('#mce-error-response').hide();
    if (resp.result=="success"){
        $('#mce-'+resp.result+'-response').show();
        $('#mce-'+resp.result+'-response').html(resp.msg);
        $('#mc-embedded-subscribe-form').each(function(){
            this.reset();
    	});
    } else {
        var index = -1;
        var msg;
        try {
            var parts = resp.msg.split(' - ',2);
            if (parts[1]==undefined){
                msg = resp.msg;
            } else {
                i = parseInt(parts[0]);
                if (i.toString() == parts[0]){
                    index = parts[0];
                    msg = parts[1];
                } else {
                    index = -1;
                    msg = resp.msg;
                }
            }
        } catch(e){
            index = -1;
            msg = resp.msg;
        }
        try{
            if (index== -1){
                $('#mce-'+resp.result+'-response').show();
                $('#mce-'+resp.result+'-response').html(msg);            
            } else {
                err_id = 'mce_tmp_error_msg';
                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                
                var input_id = '#mc_embed_signup';
                var f = $(input_id);
                if (ftypes[index]=='address'){
                    input_id = '#mce-'+fnames[index]+'-addr1';
                    f = $(input_id).parent().parent().get(0);
                } else if (ftypes[index]=='date'){
                    input_id = '#mce-'+fnames[index]+'-month';
                    f = $(input_id).parent().parent().get(0);
                } else {
                    input_id = '#mce-'+fnames[index];
                    f = $().parent(input_id).get(0);
                }
                if (f){
                    $(f).append(html);
                    $(input_id).focus();
                } else {
                    $('#mce-'+resp.result+'-response').show();
                    $('#mce-'+resp.result+'-response').html(msg);
                }
            }
        } catch(e){
            $('#mce-'+resp.result+'-response').show();
            $('#mce-'+resp.result+'-response').html(msg);
        }
    }
}

</script>
					
					
	</div>
</div>

<div class="four columns">
	<div class="panel">
		<h5>Current Specials</h5>
        <div class="offer-directions" style="font-size:.80em;margin-top:-5px;">Click links below to print offer</div>
		<div class="offer-one">
			<span class="offer">
				<a href="#" class="deals" data-reveal-id="myModal1" data-animation="fadeAndPop" data-animationspeed="300" data-closeonbackgroundclick="true" data-dismissmodalclass="close-reveal-modal">$10 off your office visit for first time clients</a>
			</span>
		</div>
		<div class="offer-two">
			<span class="offer">
        		<a href="#" class="deals" data-reveal-id="myModal2">10% off any Veterinary Medical Service</a>
            </span>
		</div>
		<div class="offer-three">
			<span class="offer">
               	<a href="#" class="deals" data-reveal-id="myModal3">$30 off of our Dental Package</a>
            </span>
		</div>
		<div class="offer-four">
			<span class="offer">
               	<a href="#" class="deals" data-reveal-id="myModal4">$5 off Grooming</a>
            </span>
		</div>
	</div>
</div>

<div class="four columns">
	<div class="panel">
		<h5>From our Patients</h5>
		<p>Dr. Wahla is awesome! He is very nice and caring and pleasant to speak with. I like that they have early hours and weekends as well.<span class="name">- Jessica R.</span></p>
		<p>I love this office, the staff is very friendly and very careful with my kids :). When I go for my doggies routine check up everyone is very welcoming!<span class="name">- Karla M.			</span></p>
	</div>
</div>

<div id="myModal1" class="reveal-modal">
	<div class="closeBTN"><a href="#" class="close-reveal-modal">Close</a></div>
	<div class="printBTN">Print</div>
	<h2>$10 off your office visit for first time clients</h2>
	<span class="restriction">Offer cannot be combined with any other offers.</span>
	<span class="restriction">Not valid with Wellness Plans.</span>
	<span class="restriction">For first time clients only.</span>
	<span class="restriction">Valid until 06-01-2013</span>
</div>

<div id="myModal2" class="reveal-modal">
	<div class="closeBTN"><a href="#" class="close-reveal-modal">Close</a></div>
	<div class="printBTN">Print</div>
	<h2>10% off any Veterinary Medical Service</h2>
	<span class="restriction">Offer cannot be combined with any other offers.</span>
	<span class="restriction">Not valid with Wellness Plans.</span>
	<span class="restriction">For first time clients only.</span>
	<span class="restriction">Valid until 01-01-2013</span>
</div>
<div id="myModal3" class="reveal-modal">
	<div class="closeBTN"><a href="#" class="close-reveal-modal">Close</a></div>
	<div class="printBTN">Print</div>
	<h2>$30 off of our Dental Package</h2>
	<span class="restriction">Offer cannot be combined with any other offers.</span>
	<span class="restriction">Not valid with Wellness plans.</span>
	<span class="restriction">For first time dentals only.</span>
	<span class="restriction">Valid until 12-20-2012</span>
</div>
<div id="myModal4" class="reveal-modal">
	<div class="closeBTN"><a href="#" class="close-reveal-modal">Close</a></div>
	<div class="printBTN">Print</div>
	<h2>$5 off Grooming</h2>
	<span class="restriction">By appointment only.</span>
	<span class="restriction">  Offer cannot be combined with any other grooming offers.</span>
	<span class="restriction">First time Clients only.</span>
	<span class="restriction">Valid until 01-31-2012</span>
</div>