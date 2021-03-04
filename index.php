<html>
<?php
	
   function safeRequest($strGet) {
      $strGet = preg_replace("/[^\-a-zA-Z0-9\_]*/m","                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ",$strGet);
      $strGet = str_ireplace("javascript","",$strGet);
      $strGet = str_ireplace("encode","",$strGet);
      $strGet = str_ireplace("decode","",$strGet);
      return trim($strGet);
   }
   

?>
	<head>

		<title>Ecig & Ejuice</title>
		
		<!-- Force HTTPS -->
		<script type="text/javascript">
            if (window.location.protocol != "https:")
                window.location.href = "https:" +
                window.location.href.substring(window.location.protocol.length);
        </script>
		
		<style type="text/css" media="all">

			@import url('css/style.css');
		</style>
                <link href="jquery/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
                <script src="jquery/jquery-1.9.1.js"></script>
                <script src="jquery/jquery-ui-1.10.3.custom.min.js"></script>
		  <style>
                        .ui-dialog-titlebar-close {
                            display: none;
                        }

                        #verification-dialog { display: none; }

                        #adult-content, #minor-content { display: none; }

                        .ui-widget-overlay { background: #000; opacity: 0.9; }

                        .no-close .ui-dialog-titlebar-close { display: none; }

                        #birthday .ui-datepicker { margin: 0 auto; }

                        #verify { margin: 20px auto 0; }

                                        /* END OF FIELD */	
                    </style>
		<script>
		$(document).ready(function(){

//			// hide #back-top first
//			$("#back-top").hide();
//			
//			// fade in #back-top
//			$(function () {
//				$(window).scroll(function () {
//					if ($(this).scrollTop() > 100) {
//						$('#back-top').fadeIn();
//					} else {
//						$('#back-top').fadeOut();
//					}
//				});
//
//				// scroll body to 0px on click
//				$('#back-top a').click(function () {
//					$('body,html').animate({
//						scrollTop: 0
//					}, 800);
//					return false;
//				});
//			});
			                   
                        
                        
		});          

			function backtotop(){
				// scroll body to 0px on click
				
					$('body,html').animate({
						scrollTop: 0
					}, 800);
					return false;
				
			}
			function showTerms(){
			
				$("#fade").fadeTo(500, 0.25);
				$("#overlay").show();
				
					 $(document).mouseup(function()
						{
							$('#overlay').hide();
							$('#fade').hide();
							
						}); 
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
				
			}

			
			
		</script>
		
   <script type='text/javascript'>
      /*
       * clients can use this jQuery instance ll(), but do not remove
       */
      var ll = jQuery.noConflict();
      var currencySymbol = '$';
      var c_left = '$';
      var c_right = '';
   </script>
   <script type='text/javascript' src='https://www.alphacontactcenter.com/admin/js/nocache.php?f=webForms.js'></script>

   <script type='text/javascript'>

      /*
       * Below limelight_message array is meant to allow you to translate javascript based messages to whatever language your webform is intended for.  webForms.js is out of your control
       */
      var limelight_messages=new Array();
      //Error messages
      limelight_messages["invalid_military"]            = 'All military states must have a city of either "APO", "FPO", or "DPO".  Please adjust your city.';    //caller inline - form_validator()
      limelight_messages["invalid_email"]               = "Invalid E-mail Address";              //caller webForms.js - isValidEmail()
      limelight_messages["invalid_promo"]               = "Please enter a valid promo code.";    //caller webForms.js - CheckProductCode()
      limelight_messages["invalid_routing_number"]      = "Please Enter Your Routing Number";    //caller inline - form_validator()
      limelight_messages["invalid_account_number"]      = "Please Enter Your Account Number";    //caller inline - form_validator()
      limelight_messages["invalid_eft_bank_number"]     = "Please Enter Your Bank Number";       //caller inline - form_validator()
      limelight_messages["invalid_eft_account_number"]  = "Please Enter Your Account Number";    //caller inline - form_validator()
      limelight_messages["invalid_no_fields_entered"]   = "Please Fill in all fields";           //caller inline - form_validator()
      limelight_messages["invalid_credit_card"]         = "Invalid credit card number";          //caller inline - form_validator()
      limelight_messages["invalid_boleto"]              = "Invalid CNPJ or CPF ID";              //caller inline - form_validator()
      limelight_messages["invalid_terms"]               = "Please Agree with the Terms";         //caller inline - form_validator()
      limelight_messages["invalid_billing_fname"]       = "Please enter your Billing First Name";//caller inline - form_validator()
      limelight_messages["invalid_billing_lname"]       = "Please enter your Billing Last Name"; //caller inline - form_validator()
      limelight_messages["invalid_billing_city"]        = "Please enter your Billing City";      //caller inline - form_validator()
      limelight_messages["invalid_billing_address"]     = "Please enter your Billing Address";   //caller inline - form_validator()
      limelight_messages["invalid_billing_zip"]         = "Please enter your Billing Zip";       //caller inline - form_validator()
      limelight_messages["invalid_billing_country"]     = "Please chooose your Billing Country"; //caller inline - form_validator()
      limelight_messages["invalid_state"]               = "Please specify the state";            //caller inline - form_validator()
      limelight_messages["invalid_ssn"]                 = "Please specify the Last 4 SSN#";      //caller inline - form_validator()
      limelight_messages["invalid_attributes"]          = "Please make a selection for all options on the chosen product";    //caller inline - form_validator()
      limelight_messages["invalid_attributes_upsell"]   = "Please make a selection for all options on the chosen product(s)"; //caller inline - form_validator()

      //Text messages
      limelight_messages["txt_issue_id"]    = "Issue Id:";                           //caller webForms.js - payment_change() for solo/switch/maestro
      limelight_messages["txt_cvv"]         = "Security Code:";                      //caller webForms.js - payment_change() for other card types when solo/switch/maestro are used
      limelight_messages["txt_credit_card"] = "Credit Card Number:";                 //caller webForms.js - payment_change() when toggling between boleto and credit card numbers the same data element is used and label changed
      limelight_messages["txt_boleto"]      = "CNPJ or CPF ID:";                     //caller webForms.js - payment_change() when toggling between boleto and credit card numbers the same data element is used and label changed
      limelight_messages["txt_account_no"]  = "Account Number:";                     //caller webForms.js - payment_change() when toggling between checking and EFT payments the same data element is used and label changed
      limelight_messages["txt_routing_no"]  = "Routing Number:";                     //caller webForms.js - payment_change() when toggling between checking and EFT payments the same data element is used and label changed
      limelight_messages["txt_eft_bank_no"] = "Bank Number:";                        //caller webForms.js - payment_change() when toggling between checking and EFT payments the same data element is used and label changed
      limelight_messages["txt_eft_act_no"]  = "Account Number:";                     //caller webForms.js - payment_change() when toggling between checking and EFT payments the same data element is used and label changed
      limelight_messages["txt_secret_ssn"]  = "Last 4 SSN#:";

      //State Labels
      
      limelight_messages["txt_state_label_state"]      = "State";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_province"]      = "Province";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_county"]      = "County";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_island"]      = "Island";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_parish"]      = "Parish";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_region"]      = "Region";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_district"]      = "District";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_governorate"]      = "Governorate";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_division"]      = "Division";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_department"]      = "Department";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_municipality"]      = "Municipality";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_prefecture"]      = "Prefecture";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_commune"]      = "Commune";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_quarter"]      = "Quarter";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_canton"]      = "Canton";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_emirate"]      = "Emirate";                     //caller webForms.js - ChangeStateLabel()
      limelight_messages["txt_state_label_city"]      = "City";                     //caller webForms.js - ChangeStateLabel()
      
      limelight_messages["txt_state_select_state"]      = "Select State";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_province"]      = "Select Province";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_county"]      = "Select County";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_island"]      = "Select Island";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_parish"]      = "Select Parish";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_region"]      = "Select Region";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_district"]      = "Select District";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_governorate"]      = "Select Governorate";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_division"]      = "Select Division";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_department"]      = "Select Department";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_municipality"]      = "Select Municipality";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_prefecture"]      = "Select Prefecture";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_commune"]      = "Select Commune";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_quarter"]      = "Select Quarter";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_canton"]      = "Select Canton";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_emirate"]      = "Select Emirate";                     //caller webForms.js - ChangeCountry() first selection in select box label
      limelight_messages["txt_state_select_city"]      = "Select City";                     //caller webForms.js - ChangeCountry() first selection in select box label
      

      var required_fields=new Array();
      var required_fields_label=new Array();

	required_fields[0]='fields_fname';
	required_fields_label[0]='First Name';
	required_fields[1]='fields_lname';
	required_fields_label[1]='Last Name';
	required_fields[2]='fields_address1';
	required_fields_label[2]='Street Address';
	required_fields[3]='fields_city';
	required_fields_label[3]='City';
	required_fields[4]='fields_zip';
	required_fields_label[4]='Zip Code';
	required_fields[5]='fields_state';
	required_fields_label[5]='State';
	required_fields[6]='fields_phone';
	required_fields_label[6]='Phone';
	required_fields[7]='fields_email';
	required_fields_label[7]='Email';

   /*
    * AlertHandler allows you to either use a standard alert to show errors or customize to some kind of HTML version of your own
    */
   function AlertHandler(message)
   {
      alert(message);
   }

   /*
    * ConfirmHandler allows you to either use a standard winbdow.confirm to show errors or customize to some kind of HTML version of your own. Must return boolean
    */
   function ConfirmHandler(message)
   {
      return window.confirm(message);
   }

   function form_validator()
   {
      if (document.getElementById('hasFormSubmitted').value != '')
      {
         var prevPost = new Date(document.getElementById('hasFormSubmitted').value);
         prevPost.setSeconds(prevPost.getSeconds() + 3);
         var currentTime = new Date();
         if (prevPost < currentTime)
         {
            // -- blank out the formsubmitted because user went back and forth and hidden values still cached
            document.getElementById('hasFormSubmitted').value = '';
         }
      }

      var ccReq = false;
      var empty_fields=new Array();
      var empty_field_num=new Array();
      var empty_count=0;
      var str='field indicated Cant be empty:';
      for (i=0;i<required_fields.length;i++)
      {
         var field_ref=document.getElementById(required_fields[i]);

         if (required_fields[i] == 'cc_number')
         {
            ccReq = true;
         }

         if ((required_fields[i] == 'cc_number' || required_fields[i] == 'cc_expires' || required_fields[i] == 'cc_cvv') &&
             (document.getElementById('cc_type').value == 'checking' ||
             document.getElementById('cc_type').value == 'eft_germany' ||
             document.getElementById('cc_type').value == 'offline' ||
             document.getElementById('cc_type').value == 'boleto' ||
             document.getElementById('cc_type').value == 'giro' ||
             document.getElementById('cc_type').value == 'paypal'
             ))
         {
            ccReq = false;
            continue;
         }


         if (required_fields[i] == 'fields_state2')
         {
            var funcName = 'SetCountryValue2';
            if (typeof funcName == 'string' && eval('typeof ' + funcName) == 'function')
            {
               eval(funcName+'()');
            }
         }

         if (required_fields[i] == 'fields_state2' || required_fields[i] == 'fields_state') {
            if (validateMilitary(required_fields[i],'fields_city') == false)
            {
               AlertHandler(GetTranslation('invalid_military'));
               return;
            }
         }


         //catch all spaces, this is invalid
         var tempStr = field_ref.value.ltrim();

         if ((tempStr =='') || (tempStr == ' '))
         {
            var label = required_fields_label[i];
            if (label == 'State')
            {
               label = ll('#fields_state_region').text().replace(':', '');
            }
            empty_fields[empty_count] = label;
            empty_field_num[empty_count]=i;
            empty_count++;
         }
         if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value==''))
         {
            empty_fields[empty_count]=required_fields_label[i];
            empty_field_num[empty_count]=i;
            empty_count++;
         }
      }

      if (document.getElementById('cc_type'))
      {
         if (document.getElementById('cc_type').value == 'checking' || document.getElementById('cc_type').value == 'eft_germany')
         {
            // -- checking account / eft validation
            var routing_key = 'invalid_routing_number',
                account_key = 'invalid_account_number',
                ssn_key     = 'invalid_ssn',
                need_ssn    = '';

            if (document.getElementById('cc_type').value == 'eft_germany')
            {
               var routing_key = 'invalid_eft_bank_number',
                   account_key = 'invalid_eft_account_number';
            }

            field_ref = document.getElementById('routing_number');
            if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value==''))
            {
               AlertHandler(GetTranslation(routing_key));
               field_ref.focus();
               return;
            }
            field_ref = document.getElementById('account_number');
            if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value==''))
            {
               AlertHandler(GetTranslation(account_key));
               field_ref.focus();
               return;
            }
            if(need_ssn==1)
            {
               field_ref = document.getElementById('secret_ssn');
               if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value==''))
               {
                  AlertHandler(GetTranslation(ssn_key));
                  field_ref.focus();
                  return;
               }
            }
         }
      }

      for(x in empty_fields)
      {
         str=str+'<br/>'+empty_fields[x];
         if(empty_fields[x] != undefined )
         {
            AlertHandler('Please Enter Your ' + empty_fields[x] + '');
            document.getElementById(required_fields[empty_field_num[x]]).focus();
         }
         else
         {
            AlertHandler(GetTranslation('invalid_no_fields_entered'));
         }
         return;
      }

      if ( document.getElementById('cc_number')!=undefined && (ccReq || document.getElementById('cc_type').value == 'boleto'))
      {
         if (document.getElementById('cc_type').value == 'boleto' && document.getElementById('cc_number').value.length < 11)
         {
            AlertHandler(GetTranslation('invalid_boleto'));
            return;
         }
         else if (document.getElementById('cc_type').value != 'boleto' && document.getElementById('cc_number').value.length<13)
         {
            AlertHandler(GetTranslation('invalid_credit_card'));
            return;
         }
      }
      var tm_check = document.getElementById('terms');
      if(tm_check && tm_check.checked==false)
      {
         AlertHandler(GetTranslation('invalid_terms'));
         return;
      }
      if (document.getElementById('radioTwo')!=undefined)
      {
         var radio2Obj = document.getElementById('radioTwo');
         if (radio2Obj.checked)
         {
            field_ref = document.getElementById('billing_street_address');
            if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == '') )
            {
               AlertHandler(GetTranslation('invalid_billing_address'));
               return;
            }
            field_ref = document.getElementById('billing_fname');
            if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == '') )
            {
               AlertHandler(GetTranslation("invalid_billing_fname"));
               return;
            }
            field_ref = document.getElementById('billing_lname');
            if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == '') )
            {
               AlertHandler(GetTranslation("invalid_billing_lname"));
               return;
            }
            field_ref = document.getElementById('billing_city');
            if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == ''))
            {
               AlertHandler(GetTranslation('invalid_billing_city'));
               return;
            }
            var state_select_is_visible = (ll('#billing_state').is(':visible') == true);
            field_ref = document.getElementById('billing_state');
            if (state_select_is_visible)
            {
               if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == ''))
               {
                  var label = ll('#billing_state_region').text().replace(':', '');
                  AlertHandler("Please enter your " + label);
                  return;
               }

               if (validateMilitary('billing_state','billing_city') == false)
               {
                  AlertHandler(GetTranslation('invalid_military'));
                  return;
               }
            }
            var region_is_visible = (ll('#billing_state2').is(':visible') == true);
            field_ref = document.getElementById('billing_state2');
            if (region_is_visible)
            {
               if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == ''))
               {
                  var label = ll('#billing_state_region').text().replace(':', '');
                  AlertHandler("Please enter your " + label);
                  return;
               }
               else
               {
                  //store the international region value
                  ll(new Option(ll('#billing_state2').val(), ll('#billing_state2').val())).appendTo('#billing_state').attr('selected', 'selected');
               }
            }

            field_ref = document.getElementById('billing_postcode');
            if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == ''))
            {
               AlertHandler(GetTranslation('invalid_billing_zip'));
               return;
            }
            if (document.getElementById('billing_country')!=undefined)
            {
               field_ref = document.getElementById('billing_country');
               if((field_ref.length==0)||(field_ref.value==null) || (field_ref.value=='') || (field_ref.value.ltrim() == ''))
               {
                  AlertHandler(GetTranslation('invalid_billing_country'));
                  return;
               }
            }

         }
      }
      if(empty_count!=0)
      {
         var diverr=document.getElementById('err');
         diverr.innerHTML='';
         diverr.innerHTML=str;
      }
      else
      {
         // Validate product attributes, if applicable
         if (typeof(prod_var_required) != 'undefined' && prod_var_required.length)
         {
            // Main product
            var prod_id = ll('#custom_product').val();

            if (inArray(prod_id, prod_var_required) && (! ll('#product_variant_0_' + prod_id).length || ll('#product_variant_0_' + prod_id).val() == ''))
            {
               AlertHandler(GetTranslation('invalid_attributes'));
               return false;
            }

            // Upsells
            upsell_valid = true;

            ll.each(ll('.upsell_price_x'), function()
            {
               var prod_id = ll(this).attr('id').replace(/[^0-9]/g, '');

               if (inArray(prod_id, prod_var_required) && ll('#upsell_' + prod_id).length && ll('#upsell_' + prod_id).is(':checked') && (! ll('#product_variant_0_' + prod_id).length || ll('#product_variant_0_' + prod_id).val() == ''))
               {
                  upsell_valid = false;
                  return false;
               }
            });

            if (! upsell_valid)
            {
               AlertHandler(GetTranslation('invalid_attributes_upsell'));
               return false;
            }
         }

         if (ll('#fields_email').is(':visible') == true)
         {
            var emailCheck = isValidEmail(document.forms['opt_in_form'].fields_email.value);
         }
         else
         {
            var emailCheck = true;
         }
         if(emailCheck)
         {
            if (document.getElementById['state_cus2']!=undefined)
            {
               if ((document.getElementById['state_cus2'].style.display == 'inline') && (document.forms['opt_in_form'].fields_state2.value.length<2))
               {
                  AlertHandler(GetTranslation('invalid_state'));
                  return;
               }
               else
               {
                  if (document.getElementById('hasFormSubmitted').value == '')
                  {
                     if (ll('#cc_type').val() == 'paypal')
                     {
                        PaypalPopup();
                     }
                     else
                     {
                        SubmitForm();
                     }
                  }
               }
            }
            else
            {
               if (document.getElementById('hasFormSubmitted').value == '')
               {
                  if (ll('#cc_type').val() == 'paypal')
                  {
                     PaypalPopup();
                  }
                  else
                  {
                     SubmitForm();
                  }
               }
            }
         }
      }
   }

   function SubmitForm()
   {
      var d=new Date();
      document.getElementById('hasFormSubmitted').value = d.toUTCString();
      document.charset = 'ISO-8859-1';
      document.opt_in_form.submit();
   }

   

   ll(document).ready(function() {
      

      campaignId = 59;

      ll('#validate_button').click(function()
      {
         ValidatePromoCode();
      });

      hidState = ll('#fields_state_hid');
      if (hidState.length && hidState.val().length > 0)
      {
         var list = {
            obj       : '#country',
            targetObj : '#state_cus1',
            sel       : hidState.val(),
            id        : false,
            spinner   : false,
            focus     : false
         };
         ChangeCountry(list);
      }

      hidBillingState = ll('#billing_state_hid');
      if (hidBillingState.length && hidBillingState.val().length > 0)
      {
         var list = {
            obj       : '#billing_country',
            targetObj : '#billing_state_cus1',
            sel       : hidBillingState.val(),
            id        : 'billing_state',
            spinner   : false,
            focus     : false
         };
         ChangeCountry(list);
      }

      // Re-check billing fields
      if (ll('input[name="billingSameAsShipping"]:checked').val() == 'no')
      {
         ll('#radioTwo').click();
      }
      
      // Reset paypal check
      if (ll('#paypal_response_flag'))
      {
         ll('#paypal_response_flag').val('0');
      }
   });
   
    function closewindow() {
            ll( "#verification-dialog" ).dialog("close");
    }
                        
    function displayVerification() {      
        ll( "#verification-dialog" ).dialog({
          autoOpen:true,      
          closeOnEscape: false,
          draggable: false,
          minHeight: 520,
          minWidth: 485,
          modal: true,	
          resizable: false,		
          title: "Age Verification"
        });
    }  
   </script> 
  
	</head>
	
        <body onload="displayVerification();">
            <!--age verification-->
            <div id="verification-dialog" style="background:#fff;">
               <div><img src="https://s3.amazonaws.com/secure11/universal/ecig/verification/age-v-top.jpg" width="450" height="269" /></div>
               <div align="center">
               <img src="https://s3.amazonaws.com/secure11/universal/ecig/verification/age-v-title.jpg" width="346" height="65" /></div>
               <table width="90%" border="0" cellspacing="0" cellpadding="7" align="center">
              <tr>
                    <td><a href="http://google.com"><img src="https://s3.amazonaws.com/secure11/universal/ecig/verification/age-v-under.jpg" width="160" height="43" border="0" /></a></td>

                    <td>
                      <a onclick="closewindow();"><img src="https://s3.amazonaws.com/secure11/universal/ecig/verification/age-v-over.jpg" width="160" height="43"  style="cursor:pointer;"/></a></td>
              </tr>
            </table>
            <div align="center" style="font:12px arial;color:#333;text-align:center;">
                    Intended for sale to adults 18 years or older. If you are not<br />
             legally able to purchase tobacco products in the state where<br />
             you live, please do not enter this site
            </div>
            </div>
            <!--/age verification -->
            <div id="top" class="wrapper">	
                
                <div class="wraps">
                        
                        <div id="header"></div>
                        
                        <div id="second">
                            
                            <div class="positionMain">
                                
                                <div  class="formInput">					

                              <form accept-charset='ISO-8859-1' enctype='application/x-www-form-urlencoded;charset=ISO-8859-1' name='opt_in_form' id='opt_in_form' action='https://www.alphacontactcenter.com/index.php?main_page=two_step_form_processor' method='post'>
								 <table cellpadding=5px cellspacing=5px style="width:324px;color:#fff;">
								<input type='hidden' name='limelight_charset' id='limelight_charset' value='ISO-8859-1'/>
								<input type='hidden' name = 'product_name' id='product_name' value= "VPXS02LSTR" />
								<tbody id='fields_fname_tr'>
								<tr><td align="right"><label for="fields_fname">First Name:</label></td>
								<td align="left"><input  type='text' id='fields_fname' name='fields_fname' /></td></tr></tbody>
								<tbody id='fields_lname_tr'><tr><td align="right"><label for="fields_lname">Last Name:</label></td>
								<td align="left"><input  type='text' id='fields_lname' name='fields_lname' /></td></tr></tbody>
								<tbody id='fields_address1_tr'><tr><td align="right"><label for="fields_address1">Address:</label></td>
								<td align="left"><input  type='text' id='fields_address1' name='fields_address1' /></td></tr></tbody>
								
								<tbody id='fields_city_tr'><tr><td align="right"><label for="fields_city">City:</label></td>
								<td align="left"><input  type='text' id='fields_city' name='fields_city' /></td></tr></tbody>
								<tbody id='fields_zip_tr'><tr><td align="right"><label for="fields_zip">Zip Code:</label></td>
								<td align="left"><input  type='text' id='fields_zip' name='fields_zip' /></td></tr></tbody>
										 <tr>
         <td align="right"><label for="country">Country:</label></td>
         <td align="left">
