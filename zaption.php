<?php
   /**
	* Plugin Name: Zaption Embeds
	* Description: Insert a zaption video lesson into your site using a shortcode.
	* Version: 1.0.2
	* Author: Parser
	* Author URI: http://zaption.com
	*/


	// If this file is called directly, abort.
	defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


	function zaption_embed($atts){
		extract(shortcode_atts(array('id' => '', 'type' => 'iframe'), $atts));
		$embedCode;
		if ($type === 'iframe') {
			$embedCode = '<iframe src="https://www.zaption.com/lessons/' . $id . '/iframe/embed" width="980" height="540" frameBorder="0" allowfullscreen></iframe>';
		} else {
			$embedCode = '<div class="zaption-thumbnail zaption-large-thumbnail" data-id="' . $id . '"></div>
					<script type="text/javascript">
						if (!document.getElementById("zaptionEmbed")) {
							var body = document.getElementsByTagName("body")[0];
							var script = document.createElement("script");
							script.type = "text/javascript";
							script.src = "https://www.zaption.com/js/embed.js";
							script.id = "zaptionEmbed"
							body.appendChild(script);
						}
					</script>';
		}
		return $embedCode;
	}
	add_shortcode('zap', 'zaption_embed');

/* End of File */