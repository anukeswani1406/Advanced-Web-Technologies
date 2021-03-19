/*
Slip no 8-4
Write an Ajax program to print the content of the myfile.dat. This code asks the user to click a button, fetches data from the server using Ajax techniques and displays that data in the same web page as the button without refreshing the page
*/

<html>
	<head>
		<script language="javascript">
			varreq=false;
			if(window.XMLHttpRequest)
			{
				req=new XMLHttpRequest();
			 }
			else  if(window.ActiveXObject)
			{
				req=new ActiveXObject("Microsoft.XMLHttp");
			}
			functionfetchdata(datasource,divID)
			{
				if(req)
				  {
					req.open("GET",datasource);
					req.onreadystatechange=function()
				                {
						if(req.readyState==4 &&req.status==200)
					                    {
							document.getElementById(divID).innerHTML=req.responseText;
					                    }
				               }
					req.send(null);
				      }
			  }
		</script>
	</head>

	<body>
		<form>
			<input type=button value="Fetch Message" onClick="fetchdata('myfile.txt','myDiv')">
		</form>
		
		<div id="myDiv">data will be here</div>
	</body>
</html>
