package paiza;

public class Replace {

	public static void replaceWord() {
		String word = "feknife";
		if(word.endsWith("fe")) {
			word = word.replaceAll("fe$", "ves");
		}
		System.out.println(word);
	}



}
