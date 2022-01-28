function calculator() {
    const Altura = (document.getElementById("altura").value) / 100
    const Peso = document.getElementById("peso").value


    const IMC = Peso / Altura ** 2
    text = ""
    if (IMC < 18.5) {
        text = "You are thin"
    } else if (IMC < 24.5) {
        text = "you are normal"
    } else if (IMC < 29.9) {
        text = "You are overweight I"
    } else if (IMC < 34.9) {
        text = "You are obese I"
    } else if (IMC < 39.9) {
        text = "You are obese II"
    } else if (IMC > 40) {
        text = "You are morbidly obese III"
    }
    document.getElementById("text-area").innerText = text
}   