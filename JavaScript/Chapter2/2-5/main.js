 //①onchangeで使用されている関数の中身を実装してください。
function changeLang() {
    let lang = document.getElementById("selectResult").value;
    if(lang == "日本語") {
        document.querySelector(".table_en").style.display="none";
        document.querySelector(".table_jp").style.display="block";
    }else if(lang == "English") {
        document.querySelector(".table_jp").style.display="none";
        document.querySelector(".table_en").style.display="block";
    }else if(lang == "全て表示") {
        document.querySelector(".table_jp").style.display="block";
        document.querySelector(".table_en").style.display="block";
    }
}