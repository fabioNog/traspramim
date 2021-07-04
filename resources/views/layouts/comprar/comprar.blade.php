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
        <div class="row">
          <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
            <h2 class="section-title mb-40 text-center">Cadastre sua compra</h2>
            <form class="fields-black">
              <div class="form-group">
                <label for="exampleInputName2">Name</label>
                <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="exampleInputEmail2">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck2">
                  <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                </div>
              </div>
              <!-- /.form-group -->
              <button type="submit" class="btn">Submit</button>
            </form>
            <!-- /form -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    </body>
<script>
  function logar(){
    $("#login_modal").modal("show");
  }

</script>
  @component("layouts.scripts") 
  @endcomponent
</html>