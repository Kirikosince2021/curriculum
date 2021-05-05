<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>クレジットカード利用明細登録</title>
</head>
<body>
	クレジットカードの利用履歴を登録・管理します。
	ログイン:
	<form action ="/CreditCard/LoginController" method = "post">
	NAME:<input type="text" name="id" value="">
	PASS:<input type="password" name="pass" value="">
	<input type="submit" value="ログイン">
	</form>
</body>
</html>