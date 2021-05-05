<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8" import="java.util.*,model.Scores"%>
    <%List<Scores>scoreList = (List<Scores>)request.getAttribute("scoreList");
    int days = scoreList.size();
    int highScore1 = 0;
    int highScore2 = 0;
    int highScore3 = 0;
    List<Integer>score1 = new ArrayList<Integer>();
    List<Integer>score2 = new ArrayList<Integer>();
    List<Integer>score3 = new ArrayList<Integer>();
    List<String>date = new ArrayList<String>();%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="<%= request.getContextPath() %>/style.css?v=2">
<title>Insert title here</title>
</head>
<body>
<div class="content">

	<%for(Scores score : scoreList) { %>

		<% if(score.getScoreOne() > highScore1) {highScore1 = score.getScoreOne();}
		   if(score.getScoreTwo() > highScore2) {highScore2 = score.getScoreTwo();}
		   if(score.getScoreThree() > highScore3) {highScore3 = score.getScoreThree();}
		   date.add(score.getDate());
		   score1.add(score.getScoreOne());
		   score2.add(score.getScoreTwo());
		   score3.add(score.getScoreThree());
		   %>

	<%} %>


	<input type="hidden" id="date" value="<%=date%>">
	<input type="hidden" id="score1" value="<%=score1%>">
	<input type="hidden" id="score2" value="<%=score2 %>">
	<input type="hidden" id="score3" value="<%=score3 %>">


	<canvas id="myChart"></canvas>
	<p class="text">
		HighScore of Score 1 : <%=highScore1 %><br>
		HighScore of Score2 : <%=highScore2 %><br>
		HighScore of Score3 : <%=highScore3 %><br>
	</p>
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="<%= request.getContextPath() %>/main.js"></script>
</html>