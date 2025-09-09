


<?php
$pageTitle = "VisionTech | Contact Us";
$pageDescription = "Welcome to VisionTech, your trusted partner for innovative web solutions.";
$pageKeywords = "web development, IT services, software solutions";
include 'header.php';
?>



<div class="ContactPage">
	<!-- First Section Start -->
	<section class="ContactSec beforeContainer">
		<img class="before" src="images/clouddev/contactbg.jpg" />
		<div class="uk-container ContainerCustom">
			<div uk-grid="">
				<div class="uk-width-expand">
					<div class="mdl">
						<div class="mdl_inner">
							<div class="contactTxt">
								<h3 uk-scrollspy="cls:uk-animation-fade; delay: 500">Need help with a project? <br> Let’s talk!</h3>
								<p uk-scrollspy="cls:uk-animation-fade; delay: 1000">Get support on a large platform, flesh out your first MVP, go from concept to investment, or take your startup to the next level. Our process wraps around your unique business needs.</p>
								<div class="ContactAddress">
									<div uk-grid="" uk-scrollspy="cls:uk-animation-fade; delay: 1300">
										
										<div class="uk-width-1-2">
											<address>
				                                <p><strong>US</strong></p>
				                                <p>17343 Meadow Heights Dr, Houston TX 77095</p>
				                                <p><a href="callto:+18333363786">+1 (833) 336-3786</a></p>
				                            </address>
										</div>
										<div class="uk-width-1-2">
											<address>
												<p><strong>Pakistan</strong></p>
												<p>The Exchange Tower, Pl #187, Business Bay, Dubai.</p>
												<p><a href="callto:+971582070258">+971 58 207 0258</a></p>
											</address>
										</div>
										<div class="uk-width-1-2">
											<address>
												<p><strong>Pakistan</strong></p>
												<p>Ibrahim Trade Tower, #803, Shahrah-e-Faisal, Karachi.</p>
												<p><a href="callto:+922134327749">+92 21 34327748-49</a><br>
                        							<a href="mailto:info@visiontech.com">info@visiontech.com</a></p>
											</address>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="uk-width-auto">
					<!-- <link rel="stylesheet" href="https://phpcoder.tech/multiselect/css/jquery.multiselect.css"> -->
<style>
    .toggle-next {
        border-radius: 0;
    }

    label {
        cursor: pointer;
    }

    .ellipsis {
        text-overflow: ellipsis;
        width: 100%;
        white-space: nowrap;
        overflow: hidden;
        background: transparent;
        height: 40px;
        text-align: left;
        border: 1px solid #ccc;
        border-radius: 7px;
        color: #86868b;
    }

    .apply-selection {
        display: none;
        width: 100%;
        margin: 0;
        padding: 5px 10px;
        border-bottom: 1px solid #ccc;
    }

    .apply-selection .ajax-link {
        display: none;
    }

    .checkboxes {
        margin: 0;
        display: none;
        border: 1px solid #ccc;
        border-top: 0;
    }

    .checkboxes .inner-wrap {
        padding: 5px 10px;
        max-height: 140px;
        overflow: auto;
    }

    .ContactFld .uk-input {
        border: 1px solid #ccc;
        border-radius: 7px;
    }

    .iti.iti--allow-dropdown {
        border: 1px solid #ccc;
        height: 40px;
        border-radius: 7px;
    }

    input#phonenumber {
        border: none;
        height: 29px;
    }

    .ContactFld.mb {
        margin-bottom: 0px;
    }

    .ContactForm {
        -webkit-clip-path: none;
        clip-path: none;
        padding: 40px 34px 40px;
    }

    textarea#message {
        padding: 6px;
    }

    form#contactform {
        border-radius: 30px;
    }

    .ContactFld h3 {
        font-weight: 500;
        margin: 0;
    }

    .ContactFld p {
        margin: 0;
        font-size: 15px;
        line-height: 20px;
    }
