<section id="ContactSec" class="ContactSec beforeContainer">
				
				<div class="uk-container ContainerCustom">
					<div uk-grid="">
						<div class="uk-width-expand tmTull">
							<div class="mdl">
								<div class="mdl_inner">
									<div class="contactTxt">
										<h3 class="AnimFade">Looking for designs? <br>
											Let’s talk!</h3>
										<p class="AnimFade"> Let’s make something amazing together! </p>
									</div>
								</div>
							</div>
						</div>
						<div class="uk-width-auto tmTull">
							
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
							<form id="contactform" class="ContactForm validated"
								uk-scrollspy="cls:uk-animation-fade; delay: 300">
								<div class="uk-grid-small" uk-grid="">
									<div class="uk-width-1-1">
										<div class="ContactFld mb">
											<h3>Talk to an expert</h3>
											<p>Share you details so that our representative can contact you</p>
										</div>
									</div>
									<div class="uk-width-1-1">
										<div class="ContactFld mb">
											<input class="uk-input" name="firstname" id="firstname" type="text"
												onkeydown="return /[a-z ]/i.test(event.key)" placeholder="Full name*"
												required />
										</div>
									</div>

									<div class="uk-width-1-1">
										<div class="ContactFld mb">
											<input class="uk-input" name="workemail" id="workemail" type="email"
												placeholder="Email*" required />
										</div>
									</div>

									<div class="uk-width-1-2">
										<div class="ContactFld mb">
											<input class="uk-input" name="company" id="company" type="text"
												placeholder="Company*" required />
										</div>
									</div>

									<div class="uk-width-1-2">
										<div class="ContactFld mb">
											<input class="uk-input" name="website" id="website" onblur="checkURL(this)"
												type="url" placeholder="Website*" />
										</div>
									</div>


									<div class="uk-width-1-1">
										<div class="ContactFld mb custom-btn" id="selectInterest">
											<div class="wrapper">
												<button type="button" class="form-control toggle-next ellipsis">Provide
													Services</button>

												<div class="checkboxes" id="interestedin">
													<div class="inner-wrap">
														<label>
															<input type="checkbox" name="interestedin[]"
																value="BerryTalks" class="ckkBox val" />
															<span>BerryTalks</span>
														</label><br>

														<label>
															<input type="checkbox" name="interestedin[]"
																value="Call Center Solution" class="ckkBox val" />
															<span>Call Center Solution</span>
														</label><br>

														<label>
															<input type="checkbox" name="interestedin[]"
																value="Data Analytics" class="ckkBox val" />
															<span>Data Analytics</span>
														</label><br>

														<label>
															<input type="checkbox" name="interestedin[]"
																value="Digital Marketing" class="ckkBox val" />
															<span>Digital Marketing</span>
														</label><br>

														<label>
															<input type="checkbox" name="interestedin[]"
																value="Missed Call Solution" class="ckkBox val" />
															<span>Missed Call Solution</span>
														</label><br>

														<label>
															<input type="checkbox" name="interestedin[]"
																value="Mobile Advertising" class="ckkBox val" />
															<span>Mobile Advertising</span>
														</label><br>

														<label>
															<input type="checkbox" name="interestedin[]"
																value="Mobile Application Development"
																class="ckkBox val" />
															<span>Mobile Application Development</span>
														</label><br>

														<label>
															<input type="checkbox" name="interestedin[]"
																value="Online Streaming Services" class="ckkBox val" />
															<span>Online Streaming Services</span>
														</label><br>

														<label>
															<input type="checkbox" name="interestedin[]"
																value="OTT Platform" class="ckkBox val" />
															<span>OTT Platform</span>
														</label><br>

														<label>
															<input type="checkbox" name="interestedin[]"
																value="Product Development" class="ckkBox val" />
															<span>Product Development</span>
														</label><br>

														<label>
															<input type="checkbox" name="interestedin[]"
																value="Search Engine Optimization" class="ckkBox val" />
															<span>Search Engine Optimization</span>
														</label><br>

														<label>
															<input type="checkbox" name="interestedin[]"
																value="SMS Marketing" class="ckkBox val" />
															<span>SMS Marketing</span>
														</label><br>

														<label>
															<input type="checkbox" name="interestedin[]"
																value="Software Development" class="ckkBox val" />
															<span>Software Development</span>
														</label><br>

														<label>
															<input type="checkbox" name="interestedin[]"
																value="Voice Broadcasting" class="ckkBox val" />
															<span>Voice Broadcasting</span>
														</label><br>

														<label>
															<input type="checkbox" name="interestedin[]"
																value="Whatsapp Business API" class="ckkBox val" />
															<span>Whatsapp Business API</span>
														</label><br>

														<label>
															<input type="checkbox" name="interestedin[]" value="Other"
																class="ckkBox val" />
															<span>Other</span>
														</label><br>

													</div>
												</div>
											</div>
										</div>

									</div>

									<div class="uk-width-1-1">
										<div class="ContactFld mb">
											<textarea class="uk-input" name="message" id="message"
												placeholder="Message*" required></textarea>
										</div>
									</div>

									<select style="display: none;" id="address-country"></select>



									<div style="width: 100%; text-align: center;">
										<div style="display: inline-block;">
											<input name="lead_url" id="lead_url" type="hidden" value="home"
												type="hidden" />


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

						</div>
					</div>
				</div>
			</section>