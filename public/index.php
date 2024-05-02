<?php
include_once('./head.php');

?>


<div class="main">

	<div class = "box">
		<div class = "weather">
			<div class ="weather-box">
				<p class="clock"></p>
			</div>
			<div class ="weather-box">
				<div class = "weather_icon"></div>
			</div>
			<div class="weather-box">
				<div class = "weather_description"></div>
				<div class = "current_temp"></div>
				<div class = "humidity"></div>
			</div>
			<div class="weather-box">
				<div class="controll">
					LIGHT
					<div class = "switch-box">
						  <input type="checkbox" id="light" value='HIGH'>
						  <label for="light" class="toggle">
							<div class="toggle-button"></div>
						  </label>
					</div>
				</div>
				<div class="controll">
					FAN
					<div class = "switch-box">
						  <input type="checkbox" id="fan" value='HIGH'>
						  <label for="fan" class="toggle">
							<div class="toggle-button"></div>
						  </label>
					</div>
				</div>
				<div class="controll">
					WATER
						<div class = "switch-box">
						  <input type="checkbox" id="water" value='HIGH'>
						  <label for="water" class="toggle">
							<div class="toggle-button"></div>
						  </label>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class = "box">
		<div class="video_wrap">
		https://youtu.be/G8_RWqam134?si=yWhyYffaQKMZ12NB
		https://ejleep1.tistory.com/309
		</div>
	</div>
	
	<div class = "box">

	</div>
	
	<div class = "box">
		그래프
	</div>	
	
</div>


<script src="/js/clock.js"></script>

<?
include_once('./tail.php');
?>
