var botao = document.querySelector("#responder");
botao.addEventListener("click", geraQuestao);
var indice = 0;
var acertos = 0;
var erros = 0;
var questoes = [
  { id: 1,
    pergunta: "teste",
    opcaoA: "nenhuma",
    opcaoB: "todas",
    opcaoC: "alguma",
    opcaoCerta: "a"
  },
  { id: 2,
    pergunta: "teste 2 ",
    opcaoA: "nenhuma",
    opcaoB: "todas",
    opcaoC: "alguma",
    opcaoCerta: "c"
  }
];
var questaoAtual = questoes[0];

function geraQuestao() {
  if (indice > questoes.length-1) {
    return;
  }
  var questao = questoes[indice];
  var stringModal = `
  <div class='modal fade' data-bs-backdrop='static' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h5 class='modal-title' id='exampleModalLabel'>Questão ${questao['id']}) ${questao['pergunta']}</h5>
          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <div class='modal-body'>
          <div class='form-check'>
            <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1' value='a' checked>
            <label class='form-check-label' for='flexRadioDefault1'>
              a) ${questao['opcaoA']}
            </label>
          </div>
          <div class='form-check'>
            <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault2' value='b'>
            <label class='form-check-label' for='flexRadioDefault2'>
            b) ${questao['opcaoB']}
            </label>
          </div>
          <div class='form-check'>
            <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault3' value='c'>
            <label class='form-check-label' for='flexRadioDefault2'>
            c) ${questao['opcaoC']}
            </label>
          </div>
        </div>
        <div class='modal-footer'>
          <button id="btn-responder" type='button' class='btn btn-primary'>Responder</button>
        </div>
      </div>
    </div>
  </div>
  `;
  var containerModal = document.querySelector('#containerModal');
  containerModal.innerHTML  = stringModal;
  var exampleModal = document.getElementById('exampleModal');
  var myModal = new bootstrap.Modal(exampleModal, {keyboard: false});
  myModal.show();
  var btn_responder = document.querySelector('#btn-responder');
  btn_responder.addEventListener("click", function() {
    var opcao = getOpcaoSelecionada();
    var questaoAtual = questoes[indice];
    if (opcao == questaoAtual['opcaoCerta']) {
      acertos++;
    } else {
      erros++;
    }
    myModal.hide();
    exampleModal.remove();
    geraResposta(questaoAtual, opcao);
  });
}


function geraResposta(questao, resposta) {
  classeA = ""
  classeB = ""
  classeC = ""
  mensagem = "";
  if (resposta == questao['opcaoCerta']) {
      classe = 'd-block alert alert-success';
      mensagem = "Parabéns, você escolheu a resposta certa !!!";
      if (resposta == 'a') {
          classeA = "d-block alert alert-success";
      }
      if (resposta == 'b') {
        classeB = "d-block alert alert-success";
      }
      if (resposta == 'c') {
        classeC = "d-block alert alert-success";
      }
  } else {
    mensagem = "Errou, continue tentando !!!";
    classe = "alert alert-danger";
    if (resposta == 'a') {
        classeA = "alert alert-danger";
    }
    if (resposta == 'b') {
        classeB = "alert alert-danger";
    }
    if (resposta == 'c') {
        classeC = "alert alert-danger";
    }
  }

  var stringModal = `
  <div class='modal fade' data-bs-backdrop="static" id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='${classe}'>
          ${mensagem}
        </div>
        <div class='modal-header'>

          <h5 class='modal-title' id='exampleModalLabel'>Questão ${questao['id']}) ${questao['pergunta']}</h5>
          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <div class='modal-body'>
          <div class='form-check'>
            <label class='form-check-label ${classeA}' for='flexRadioDefault1'>
              a) ${questao['opcaoA']}
            </label>
          </div>
          <div class='form-check'>
            <label class='form-check-label ${classeB}' for='flexRadioDefault2'>
            b) ${questao['opcaoB']}
            </label>
          </div>
          <div class='form-check'>
            <label class='form-check-label ${classeC}' for='flexRadioDefault2'>
            c) ${questao['opcaoC']}
            </label>
          </div>
        </div>
        <div class='modal-footer'>
          <button id='btn-responder' type='button' class='btn btn-primary'>Próximo</button>
        </div>
      </div>
    </div>
  </div>
  `;
  var containerModal = document.querySelector('#containerModal');
  containerModal.innerHTML  = stringModal;
  var exampleModal = document.getElementById('exampleModal');
  var myModal = new bootstrap.Modal(exampleModal,{keyboard: false});
  myModal.show();
  var btn_responder = document.querySelector('#btn-responder');
  btn_responder.addEventListener("click", function() {
    var opcao = getOpcaoSelecionada();
    myModal.hide();
    exampleModal.remove();
    indice++;
    if (indice != questoes.length) {
      geraQuestao();
    } else {
      geraEstatistica();
      indice = 0;
      erros = 0;
      acertos = 0;
    }
  });
}



function getOpcaoSelecionada() {
  let opcoes = document.getElementsByName("flexRadioDefault");
  for(let i=0;i<opcoes.length;i++) {
    if (opcoes[i].checked) {
      return opcoes[i].value;
    }
  }
  return "";
}

function geraEstatistica() {
  var stringModal = `
  <div class='modal fade' data-bs-backdrop="static" id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h5 class='modal-title' id='exampleModalLabel'>Estatística</h5>
          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <div class='modal-body'>
        <h4>Quantidade de Acertos: ${acertos}</h4>
        <h4>Quantidade de Erros: ${erros}</h4>
        </div>
        <div class='modal-footer'>
          <button id='btn-responder' type='button' class='btn btn-primary'>Ok</button>
        </div>
      </div>
    </div>
  </div>
  `;
  var containerModal = document.querySelector('#containerModal');
  containerModal.innerHTML  = stringModal;
  var exampleModal = document.getElementById('exampleModal');
  var myModal = new bootstrap.Modal(exampleModal,{keyboard: false});
  myModal.show();
  var btn_responder = document.querySelector('#btn-responder');
  btn_responder.addEventListener("click", function() {
    var opcao = getOpcaoSelecionada();
    myModal.hide();
    exampleModal.remove();
  });
}
