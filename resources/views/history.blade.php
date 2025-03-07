@extends('layouts.admin')
@section('judul', 'History | Pemantauan Kualitas Udara')
@section('history', 'active')

@section('css_lib')

<link href="{{ asset('js/plugins/sweetalert/sweetalert.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
<link href="{{ asset('css/flexboxgrid.css') }}" type="text/css" rel="stylesheet" media="screen,projection">


<style type="text/css">
.input-field div.error{
  position: relative;
  top: -1rem;
  left: 0rem;
  font-size: 0.8rem;
  color:#FF4081;
  -webkit-transform: translateY(0%);
  -ms-transform: translateY(0%);
  -o-transform: translateY(0%);
  transform: translateY(0%);
}
.input-field label.active{
    width:100%;
}
.left-alert input[type=text] + label:after,
.left-alert input[type=password] + label:after,
.left-alert input[type=email] + label:after,
.left-alert input[type=url] + label:after,
.left-alert input[type=time] + label:after,
.left-alert input[type=date] + label:after,
.left-alert input[type=datetime-local] + label:after,
.left-alert input[type=tel] + label:after,
.left-alert input[type=number] + label:after,
.left-alert input[type=search] + label:after,
.left-alert textarea.materialize-textarea + label:after{
    left:0px;
}
.right-alert input[type=text] + label:after,
.right-alert input[type=password] + label:after,
.right-alert input[type=email] + label:after,
.right-alert input[type=url] + label:after,
.right-alert input[type=time] + label:after,
.right-alert input[type=date] + label:after,
.right-alert input[type=datetime-local] + label:after,
.right-alert input[type=tel] + label:after,
.right-alert input[type=number] + label:after,
.right-alert input[type=search] + label:after,
.right-alert textarea.materialize-textarea + label:after{
    right:70px;
}

.valign {
     width: 100%;
   }
</style>

@endsection

@section('content')

        <!-- START CONTENT -->
        <section id="content">


          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
              <!-- Search for small screen -->
              <div class="header-search-wrapper grey hide-on-large-only">
                  <i class="mdi-action-search active"></i>
                  <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
              </div>
            <div class="container" style="width: 98%;">
              <div class="row">

              </div>
            </div>
          </div>
          <!--breadcrumbs end-->

          <!--start container-->
          <div class="container" style="width: 98%;">
            <div class="section">
              <div class="row valign-wrapper">

              <div class="col-xs-9">
                  <p class="caption">History</p>
              </div>
              <div class="col-xs-3 center-xs">
                <a class="btn waves-effect waves-light right modal-trigger teal darken-4" href="/history/export">Export XLSX
                  <i class="mdi-av-playlist-add right"></i></a>
              </div>
                </div>

              <div class="divider"></div>
<br>
              <!--DataTables example-->
              <div id="table-datatables">
                <br>
                  <div class="col s12">
                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                      <thead>
                          <tr>
                              <th>Tanggal</th>
                              <th>CO2</th>
                              <th>AQ</th>
                              <th>Smoke</th>
                              <th>CO</th>
                          </tr>
                      </thead>

                      <tfoot>
                          <tr>
                            <th>Tanggal</th>
                            <th>CO2</th>
                            <th>AQ</th>
                            <th>Smoke</th>
                            <th>CO</th>
                          </tr>
                      </tfoot>

                      <tbody>
                        @php
                          $n=0;
                        @endphp
                        @foreach ($co as $key)
                          <tr>
                              <td>{{$key->created_at->format('Y-m-d H:i:s')}}</td>
                              <td>{{$key->value}} ppm</td>
                              <td>{{$aq[$n]->value}} ppm</td>
                              <td>{{$smoke[$n]->value}} ppm</td>
                              <td>{{$carbon[$n]->value}} ppm</td>

                          </tr>
                          @php
                            $n++;
                          @endphp
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>





        </section>
        <!-- END CONTENT -->
@endsection

@section('js_lib')
<script type="text/javascript" src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<!--sweetalert -->
 <script type="text/javascript" src="{{ asset('js/plugins/sweetalert/sweetalert.min.js') }}"></script>

 <script>
 $(document).ready(function(){
 @if (session()->has('update'))
         Materialize.toast('{{Session::get('update')}}',4000);
 @elseif (session()->has('delete'))
         Materialize.toast('{{Session::get('delete')}}', 4000);
 @elseif (session()->has('tambah'))
         Materialize.toast('{{Session::get('tambah')}}', 4000);
 @endif




 });
 </script>
@endsection



@section('js')


@endsection
