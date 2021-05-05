package other;
import java.math.BigDecimal;

public class syousuu {

	public static void main(String[] args) {
		double num1 = 1.0;
		double num2 = 0.8;

		double num3 = num1 - num2;
		System.out.println(num3);

		BigDecimal bd1 = new BigDecimal("1.0"); //BigDecimal には String型の数値を渡す。
		BigDecimal bd2 = new BigDecimal("0.8");

		BigDecimal bd3 = bd1.subtract(bd2);

		System.out.println(bd3);

	}

}
