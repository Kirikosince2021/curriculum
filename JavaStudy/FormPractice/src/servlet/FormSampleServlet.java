package servlet;
import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class FormSampleServlet
 */
@WebServlet("/FormSampleServlet")
public class FormSampleServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

    /**
     * @see HttpServlet#HttpServlet()
     */
    public FormSampleServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		request.setCharacterEncoding("UTF-8"); //エンコード文字指定
		String name = request.getParameter("name");
		String gender =request.getParameter("gender");

		//リクエストパラメータの判定
		String errorMsg = "";
		if(name == null || name.length() == 0) {
			errorMsg = "名前が入力されていません";
		}
		if(gender == null || gender.length() == 0) {
			errorMsg = "性別が入力されていません";
		}

		String msg = name + "さん (" + gender + ")を登録しました";
		if(errorMsg.length() != 0) {
			msg = errorMsg;
		}


		//HTMLの出力
		response.setContentType("text/html; charset=UTF-8");//文字コードの指定
		PrintWriter out = response.getWriter();
		out.println("<!DOCTYPE html>");
		out.println("<html>");
		out.println("<head>");
		out.println("<meta charset=¥UTF-8¥>");
		out.println("<title>ユーザー登録結果</title>");
		out.println("</head>");
		out.println("<body>");
		out.println("<p>" + msg + "</p>");
		out.println("</body>");
		out.println("</html>");
	}
}