<div class="select-outer" style=";width:184px;" onclick="">
   <div class="select-inner" style="">
      <select border="0"  class="" id="country" style="" name="country"  size="1" onchange="ChangeCountryAndStateLabel(
      {
         'obj'       : this,
         'targetObj' : '#state_cus1',
         'sel'       : '',
         'id'        : 'fields_state'
      }
      , 
      {
         'obj'       : this,
         'targetObj' : '#fields_state_region',
         'template'  : '<LABEL>:'
      });" >
<option value="" onclick="" >Select Country</option>
<option value="2" onclick="" >Albania</option>
<option value="20" onclick="" >Belarus</option>
<option value="33" onclick="" >Bulgaria</option>
<option value="55" onclick="" >Cyprus</option>
<option value="56" onclick="" >Czech Republic</option>
<option value="243" onclick="" >England</option>
<option value="73" onclick="" >France</option>
<option value="80" onclick="" >Georgia</option>
<option value="97" onclick="" >Hungary</option>
<option value="98" onclick="" >Iceland</option>
<option value="103" onclick="" >Ireland</option>
<option value="105" onclick="" >Italy</option>
<option value="117" onclick="" >Latvia</option>
<option value="122" onclick="" >Liechtenstein</option>
<option value="124" onclick="" >Luxembourg</option>
<option value="132" onclick="" >Malta</option>
<option value="140" onclick="" >Moldova, Republic of</option>
<option value="249" onclick="" >Montenegro</option>
<option value="150" onclick="" >Netherlands</option>
<option value="170" onclick="" >Poland</option>
<option value="171" onclick="" >Portugal</option>
<option value="175" onclick="" >Romania</option>
<option value="176" onclick="" >Russian Federation</option>
<option value="189" onclick="" >Slovakia (Slovak Republic)</option>
<option value="190" onclick="" >Slovenia</option>
<option value="195" onclick="" >Spain</option>
<option value="203" onclick="" >Sweden</option>
<option value="204" onclick="" >Switzerland</option>
<option value="220" onclick="" >Ukraine</option>
<option value="222" onclick="" >United Kingdom</option>
<option value="241" onclick="" >Wales</option></select>
   </div>
