<style>
	.logged-out #vibe_bp_login {
		padding: 0;
	}

	.logged-out #vibe_bp_login:after {
		display: none;
	}



	.a2n-form_wrapper {
		padding: 0 38px 0 42px;
	}

	.logged-out #vibe_bp_login .popup_login #vbp-login-form {
		background: transparent;
		border: none;
		width: 100%;
		margin: 0;
		padding: 0;
		padding: 0 0px;
		height: auto;
		display: block;
		/* justify-content: center;
		align-items: center; */
	}

	.nxt_row_login {
		display: flex;
		background: #fff;
		width: 100%;
		max-width: 770px;
		height: 577px;
		border-radius: 10px;
		margin: 100px auto 0;
		position: relative;
		overflow: hidden;
	}

	.nxt-left-side {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		text-align: center;
		background: #000241;
	}

	@media (min-width: 768px) {
		.nxt-left-side {
			width: 330px;
		}

		.nxt-right-side {
			width: 57.5%;
		}
	}

	.nxt-left-side p {
		width: 270px;
		margin: 30px auto 40px;
		color: #fff;
		font-family: "Plus Jakarta Sans", sans-serif;
		font-size: 14px;
		font-weight: 400;
		line-height: 22px;
		text-transform: math-auto;
	}

	.a2n-mobile_content {
		display: none;
		padding: 37px 0;
	}

	.nxt-left-side .a2n-mobile_content p {
		text-shadow: 0px 0px 21.494px rgba(9, 47, 70, 0.10);
		font-weight: 500;
		line-height: normal;
		margin: 0 auto 10px;
	}

	.nxt-left-side .a2n-mobile_content a {
		color: #FFF;
		text-align: center;
		font-family: "Plus Jakarta Sans", sans-serif;
		font-size: 16px;
		font-style: normal;
		font-weight: 600;
		line-height: normal;
		border-radius: 21px;
		border: 1px solid #FFF;
		box-shadow: 0px 0px 21.494px 0px rgba(9, 47, 70, 0.10);
		display: flex;
		width: 155px;
		height: 38.91px;
		justify-content: center;
		align-items: center;
		margin: 0 auto;
		cursor: pointer;
		text-transform: capitalize;
	}

	.nxt-right-side {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
	}

	.a2n-form_wrapper .login_title {
		margin: 0;
		color: #2B354E;
		text-align: center;
		font-family: "IBM Plex Sans", sans-serif;
		font-size: 30px;
		font-style: normal;
		font-weight: 600;
		line-height: 38px;
		text-transform: none;
	}

	.a2n-form_wrapper .login_title font {
		color: #70479B;
	}

	.a2n-form_wrapper .login_desc {
		margin: 10px 0 12px;
		color: #667085;
		text-align: center;
		font-family: "Plus Jakarta Sans", sans-serif;
		font-size: 16px;
		font-style: normal;
		font-weight: 400;
		line-height: 24px;
		text-transform: none;
	}

	#vibe_bp_login input#sidebar-wp-submit,
	#vibe_bp_login .submit_registration_form {
		border-radius: 23px;
		background: #F26D21;
		display: flex;
		width: 100%;
		height: 44px;
		padding: 0 18px !important;
		justify-content: center;
		align-items: center;
		text-transform: none;
		font-family: "Plus Jakarta Sans", sans-serif;
		font-size: 16px;
		line-height: 24px;
		font-weight: 700;
		margin: 0 auto;
		border: 1px solid #F26D21;
		color: #fff;
		transition: all .3s ease;
	}

	#vibe_bp_login input#sidebar-wp-submit:hover,
	#vibe_bp_login .submit_registration_form:hover {
		background: transparent;
		color: #F26D21;
	}

	.logged-out #vibe_bp_login .popup_login #vbp-login-form .inside_login_form .inside input[type="text"],
	.logged-out #vibe_bp_login .popup_login #vbp-login-form .inside_login_form .inside input[type="password"] {
		background: #fff !important;
		width: 100%;
		height: 50px;
		flex-shrink: 0;
		padding: 0 22px;
		margin-bottom: 16px;
		border-radius: 23px;
		border: 1px solid #D0D5DD !important;
		color: #667085;
		font-family: "Plus Jakarta Sans", sans-serif;
		font-size: 14px;
		font-weight: 400;
		line-height: 24px;
		margin: 16px 0 0;
	}

	#vibe_bp_login .nxt-bottom-text {
		margin: 28px 0 0;
		text-transform: none;
		text-align: center;
		color: #667085;
		font-family: "Plus Jakarta Sans", sans-serif;
		font-size: 14px;
		font-style: normal;
		font-weight: 400;
		line-height: 20px;
	}


	#vibe_bp_login .nxt-bottom-text a {
		color: #70479B;
		font-weight: 500;
	}

	#vibe_bp_login ul {
		width: 100%;
		float: left;
		padding: 0;
	}

	.nxt-tc-text {
		color: #727272;
		font-family: 'Inter', sans-serif;
		font-size: 12px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
		text-transform: capitalize;
		text-align: center;
		margin-top: 15px;
	}

	.nxt-tc-text a {
		color: #70479B;
	}

	.logged-out #vibe_bp_login .popup_login #vbp-login-form .inside_login_form .inside {
		padding: 0;
		text-align: left;
	}

	.logged-out #vibe_bp_login .popup_login #vbp-login-form .inside_login_form .inside input[type="text"],
	.logged-out #vibe_bp_login .popup_login #vbp-login-form .inside_login_form .inside input[type="password"] {
		text-transform: capitalize;
	}

	.logged-out #vibe_bp_login .popup_login #vbp-login-form .inside_login_form {
		position: relative;
		overflow: hidden;
		-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
		box-shadow: none;
		letter-spacing: 1px;
	}

	#close_full_popup {
		position: absolute;
		top: 24px;
		right: 24px;
		cursor: pointer;
		z-index: 20;
	}

	.logged-out #vibe_bp_login .popup_login #vbp-login-form .inside_login_form .inside .tip,
	.logged-out #vibe_bp_login .popup_login #vbp-login-form .inside_login_form .inside label,
	#signup_form label {
		text-transform: capitalize !important;
	}

	.logged-out #vibe_bp_login .popup_login #vbp-login-form .inside_login_form .inside>label {
		display: none;
	}

	.logged-out #vibe_bp_login .popup_overlay {
		background: rgba(0, 0, 0, 0.50) !important;
	}

	.logged-out #vibe_bp_login .popup_login #vbp-login-form .inside_login_form .inside .tip {
		padding-top: 0px;
		color: #70479B;
		font-family: "Plus Jakarta Sans", sans-serif;
		font-size: 14px;
		font-weight: 500;
		line-height: 20px;
		margin: 20px 0 0;
	}

	.logged-out #vibe_bp_login .popup_login #vbp-login-form .inside_login_form .inside .checkbox {
		margin: 20px 0;
	}

	.logged-out #vibe_bp_login #vbp-login-form .checkbox label:before {
		border: 1px solid #D0D5DD;
		width: 16px;
		height: 16px;
		background: #FFFFFF;
	}

	.logged-out #vibe_bp_login #vbp-login-form .checkbox label:after {
		margin: 4px 0 0 2px;
	}

	.logged-out #vibe_bp_login #vbp-login-form .checkbox>input[type=checkbox]:checked+label:before {
		border-color: #70479B;
		background: #70479B;
	}

	.logged-out #vibe_bp_login .popup_login #vbp-login-form .inside_login_form .inside .checkbox label {
		font-family: "Plus Jakarta Sans", sans-serif;
		font-size: 14px;
		font-weight: 500;
		line-height: 20px;
		color: #2B354E;
	}

	#nxtSignUp {
		display: none;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 10;
		background: #fff;
		padding: 53px 22px;
	}

	#nxtSignUp.nxt_active {
		display: block;
	}

	.a2n-otherLog__options {
		margin-top: 16px;
	}

	#nxtSignUp .wplms_registration_form {
		margin-top: 40px;
	}

	#nxtSignUp .wplms_registration_form label,
	#nxtSignUp #field-visibility-settings-toggle-1 {
		display: none;
	}

	#nxtSignUp .wplms_registration_form ul li input {
		margin: 0 0 16px;
		background: #fff;
		border-radius: 23px;
		border: 1px solid #D0D5DD;
		padding: 0px 14px !important;
		color: #667085;
		font-family: "Plus Jakarta Sans", sans-serif;
		font-size: 15px;
		font-weight: 400;
		line-height: 24px;
		display: flex;
		justify-content: center;
		align-items: center;
		height: 44px;
	}

	#nxtSignUp .wplms_registration_form legend,
	#nxtSignUp .wplms_registration_form .field-visibility-settings-notoggle {
		color: #2B354E;
		font-family: "Plus Jakarta Sans", sans-serif;
		font-size: 15px;
		font-weight: 400;
		line-height: 24px;
		text-transform: none;
		border: 0;
		margin: 0 0 5px;
	}

	#nxtSignUp .wplms_registration_form .field-visibility-settings-notoggle {
		margin: 0;
		font-size: 12px;
	}

	#nxtSignUp .wplms_registration_form .bp-required-field-label,
	#nxtSignUp .wplms_registration_form .current-visibility-level {
		color: #fff;
	}

	@media screen and (max-width: 767px) {

		.logged-out #vibe_bp_login .popup_login {
			padding: 0px;
		}

		.nxt_row_login {
			margin: 0 auto;
			flex-direction: column;
			height: 670px;
		}

		.a2n-form_wrapper {
			padding: 30px 22px;
		}

		.a2n-desktop_content {
			display: none;
		}

		.a2n-mobile_content {
			display: block;
		}

		#close_full_popup svg path {
			fill: #fff;
		}

		.nxt_row_login:has(.nxt_active) #close_full_popup svg path {
			fill: #798294;
		}

		.a2n-form_wrapper .login_title {
			font-size: 26px;
			line-height: 30px;
		}

		.a2n-form_wrapper .login_desc {
			margin: 4px 0 0;
			font-size: 13px;
			line-height: 24px;
		}

	}
