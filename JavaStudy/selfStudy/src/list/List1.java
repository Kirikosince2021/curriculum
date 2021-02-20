package list;

import java.util.ArrayList;
import java.util.List;

public class List1{
	public static void main(String[] args){

		//ArrayListを作成
		List<String> array = new ArrayList<String>();

		//リストに４項目を代入
		array.add("りんご");
		array.add("みかん");
		array.add("バナナ");
		array.add("ぶどう");

		//リストにある全要素を表示
		for(String fruit : array){
			System.out.println(fruit);
		}
	}
}