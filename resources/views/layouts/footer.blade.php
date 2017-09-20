<footer>
	<div class="container">
    	<div class="contact-email"><a href="mailto:{{ config('mail.from.address', 'info@insprme.com') }}"><i class="fa fa-envelope-o">&#xf003;</i> {{ config('mail.from.address', 'info@insprme.com') }}</a></div>
        <div class="copyright">Copyright © @copyright_year() <a href="#">{{ config('app.name', 'insprme.com') }}</a>. All Rights Reserved</div>
    </div>
</footer>