package gatcha;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.Random;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class GatchaSimulator
 */
@WebServlet("/GatchaSimulator")
public class GatchaSimulator extends HttpServlet {
	private static final long serialVersionUID = 1L;

    /**
     * @see HttpServlet#HttpServlet()
     */
    public GatchaSimulator() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub


		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html; charset=UTF-8");
		PrintWriter out = response.getWriter();
		String tmpSSR = request.getParameter("SSR");
		String tmpSR = request.getParameter("SR");

		if(tmpSSR == null || tmpSR == null || tmpSSR.length() == 0 || tmpSR.length() == 0) {
			out.println("数値の入力が間違っているか未入力の箇所があります");

		}

		int ssr = Integer.parseInt(tmpSSR);
		int sr = Integer.parseInt(tmpSR);
		int other = 100 - (ssr + sr);

		out.println("SSR排出確率：" + ssr + "%");
		out.println("SR排出確率：" + sr + "%");
		out.println("R排出確率：" + other + "%");



		//出力
		out.println("<!DOCTYPE html>");

		out.println("<html>");
		out.println("<head>");
		out.println("<meta charset=¥UTF-8¥>");
		out.println("<title></title>");
		out.println("</head>");
		out.println("<body>");


		//カウント用変数
		int countSSR = 0;
		int countSR = 0;

		out.println("<p>十連ガチャ結果(SR以上一枚確定)</p>");

		for(int i = 1; i < 10 ; i++) {
			Random random = new Random();
			double result = random.nextInt(100);


			out.print(i +"回目:");
			if(result <= ssr) {
				out.println("SSR");
				countSSR++;
			}else if(result <= sr) {
				out.println("SR");
				countSR++;
			}else{
				out.println("R");
			}

			if(i == 9) {
				out.println("<br>");
				out.print("10回目(SR以上確定):");
				if(result <= ssr) {
					out.println("SSR");
					countSSR++;
					i++;
				}else{
					out.println("SR");
					countSR++;
					i++;
				}

			}

			out.println("<br>");

		}
		out.println("SSR:"+countSSR+"回");
		out.println("SR:"+countSR+"回");

		out.println("</body>");
		out.println("</html>");





	}

}
