jQuery(document).ready(function(){
	jQuery(window).scroll(function(){
		var topPos = jQuery(window).scrollTop();
		var scroolLimit = 80;
		
		if(topPos <= scroolLimit){
			$(".header").hide();
			$("#header").show();
		}
		else{
			$("#header").hide();
			$(".header").show();
		}
	});	
	
	/*jQuery(window).scroll(function(){
		var topPos = jQuery(window).scrollTop();
		var windowHeight = jQuery(window).height();
		var btmPos = topPos + windowHeight;
		var offsetObj = jQuery("#development-team").offset();
		var realOffset = offsetObj.top;
		var limitoffset = jQuery("#last_main_content").offset();
		var limit = limitoffset.top;
			
			if(btmPos > realOffset){
			$("#developer").show("slow");
		}
		
	});	
	*/
		var i= 1;
		function processPrev(){
			if(i==1){
				i==4;
				
			}
			else{
				i--;
				$("#latest_works-"+i).show();
			}
			
		}
		function processNext(){
			if(i==4){
				i==1;
				$("#latest_works-"+i).show();
			}
			else{
				i++;
				$("#latest_works-"+i).show();
			}
				
			}
		
		
});
