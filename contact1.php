<?php


	$contact="		<div id='contactWrap'>
					<div class='overlay'>
						<div class='container'>
							<div class='row'>
									<div class='col-xs-12'>
									<h2 class='sectionTitle'>Contact us</h2>
								</div>
							</div>
							<div class='row'>
								<div class='col-xs-12 text-center'>
									<div class='blurb'>
									Want to chat? Send us a message. We'd love to hear from you!</br> (We Reply Typically Within 1 Hour)
									</div>
								</div>
							</div>
							
							
							
							<form action ='contact2.php' method='post' >
						
						<div class='col-sm-10  col-sm-offset-1'>
						
						<h4 style='text-align:center;'>Please note that fields asterisked <span class='red'>*</span> red are compulsory</h3>

						<div class='col-sm-6'>
							<div class='inputContainer'>
							<label>Surname<span class='red'>*</span></label>
								<input type='text' name='surname' id='surname' class='form-control' autocomplete='off' max-length='20' placeholder='20 Letters max' required/>
							</div>
						</div>
						<div class='col-sm-6'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Lastname<span class='red'>*</span></label>
								<input type='text' name='lastname' id='lastname' class='form-control' autocomplete='off' max-length='20' placeholder='20 Character Max' required/>
							</div>
						</div>
						<div class='col-sm-6'>
							<div class='inputContainer'>
							<label>Email<span class='red'>*</span></label>
								<input type='email' name='email' id='contactEmail' class='form-control' autocomplete='off' max-length='50' placeholder='Email' required />
							</div>
						</div>
						<div class='col-sm-6'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Phone No<span class='red'>*</span></label>
								<input type='tel' name='phone' id='phone' value='' class='form-control' autocomplete='off' max-length='13' placeholder='' required />
							</div>
						</div>
						<div class='col-sm-12'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Address</label>
								<textarea  name='address' id='address' class='form-control formdetail' autocomplete='off'></textarea>
							</div>
						</div>
						<div class='col-sm-12'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Message</label>
								<textarea  name='comments' id='commentText' class='form-control' autocomplete='off'></textarea>
							</div>
						</div>
						<div class='col-sm-8 col-sm-offset-2'></br>
							<button name='submit' type='submit'  class='btn btn-primary btn-lg'>Send</button>
						</div>
						</div>
						</form>
					
							
							
							
						</div>
					</div>
				</div> <!-- /contactWrap -->
				";

?>