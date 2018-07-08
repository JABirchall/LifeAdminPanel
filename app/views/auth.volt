<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			PsiSyn Admin | Login
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>WebFont.load({google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},active: function() {sessionStorage.fonts = true;}});</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
				<div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
					<div class="m-stack m-stack--hor m-stack--desktop">
						<div class="m-stack__item m-stack__item--fluid">
							<div class="m-login__wrapper">
								<div class="m-login__logo">
									<a href="#">
										<img src="assets/app/media/img/logos/logo-2.png">
									</a>
								</div>
								<div class="m-login__signin">
									<div class="m-login__head">
										<h3 class="m-login__title">
											Sign In To Admin
										</h3>
									</div>

									{% if flashSession.has(['error']) %}
										{% for type, array in flashSession.getMessages() %}
											{% for message in array %}
												<div class="alert alert-danger alert-dismissible fade show   m-alert m-alert--air" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
													<strong>Authentication Error!</strong><br> {{ message }}
												</div>
											{% endfor %}
										{% endfor %}
									{% endif %}

									<form class="m-login__form m-form" action="/steamlogin" method="GET">
										<div class="m-login__form-action">
											<button href="/login" id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
												Sign In
											</button>
											<a href="javascript:" id="m_login_forget_password" class="m-link btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-btn--air">
												Can't Login?
											</a>
										</div>

									</form>
								</div>

								<div class="m-login__forget-password">
									<div class="m-login__head">
										<h3 class="m-login__title">
											Can't Login?
										</h3>
										<div class="m-login__desc">
											If you can not login contact a SM+ on TeamSpeak or Discord.
										</div>
									</div>

										<div class="m-login__form-action">
											<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
												Cancel
											</button>
										</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" style="background-image: url(assets/app/media/img//bg/bg-4.jpg)">
					<div class="m-grid__item m-grid__item--middle">
						<h3 class="m-login__welcome">
							Got a suggestion?
						</h3>
						<p class="m-login__msg">
							If you have a suggestion for the panel,
							<br>
							come to tagKnife or Thurston!
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
    	<!--begin::Base Scripts -->
		<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
        <!--begin::Page Snippets -->
		<script src="assets/snippets/custom/pages/user/login.js" type="application/javascript"></script>
		<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>
