import { Calculatrice } from "./calculatrice";
import {additionner, soustraire, diviser, multiplier} from "/calculatrice.js"

let a = 0 ; let b = 1 ; let c = 2;

let calculatrice = new Calculatrice

let calculatrice_plus = calculatrice.additionner()
let plus = 1 
let plus_test = additionner(a, b);

if (plus === plus_test) {
    console.log(plus_test + 'ok')
} else {
    console.log (plus_un + 'nope')
}

    