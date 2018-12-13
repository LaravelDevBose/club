
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Arup-->
<!-- * Date: 12/13/2018-->
<!-- * Time: 11:15 AM-->
<!-- */-->

<div class="main_wrapper wrapper_navigation  <?= ($content == 'index')? 'nc_home_1' : ''?> ">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-3">
				<div class="nc_logo">
					<a href="<?= base_url()?>">
						<img src="<?= base_url()?>assets/frontEnd/images/logo.png" alt="logo" style="height: 55px; width: 100%">
					</a>
				</div>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-9" id="navigation_main">
				<div class="navigation_main">
					<div class="navbar_header">
						<div class="navbar_toggle">
							<i></i>
							<i></i>
							<i></i>
						</div>
					</div>
					<div class="nc_navigations">
						<ul class="menu">
							<li class="active"><a href="<?= base_url()?>">home</a></li>
							<li><a href="#">About Club</a>
								<ul class="sub-menu">
									<li><a href="<?= base_url('article_of_association')?>">Article of Association</a></li>
									<li><a href="<?= base_url('first_founder_message')?>">First Founder Message</a></li>
									<li><a href="<?= base_url('precedent_message')?>">Precedent Message</a></li>
									<li><a href="<?= base_url('secretary_message')?>">Secretary Message</a></li>
									<li><a href="<?= base_url('cord_of_conduct')?>">Cord of conduct</a></li>
								</ul>
							</li>
							<li><a href="#">Members</a>
								<ul class="sub-menu">
									<li><a href="<?= base_url('executive_committee')?>">Executive Committee</a></li>
									<li><a href="<?= base_url('working_committee')?>">Working Committee</a></li>
									<li><a href="<?= base_url('members')?>">Members</a></li>
								</ul>
							</li>
							<li><a href="#">Facilities</a>
								<ul class="sub-menu">
									<li><a href="<?= base_url('family_louche')?>">Family Louche</a></li>
									<li><a href="<?= base_url('party_louche')?>">Party Louche</a></li>
									<li><a href="<?= base_url('gaming_zone')?>">Gaming Zone</a></li>
									<li><a href="<?= base_url('lib_payer_room')?>">Library & Payer Room</a></li>
									<li><a href="<?= base_url('movie_room')?>">Movie Room</a></li>
									<li><a href="<?= base_url('affiliation')?>">Affiliation</a></li>
								</ul>
							</li>
							<li><a href="#">Event & News</a>
								<ul class="sub-menu">
									<li><a href="<?= base_url('upcoming_event')?>">Upcoming Event</a></li>
									<li><a href="<?= base_url('current_event')?>">Current Event</a></li>
								</ul>
							</li>
							<li><a href="<?= base_url('gallery')?>">Gallery</a></li>
							<li><a href="#">Contact Us</a>
								<ul class="sub-menu">
									<li><a href="<?= base_url('contact_us')?>">Contact Us</a></li>
									<li><a href="<?= base_url('member_account')?>">Member Account</a></li>
								</ul>
							</li>
						</ul>
					</div><!--  navigation -->
				</div>
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> <!-- wrapper navigaion -->


