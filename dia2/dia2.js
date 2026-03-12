//nivel 1-2 - operadores
//matematicos
let suma=10+5
let resta=10-5
let multiplicacion=10*5
let division=10/5
let residuo=10%3

console.log(suma)
console.log(resta)
console.log(multiplicacion)
console.log(division)
console.log(residuo)
// va escribir todos los resultados en la consola

//comparacion
let edad=17
console.log(edad>18)  //¿es mayor que 18?
console.log(edad<18)  //¿es menor que 18?
console.log(edad === 17) //¿es exactamente 17?
console.log(edad !==17) //¿es diferente de 17
console.log(edad>=18) ///¿es mayor o igual a 18?
console.log(edad <=17) //¿es menor o igual a 17?

// linea 18 va lansar falso,linea 19 va lanzar verdadero
// linea 20 va a lanzar verdadero,linea 21 va tirar falso
//linea 22 va a lanzar falso
//linea 23 va a lanzar verdadero

// operadores logicos
let edad2=17
let dinero=500

// && significa "Y"-las dos tienen que ser verdaderas(true)
console.log(edad2>18 && dinero >100)  //es mayor de edad y tiene mas de 100?

// "||"" significa "0" - con UNA que sea true alcanza
console.log(edad2>18 || dinero >100)  // ¿es mayor de edad 0 tiene mas de 100?

// ! significa "no" - invierte el resultado
console.log(!true) //invierte el resultado
console.log(!false) //invierte false

//linea 35 va a tirar falso tiene mas dinero pero no es mayor de 18 ,
// verdadero porque hay que es verdad que es >100,no comprendi bien la 42 y la 43