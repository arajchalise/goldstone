<meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/gif" href="../Images/logo.png" />
<link rel="stylesheet" href="../Style/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="../Style/jquery-ui-1.7.2.custom.css" /> 
<link rel="stylesheet" type="text/css" href="../Style/style-ui.css" />
<link rel="stylesheet" type="text/css" href="../Style/style-edu.css" />
<link href='//fonts.googleapis.com/css?family=Cormorant Upright' rel='stylesheet'>
<script type="text/javascript" src="../Scripts/jquery-1.3.2.min.js"></script> 
<script type="text/javascript" src="../Scripts/bootstrap.js"></script>
<script type="text/javascript" src="../Scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="../Scripts/stylechanger.js"></script> 
<!--<script type="text/javascript" src="../Scripts/jquery-ui-1.7.2.custom.min.js"></script> -->
<script type="text/javascript">
var i=1;
$(function(){
	$("#pre").click(function(){
		//$(".clients_voice-"+i).animate({ width: "0%" }, 1000);
		$(".clients_voice-"+i).hide();
		if(i==2) i=1; else i=i+1;
		$(".clients_voice-"+i).show("slide", { direction: "left" }, 1000);
		//$(".clients_voice-"+i).animate({ width: "100%" }, 500, "linear")
	});
	$("#next").click(function(){
		$(".clients_voice-"+i).hide();
		if(i==1) i=2; else i=i-1;
		$(".clients_voice-"+i).show("slide", { direction: "right" }, 1000);
	});
});
$(function(){
$("#works").tabs();
});
$(function() {
            $("#apply").click(function() {
                $("#car_app").dialog({
					
				});
            });
        });
$(function(){
$("#request").dialog("Welcome");

});
		
		$(function(){
			var i=1;
			$("#processPrev").click(function(){
				if(i==1){
					i=4;
					$("#latest-works-"+i).show();
				}
				else{
					i--;
					$("#latest-works-"+i).show();
				}
			});
			
			$("#processNext").click(function(){
				if(i==4){
					i=1;
					$("#latest-works-"+i).show();
				}
				else{
					i++;
					$("#latest-works-"+i).show();
				}
			});
			
		});
		$(function() {
           
            $(".it_accordion").accordion({header:"h4"});
        });
		
		$(function() {
            $("#drp").click(function() {
                $("#nav").toggle("slow");
            });
        });
		//$(function(){
			//$("#submit").click(function(){
				
			
				//	alert("Thank you for your Application, We will contact you soon");
				
				
		//	});
		//});	
		
$(function() {
            $("#log").click(function() {
                $("#login").toggle("slow");
            });
        });
		
</script>