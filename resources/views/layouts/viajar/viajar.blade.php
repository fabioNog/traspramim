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
                <h2 class="section-title mb-40 text-center">Viajar</h2>
                <div class="row no-gutters col-md-6 offset-md-3">
                    <form method="POST" action="{{ route('viajar.store') }}">
                        @csrf
                        @component("layouts.viajar.info_viajar")
                        @endcomponent

                    </form>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.wrapper -->
    </div>
</body>

@component("layouts.scripts")
@endcomponent





</html>