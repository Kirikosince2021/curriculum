package model;

import java.io.IOException;
import java.util.List;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import dao.MainDAO;


@WebServlet("/Out")
public class Out extends HttpServlet {
	private static final long serialVersionUID = 1L;
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		//リスト表示
				request.setCharacterEncoding("UTF-8");
				response.setContentType("text/html; charset=UTF-8");
				MainDAO mainDAO = new MainDAO();
				List<Scores>scoreList = mainDAO.getList();
				RequestDispatcher requestDispatcher = request.getRequestDispatcher("/WEB-INF/result.jsp");
				request.setAttribute("scoreList", scoreList);
				requestDispatcher.forward(request, response);
	}
}


