<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8" import = "java.util.*"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<form action="/FormPractice/FormSampleServlet" method="post">
	<p>名前:</p>
	<input name = "name">
	<p>性別:</p>
	<input type="radio" name="gender" value="女性">女
	<input type="radio" name="gender" value="男性">男
	<input type="submit" value="登録">
	</form>

</body>
</html>