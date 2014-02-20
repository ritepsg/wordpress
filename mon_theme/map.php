
<div id="map" style="height:380px;width:100%"></div> 

<script type="text/javascript"> 

	var map=L.map('map',{center:[46,0.8], zoom:5 });

	L.tileLayer('http://{s}.tile.cloudmade.com/BC9A493B41014CAABB98F0471D759707/78211/256/{z}/{x}/{y}.png',{
		maxZoom:18,
		attribution:'Mapdata&copy;<ahref="http://openstreetmap.org">OpenStreetMap</a>contributors,<ahref="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>,Imagery©<ahref="http://cloudmade.com">CloudMade</a>'}).addTo(map);	
		  
var marker_53=L.marker([46.361153,4.683565]).addTo(map);
var popup_53=L.popup().setContent('Eglise de SOLOGNY');
	marker_53.bindPopup(popup_53);
	popup_53.post_id=53;
		
</script>