</div>
</td>
      </tr>         <tr id="dummystate">
           <td align="right"><label for="fields_state" id="fields_state_region">State:</label></td>
           <td align="left">
             <div id="state_cus1">
                           <input type="text" id="fields_state" name="fields_state" value="" onchange="SetStateHid(this);"/>
             </div>
             <input type="text" id="fields_state_hid" name="fields_state_hid" style="display: none;"/>
           </td>
         </tr><tr><td align="right"><label for='fields_phone'>Phone:</label></td>

											<td align="left">
											   <input type="text" onkeydown="return onlyNumbers(event,'phone')" id="fields_phone" name="fields_phone" />
											</td>
										 </tr><tbody id='fields_email_tr'><tr><td align="right"><label for="fields_email">Email:</label></td>
								<td align="left"><input type="text" id="fields_email" name="fields_email" /></td></tr></tbody>
								<tr><td><input type='hidden' name = 'step' value='first' />
								<input type='hidden' id='hasFormSubmitted' value='' /><input type='hidden' id='campaign_id' name='campaign_id' value='59' /></td></tr>
									  <input type="hidden" id="isWebForm" value="1"/>
									  
								   <input type='hidden' name='is_upsell' value='0'>
								<?php
								   foreach($_GET as $key => $value) {
									  echo "<input type='hidden' name='".safeRequest($key)."' value='".safeRequest($_GET[$key])."'>";
								   }
								?>

								   <tr>
									  <td>
										 
										 
									  </td>
								   </tr>
								   </table>
								   <input type='button' value='' onclick='form_validator();'>
								   </form>

                                </div>
                                </div>
                            
                        </div>

                        <div id="third"></div>	

                        <div id="fourth">
                            <div class="sub_four">
                                <div class="sub_four_one">
						<p>
						
                                                    Ecig & Ejuice&trade; is the newest electronic cigarette to harness the benefits of clean nicotine. Using advanced technology, our 
                                                    electronic cigarettes allow one the freedom to smoke virtually anywhere without the flame, ash, tar, or carbon monoxide found
                                                    in traditional Tobacco cigarettes. With no offensive second hand smoke, this smokeless product offers a safer, greener 
                                                    environment for both the user and non-smoking community without giving up the nicotine and taste!
                                                
                                                </p>
					</div>
					<div>
                                            <img style="position:relative; margin-top: -38px; border: none;" src="images/why-should-choose.png">
						<p style="position: relative; margin-top: -1px;">						
                                                 <!-- Victor E-Juice&trade; not only has the best tobacco flavor than any other e-cig out there but it also has one of the best batteries 
                                                  and cartomizers than any other e-cigs in it's class. Our tobacco lasts 20X longer than e-liquids found in most other e-cigs and
                                                  is top quality free of any cheap fillers or extra harmful ingredients guaranteed!          -->   
												  
												   Ecig & Ejuice&#0153;  not only has a better tobacco flavor than any other e-cig out there but it also has one of the best batteries and cartomizers than any other e-cigs in it's class. Our tobacco lasts 20X longer than e-liquids found in most other e-cigs and is top quality free of any cheap fillers or extra harmful ingredients guaranteed!
                                                </p>
					</div>
				</div>
                            
                        </div>	
                        
                        <div style="float: left; width: 100%;">
                            <div style="text-align: center; padding: 0px 18px 0px 27px; margin: 0px auto 15px;">
                                <div style="background: none repeat scroll 0px 0px rgb(0, 0, 0); padding: 15px 0px; font-size: 21px; border-radius: 10px;">
                                    40mg per 100/mL Propylene Glycol, 40mg per 100/mL Vegetable Glycerin, 17.6mg per 100/mL Artificial Flavoring, 2.4mg per 100/mL Nicotine
                                </div>
                            </div>
                        </div>
                        <div id="fifth"></div>

                        <div id="seventh">
                            <div class="sub_seventh_one">
                                <p>
                                        
                                    The cost of smoking traditional cigarettes goes well beyond what you pay at the cash register. With traditional cigarettes, you are limited 
                                    in the places you can smoke, you make many compromises, and your smoking also affects those around you. Ecig & Ejuice&trade; have no smoke 
                                    and no odor, leaving you free to smoke in far more places, and with far less negative impact.
                                
                                </p>
                            </div>
                        </div>

                        <div id="eigth">
                            <a href="#top"><img src="images/button.png" style="margin-left:70px; margin-top:340px;" ></a>
                        </div>
                        
                        <div class="footer">
                            <p>
                                <span style="color:#ff0000;font-weight: bold;font-size: 16px;">
                                    Legal Disclaimer:
                                </span> 
                                If you are under the age of 18/ 21 (Depending on individual state laws regarding access to adult subject matter) or if it is illegal to enter this site in your community, please leave immediately. By entering this site, you represent that you are at least 18 years of age , or 21 in those jurisdictions in which 21 is the age of majority. Additionally , be advised the nicotine is addictive. Not intend to be drug products that diagnose, treat, cure or mitigrate any disease or condition. Do not use these products if you are under the ageof 18, or 21 in those jurisdiction in which 21 is the age of majority; if you are a non-smoker: if you have a demontrated allergy or sensitivity to nicotine or any combinations of inhalants ; if you are pregnant or nursing.
                            </p>
                            <br/>
                            <p>							
                                Ecig & Ejuice&trade; products must only be used by persons of legal age.
                            </p>
                            <br/>
                            <p>							
                                <span style="color:#ff0000;font-weight: bold;font-size: 16px;">
                                    WARNING:
                                </span> 
                                This product is an electronic cigarette and should not be used by non-smokers,women who are pregnant or breastfeeding, or those with 
                                sensitivity to nicotine. Ecig & Ejuice&trade; contain nicotine. NICOTINE is known to be a highly addictive substance.
                            </p>
                            <div style="float:left;width: 50%;">
                                <p>					
                                    <a href="http://ecigsejuices.com/terms.html" target="_blank">[ Terms & Conditions ]</a> 
                                    <a href="http://ecigsejuices.com/contact.php" target="_blank">[ Contact Us]</a> 
                                    | Toll Free 800-554-8353 <br/><br/>

                                    Ecig & Ejuice<br/>  
                                    4420 Atherton Drive<br/>
                                    #12<br/>
                                    Taylorsville, UT 84123<br/><br/>

					
                                    <b>Send returns to:</b><br/>
                                     2734 S 3600 W<br/>
                                     West Valley, UT<br/>
                                     84119<br/>



                                </p>
                            </div>
                            <div style="float:left;width: 50%;">
                                <p>
                                    <br/><br/>
                                    Knowledge & Prosper Limited <br/>
                                    Third Floor , 207 Regent Street London<br/>
                                    W1B 3HH<br/>
                                    tel: 800-554-8353 <br/>
                                    Registration UK #9358331<br/><br/><br/><br/><br/>
                                </p>
                            </div>
                            <p>   
                            Copyright &copy 2014. Ecig & Ejuice. All Rights Reserved<br/><br/>

                            If you are under the age of 18 (or under the age of 19 and you live in Alabama, Alaska, New Jersey, Utah and New York) please leave this Site immediately. By entering this Site, you represent that you are at least 18 years of age, or 19 in those jurisdictions mentioned above. PLEASE NOTE that IF YOU ARE A RESIDENT OF OREGON, YOU MAY NOT PURCHASE THE PRODUCT. The Product is not intended as a "stop smoking" or "quit smoking" device; instead the Product provides an alternative to smoking by supplying nicotine through a personal atomizing device. Nicotine, even in low doses, can have a number of potentially harmful side effects. The Product should not be used by anyone under the age of 18 or anyone who is pregnant, nursing, or breastfeeding. Information and statements regarding product have not been evaluated by the Food and Drug Administration and are not intended to diagnose, treat, cure or prevent any disease.
                            </p>
                            
                            
                                <p id="back-top">
                                        <a href="#top"><span></span>Back to Top</a>
                                </p>

                </div>
                
            </div>
          
	</body>
</html>
