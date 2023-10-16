function aumentarValor(id) {
    var quantidadeInput = document.getElementById(id);
    var quantidadeAtual = parseInt(quantidadeInput.value);
    quantidadeAtual++;
    quantidadeInput.value = quantidadeAtual;
}

function diminuirValor(id) {
    var quantidadeInput = document.getElementById(id);
    var quantidadeAtual = parseInt(quantidadeInput.value);
    quantidadeAtual--;
    if (quantidadeAtual < 0) {
        quantidadeAtual = 0;
    }
    quantidadeInput.value = quantidadeAtual;
}
