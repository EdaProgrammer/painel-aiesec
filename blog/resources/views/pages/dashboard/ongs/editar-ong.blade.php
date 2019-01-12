@extends('layouts.dashboard')

@section('content')

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentallela Alela! | </title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">
  <!-- ion_range -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/ion.rangeSlider.css" />
  <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />

  <!-- colorpicker -->
  <link href="css/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">

  <script src="js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

  <!-- page content -->
  <div class="right_col" role="main">

    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>
            Cadastrar ONGs
          </h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Cadastrar ONGs</li>
            </ol>
          </nav>
        </div>
        
        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Ongs</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form class="form-horizontal form-label-left" method="POST" action="{{URL::to('/update-ongs')}}?id={{$ong->id}}">
                <h5 class="text-uppercase text-center">Dados Organização</h5>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cnpj">CNPJ <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="cnpj" required="required" class="form-control col-md-7 col-xs-12" name="cnpj" data-inputmask="'mask' : '99.999.999/9999-99'" value="{{$ong->cnpj}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="nome" required="required" class="form-control col-md-7 col-xs-12" name="nome" value="{{$ong->nome}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefone">Telefone <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="telefone" required="required" class="form-control col-md-7 col-xs-12" name="telefone" value="{{$ong->telefone}}">
                  </div>
                </div>
                <div class="ln_solid"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <button class="btn btn-primary">Cancelar</button>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/bootstrap.min.js"></script>

<!-- bootstrap progress js -->
<script src="js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="js/icheck/icheck.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="js/moment/moment.min.js"></script>
<script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
<!-- input mask -->
<script src="js/input_mask/jquery.inputmask.js"></script>
<!-- knob -->
<script src="js/knob/jquery.knob.min.js"></script>
<!-- range slider -->
<script src="js/ion_range/ion.rangeSlider.min.js"></script>
<!-- color picker -->
<script src="js/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="js/colorpicker/docs.js"></script>

<!-- image cropping -->
<script src="js/cropping/cropper.min.js"></script>
<script src="js/cropping/main2.js"></script>
<!-- pace -->
<script src="js/pace/pace.min.js"></script>

<!-- datepicker -->
<script type="text/javascript">
  $(document).ready(function() {
    var cb = function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
      $('#reportrange_right span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
    }
    var optionSet1 = {
      startDate: moment().subtract(29, 'days'),
      endDate: moment(),
      minDate: '01/01/2012',
      maxDate: '12/31/2015',
      dateLimit: {
        days: 60
      },
      showDropdowns: true,
      showWeekNumbers: true,
      timePicker: false,
      timePickerIncrement: 1,
      timePicker12Hour: true,
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      opens: 'right',
      buttonClasses: ['btn btn-default'],
      applyClass: 'btn-small btn-primary',
      cancelClass: 'btn-small',
      format: 'MM/DD/YYYY',
      separator: ' to ',
      locale: {
        applyLabel: 'Submit',
        cancelLabel: 'Clear',
        fromLabel: 'From',
        toLabel: 'To',
        customRangeLabel: 'Custom',
        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        firstDay: 1
      }
    };
    $('#reportrange_right span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    $('#reportrange_right').daterangepicker(optionSet1, cb);
    $('#reportrange_right').on('show.daterangepicker', function() {
      console.log("show event fired");
    });
    $('#reportrange_right').on('hide.daterangepicker', function() {
      console.log("hide event fired");
    });
    $('#reportrange_right').on('apply.daterangepicker', function(ev, picker) {
      console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
    });
    $('#reportrange_right').on('cancel.daterangepicker', function(ev, picker) {
      console.log("cancel event fired");
    });
    $('#options1').click(function() {
      $('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
    });
    $('#options2').click(function() {
      $('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
    });
    $('#destroy').click(function() {
      $('#reportrange_right').data('daterangepicker').remove();
    });
  });
</script>
<!-- datepicker -->
<script type="text/javascript">
  $(document).ready(function() {
    var cb = function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
    }
    var optionSet1 = {
      startDate: moment().subtract(29, 'days'),
      endDate: moment(),
      minDate: '01/01/2012',
      maxDate: '12/31/2015',
      dateLimit: {
        days: 60
      },
      showDropdowns: true,
      showWeekNumbers: true,
      timePicker: false,
      timePickerIncrement: 1,
      timePicker12Hour: true,
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      opens: 'left',
      buttonClasses: ['btn btn-default'],
      applyClass: 'btn-small btn-primary',
      cancelClass: 'btn-small',
      format: 'MM/DD/YYYY',
      separator: ' to ',
      locale: {
        applyLabel: 'Submit',
        cancelLabel: 'Clear',
        fromLabel: 'From',
        toLabel: 'To',
        customRangeLabel: 'Custom',
        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        firstDay: 1
      }
    };
    $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    $('#reportrange').daterangepicker(optionSet1, cb);
    $('#reportrange').on('show.daterangepicker', function() {
      console.log("show event fired");
    });
    $('#reportrange').on('hide.daterangepicker', function() {
      console.log("hide event fired");
    });
    $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
      console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
    });
    $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
      console.log("cancel event fired");
    });
    $('#options1').click(function() {
      $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
    });
    $('#options2').click(function() {
      $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
    });
    $('#destroy').click(function() {
      $('#reportrange').data('daterangepicker').remove();
    });
  });
