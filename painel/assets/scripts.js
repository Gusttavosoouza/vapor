function excluirJogo(idJogo) {
    let excluirJogo = confirm ("Realmente deseja excluir esse jogo?")

    if (excluirJogo == true){
        window.open("excluir-jogo.php?id=" + idJogo,"_SELF")
    }
}


function removeErrorMessageIndex() {
    let errorMessage = document.getElementById("erro-index")

    if (errorMessage != null){
        errorMessage.remove()
    }
}
function removeMessagErrorIdioma() {
    let errorMessage = document.getElementById("erro-idioma")

    if (errorMessage != null){
        errorMessage.remove()
    }
}
function removeMessagErrorCategoria() {
    let errorMessage = document.getElementById("erro-categoria")

    if (errorMessage != null){
        errorMessage.remove()
    }
}