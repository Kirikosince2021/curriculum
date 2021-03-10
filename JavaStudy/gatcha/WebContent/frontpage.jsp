<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>

<!DOCTYPE html>
<link rel="stylesheet" href="${pageContext.request.contextPath}/style.css">

<html>
<head>
<meta charset="UTF-8">
<title>ガチャシミュ</title>
</head>
<body>
	<form action="/gatcha/GatchaSimulator" method="get">
		自己満足で作られた練習ガチャシミュレーターへようこそ。<br>
		機能が少ないので、いかなるゲームのガチャシミュレーターとしても使うことができます。
		小数には対応していません。

		<div>ガチャの確率を設定</div>
		SSR:<input name="SSR">
		SR:<input name="SR"><br>
		<small>※Rの排出率は自動的に100-(SSR+SRの確率)で計算されます。</small>
		<br>
		<input type="submit" value="ガチャを回す">
	</form>
</body>
</html>