package model;

public class Info {
	private String id;
	private String pass;
	private int year;
	private int month;
	private int day;
	private int money;
	private String reason;

	public Info() {
		// TODO 自動生成されたコンストラクター・スタブ
	}
	public void setId(String id) {this.id = id;}
	public void setPass(String pass) {this.pass = pass;}
	public void setYear(int year) {this.year = year;}
	public void setMonth(int month) {this.month = month;}
	public void setDay(int day) {this.day = day;}
	public void setMoney(int money) {this.money =money;}
	public void setReason(String reason) {this.reason =reason;}

	public String getId() {return this.id;}
	public String getPass() {return this.pass;}
	public int getYear() {return this.year; }
	public int getMonth() {return this.month; }
	public int getDay() {return this.day;}
	public int getMoney() {return this.money;}
	public String getReason() { return this.reason;}
}
