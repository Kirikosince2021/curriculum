<%--スッキリわかるサーブレット、JSP本 4章テスト --%>

<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import ="ex.`" %>
<%Employee emp = new Employee(0001,"ナナシさん") %>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<%for(int i = 0; i < 10; i++){
		System.out.println("IDは"+ emp.getId() + "、名前は" + emp.getName() + "です");
	}%>



</body>
</html>