</style>
<form id="contactform" class="ContactForm validated" uk-scrollspy="cls:uk-animation-fade; delay: 300">
    <div class="uk-grid-small" uk-grid="">
        <div class="uk-width-1-1">
            <div class="ContactFld mb">
                <h3>Talk to an expert</h3>
                <p>Share you details so that our representative can contact you</p>
            </div>
        </div>
        <div class="uk-width-1-1">
            <div class="ContactFld mb">
                <input class="uk-input" name="firstname" id="firstname" type="text" onkeydown="return /[a-z ]/i.test(event.key)" placeholder="Full name*" required />
            </div>
        </div>

        <div class="uk-inline uk-width-1-1">
            <div class="ContactFld mb">
                <input class="uk-input" id="phonenumber" maxlength="15" onkeypress="return isNumber(event)" name="phonenumber" type="text" required>
            </div>

        </div>
        <div class="uk-width-1-1">
            <div class="ContactFld mb">
                <input class="uk-input" name="workemail" id="workemail" type="email" placeholder="Email*" required />
            </div>
        </div>

        <div class="uk-width-1-2">
            <div class="ContactFld mb">
                <input class="uk-input" name="company" id="company" type="text" placeholder="Company*" required />
            </div>
        </div>

        <div class="uk-width-1-2">
            <div class="ContactFld mb">
                <input class="uk-input" name="website" id="website" onblur="checkURL(this)" type="url" placeholder="Website*" />
            </div>
        </div>


        <div class="uk-width-1-1">
            <div class="ContactFld mb custom-btn" id="selectInterest">
                <div class="wrapper">
                    <button type="button" class="form-control toggle-next ellipsis">Provide Services</button>

                    <div class="checkboxes" id="interestedin">
                        <div class="inner-wrap">
                            <label>
                                <input type="checkbox" name="interestedin[]" value="BerryTalks" class="ckkBox val" />
                                <span>BerryTalks</span>
                            </label><br>
                          
                            <label>
                                <input type="checkbox" name="interestedin[]" value="Call Center Solution" class="ckkBox val" />
                                <span>Call Center Solution</span>
                            </label><br>

                            <label>
                                <input type="checkbox" name="interestedin[]" value="Data Analytics" class="ckkBox val" />
                                <span>Data Analytics</span>
                            </label><br>

                            <label>
                                <input type="checkbox" name="interestedin[]" value="Digital Marketing" class="ckkBox val" />
                                <span>Digital Marketing</span>
                            </label><br>

                            <label>
                                <input type="checkbox" name="interestedin[]" value="Missed Call Solution" class="ckkBox val" />
                                <span>Missed Call Solution</span>
                            </label><br>

                            <label>
                                <input type="checkbox" name="interestedin[]" value="Mobile Advertising" class="ckkBox val" />
                                <span>Mobile Advertising</span>
                            </label><br>

                            <label>
                                <input type="checkbox" name="interestedin[]" value="Mobile Application Development" class="ckkBox val" />
                                <span>Mobile Application Development</span>
                            </label><br>

                            <label>
                                <input type="checkbox" name="interestedin[]" value="Online Streaming Services" class="ckkBox val" />
                                <span>Online Streaming Services</span>
                            </label><br>

                            <label>
                                <input type="checkbox" name="interestedin[]" value="OTT Platform" class="ckkBox val" />
                                <span>OTT Platform</span>
                            </label><br>

                            <label>
                                <input type="checkbox" name="interestedin[]" value="Product Development" class="ckkBox val" />
                                <span>Product Development</span>
                            </label><br>

                            <label>
                                <input type="checkbox" name="interestedin[]" value="Search Engine Optimization" class="ckkBox val" />
                                <span>Search Engine Optimization</span>
                            </label><br>

                            <label>
                                <input type="checkbox" name="interestedin[]" value="SMS Marketing" class="ckkBox val" />
                                <span>SMS Marketing</span>
                            </label><br>

                            <label>
                                <input type="checkbox" name="interestedin[]" value="Software Development" class="ckkBox val" />
                                <span>Software Development</span>
                            </label><br>

                            <label>
                                <input type="checkbox" name="interestedin[]" value="Voice Broadcasting" class="ckkBox val" />
                                <span>Voice Broadcasting</span>
                            </label><br>

                            <label>
                                <input type="checkbox" name="interestedin[]" value="Whatsapp Business API" class="ckkBox val" />
                                <span>Whatsapp Business API</span>
                            </label><br>

                            <label>
                                <input type="checkbox" name="interestedin[]" value="Other" class="ckkBox val" />
                                <span>Other</span>
                            </label><br>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="uk-width-1-1">
            <div class="ContactFld mb">
                <textarea class="uk-input" name="message" id="message" placeholder="Message*" required></textarea>
            </div>
        </div>

        <select style="display: none;" id="address-country"></select>



        <div style="width: 100%; text-align: center;">
            <div style="display: inline-block;">
                <input name="lead_url" id="lead_url" type="hidden" value="contact-us" type="hidden" />


                <div id="contactrecaptcha" class="ContactCaptchaStyle"></div>

            </div>
        </div>

        <div class="uk-width-1-1">
            <div class="ContactFld">
                <button type="submit" class="submitBtn" id="submitBtnForm">Send</button>
                <!-- <button type="submit" class="submitBtn">Send</button> -->
            </div>
        </div>
    </div>
