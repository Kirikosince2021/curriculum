<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8" import="model.Info,java.util.*"%>
    <%List<Info> infoList = (List<Info>)request.getAttribute("InfoList"); %>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>検索結果</title>
<link rel="stylesheet" href="/CreditCard/style.css">
</head>
<body>

<%if(infoList.size() > 0) { %>
<%int sum = 0; %>
<%=infoList.get(0).getYear() %>年<%=infoList.get(0).getMonth() %>月の記録
<table border="1">
<tr>
<th>日付</th>
<th>   金額   </th>
<th>         内容         </th>
</tr>



<%for(Info info : infoList) { %>


	<tr>
		<td><%= info.getDay()%></td>
		<td>¥ <%=info.getMoney() %></td>
		<%sum += info.getMoney(); %>
		<td><%=info.getReason() %></td>
	</tr>

<%}  %>

</table>
<table border="1">
<tr>
	<th>合計出費</th>
	<td>¥ <%=sum %></td>
</tr>
</table>




<a href="/CreditCard/find.jsp">戻る</a>
<%}else{ %>
まだ記録がありません。
<a href="/CreditCard/find.jsp">戻る</a>
<%} %>

</body>
</html>