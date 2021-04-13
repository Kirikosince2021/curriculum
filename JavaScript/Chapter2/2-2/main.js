function changeBtn() {
    // ①id「p1」の要素を取得
    let p1 = document.getElementById("p1");
    
    // ②取得したp1に「display:none」が無かったら、「display:none」を付与する。
    // 取得したp1に「display:none」があったら、「display:block」を付与する。
    if(p1.style.display != "none") {
        p1.style.display = "none";
    }else if(p1.style.display="none") {
        p1.style.display = "block";
    }
}
