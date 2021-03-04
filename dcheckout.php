<html>
<?php
   function safeRequest($strGet) {
      $strGet = preg_replace("/[^\-a-zA-Z0-9\_]*/m","",$strGet);
      //$strGet = preg_replace("/[^a-zA-Z0-9(\040)\(\)']*/m","",$strGet); //<--to allow space \040
      $strGet = str_ireplace("javascript","",$strGet);
      $strGet = str_ireplace("encode","",$strGet);
      $strGet = str_ireplace("decode","",$strGet);
      return trim($strGet);
   }
?>
	<head>
		<title>Ecig & Ejuice Drop-sell Checkout</title>
		
		<!-- Force HTTPS -->
		<script type="text/javascript">
            if (window.location.protocol != "https:")
                window.location.href = "https:" +
                window.location.href.substring(window.location.protocol.length);
        </script>
		
		<style type="text/css" media="all">

			@import url('css/style.css');
		</style>
		<link href="images/favicon.ico" rel="shortcut icon">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.js"></script>
	
		
   <script type='text/javascript'>
			function getValue(planID,buttons,amount){
                      var total;
						
						
					if(buttons=="1"){
						
						document.getElementById('hiddenbutton1').style.display = 'none';
						
						document.getElementById('button1').style.display = 'block';
						
						document.getElementById('hiddenbutton2').style.display = 'none';

						document.getElementById('button2').style.display = 'block';
						
						document.getElementById('hiddenbutton3').style.display = 'none';
						
						document.getElementById('button3').style.display = 'block';
						
						document.getElementById('extra').value = "159.04";
						document.getElementById('product_name').value = "VPXS02LDRP";
						document.getElementById('ship').innerHTML = "FREE";
						document.getElementById('shipping').value = "37";
						document.getElementById('custom_product').value = "45";
						document.getElementById('custom_product_price').value = "159.0400";
						document.getElementById('savetotal').innerHTML = "159.04"; 
					    document.getElementById('subtotal').innerHTML = "159.04"; 
						document.getElementById('shippingandhandling').innerHTML = '0.00';
					}
					if(buttons=="2"){
						
						
						document.getElementById('hiddenbutton1').style.display = 'block';
						
						document.getElementById('button1').style.display = 'none';
						
						document.getElementById('hiddenbutton2').style.display = 'block';

						document.getElementById('button2').style.display = 'none';
						
						document.getElementById('hiddenbutton3').style.display = 'none';
						
						document.getElementById('button3').style.display = 'block';
						document.getElementById('product_name').value = "VPXS02MDRP";
						document.getElementById('ship').innerHTML = "FREE";
						document.getElementById('extra').value = "119.00";
						document.getElementById('shipping').value = "37";
						document.getElementById('custom_product').value = "47";
						document.getElementById('custom_product_price').value = "119.0000";
						document.getElementById('savetotal').innerHTML = "119.00"; 
						document.getElementById('subtotal').innerHTML = "119.00"; 
						document.getElementById('shippingandhandling').innerHTML = '0.00';
				
					}
					if(buttons=="3"){
						
						document.getElementById('hiddenbutton1').style.display = 'block';
						
						document.getElementById('button1').style.display = 'none';
						
						document.getElementById('hiddenbutton2').style.display = 'none';

						document.getElementById('button2').style.display = 'block';
						
						document.getElementById('hiddenbutton3').style.display = 'block';
						
						document.getElementById('button3').style.display = 'none';
						document.getElementById('product_name').value = "VPXS02LDRP";
						document.getElementById('ship').innerHTML = "";
						document.getElementById('extra').value = "79.52";
						document.getElementById('shipping').value = "35";
						document.getElementById('custom_product').value = "49";
						document.getElementById('custom_product_price').value = "79.5200";
						document.getElementById('savetotal').innerHTML = "84.47"; 
						document.getElementById('subtotal').innerHTML = "79.52"; 
						document.getElementById('shippingandhandling').innerHTML = '4.95';		
										
					}
			
			}
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

