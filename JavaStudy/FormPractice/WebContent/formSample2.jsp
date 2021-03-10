<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<form action ="FormPractice/FormSampeServlet2" method ="post">
		名前：<input value="name">
		<br>
		お問い合わせの種類：
		<select name="content">
		<option value="company">会社について</option>
		<option value="product">製品について</option>
		<option value="support">アフターサポートについて</option>
		</select>
		<br>
		お問い合わせ内容：
		<textarea name="body"></textarea>

		<input type="submit" value="送信">
	</form>
</body>
</html>