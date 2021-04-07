package paiza;

import java.util.Scanner;


public class Main {
    public static int x = 0;
    public static int y = 0;

    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);
        x = sc.nextInt();
        y = sc.nextInt();
        int n = sc.nextInt();
        int headding = 0;

        for(int i = 0; i < n; i++) {
        	System.out.println("現在地:" + x + y + "向き:" + headding);
            String RL = sc.next();

            headding = move(headding,RL);
        }
        System.out.println(x +" "+ y);

    }
    public static int move(int headding, String RL) {

        //上向き
        if(headding == 0) {
            if(RL.equals("R")) { x++; }
            else if(RL.equals("L")) { x--; }
        }
        //右向き
        if(headding == 90) {
            if(RL.equals("R")) { y++; }
            if(RL.equals("L")) { y--; }
        }
        if(headding == 180) {
            if(RL.equals("R")) { x--; }
            if(RL.equals("L")) { x++; }
        }
        if(headding == 270) {
            if(RL.equals("R")) { y--; }
            if(RL.equals("L")) { y++; }
        }

        return changeHeadding(headding,RL);
    }
    public static int changeHeadding(int headding, String RL) {
        if(RL.equals("R")) {headding += 90;}
        if(RL.equals("L")) {headding -= 90;}

        if(headding == 360) { headding = 0;}
        if(headding == -90) { headding = 270;}
        return headding;
    }
}