package model;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import dao.MainDAO;

@WebServlet("/MainController")
public class MainController extends HttpServlet {
	private static final long serialVersionUID = 1L;
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html; charset=UTF-8");

		int year = Integer.parseInt(request.getParameter("year"));
		int month = Integer.parseInt(request.getParameter("month"));


		MainDAO mainDAO = new MainDAO();
		List<Info>infoList = new ArrayList<Info>();
		infoList = mainDAO.find(year,month);

		request.setAttribute("InfoList", infoList);
		RequestDispatcher requestDispatcher = request.getRequestDispatcher("/WEB-INF/result.jsp");
		requestDispatcher.forward(request, response);
	}



	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html; charset=UTF-8");

		int year = Integer.parseInt(request.getParameter("year"));
		int month = Integer.parseInt(request.getParameter("month"));
		int day = Integer.parseInt(request.getParameter("day"));
		int money = Integer.parseInt(request.getParameter("money"));
		String reason = request.getParameter("reason");

		HttpSession session = request.getSession();
		String id = (String)session.getAttribute("id");
		String pass = (String)session.getAttribute("pass");


		Info info = new Info();
		info.setId(id);
		info.setPass(pass);
		info.setYear(year);
		info.setMonth(month);
		info.setDay(day);
		info.setMoney(money);
		info.setReason(reason);

		MainDAO mainDAO = new MainDAO();
		boolean result = mainDAO.register(info);

		if(result) {
			RequestDispatcher requestDispatcher = request.getRequestDispatcher("WEB-INF/input.jsp");
			requestDispatcher.forward(request, response);
		}



	}

}
