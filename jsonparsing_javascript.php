<!DOCTYPE html>
<html>
<head>
	<title>Json Parsing using Javascript</title>
	<script type="text/javascript">
		var jsonstr='{ "employees" : [' +
		'{ "firstName":"John" , "lastName":"Doe" },' +
		'{ "firstName":"Anna" , "lastName":"Smith" },' +
		'{ "firstName":"Peter" , "lastName":"Jones" } ]}';



		var json_parsed_str= JSON.parse(jsonstr);
		var  len=Object.keys(json_parsed_str.employees).length;
		document.write("<table border=1 text-align=center> "+
			"<tr><td>FirstName</td><td>LastName</td></tr>");
		for (var i = 1, l = len; i <= l; i++) 
		{
			document.write("<tr><td>"+json_parsed_str.employees[i].firstName+"</td><td>"+json_parsed_str.employees[i].lastName+"</td></tr>");
		}
		document.write("</table>");
	</script>
</head>
<body>
<script>

</script>
</body>
</html>