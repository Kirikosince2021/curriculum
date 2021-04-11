<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
    <% String id = (String)session.getAttribute("id");%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<%if(id != null) {%>
ようこそ<%=id%>さん<br>
<form action="/CreditCard/MainController" method ="post">
▼記録する<br>
<input name="year">年
<input name="month">月
<input name="day">日<br>
<input name="money">円<br>
理由:<input name="reason"><br>
(※数字は半角英数字を用いること。)
<input type="submit" value="登録">
</form>

<a href="/CreditCard/find.jsp">▼利用履歴を確認</a>
<% }else{ %>
	IDかパスワードが間違っています。
	<a href="/CreditCard/LoginController">戻る</a>
<% }%>

</body>
</html>