</style>
<script>
	// for signup
	function nxtTogglebtn(tabId) {
		const btn = document.getElementById(tabId);
		const closeButton = document.getElementById('close_full_popup');
		const nxtCloseButton = document.getElementById('nxtCloseBtn');
		btn.classList.add("nxt_active");

		nxtCloseButton.onclick = function () {
			btn.classList.remove("nxt_active");
		};
		closeButton.onclick = function () {
			setTimeout(function () {
				btn.classList.remove("nxt_active");
			}, 500);
		};
	}

</script>
<?php

if (is_user_logged_in()):
	do_action('bp_before_sidebar_me'); ?>
	<div id="sidebar-me">
		<div id="bpavatar">
			<?php bp_loggedin_user_avatar('type=full');
			$show_view_profile = apply_filters('wplms_sidebarme_show_view_profile', 1);
			?>
		</div>
		<ul>
			<li id="username"><a href="<?php bp_loggedin_user_link(); ?>"><?php bp_loggedin_user_fullname(); ?></a></li>
			<?php do_action('wplms_header_top_login'); ?>
			<?php if ($show_view_profile) { ?>
				<li><a href="<?php echo bp_loggedin_user_domain() . BP_XPROFILE_SLUG ?>/"
						title="<?php _e('View profile', 'vibe'); ?>"><?php _e('View profile', 'vibe'); ?></a></li>
			<?php } ?>
			<li id="vbplogout"><a href="<?php echo wp_logout_url(get_permalink()); ?>" id="destroy-sessions" rel="nofollow"
					class="logout" title="<?php _e('Log Out', 'vibe'); ?>"><i class="icon-close-off-2"></i>
					<?php _e('LOGOUT', 'vibe'); ?></a></li>
			<?php

			if (vibe_get_option('wp_admin_access') > 1) {
				?>
				<li id="admin_panel_icon">
					<?php if (current_user_can("edit_posts"))
						echo '<a href="' . vibe_site_url() . 'wp-admin/" title="' . __('Access admin panel', 'vibe') . '"><i class="icon-settings-1"></i></a>'; ?>
				</li>
				<?php
			}
			?>
		</ul>
		<ul>
			<?php
			$loggedin_menu = array(
				'courses' => array(
					'icon' => 'icon-book-open-1',
					'label' => __('Courses', 'vibe'),
					'link' => bp_loggedin_user_domain() . BP_COURSE_SLUG
				),
				'stats' => array(
					'icon' => 'icon-analytics-chart-graph',
					'label' => __('Stats', 'vibe'),
					'link' => bp_loggedin_user_domain() . BP_COURSE_SLUG . '/' . BP_COURSE_STATS_SLUG
				)
			);
			if (bp_is_active('messages')) {
				$loggedin_menu['messages'] = array(
					'icon' => 'icon-letter-mail-1',
					'label' => __('Inbox', 'vibe') . (messages_get_unread_count() ? ' <span>' . messages_get_unread_count() . '</span>' : ''),
					'link' => bp_loggedin_user_domain() . BP_MESSAGES_SLUG
				);
			}
			if (bp_is_active('notifications')) {
				$n = vbp_current_user_notification_count();
				$loggedin_menu['notifications'] = array(
					'icon' => 'icon-exclamation',
					'label' => __('Notifications', 'vibe') . (($n) ? ' <span>' . $n . '</span>' : ''),
					'link' => bp_loggedin_user_domain() . BP_NOTIFICATIONS_SLUG
				);
			}

			if (bp_is_active('groups')) {
				$loggedin_menu['groups'] = array(
					'icon' => 'icon-myspace-alt',
					'label' => __('Groups', 'vibe'),
					'link' => bp_loggedin_user_domain() . BP_GROUPS_SLUG
				);
			}

			$loggedin_menu['settings'] = array(
				'icon' => 'icon-settings',
				'label' => __('Settings', 'vibe'),
				'link' => bp_loggedin_user_domain() . BP_SETTINGS_SLUG
			);
			$loggedin_menu = apply_filters('wplms_logged_in_top_menu', $loggedin_menu);
			foreach ($loggedin_menu as $item) {
				echo '<li><a href="' . $item['link'] . '"><i class="' . $item['icon'] . '"></i>' . $item['label'] . '</a></li>';
			}
			?>
		</ul>

		<?php
		do_action('bp_sidebar_me'); ?>
	</div>
	<?php do_action('bp_after_sidebar_me');

	/***** If the user is not logged in, show the log form and account creation link *****/

