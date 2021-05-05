package model;

public class Info {
	private String date;
	private int money;
	private String reason;

	public Info() {}
	public Info(String date, int money, String reason) {
		this.date = date;
		this.money = money;
		this.reason = reason;
	}
	public String getDate() {return this.date;}
	public int getMoney() {return this.money;}
	public String getReason() {return this.reason;}
}
