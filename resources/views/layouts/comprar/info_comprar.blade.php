<style>
  .file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}
</style>
<div class="wrapper light-wrapper">
  <div class="container inner">
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
        <h2 class="section-title mb-40 text-center">Cadastre sua compra</h2>
        <div class="fields-black">
          <div class="form-group">
            <label for="exampleInputName2">Nome do Produto</label>
            <input type="text" class="form-control name" id="name" name="name" placeholder="Ex: Notebook">
          </div>

          <!-- img -->
          <div class="form-group" id="imagem">
            <div class="file-upload">
              <label style="text-align: center;" for="exampleFormControlSelect1">Imagem</label>
              <input id="input_upload_imagem" style="display:none;" type='file' name="imagem" accept="image/png, image/jpeg, image/jpg">

              <div class="image-upload-wrap">
                <div class="col-md-12 col-sm-12">
                  <div class="file-upload-input"></div>
                  <div class="drag-text">
                    <h3 style="">Selecione uma imagem </h3>
                  </div>
                </div>
              </div>

              <div class="file-upload-content" style="display: none;flex-wrap: wrap;">
                <div class="col-md-12 col-sm-12">
                  <img class="file-upload-image" src="#" alt="your image" />
                  <div id="nome_imagem"></div>
                </div>
                <div class="align_btn_img">
                  <div class="col-md-12 col-sm-12">
                    <div class="image-title-wrap">
                      <button type="button" onclick="alterarUpload()" class="btn btn-blue">Alterar</i></button>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputName2">Preço do Produto</label>
            <input type="number" class="form-control"  min="0" max="10000" step="1" name="price" id="price" required>
          </div>
          
          <div class="form-group">
            <label for="exampleInputName2">Quantidade de Produtos</label>
            <input type="text" id="qnt_input" value="" >
            <input type="range" class="qtd" name="qtd" id="qtd" min="0" max="10" onchange="updateTextInput(this.value);">
          </div>
          <div class="form-group">
          <label for="exampleInputName2">Descricão</label>
          <textarea type="text" class="form-control" rows="3" name="desc" id="desc" placeholder="Descreva o produto"></textarea>
          </div>

          <!-- /.form-group -->
          <div class="form-group row nav nav-tabs nav-tabs-bg">
            <a class=" btn btn-blue col-md-6 offset-md-3" style="text-align: center;" data-toggle="tab" href="#tab5-2">
              Proxímo
            </a>
          </div>
          <p id="demo"></p>

        </div>
        <!-- /form -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>

<!-- /.container-fluid -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $(document).on("click", "#imagem .image-upload-wrap", function() {
    $('#imagem #input_upload_imagem').click();
    // $('.image-upload-wrap').hide();
  });
  $(document).on("ready", "#imagem #input_upload_imagem", function(e) {
    console.log(e.target.files.length);
    if (e.target.files.length == 0) {
      
      $('#imagem .file-upload-image').attr('src', '');
      $('#imagem .file-upload-content').show();
      $('#imagem #input_upload_imagem').val('');

    } else {
      
      $('#nome_imagem').html(e.target.files[0].name);
      $('#imagem .file-upload-image').attr('src', URL.createObjectURL(event.target.files[1]));
      $('#imagem .image-upload-wrap').hide();

      $('#imagem .file-upload-content').show();
    }
  });
  $(document).on("change", "#imagem #input_upload_imagem", function(e) {
    if (e.target.files.length == 0) {
      $('#imagem .file-upload-image').attr('src', '');
      $('#imagem .file-upload-content').show();
      $('#imagem .file-upload-content').hide();
      $('#imagem #input_upload_imagem').val('');

    } else {
      $('#imagem #nome_imagem').html(e.target.files[0].name);
      $('#imagem .file-upload-image').attr('src', URL.createObjectURL(event.target.files[0]));
      $('#imagem .image-upload-wrap').hide();

      $('#imagem .file-upload-content').show();
    }
  });

  function alterarUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('#input_upload_imagem').click();
  }
</script>
<script>
  function updateTextInput(val) {
          document.getElementById('qnt_input').value = val; 
        }
</script>


<!-- /.container-fluid -->
