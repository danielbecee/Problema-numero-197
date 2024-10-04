Algoritmo Problema_n197
	Definir ExisteEnCadena Como Logica
	Definir ExisteEnCadena Como Lógico
	Definir variable_numerica Como Real
	Definir frase, impar, par, nuevo, resu, resu2 Como Cadena
	Definir Contador, i Como Entero
	Escribir 'Recoger la frase X2'
	Leer frase
	Para i<-1 Hasta Longitud(frase) Con Paso 1 Hacer
		Definir letraActual Como Cadena
		letraActual <- Subcadena(frase,i,1)
		Contador <- contrador+1
		Si Contador MOD 2=0 Entonces
			par <- letraActual+par
		SiNo
			impar <- letraActual+impar
		FinSi
	FinPara
	nuevo <- impar+par
	resu <- nuevo
	Definir frase, resu Como Caracter
	Definir vocales Como Caracter
	resu <- 'aeiou'
	frase <- nuevo
	Definir reverso Como Cadena
	Para i<-1 Hasta Longitud(frase) Con Paso 1 Hacer
		Definir letra Como Cadena
		letra <- Subcadena(frase,i,1)
		Si  NO letras<>vocales Entonces
			reverso <- letra+reverso
		SiNo
			resu <- resu+reverso
			resu <- resu+letra
			reverso <- ''
		FinSi
	FinPara
	Si Longitud(reverso)>0 Entonces
		resu <- resu+reverso
	FinSi
	resu2 <- resu
	Escribir 'Primera desencriptacion:'
	Escribir resultado
	Escribir 'Segunda desencriptacion'
	Escribir resultado2
FinAlgoritmo
