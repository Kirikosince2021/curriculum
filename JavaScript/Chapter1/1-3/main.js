/*a != 10
10 <= b && b < 20 && b % 2 == 0*/

let x = 10;

if(10 <= x && x <= 20) {
    console.log("成功です");
} else {
    console.log("失敗です");
}

let y = 0;

if(y % 2 == 0) {
    console.log("偶数です");
}else if(y % 3 == 0 && y != 0) {
    console.log("奇数です");
}