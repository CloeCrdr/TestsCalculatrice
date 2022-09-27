class Calculatrice{
    constructor(a, b) {
        this.a = a
        this.b = a
    }

    additionner(a, b){
        let result
        result = a + b
        return result
    }

    soustraire(a, b){
        let result
        result = a - b
        return result
    }

    multiplier(a, b){
        let result
        result = a * b
        return result
    }

    diviser(a, b){
        let result
        result = a / b
        return result
    }
}


function testAdd() {
    a = 2
    b = 3 
    let calculatrice = new Calculatrice
    result = calculatrice.additionner(a, b)

    console.log(result)
    return result

}
testAdd();

function testSoust() {
    a = 2
    b = 3 
    let calculatrice = new Calculatrice
    result = calculatrice.soustraire(a, b)

    console.log(result)
    return result

}
testSoust();

function testMult() {
    a = 2
    b = 3 
    let calculatrice = new Calculatrice
    result = calculatrice.multiplier(a, b)

    console.log(result)
    return result

}
testMult();

function testDiv() {
    a = 2
    b = 3 
    let calculatrice = new Calculatrice
    result = calculatrice.diviser(a, b)

    console.log(result)
    return result

}
testDiv();