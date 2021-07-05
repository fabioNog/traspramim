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
                  <div class="icon icon-svg mr-25"><img src="style/images/icons/sm-setting.png"alt=""></div>
                  <div><span>Informações da Compra</span>
                    <p>O que você precisa comprar?</p>
                  </div>
                </a> </li>
              <li class="nav-item"> <a class="nav-link d-flex flex-row align-items-center" data-toggle="tab" href="#tab5-2">
                  <div class="icon icon-svg mr-25"><img src="style/images/icons/of-diagram.png" alt=""></div>
                  <div><span>Informações da Viagem</span>
                    <p>Sua Compra vai pra onde?</p>
                  </div>
                </a> </li>
              <li class="nav-item"> <a class="nav-link d-flex flex-row align-items-center" data-toggle="tab" href="#tab5-3">
                  <div class="icon icon-svg mr-25"><img src="style/images/icons/st-payment-method.png"  alt=""></div>
                  <div><span>Checar Tudo</span>
                    <p>Duis mollis commodo luctus</p>
                  </div>
                </a> </li>
            </ul>
            <!-- /.nav-tabs -->
          </div>
          <!--/column -->
          <div class="col-lg-7 ml-auto">
          <form method="POST" action="{{ route('comprar.store') }}">
              @csrf

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
                                
              </div>
              
            </form>
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

@component("layouts.scripts")
@endcomponent




<script>

    $('input.name').on('input',function(e){
      
      var name = $("#name").val();
      console.log(name);
      $("#name_product").empty();
      $("#name_product").append(name);
      
    });

    $(document).on('input', '#price', function(){
      var price = $("#price").val();
    //  var priceString = price.toString();
      $("#price_product").empty();
      $("#price_product").append('R$: '+price);      
    });

    $(document).on('input', '#qtd', function() {
      $('#qtd_value').html( $(this).val() );
    });

    $(document).on('input', '#desc', function(){
      var desc = $("#desc").val();
      $("#desc_product").empty();
      $("#desc_product").append(desc);      
    });

 /*    $('input.desc').on('input',function(e){           
      var desc= $("#desc").val();
      console.log(desc);
      $("#desc_product").empty();
      $("#desc_product").append(desc);
    }); */
</script>



</html>