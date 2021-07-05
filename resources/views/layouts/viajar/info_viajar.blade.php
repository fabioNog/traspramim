<div class="wrapper light-wrapper">
  <div class="container inner">
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
        <h2 class="section-title mb-40 text-center">Detalhes da Entrega</h2>
        <div class="form-group">
          <label for="cep_saida">CEP da Saida</label>
          <input name="cep_saida" type="text" id="cep_saida" value="" size="10" maxlength="9" /></label><br />
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <label>Cidade de Saida:
            <input name="cidade_saida" type="text" id="cidade_saida" size="40" /></label><br />
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label for="cidade_saida">CEP de Destino</label>
          <input  name="cep_destino" type="text" id="cep_destino" value="" size="10" maxlength="9" /></label><br />
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <label>Cidade de Destino:
            <input name="cidade_destino" type="text" id="cidade_destino" size="40" /></label><br />
        </div>

        <div class="form-group">
          <label>Escolha uma Data:
            <input id="date" type="date" name="travel_at" id="trave_at">
        </div>
        <!-- /.form-group -->
        <!-- /.form-group -->
        <div class="form-group row nav nav-tabs nav-tabs-bg">
          <button class="btn btn-blue col-md-6 offset-md-3" style="text-align: center;">
            Viajar
          </button>
        </div>
        <!-- /form -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>

<!-- Adicionando JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Adicionando Javascript -->
<script>
  $(document).ready(function() {

    function limpa_formulário_cep() {
      // Limpa valores do formulário de cep.

      $("#cidade_saida").val("");

    }

    //Quando o campo cep perde o foco.
    $("#cep_saida").blur(function() {

      //Nova variável "cep" somente com dígitos.
      var cep_saida = $(this).val().replace(/\D/g, '');

      //Verifica se campo cep possui valor informado.
      if (cep_saida != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep_saida)) {

          //Preenche os campos com "..." enquanto consulta webservice.
          $("#cidade_saida").val("...");

          //Consulta o webservice viacep.com.br/
          $.getJSON("https://viacep.com.br/ws/" + cep_saida + "/json/?callback=?", function(dados) {

            if (!("erro" in dados)) {
              //Atualiza os campos com os valores da consulta.
              $("#cidade_saida").val(dados.localidade);

            } //end if.
            else {
              //CEP pesquisado não foi encontrado.
              limpa_formulário_cep();
              alert("CEP não encontrado.");
            }
          });
        } //end if.
        else {
          //cep é inválido.
          limpa_formulário_cep();
          alert("Formato de CEP inválido.");
        }
      } //end if.
      else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
      }
    });

    $("#cep_destino").blur(function() {

      //Nova variável "cep" somente com dígitos.
      var cep_destino = $(this).val().replace(/\D/g, '');

      //Verifica se campo cep possui valor informado.
      if (cep_destino != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep_destino)) {

          //Preenche os campos com "..." enquanto consulta webservice.
          $("#cidade_destino").val("...");

          //Consulta o webservice viacep.com.br/
          $.getJSON("https://viacep.com.br/ws/" + cep_destino + "/json/?callback=?", function(dados) {

            if (!("erro" in dados)) {
              //Atualiza os campos com os valores da consulta.
              $("#cidade_destino").val(dados.localidade);

            } //end if.
            else {
              //CEP pesquisado não foi encontrado.
              limpa_formulário_cep();
              alert("CEP não encontrado.");
            }
          });
        } //end if.
        else {
          //cep é inválido.
          limpa_formulário_cep();
          alert("Formato de CEP inválido.");
        }
      } //end if.
      else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
      }
    });
  });
</script>