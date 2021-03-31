@extends('layouts.app')
	<!-- Header section end -->
	

	@section('content')
	<!-- Contact section -->
	<section class="contact-section">
		<div class="container-fluid">
			<div class="row">
<<<<<<< HEAD
				<div class="col-lg-6 p-0">
					<!-- Map -->
					<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15958.628416152262!2d37.4574674!3d-0.5150709!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1617096045748!5m2!1sen!2ske" style="border:0" allowfullscreen></iframe></div>
				</div>
=======
		
>>>>>>> fc88da06fa50dfd962b43b7313b52fde60717dd3
				<div class="col-lg-6 p-0">
					<div class="contact-warp">
				
				
						<form class="contact-from">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Your name">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Your e-mail">
								</div>
								<div class="col-md-12">
									<input type="text" placeholder="Subject">
									<textarea placeholder="Message"></textarea>
									<button class="site-btn">send message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

		<section class="songs-details-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3">
					<div class="song-details-box">
						<h3>Upcoming Events</h3>
						<ul>
							<li><strong>Month:</strong><span>JUne, September, December</span></li>
							<li><strong>Genres:</strong><span>quitar, piano, music, electronic music, minimal, chill music, pop, cultural, live, popular</span></li>
							<li><strong>Grounds:</strong><span>Dutch-water, Tommorrowland</span></li>
								<li><strong>Artists:</strong><span>Alan Walker, Martin Garrix, Dj Snake, Marshmello, Tiesto, Sabrina</span></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-6">
							<div class="song-details-box">
								<h3>Buy your Ticket</h3>
								<div class="artist-details">
									<img src="{{ asset('images/artist.jpg') }}" alt="">
									<div class="ad-text">
										<h5>How to Book your reservation</h5>
										<span>Muzikal Agency</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="song-details-box">
								<h3>Top Charts</h3>
								<!-- song -->
								<div class="song-item">
									<div class="row">
										<div class="col-xl-5 col-lg-12 col-md-5">
											<div class="song-info-box">
												<img src="{{ asset('images/songs/1.jpg') }}" alt="">
												<div class="song-info">
													<h4>Martin Garrix</h4>
													<p>Animals</p>
												</div>
											</div>
										</div>
										<div class="col-xl-7 col-lg-12 col-md-7">
											<div class="single_player_container">
												<div class="single_player">
													<div class="jp-jplayer jplayer" data-ancestor=".jp_container_1" data-url="music-files/1.mp3"></div>
													<div class="jp-audio jp_container_1" role="application" aria-label="media player">
														<div class="jp-gui jp-interface">
					
															<!-- Player Controls -->
															<div class="player_controls_box">
																<button class="jp-prev player_button" tabindex="0"></button>
																<button class="jp-play player_button" tabindex="0"></button>
																<button class="jp-next player_button" tabindex="0"></button>
																<button class="jp-stop player_button" tabindex="0"></button>
															</div>
															<!-- Progress Bar -->
															<div class="player_bars">
																<div class="jp-progress">
																	<div class="jp-seek-bar">
																		<div>
																			<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
																		</div>
																	</div>
																</div>
																<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
															</div>
														</div>
														<div class="jp-no-solution">
															<span>Update Required</span>
															To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- song -->
								<div class="song-item">
									<div class="row">
										<div class="col-xl-5 col-lg-12 col-md-5">
											<div class="song-info-box">
												<img src="{{ asset('images/songs/2.jpg') }}" alt="">
												<div class="song-info">
													<h4>Selena Gomez</h4>
													<p>Back To you</p>
												</div>
											</div>
										</div>
										<div class="col-xl-7 col-lg-12 col-md-7">
											<div class="single_player_container">
												<div class="single_player">
													<div class="jp-jplayer jplayer" data-ancestor=".jp_container_2" data-url="music-files/2.mp3"></div>
													<div class="jp-audio jp_container_2" role="application" aria-label="media player">
														<div class="jp-gui jp-interface">

															<!-- Player Controls -->
															<div class="player_controls_box">
																<button class="jp-prev player_button" tabindex="0"></button>
																<button class="jp-play player_button" tabindex="0"></button>
																<button class="jp-next player_button" tabindex="0"></button>
																<button class="jp-stop player_button" tabindex="0"></button>
															</div>
															<!-- Progress Bar -->
															<div class="player_bars">
																<div class="jp-progress">
																	<div class="jp-seek-bar">
																		<div>
																			<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
																		</div>
																	</div>
																</div>
																<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
															</div>
														</div>
														<div class="jp-no-solution">
															<span>Update Required</span>
															To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

@endsection
