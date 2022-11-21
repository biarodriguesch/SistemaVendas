var formFunc = $("#adiconar-aluno")
botaoAdiconar.on("click", function(event) {
    event.preventDefault()

    var $form = $("#form-adicionar")[0]
    var $tabela = $("#tabela-alunos")
    var nome = $form.nome.value

    $td.text(nome)
    $tr.append($td)
    $tabela.append($tr)
    $form.reset()
})
