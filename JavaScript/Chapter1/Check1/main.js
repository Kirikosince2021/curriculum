let numbers = [2,5,12,13,15,18,22];

function isEven(num) {
    console.log(num + "は偶数です。");
}

for(let i = 0; i < numbers.length ; i++) {
    if(i % 2 === 0) {
        isEven(i);
    }
}

class Car {
    constructor(gass,number) {
        this.gass = gass;
        this.number = number;
    }

    getNumGas() {
        console.log(`ガソリンは${this.gass}です。ナンバーは${this.number}です`);
    }
}