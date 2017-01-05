<!DOCTYPE html>
<html>
<head>
	<title>Json Parsing using Javascript</title>
	<script type="text/javascript">
		
	</script>
</head>
<body>
<script>
	var request = new XMLHttpRequest();
		request.open('GET', 'https://jsonplaceholder.typicode.com/todos', true);

		request.onload = function() {
		 if (request.status >= 200 && request.status < 400) 
		 {
		   // Success!
		   var data = JSON.parse(request.responseText);
		   document.write(data);
		   document.write("<table border=1 text-align=center> "+
			"<tr><td>UserId</td><td>Id</td><td>Title</td><td>Completed</td></tr>");
			for (var i = 1,  i <= l; i++) 
			{
				document.write(data[i].userId);
				document.write("<tr><td>"+data[i].userId+"</td><td>"+data[i].id+"</td><td>"+data[i].title+"</td><td>"+data[i].completed+"</td></tr>");
			}
			document.write("</table>");
		 } else {
		   // We reached our target server, but it returned an error
		 }
		};
		request.onerror = function() {
		 // There was a connection error of some sort
		};
		request.send();

</script>
</body>
</html>