required_fields[0]='cc_type';
required_fields_label[0]='Payment Type';
required_fields[1]='cc_number';
required_fields_label[1]='Credit Card Number';
required_fields[2]='cc_expires';
required_fields_label[2]='Exp. Date';
required_fields[3]='cc_cvv';
required_fields_label[3]='Security Code';

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
   
   </script>
   
	</head>
	
	<body id="top">
		
                <div class="wrapper">
                    
                    <div class="wraps">
                        
                        <div id="header"></div>
                        <div class="checkoutWidth">
                            <div id="left">
                                <div class="cbuttons">
                                       
                        <div style="margin-bottom:-30px;">
							<div id="button1">
								<input type="image" src="images/button01-clicked.png">
							</div>
							<div id="hiddenbutton1" style="display:none;" onclick="return getValue('product_1','1',31.80);" >
								<input type="image" src="images/button01.png" >
							</div>
						</div>
						 <div style="margin-bottom:-30px;">
							<div id="button2" onclick="return getValue('product_2','2',36.33);" >
								<input type="image" src="images/button02.png">
							</div>
							<div id="hiddenbutton2" style="display:none;">
								<input type="image" src="images/button02-clicked.png">
							</div>
						</div>
						 <div>
							<div id="button3" onclick="return getValue('product_3','3',50.00);" >
								<input type="image" src="images/button03.png" >
							</div>
							<div id="hiddenbutton3" style="display:none;">
								<input type="image" src="images/button03-clicked.png" >
							</div>
						</div>
                                        
                                </div>
                                <div  class="checkoutWords">
                                    
                                  <div class="cpayments">
                                        <div class="padclass">
                                            <div class="LeftWidth">
                                                <b>Shipping Type:</b>
                                            </div>
                                            <div style="float:right;">
                                                <span id="ship" style="font-weight:800">FREE </span>Priority Shipping
                                            </div> 
                                        </div>
                                        <div class="padclass">
                                             <div class="LeftWidth">
                                                <b>Shipping Price:</b>
                                            </div>
                                            <div style="float:right;font-weight:800;">
                                                $<span id="shippingandhandling">0.00</span>
                                            </div> 
                                        </div>
                                        <div class="padclass">
                                             <div class="LeftWidth">
                                                 <b>Your Total:</b>
                                            </div>
                                            <div style="float:right;font-weight:800;">
                                                $<span id="subtotal">159.04</span>
                                            </div> 
                                        </div>
                                        <div class="padclass">
                                            <div class="LeftWidth">
                                                <b>Your Price Today</b>
                                            </div>
                                            <div style="float:right;">
                                                You Save: $<span id="savetotal">159.04</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div id="right">
                                <div  class="formInput">
								<?php if(isset($_GET['error_message'])) { echo '<div style="color:#FF0000 ">' . $_GET['error_message'] . '</div>'; } ?>
                                    <form accept-charset='ISO-8859-1' enctype='application/x-www-form-urlencoded;charset=ISO-8859-1' name='opt_in_form' id='opt_in_form' action='https://www.alphacontactcenter.com/index.php?main_page=two_step_form_processor' method='post'><table cellpadding=5px cellspacing=5px style="width:350px;color:#fff;">
									<input type='hidden' name='limelight_charset' id='limelight_charset' value='ISO-8859-1'/>
									<input type='hidden' name = 'product_name' id='product_name' value= "VPXS02LDRP" />
									<input type="hidden" id="custom_product" name="custom_product" value="45" />
									<input type="hidden" id="custom_product_price" name="custom_product_price" value="159.0400"/>									
									<input type="hidden" id="extra" name="extra" value="159.04"/>									
									<input type="hidden" id="shipping" name="shipping" value="35"/>									
									
									<tr>
									  <td colspan=2>Is your billing address the same as this shipping address?</td>
									</tr>
									<tr>
									  <td></td>
									  <td>
										<div class="question1">
										  <input id="radioOne" onclick="toggleBillingAddress(this)" type="radio" name="billingSameAsShipping" value="yes" checked>Yes
										  <input id="radioTwo" onclick="toggleBillingAddress(this)" type="radio" name="billingSameAsShipping" value="no" >No
										</div>
									  </td>
									</tr>
									<tr>
									  <td colspan=2 align="right">
										<div style="display:none" id="billingDiv">
										  <table cellpadding="5px" cellspacing="5px" style="width:350px;color:#fff;">
											<tr>
											  <td width="130px" align="right"><label for="billing_fname">Billing First Name:</label></td>
											  <td><input type="text" id="billing_fname" name="billing_fname" value=""/></td>
											</tr>
											<tr>
											  <td width="130px" align="right"><label for="billing_lname">Billing Last Name:</label></td>
											  <td><input type="text" id="billing_lname" name="billing_lname" value=""/></td>
											</tr>
											<tr>
											  <td width="130px" align="right"><label for="billing_street_address">Billing Address:</label></td>
											  <td><input type="text" id="billing_street_address" name="billing_street_address" value=""/></td>
											</tr>
											<!--tr>
											  <td width="115px" align="right"><label for="billing_street_address2">Billing Address 2:</label></td>
											  <td><input type="text" id="billing_street_address2" name="billing_street_address2" value=""/></td>
											</tr-->
											<tr>
											  <td align="right"><label for="billing_city">Billing City:</label></td>
											  <td><input type="text" id="billing_city" name="billing_city" value=""/></td>
											</tr>
											<tr>
											  <td align="right"><label for="billing_postcode">Billing Zip:</label></td>
											  <td><input type="text" id="billing_postcode" name="billing_postcode" value=""/></td>
											</tr>                        <tr>
											  <td align="right"><label for="billing_state" id="billing_state_region">Billing State:</label></td>
											  <td>
												<span id="billing_state_cus1">
												  
											<div class="select-outer" style=";width:184px;" onclick="">
											   <div class="select-inner" style="">
												  <select border="0"  class="input" id="billing_state" style="" name="billing_state"  size="1" onchange="SetStateHid(this);" >
											<option value="" onclick="" >Select State</option>
											<option value="AL" onclick="" >Alabama (AL)</option>
											<option value="AK" onclick="" >Alaska (AK)</option>
											<option value="AS" onclick="" >American Samoa (AS)</option>
											<option value="AZ" onclick="" >Arizona (AZ)</option>
											<option value="AR" onclick="" >Arkansas (AR)</option>
											<option value="AE-A" onclick="" >Armed Forces Africa (AE)</option>
											<option value="AA" onclick="" >Armed Forces Americas (AA)</option>
											<option value="AE-C" onclick="" >Armed Forces Canada (AE)</option>
											<option value="AE-E" onclick="" >Armed Forces Europe (AE)</option>
											<option value="AE-M" onclick="" >Armed Forces Middle East (AE)</option>
											<option value="AP" onclick="" >Armed Forces Pacific (AP)</option>
											<option value="CA" onclick="" >California (CA)</option>
											<option value="CO" onclick="" >Colorado (CO)</option>
											<option value="CT" onclick="" >Connecticut (CT)</option>
											<option value="DE" onclick="" >Delaware (DE)</option>
											<option value="DC" onclick="" >District of Columbia (DC)</option>
											<option value="FM" onclick="" >Federated States of Micronesia (FM)</option>
											<option value="FL" onclick="" >Florida (FL)</option>
											<option value="GA" onclick="" >Georgia (GA)</option>
											<option value="GU" onclick="" >Guam (GU)</option>
											<option value="HI" onclick="" >Hawaii (HI)</option>
											<option value="ID" onclick="" >Idaho (ID)</option>
											<option value="IL" onclick="" >Illinois (IL)</option>
											<option value="IN" onclick="" >Indiana (IN)</option>
											<option value="IA" onclick="" >Iowa (IA)</option>
											<option value="KS" onclick="" >Kansas (KS)</option>
											<option value="KY" onclick="" >Kentucky (KY)</option>
											<option value="LA" onclick="" >Louisiana (LA)</option>
											<option value="ME" onclick="" >Maine (ME)</option>
											<option value="MD" onclick="" >Maryland (MD)</option>
											<option value="MA" onclick="" >Massachusetts (MA)</option>
											<option value="MI" onclick="" >Michigan (MI)</option>
											<option value="MN" onclick="" >Minnesota (MN)</option>
											<option value="MS" onclick="" >Mississippi (MS)</option>
											<option value="MO" onclick="" >Missouri (MO)</option>
											<option value="MT" onclick="" >Montana (MT)</option>
											<option value="NE" onclick="" >Nebraska (NE)</option>
											<option value="NV" onclick="" >Nevada (NV)</option>
											<option value="NH" onclick="" >New Hampshire (NH)</option>
											<option value="NJ" onclick="" >New Jersey (NJ)</option>
											<option value="NM" onclick="" >New Mexico (NM)</option>
											<option value="NY" onclick="" >New York (NY)</option>
											<option value="NC" onclick="" >North Carolina (NC)</option>
											<option value="ND" onclick="" >North Dakota (ND)</option>
											<option value="MP" onclick="" >Northern Mariana Islands (MP)</option>
											<option value="OH" onclick="" >Ohio (OH)</option>
											<option value="OK" onclick="" >Oklahoma (OK)</option>
											<option value="OR" onclick="" >Oregon (OR)</option>
											<option value="PA" onclick="" >Pennsylvania (PA)</option>
											<option value="PR" onclick="" >Puerto Rico (PR)</option>
											<option value="MH" onclick="" >Republic of Marshall Islands (MH)</option>
											<option value="RI" onclick="" >Rhode Island (RI)</option>
											<option value="SC" onclick="" >South Carolina (SC)</option>
											<option value="SD" onclick="" >South Dakota (SD)</option>
											<option value="TN" onclick="" >Tennessee (TN)</option>
											<option value="TX" onclick="" >Texas (TX)</option>
											<option value="UT" onclick="" >Utah (UT)</option>
											<option value="VT" onclick="" >Vermont (VT)</option>
											<option value="VI" onclick="" >Virgin Islands of the U.S. (VI)</option>
											<option value="VA" onclick="" >Virginia (VA)</option>
											<option value="WA" onclick="" >Washington (WA)</option>
											<option value="WV" onclick="" >West Virginia (WV)</option>
											<option value="WI" onclick="" >Wisconsin (WI)</option>
											<option value="WY" onclick="" >Wyoming (WY)</option></select>
											   </div>
											</div>

													</span>
													<input type="text" id="billing_state_hid" name="billing_state_hid" style="display: none;"/>
												  </td>
												</tr>
											  </table>
											</div>
										  </td>
									</tr>
										
										
									
										<tbody id="cc_type_tr">
											<tr><td align="right">
											<label for="cc_type"> Payment Type:</label></td>
											<td>
												<select  onchange="payment_change(this)" onkeydown="this.onchange();" onkeyup="this.onchange();"  id="cc_type" name="cc_type" class="input" >
												<option value="">Select Payment Method</option><option value = "visa" >Visa</option>
												<option value = "master" >Master Card</option><option value = "discover" >Discover</option>
												</select>
											</td>
											</tr>
										</tbody>
										  <tbody id='cc_number_tr'>
										  <tr>
												<td width="130px" align="right"><label for='cc_number'>Credit Card Number:</label>
												</td>

												<td align="left">
												 <!-- thm_session_id used for threat matrix integration with NMI -->
													 <input type="hidden" id="thm_session_id" name="thm_session_id" value=""/>

													 <input type="text" maxlength="16" onkeydown="return onlyNumbers(event,'cc')" id="cc_number" name="cc_number" autocomplete="off"/>
												</td>
										  </tr>
										  </tbody>
						<tbody id="cc_expires_tr"><tr><td align="right"><label for="cc_expires"> Exp. Date:</label></td>
									   <td><select name="fields_expmonth" onchange="javascript:update_expire()" id="fields_expmonth" style="width:85px;"><option  selected  value="">Month</option>
						<option  value="01">(01) January</option>
						<option  value="02">(02) February</option>
						<option  value="03">(03) March</option>
						<option  value="04">(04) April</option>
						<option  value="05">(05) May</option>
						<option  value="06">(06) June</option>
						<option  value="07">(07) July</option>
						<option  value="08">(08) August</option>
						<option  value="09">(09) September</option>
						<option  value="10">(10) October</option>
						<option  value="11">(11) November</option>
						<option  value="12">(12) December</option>

									   </select>&nbsp;&nbsp;
									   <select name="fields_expyear" onchange="javascript:update_expire()" id="fields_expyear" class="input1"><option  value='14'>2014</option><option  value='15'>2015</option><option  value='16'>2016</option><option  value='17'>2017</option><option  value='18'>2018</option><option  value='19'>2019</option><option  value='20'>2020</option><option  value='21'>2021</option><option  value='22'>2022</option><option  value='23'>2023</option><option  value='24'>2024</option><option  value='25'>2025</option><option  value='26'>2026</option></select></td></tr></tbody><input type="hidden" id="cc_expires" name="cc_expires" /> <tbody id='cc_cvv_tr'><tr><td align="right"><label for='cc_cvv'>Security Code:</label></td>
						<td align="left"><input  autocomplete="off"  type="text" id="cc_cvv" name="cc_cvv" /></td></tr></tbody>
						<tr><td><input type='hidden' name = 'step' value='second' />
						<input type='hidden' name = 'temp_order_id' value='<?php echo $_GET["tempOrderId"];?>' /></td></tr>
						<input type='hidden' id='hasFormSubmitted' value='' /><input type='hidden' name='campaign_id' id='campaign_id' value='59' /></td></tr>

							  <input type="hidden" id="isWebForm" value="1"/>
							  
						   <input type='hidden' name='is_upsell' value='0'>
						<?php
						   foreach($_GET as $key => $value) {
							  echo "<input type='hidden' name='".safeRequest($key)."' value='".safeRequest($_GET[$key])."'>";
						   }
						?>

								 <tr>
									<td></td><td></td>
								 </tr>
								
				
						  
						   </table>
						    <input class="checkbox" type="checkbox" id="customField1" name="customField1" checked><span class="f11">  

                                            I agree to the <a href="http://tryvictorejuice.com/terms.html" target="_blank" style="color:#ff000">terms & conditions</a> and <a href="terms.php">privacy policy</a>.

                                        </span></br>
							  <input class="checkbox" type="checkbox" id="customField2" name="customField2" checked>
							  <span class="f11">

                                               I acknowledge that I am over 18 and agree to comply with all state, local and federal laws. 

                                        </span>
						    <input type='button' value='' onclick='form_validator();'>
						   </form>
                                        <div class="textCenter">
                                            <span class="f12">
                                            100% SECURE AND SAFETRANSACTIONS
                                            </span><br/><br/>
                                            <img src="images/tag.png">
                                        </div>
                                    </div>
                            </div>                 
                        </div>
                        <div class="checkoutPay">
                            
                            <div class="footer">
                                <a href="http://ecigsejuices.com/terms.html" target="_blank">[ Terms & Conditions ]</a> <a href="http://ecigsejuices.com/contact.php" target="_blank">[ Contact Us]</a> | Toll 800-554-8353<br/><br/>

													Ecig & Ejuice<br/>  
                                                    2734 South 3600 West<br/>
													Ste K<br/>
													SLC, UT 84119<br/><br/>

                                                    Copyright &copy 2014. Ecig & Ejuice. All Rights Reserved<br/><br/>

                                                    If you are under the age of 18 (or under the age of 19 and you live in Alabama, Alaska, New Jersey, Utah and New York) please leave this Site immediately. By entering this Site, you represent that you are at least 18 years of age, or 19 in those jurisdictions mentioned above. PLEASE NOTE that IF YOU ARE A RESIDENT OF OREGON, YOU MAY NOT PURCHASE THE PRODUCT. The Product is not intended as a "stop smoking" or "quit smoking" device; instead the Product provides an alternative to smoking by supplying nicotine through a personal atomizing device. Nicotine, even in low doses, can have a number of potentially harmful side effects. The Product should not be used by anyone under the age of 18 or anyone who is pregnant, nursing, or breastfeeding. Information and statements regarding product have not been evaluated by the Food and Drug Administration and are not intended to diagnose, treat, cure or prevent any disease.
                                                    <br/><br/>
                                                   
                            </div>
                        </div>
