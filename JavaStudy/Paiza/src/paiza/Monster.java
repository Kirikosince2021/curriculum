package paiza;

import java.util.Scanner;

public class Monster {
	static Scanner scanner = new Scanner(System.in);

	public static void main(String[] args) {
		int ATK = scanner.nextInt();
		int DEF = scanner.nextInt();
		int AGI = scanner.nextInt();

		int n = scanner.nextInt();
		String[][] monster = new String[n-1][6];

		for(int i = 0 ; i < n ; i++) {
            String monsterName = scanner.next();
            monster[i][i] = monsterName;
            for(int t = 0; t < 6 ; t++) {
                monster[i][t] = scanner.next();
            }
        }

        System.out.println(monster[0][1]);

	}


}
