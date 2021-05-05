package model;



public class Scores {
	private String date;
	private int one;
	private int two;
	private int three;
	public Scores() {}
	public Scores(String date, int one, int two, int three) {
		this.date = date;
		this.one = one;
		this.two = two;
		this.three = three;
	}
	public String getDate() {return this.date;}
	public int getScoreOne() {return this.one;}
	public int getScoreTwo() {return this.two;}
	public int getScoreThree() {return this.three;}

}