</script>
<!-- /datepicker -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#single_cal1').daterangepicker({
      singleDatePicker: true,
      calender_style: "picker_1"
    }, function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
    });
    $('#single_cal2').daterangepicker({
      singleDatePicker: true,
      calender_style: "picker_2"
    }, function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
    });
    $('#single_cal3').daterangepicker({
      singleDatePicker: true,
      calender_style: "picker_3"
    }, function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
    });
    $('#single_cal4').daterangepicker({
      singleDatePicker: true,
      calender_style: "picker_4"
    }, function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#reservation').daterangepicker(null, function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
    });
  });
</script>
<!-- /datepicker -->
<!-- input_mask -->
<script>
  $(document).ready(function() {
    $(":input").inputmask();
  });
</script>
<!-- /input mask -->
<!-- ion_range -->
<script>
  $(function() {
    $("#range_27").ionRangeSlider({
      type: "double",
      min: 1000000,
      max: 2000000,
      grid: true,
      force_edges: true
    });
    $("#range").ionRangeSlider({
      hide_min_max: true,
      keyboard: true,
      min: 0,
      max: 5000,
      from: 1000,
      to: 4000,
      type: 'double',
      step: 1,
      prefix: "$",
      grid: true
    });
    $("#range_25").ionRangeSlider({
      type: "double",
      min: 1000000,
      max: 2000000,
      grid: true
    });
    $("#range_26").ionRangeSlider({
      type: "double",
      min: 0,
      max: 10000,
      step: 500,
      grid: true,
      grid_snap: true
    });
    $("#range_31").ionRangeSlider({
      type: "double",
      min: 0,
      max: 100,
      from: 30,
      to: 70,
      from_fixed: true
    });
    $(".range_min_max").ionRangeSlider({
      type: "double",
      min: 0,
      max: 100,
      from: 30,
      to: 70,
      max_interval: 50
    });
    $(".range_time24").ionRangeSlider({
      min: +moment().subtract(12, "hours").format("X"),
      max: +moment().format("X"),
      from: +moment().subtract(6, "hours").format("X"),
      grid: true,
      force_edges: true,
      prettify: function(num) {
        var m = moment(num, "X");
        return m.format("Do MMMM, HH:mm");
      }
    });
  });
</script>
<!-- /ion_range -->
<!-- knob -->
<script>
  $(function($) {
    $(".knob").knob({
      change: function(value) {
        //console.log("change : " + value);
      },
      release: function(value) {
        //console.log(this.$.attr('value'));
        console.log("release : " + value);
      },
      cancel: function() {
        console.log("cancel : ", this);
      },
      /*format : function (value) {
       return value + '%';
       },*/
      draw: function() {
        // "tron" case
        if (this.$.data('skin') == 'tron') {
          this.cursorExt = 0.3;
          var a = this.arc(this.cv) // Arc
            ,
            pa // Previous arc
            , r = 1;
          this.g.lineWidth = this.lineWidth;
          if (this.o.displayPrevious) {
            pa = this.arc(this.v);
            this.g.beginPath();
            this.g.strokeStyle = this.pColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
            this.g.stroke();
          }
          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
          this.g.stroke();
          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();
          return false;
        }
      }
    });
    // Example of infinite knob, iPod click wheel
    var v, up = 0,
      down = 0,
      i = 0,
      $idir = $("div.idir"),
      $ival = $("div.ival"),
      incr = function() {
        i++;
        $idir.show().html("+").fadeOut();
        $ival.html(i);
      },
      decr = function() {
        i--;
        $idir.show().html("-").fadeOut();
        $ival.html(i);
      };
    $("input.infinite").knob({
      min: 0,
      max: 20,
      stopper: false,
      change: function() {
        if (v > this.cv) {
          if (up) {
            decr();
            up = 0;
          } else {
            up = 1;
            down = 0;
          }
        } else {
          if (v < this.cv) {
            if (down) {
              incr();
              down = 0;
            } else {
              down = 1;
              up = 0;
            }
          }
        }
        v = this.cv;
      }
    });
  });
</script>
<!-- /knob -->
</body>
@endsection