else:
	if (!isset($user_login))
		$user_login = '';
	do_action('bp_before_sidebar_login_form'); ?>
	<div class="popup_overlay"></div>
	<div class="popup_login">

		<div class="nxt_row_login">
			<div class="nxt-left-side">
				<div class="a2n-desktop_content">
					<div class="nxt-left__img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="">
					</div>
					<p>Registering for this site is easy. Just fill in the fields below, and we’ll get a new account set up
						for
						you in on time.</p>
					<div class="nxt-left__img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/login.svg" alt="">
					</div>
				</div>
				<div class="a2n-mobile_content">
					<p>Not a member yet?</p>
					<a href="javascript:void(0)" onclick="nxtTogglebtn('nxtSignUp')">Sign Up</a>
				</div>
			</div>
			<div class="nxt-right-side">
				<a id="close_full_popup">
					<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
						<path
							d="M13 0C10.4288 0 7.91543 0.762436 5.77759 2.19089C3.63975 3.61935 1.97351 5.64967 0.989572 8.02511C0.00563274 10.4006 -0.251811 13.0144 0.249797 15.5362C0.751405 18.0579 1.98953 20.3743 3.80762 22.1924C5.6257 24.0105 7.94208 25.2486 10.4638 25.7502C12.9856 26.2518 15.5994 25.9944 17.9749 25.0104C20.3503 24.0265 22.3806 22.3602 23.8091 20.2224C25.2376 18.0846 26 15.5712 26 13C25.9959 9.55343 24.625 6.24919 22.1879 3.8121C19.7508 1.37501 16.4466 0.00406601 13 0ZM18.0133 16.3434C18.1262 16.4524 18.2162 16.5828 18.2781 16.727C18.3401 16.8712 18.3727 17.0262 18.374 17.1832C18.3754 17.3401 18.3455 17.4957 18.2861 17.6409C18.2266 17.7862 18.1389 17.9181 18.0279 18.0291C17.917 18.1401 17.785 18.2278 17.6398 18.2872C17.4945 18.3467 17.3389 18.3766 17.182 18.3752C17.0251 18.3738 16.87 18.3412 16.7258 18.2793C16.5816 18.2174 16.4512 18.1273 16.3422 18.0145L13 14.6711L9.65782 18.0145C9.43493 18.2297 9.1364 18.3489 8.82653 18.3462C8.51666 18.3435 8.22025 18.2192 8.00113 18.0001C7.78201 17.7809 7.65772 17.4845 7.65503 17.1747C7.65233 16.8648 7.77145 16.5663 7.98673 16.3434L11.3289 13L7.98673 9.65663C7.87386 9.54762 7.78382 9.41721 7.72188 9.27302C7.65995 9.12883 7.62734 8.97376 7.62598 8.81684C7.62462 8.65992 7.65452 8.50429 7.71394 8.35905C7.77336 8.21381 7.86112 8.08186 7.97208 7.9709C8.08305 7.85993 8.215 7.77218 8.36024 7.71276C8.50548 7.65333 8.6611 7.62343 8.81802 7.62479C8.97494 7.62616 9.13002 7.65876 9.27421 7.7207C9.4184 7.78263 9.5488 7.87267 9.65782 7.98554L13 11.3289L16.3422 7.98554C16.4512 7.87267 16.5816 7.78263 16.7258 7.7207C16.87 7.65876 17.0251 7.62616 17.182 7.62479C17.3389 7.62343 17.4945 7.65333 17.6398 7.71276C17.785 7.77218 17.917 7.85993 18.0279 7.9709C18.1389 8.08186 18.2266 8.21381 18.2861 8.35905C18.3455 8.50429 18.3754 8.65992 18.374 8.81684C18.3727 8.97376 18.3401 9.12883 18.2781 9.27302C18.2162 9.41721 18.1262 9.54762 18.0133 9.65663L14.6711 13L18.0133 16.3434Z"
							fill="#798294" />
					</svg>
				</a>

				<div class="a2n-form_wrapper">

					<form name="login-form" id="vbp-login-form" class="standard-form"
						action="<?php echo apply_filters('wplms_login_widget_action', site_url('wp-login.php', 'login_post')); ?>"
						method="post">
						<div class="inside_login_form">
							<h2 class="login_title">Login <font>Now</font>
							</h2>
							<p class="login_desc">Welcome back! Please enter your details.</p>
							<div class="inside">
								<?php do_action('bp_after_sidebar_login_form'); ?>
								<label for="log">Email</label>
								<input type="text" name="log" id="side-user-login"
									placeholder="<?php _e('Email', 'vibe'); ?>" class="input"
									value="<?php echo esc_attr(stripslashes($user_login)); ?>" />
								<label for="pwd">Password</label>
								<input type="password" name="pwd" id="sidebar-user-pass" class="input" value=""
									placeholder="<?php _e('Password', 'vibe'); ?>" />
								<a href="<?php echo wp_lostpassword_url(); ?>" class="tip vbpforgot"
									title="<?php _e('Forgot Password', 'vibe'); ?>"><?php _e('Forgot Password', 'vibe'); ?></a>
								<div class="checkbox small">
									<input type="checkbox" name="sidebar-rememberme" id="sidebar-rememberme"
										value="forever" /><label
										for="sidebar-rememberme"><?php _e('Remember Me', 'vibe'); ?></label>
								</div>
								<?php do_action('bp_sidebar_login_form'); ?>
							</div>
							<input type="submit" name="user-submit" id="sidebar-wp-submit"
								data-security="<?php echo wp_create_nonce('wplms_signon'); ?>"
								value="<?php _e('Sign in', 'vibe'); ?>" /><input type="hidden" name="user-cookie"
								value="1" />
						</div>
						<div class="a2n-otherLog__options">
							<?php do_action('login_form'); ?>
						</div>
					</form>

					<p class="nxt-bottom-text">
						Not a member yet? <a href="javascript:void(0)" onclick="nxtTogglebtn('nxtSignUp')">Sign Up</a>
					</p>
				</div>


			</div>
			<div id="nxtSignUp">
				<div class="a2n-form_wrapper">
					<h2 class="login_title">Sign Up <font>Now</font>
					</h2>
					<p class="login_desc">Please enter your registration details.</p>
					<?php echo do_shortcode('[wplms_registration_form name="signup_form" field_meta=1]');
					?>
					<p class="nxt-bottom-text">
						Already have an account? <a id="nxtCloseBtn" href="javascript:void(0)">Sign In</a>
					</p>
				</div>

			</div>

		</div>
	</div>


	<?php
endif;
?>