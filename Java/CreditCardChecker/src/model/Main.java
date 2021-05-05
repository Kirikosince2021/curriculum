package model;

import java.util.Date;
import java.util.Scanner;

public class Main {
	public static Scanner sc = new java.util.Scanner(System.in);
	public static void main(String[] args) {
		Date date;
		int money = 0;
		String reason = "";


		System.out.println("<クレジットカード利用明細記録アプリ>");
		System.out.println("項目を選択し入力: 1.記録する 2.記録を閲覧する");
		String mode = sc.next();
		if(mode.equals("1")) {
			input();
		}else if(mode.equals("2")) {
			output();
		}else {
			System.out.println("入力された値が間違っています。");
		}
	}
	public static void input() {
		System.out.println("<利用した日付を入力 (例: 2021-04-30)>");
		String date = sc.next();
		System.out.println("<利用した金額を入力 (例: 3000)>");
		int money = sc.nextInt();
		System.out.println("<利用内容を入力>");
		String reason = sc.next();

	}
	public static void output() {

	}

}
