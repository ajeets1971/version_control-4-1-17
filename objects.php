<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var book={
			subject:"Perl",
			Author:"John"
		};
		var bk=new Array("hello"," world!!"," how"," are"," You");
	</script>
</head>
<body>
<script>
	document.write("Book subject : " +book.subject+ "<br>");
	document.write("Book subject : " +book.Author+ "<br>");
	document.write("Loop <br>")
	for (var r in bk)
	{
		document.write(bk);
	}
</script>
</body>
</html>