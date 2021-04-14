function addText() {
    //①入力欄のテキストを取得
    let inputText = document.getElementById("text1").value;
    
    //②出力欄のテキストエリアを取得
    let outputArea = document.querySelector("#area1");
    //③出力欄に入力された文字列を足していく
    outputArea.textContent += inputText;
}

function deleteText() {
    //④出力欄のテキストを空にする
    let outputArea = document.querySelector("#area1");
    outputArea.textContent = "";
    //⑤入力欄のテキストを空にする
    document.getElementById("text1").value = "";
}