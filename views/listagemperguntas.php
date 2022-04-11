<?php
  $caminho = APP;
?>
          <link rel="stylesheet" href='<?php echo $caminho; ?>/Style/style.css'>
              <h1>Perguntas</h1>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Pergunta</th>
                        <th scope="col">A)</th>
                        <th scope="col">B)</th>
                        <th scope="col">C)</th>
                        <th scope="col">Resposta</th>
                      </tr>
                    </thead>
                      <tbody>
                        <?php
                        foreach ($questionarios as $questionario) {
                          $caminho = APP;
                          echo "
                          <tr>
                            <td>{$questionario['id']}</td>
                            <td>{$questionario['pergunta']}</td>
                            <td>{$questionario['opcaoa']}</td>
                            <td>{$questionario['opcaob']}</td>
                            <td>{$questionario['opcaoc']}</td>
                            <td>{$questionario['resposta']}</td>
                            <td><a class='btn btn-danger' href='$caminho/questionario/excluir/{$questionario['id']}'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                            </svg></a></td>
                        </tr>
                          ";
                        }
                         ?>
                      </tbody>
                    </table>
