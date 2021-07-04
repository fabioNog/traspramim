<!DOCTYPE html>
<html lang="en">

<head>
  @component("layouts.meta")
  @endcomponent
  @component("layouts.links")
  @endcomponent

</head>



<body>
  <div class="content-wrapper white-wrapper">
    @component("layouts.navbar-compras")
    @endcomponent
    <!-- /.navbar -->
    <div class="wrapper light-wrapper">
      <div class="container inner">
        <h2 class="section-title mb-40 text-center">Comprar</h2>
        <div class="row no-gutters">
          <div class="col-lg-4 mb-0">
            <ul class="nav nav-tabs nav-tabs-bg flex-column">
              <li class="nav-item"> <a class="nav-link d-flex flex-row align-items-center active" data-toggle="tab" href="#tab5-1">
                  <div class="icon icon-svg mr-25"><img src="style/images/icons/of-diagram.png" alt=""></div>
                  <div><span>Informações da Compra</span>
                    <p>O que você precisa comprar?</p>
                  </div>
                </a> </li>
              <li class="nav-item"> <a class="nav-link d-flex flex-row align-items-center" data-toggle="tab" href="#tab5-2">
                  <div class="icon icon-svg mr-25"><img src="style/images/icons/st-payment-method.png" alt=""></div>
                  <div><span>Informações da Viagem</span>
                    <p>Sua Compra vai pra onde?</p>
                  </div>
                </a> </li>
              <li class="nav-item"> <a class="nav-link d-flex flex-row align-items-center" data-toggle="tab" href="#tab5-3">
                  <div class="icon icon-svg mr-25"><img src="style/images/icons/ms-cloud-computing.png" alt=""></div>
                  <div><span>Checar Tudo</span>
                    <p>Duis mollis commodo luctus</p>
                  </div>
                </a> </li>
              <li class="nav-item"> <a class="nav-link d-flex flex-row align-items-center" data-toggle="tab" href="#tab5-4">
                  <div class="icon icon-svg mr-25"><img src="style/images/icons/sm-setting.png" alt=""></div>
                  <div><span>System Integration</span>
                    <p>Etiam porta sem malesuada</p>
                  </div>
                </a> </li>
            </ul>
            <!-- /.nav-tabs -->
          </div>
          <!--/column -->
          <div class="col-lg-7 ml-auto">
            <div class="tab-content">
              <div class="tab-pane show active" id="tab5-1">
                @component("layouts.comprar.info_comprar")
                @endcomponent
              </div>
              <div class="tab-pane" id="tab5-2">
                @component("layouts.comprar.info_viajar")
                @endcomponent
              </div>
              <div class="tab-pane" id="tab5-3">
                @component("layouts.comprar.checar_comprar")
                @endcomponent
              </div>
              <div class="tab-pane" id="tab5-4">
                <figure>
                  <img src="style/images/art/ui4.png" alt="" />
                </figure>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->

</body>
<script>
  function logar() {
    $("#login_modal").modal("show");
  }
</script>
@component("layouts.scripts")
@endcomponent

</html>