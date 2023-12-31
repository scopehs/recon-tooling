@if (!$socialProviders)
<?php $colSize = 12 / count($socialProviders); ?>

<div class="divider-wrapper">
	<hr class="divider">

</div>


<div class="row">

	@if (in_array('facebook', $socialProviders))
	<div class="col-md-{{ $colSize }} col-spaced">
		<a class="btn btn-block btn-social btn-facebook" href="{{ url('auth/facebook/login') }}">
			<i class="fa fa-facebook"></i>
			Facebook
		</a>
	</div>
	@endif

	@if (in_array('twitter', $socialProviders))
	<div class="col-md-{{ $colSize }} col-spaced">
		<a class="btn btn-block btn-social btn-twitter"  href="{{ url('auth/twitter/login') }}">
			<i class="fa fa-twitter"></i>
			Twitter
		</a>
	</div>
	@endif

	@if (in_array('google', $socialProviders))
	<div class="col-md-{{ $colSize }} col-spaced">
		<a class="btn btn-block btn-social btn-google"  href="{{ url('auth/google/login') }}">
			<i class="fa fa-google-plus"></i>
			Google+
		</a>
	</div>
	@endif


	@if (in_array('gice', $socialProviders))
	<div class="col-md-12" style="text-align: center; margin-bottom: 25px;">
		Click the Icon Below to login with your GICE Credentials.
		<a href="{{ url('auth/gice/login') }}"><img src="../assets/img/goonswarm.jpg" class="img-responsive" alt="Goonswarm Federation"></a>
	</div>
</div>
@endif


</div>

@endif