</form>

<!-- <input type="hidden" name="interestInChecker" id="interestInChecker" /> -->
<!-- This is the modal -->
<div id="ThankyouModal" class="uk-flex-top ThankyouModal" uk-modal="esc-close: false; bg-close: false">
    <div class="uk-modal-dialog uk-modal-body uk-text-center uk-margin-auto-vertical ">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title uk-text-success">Thanks for contacting us</h2>
        <p>Your query has been recorded and a representative will get in touch with you soon.</p>
        <div class="ContactFld">
            <button class="uk-modal-close submitBtn" type="button">Close <img src="images/closebtn.svg" uk-svg="" /></button>
        </div>
    </div>
</div>
<!-- This is the modal -->
<div id="ErrorContactModal" class="uk-flex-top ThankyouModal" uk-modal="esc-close: false; bg-close: false">
    <div class="uk-modal-dialog uk-modal-body uk-text-center uk-margin-auto-vertical ">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title uk-text-danger">Sorry</h2>
        <p>Your contact form is not submitted</p>
        <div class="ContactFld">
            <button class="uk-modal-close submitBtn DangerBtn" type="button">Close <img src="images/closebtn.svg" uk-svg="" /></button>
        </div>
    </div>
</div>

<div id="ErrorContactModalSelect" class="uk-flex-top ThankyouModal" uk-modal="esc-close: false; bg-close: false">
    <div class="uk-modal-dialog uk-modal-body uk-text-center uk-margin-auto-vertical ">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title uk-text-danger">Error</h2>
        <p>Please Select Interest First!</p>
        <div class="ContactFld">
            <button class="uk-modal-close submitBtn DangerBtn" type="button">Close <img src="images/closebtn.svg" uk-svg="" /></button>
        </div>
    </div>
</div>
<script src="../cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script>
    var $form = $("#contactform")
    $form.validate({
        rules: {
            firstname: {
                required: true,
            },
            phonenumber: {
                required: true,
            },
            workemail: {
                required: true,
            },
            company: {
                required: true,
            },
            website: {
                required: true,
            },
            interestedin: {
                required: true,
            },
            message: {
                required: true,
            },
            // submitHandler: function(form) {
            //     // form.submit();
            //     console.log("form submiteed");
            // }
        }
    });
</script>
<!-- <script src="https://phpcoder.tech/multiselect/js/jquery.multiselect.js"></script> -->
<!-- <script>
    jQuery('#interestedin').multiselect({
        columns: 1,

        // placeholder: 'Select Languages',
        search: true,
        placeholder: "Interested in",
        class: "test",
        includeSelectAllOption: true
    });
