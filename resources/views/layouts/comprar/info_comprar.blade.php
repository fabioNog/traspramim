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
            <input type="text" class="form-control" id="name" placeholder="Ex: Notebook">
          </div>

          <!-- img -->
          <div class="form-group" id="imagem">
            <div class="file-upload">
              <label style="text-align: center;" for="exampleFormControlSelect1">Imagem</label>
              <input id="input_upload_imagem" style="display:none;" type='file' name="imagem" accept="image/*">

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
            <input type="number" class="form-control"  min="0" max="10000" step="1" name="price" id="price" required="required">
          </div>
          
          <div class="form-group">
            <label for="exampleInputName2">Quantidade de Produtos</label>
            <input type="text" id="textInput" value="">
            <input type="range" name="qnt" min="0" max="10" onchange="updateTextInput(this.value);">
          </div>
          <div class="form-group">
          <label for="exampleInputName2">Descricão</label>
          <textarea class="form-control" rows="3" placeholder="Descreva o produto"></textarea>
          </div>

          <!-- /.form-group -->
          <div class="form-group row nav nav-tabs nav-tabs-bg">
            <a class=" btn btn-blue col-md-6 offset-md-3" style="text-align: center;" data-toggle="tab" href="#tab5-2">
              Proxímo
            </a>
          </div>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

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
    if (e.target.files.length == 0) {
      $('#imagem .file-upload-image').attr('src', '');
      $('#imagem .file-upload-content').show();
      $('#imagem #input_upload_imagem').val('');

    } else {
      $('#nome_imagem').html(e.target.files[0].name);
      $('#imagem .file-upload-image').attr('src', URL.createObjectURL(event.target.files[0]));
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


<!-- /.container-fluid -->
<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $(document).on("click", "#arquivo .image-upload-wrap", function() {
    $('#arquivo #input_upload_arquivo').click();
    // $('.image-upload-wrap').hide();
  });
  $(document).on("ready", "#arquivo #input_upload_arquivo", function(e) {
    if (e.target.files.length == 0) {
      $('#arquivo .file-upload-image').attr('src', '');
      $('#arquivo .file-upload-content').show();
      $('#arquivo #input_upload_arquivo').val('');

    } else {
      $('#nome_imagem').html(e.target.files[0].name);
      $('#arquivo .file-upload-image').attr('src', URL.createObjectURL(event.target.files[0]));
      $('#arquivo .image-upload-wrap').hide();

      $('#arquivo .file-upload-content').show();
    }
  });
  $(document).on("change", "#arquivo #input_upload_arquivo", function(e) {
    if (e.target.files.length == 0) {
      $('#arquivo .file-upload-image').attr('src', '');
      $('#arquivo .file-upload-content').show();
      $('#arquivo .file-upload-content').hide();
      $('#arquivo #input_upload_arquivo').val('');

    } else {
      $('#arquivo #nome_imagem').html(e.target.files[0].name);
      $('#arquivo .image-upload-wrap').hide();

      $('#arquivo .file-upload-content').show();
    }
  });

  function alterarUpload_arquivo() {
    $('#arquivo .file-upload-input').replaceWith($('#arquivo .file-upload-input').clone());
    $('#input_upload_arquivo').click();
  }

  function updateTextInput(val) {
          document.getElementById('textInput').value=val; 
        }
</script>