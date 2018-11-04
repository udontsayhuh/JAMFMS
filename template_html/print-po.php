<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="printso">
    	<center>
    	<h1>JAMS Inc.</h1>
    	<h3>Purchase Order Inquiry</h3>
    	<h5>Tandang Sora, Quezon City</h5>
    	</center>
    	
    </div>
</body>
</html>		
<script type="text/javascript">
	window.onload = function() {
		$("#btn_print").click(function(e){

            			$("#printso").print({
            				
            				stylesheet: "INCLUDES/po-print.css"
            			});
            	});
	}
</script>

<script type="text/javascript" src="../assets/js/jquery/jQuery.print-master/jQuery.print.js"></script>			
						