</script> -->
<script>
    $(document).ready(function() {
        $('.ms-options ul li').each(function() {
            $(this).addClass('interestInSelect');
        });
        $('.interestInSelect').click(function() {
            if ($('.custom-btn input:checkbox:checked').length > 0) {
                $("#selectInterest").css("border-bottom", "");
            } else {
                $("#selectInterest").css("border-bottom", "1px solid red");
            }
        });
        // $('input#interestInChecker').on('input',function(e){
        //     alert('Changed!')
        // });


        // var $val = $.fn.val;
        // $.fn.val = function(newVal,eventToTrigger) {
        // if (eventToTrigger != null) this.trigger(eventToTrigger);
        // $val.call(this, newVal);
        // }

        // $('#interestInChecker').on('input', function() {
        //     // alert("Programmatically inputted!");
        //     console.log($("#interestInChecker").val());
        // });

        // $('#interestInChecker').val($('.custom-btn input:checkbox:checked').length,'input');
    });

    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
    setTimeout(function() {
        var input = document.querySelector("#phonenumber");

        var countryData = window.intlTelInputGlobals.getCountryData(),
            addressDropdown = document.querySelector("#address-country");

        var iti = window.intlTelInput(input, {
            // allowDropdown: true,
            // autoHideDialCode: true,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            geoIpLookup: function(callback) {
                $.get("https://ipinfo.io/", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            hiddenInput: "full_number",
            initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['PK','us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            // utilsScript: "js/utils.js",

        });

        // populate the country dropdown
        for (var i = 0; i < countryData.length; i++) {
            var country = countryData[i];
            var optionNode = document.createElement("option");
            optionNode.value = country.name;
            var textNode = document.createTextNode(country.name);
            optionNode.appendChild(textNode);
            addressDropdown.appendChild(optionNode);
        }
        // set it's initial value
        addressDropdown.value = iti.getSelectedCountryData().name;

        // listen to the telephone input for changes
        input.addEventListener('countrychange', function(e) {
            addressDropdown.value = iti.getSelectedCountryData().name;
        });

        // listen to the address dropdown for changes
        addressDropdown.addEventListener('change', function() {
            iti.setCountry(this.value);
        });
    }, 2000)

    function checkURL(abc) {
        var string = abc.value;
        if (!~string.indexOf("http")) {
            string = "https://" + string;
        }
        abc.value = string;
        return abc
    }


    $("#contactform").submit(function() {
        console.log("contactform");
        $('#submitBtnForm').attr('disabled', 'disabled');
        $('#submitBtnForm').text("Processing");
        // let arrSelect = $('#interestedin').val();
        // let MultiSelect = "";
        // $.each(arrSelect, function(index, value) {
        //     MultiSelect += value + ",";
        // });
        // MultiSelect.replace(/,\s*$/, "");
        event.preventDefault();
        var firstname = $("#firstname").val();
        var workemail = $("#workemail").val();
        var company = $("#company").val();
        var website = $("#website").val();
        var phonenumber = $("#phonenumber").val();
        var country = $("#address-country").val();
        var message = $("#message").val();
        var lead_url = $("#lead_url").val();
        // var interestedin = MultiSelect;
        // var interestedinValues = $("input[name='interestedin']:checked").map(function() {
        // return this.value;
        // });
        // var topic = interestedinValues.join(',');
        // console.log('topic', topic)
        // console.log('avs', $("input[name='interestedin']:checked"));
        // console.log('Interested in values:', interestedin);

        var interestedinValues = [];
        $("input[name='interestedin[]']:checked").each(function() {
            interestedinValues.push($(this).val());
        });


        var servicesselect = interestedinValues.join(', ');


        var ipAddr = $("#ip_addr").val();
        // console.log(firstname, workemail, phonenumber, message, servicesselect, lead_url, country, company, website, "contactformA");
        var token = $("#g-recaptcha-response").val();
        // var interestCount = $("#interestedin").val();
        // $('.custom-btn input:checkbox:checked')


        console.log("+firstname"+firstname+"workemail"+workemail+"phonenumber"+phonenumber+"company"+company+"website"+website+"message"+message);

        if (firstname != "" && workemail != "" && phonenumber != "" && company != "" && website != "" && message != "") {
            $.post("functions.html", {
                firstname: firstname,
                workemail: workemail,
                company: company,
                website: website,
                phonenumber: phonenumber,
                country: country,
                message: message,
                lead_url: lead_url,
                interestedin: servicesselect,
                ipAddr: ipAddr,
                token: token
            }, function(result) {
                // console.log(result);
                $('#submitBtnForm').attr('disabled', false);
                $('#submitBtnForm').text("Send");
                if (result == 1) {
                    if (interestedin == '') {
                        $("#contactform")[0].reset();
                        window.grecaptcha.reset();
                        UIkit.modal('#ThankyouModal').show();
                    } else {
                        dataLayer.push({
                            'event': 'form_submission',
                            'interested_in': interestedin
                        });
                        $("#contactform")[0].reset();
                        $(".iti__flag-container").remove();
                        window.grecaptcha.reset();
                        $(".custom-btn button").text("Interested in");
                        var input = document.querySelector("#phonenumber");
                        var iti = window.intlTelInput(input, {
                            geoIpLookup: function(callback) {
                                $.get("https://ipinfo.io/", function() {}, "jsonp").always(function(resp) {
                                    var countryCode = (resp && resp.country) ? resp.country : "";
                                    callback(countryCode);
                                });
                            },
                            hiddenInput: "full_number",
                            initialCountry: "auto",
                        });
                        UIkit.modal('#ThankyouModal').show();
                    }

                } else {
                    $('#submitBtnForm').attr('disabled', false);
                    $('#submitBtnForm').text("Send");
                    UIkit.modal('#ErrorContactModal').show();
                    // $("#selectInterest").css("border-bottom", "1px solid red");
                }

            });
            console.log("PLease contact");
        } else {
            $('#submitBtnForm').attr('disabled', false);
            $('#submitBtnForm').text("Send");
            $("#selectInterest").css("border-bottom", "1px solid red");
            // UIkit.modal('#ErrorContactModalSelect').show();
        }

    });

    $(function() {

        setCheckboxSelectLabels();

        $('.toggle-next').click(function() {
            $(this).next('.checkboxes').slideToggle(400);
        });

        $('.ckkBox').change(function() {
            toggleCheckedAll(this);
            setCheckboxSelectLabels();
        });

    });

    function setCheckboxSelectLabels(elem) {
        var wrappers = $('.wrapper');
        $.each(wrappers, function(key, wrapper) {
            var checkboxes = $(wrapper).find('.ckkBox');
            var label = $(wrapper).find('.checkboxes').attr('id');
            var prevText = '';
            $.each(checkboxes, function(i, checkbox) {
                var button = $(wrapper).find('button');
                if ($(checkbox).prop('checked') == true) {
                    var text = $(checkbox).next().html();
                    var btnText = prevText + text;
                    var numberOfChecked = $(wrapper).find('input.val:checkbox:checked').length;
                    if (numberOfChecked >= 4) {
                        btnText = numberOfChecked + ' ' + label + ' selected';
                    }
                    $(button).text(btnText);
                    prevText = btnText + ', ';
                }
            });
        });
    }

    function toggleCheckedAll(checkbox) {
        var apply = $(checkbox).closest('.wrapper').find('.apply-selection');
        apply.fadeIn('slow');

        var val = $(checkbox).closest('.checkboxes').find('.val');
        var all = $(checkbox).closest('.checkboxes').find('.all');
        var ckkBox = $(checkbox).closest('.checkboxes').find('.ckkBox');

        if (!$(ckkBox).is(':checked')) {
            $(all).prop('checked', true);
            return;
        }

        if ($(checkbox).hasClass('all')) {
            $(val).prop('checked', false);
        } else {
            $(all).prop('checked', false);
        }
    }
</script>				</div>
			</div>
		</div>
	</section>
	<!-- First Section End -->
</div>



<?php include 'footer.php'; ?>