function excluirJogo(idJogo) {
    let excluirJogo = confirm ("Realmente deseja excluir esse jogo?")

    if (excluirJogo == true){
        window.open("excluir-jogo.php?id=" + idJogo,"_SELF")
    }
}


function removeErrorMessage() {
    let errorMessage = document.getElementById("erro-index")

    if (errorMessage != null){
        errorMessage.remove()
    }
}