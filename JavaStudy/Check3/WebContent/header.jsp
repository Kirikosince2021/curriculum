<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8" import="java.util.Calendar,java.text.SimpleDateFormat"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link rel ="stylesheet" href = "css/style.css">
</head>
<body>

	<%
	//Calendarクラスのオブジェクトを生成
	Calendar cal = Calendar.getInstance();
	//sdfクラスでフォーマットパターンを設定
	SimpleDateFormat sdf = new SimpleDateFormat("yyyy/MM/dd");
	%>


	<header>
		<div class = "loginheader">
			<p class = "login">login</p>

			<p class = "date"><%out.print(sdf.format(cal.getTime())); %></p>
		</div>

	</header>

</body>
</html>