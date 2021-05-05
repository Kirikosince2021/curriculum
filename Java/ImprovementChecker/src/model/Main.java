package model;

import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import dao.MainDAO;


@WebServlet("/Main")
public class Main extends HttpServlet {
	private static final long serialVersionUID = 1L;

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		RequestDispatcher requestDispatcher = request.getRequestDispatcher("/");
		requestDispatcher.forward(request, response);

	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		//スコア登録
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html; charset=UTF-8");

			String date = request.getParameter("date");
			int score1 = Integer.parseInt(request.getParameter("one"));
			int score2 = Integer.parseInt(request.getParameter("two"));
			int score3 = Integer.parseInt(request.getParameter("three"));
			Scores todayScores = new Scores(date,score1,score2,score3);
			MainDAO mainDAO = new MainDAO();
			mainDAO.registerScore(todayScores);

			RequestDispatcher requestDispatcher = request.getRequestDispatcher("/");
			requestDispatcher.forward(request, response);


	}

}
