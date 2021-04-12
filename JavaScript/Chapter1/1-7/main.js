class Taiyaki {
    constructor(flavor) {
        this.flavor = flavor;
    }

    printResult() {
        console.log(`中身は${this.flavor}です`);
    }
}

let taiyaki1 = new Taiyaki("あんこ");
taiyaki1.printResult();

let taiyaki2 = new Taiyaki("クリーム");
taiyaki2.printResult();

let taiyaki3 = new Taiyaki("チーズ");
taiyaki3.printResult();