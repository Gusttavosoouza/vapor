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
function removeMessagErrorPlataforma() {
    let errorMessage = document.getElementById("erro-plataforma")

    if (errorMessage != null){
        errorMessage.remove()
    }
}
function removeMessagErrorJogo() {
    let errorMessage = document.getElementById("erro-jogo")

    if (errorMessage != null){
        errorMessage.remove()
    }
}

function excluirJogo(idJogo) {
    let excluirJogo = confirm ("Realmente deseja excluir esse jogo?")

    if (excluirJogo == true){
        window.open("excluir-jogo.php?id=" + idJogo,"_SELF")
    }
}
function excluirPlataforma(idPlataforma) {
    let excluirJogo = confirm ("Realmente deseja excluir essa plataforma?")

    if (excluirJogo == true){
        window.open("excluir-plataforma.php?id=" + idPlataforma,"_SELF")
    }
}
function excluirIdioma(idIdioma) {
    let excluirJogo = confirm ("Realmente deseja excluir este idioma?")

    if (excluirJogo == true){
        window.open("excluir-idioma.php?id=" + idIdioma,"_SELF")
    }
}
