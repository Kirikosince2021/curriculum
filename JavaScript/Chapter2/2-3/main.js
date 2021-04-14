//btnを取得
const btn = document.getElementById('btn');
let btnText = btn.innerText;

// ボタンがクリックされたら、という処理の始まり
btn.addEventListener('click', function() {
    //①配列で「大吉」「中吉」「凶」を準備
    let fortunes = ["大吉","中吉","凶"];
    //②乱数を発生させて、その値を取得
    var fortune = Math.floor(Math.random() * fortunes.length);
    //③取得した **btn** の「クリック」という文字を配列の中身の文字にランダムに変化させる
    btnText = btnText.replace("クリック",fortunes[fortune]);
    btn.innerText = btnText;
}, false);