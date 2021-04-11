<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>履歴検索</title>
</head>
<body>
調べたい年月日を入力:<br>
<form action="/CreditCard/MainController" method="get">
<input name="year">年
<input name="month">月<br>
<input type="submit" value="検索"></form>
<a href="/CreditCard/">戻る</a>
</body>
</html>