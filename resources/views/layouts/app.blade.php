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
  @component("layouts.navbar") 
  @endcomponent
  @component("auth.modal-login") 
  @endcomponent
    <!-- /.navbar -->

        <main class="py-4" style="background-color: white;">
            @yield('content')
        </main>
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