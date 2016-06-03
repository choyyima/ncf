<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>NON CONFORMITY FORM</title>

        <meta name="description" content="and Validation" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="assets/css/select2.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />
        <link rel="stylesheet" href="assets/css/datepicker.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
        <link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="assets/js/ace-extra.min.js"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="no-skin">
        <div id="navbar" class="navbar navbar-default">
            <script type="text/javascript">
                try {
                    ace.settings.check('navbar', 'fixed')
                } catch (e) {
                }
            </script>

            <div class="navbar-container" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-header pull-left">
                    <a href="index.html" class="navbar-brand">
                        <small>
                            <i class="fa fa-comments-o"></i>
                            NON CONFORMITY FORM
                        </small>
                    </a>
                </div>

            </div><!-- /.navbar-container -->
        </div>

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {
                }
            </script>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="page-header">
                            <h1>
                                <i class="ace-icon fa fa-arrow-right"></i>
                                NON CONFORMITY FORM
                            </h1>
                            <small>
                                FORM LAPORAN KETIDAKSESUAIAN
                            </small>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <!--                                <h4 class="lighter">
                                                                    <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
                                                                    <a href="#modal-wizard" data-toggle="modal" class="pink"> INFORMANT </a>
                                                                </h4>-->
                                <h5 class="lighter">
                                    <a href="#modal-wizard" data-toggle="modal" class="blue"> No. FTKP : <?php echo 'PTKP / VI / 20156 / 001'; ?> </a>
                                </h5>
                                <h5 class="lighter">
                                    <a href="#modal-wizard" data-toggle="modal" class="blue-dark"> Tanggal : <?php echo date('d F Y'); ?> </a>
                                </h5>

                                <div class="hr hr-18 hr-double dotted"></div>

                                <div class="widget-box">
                                    <!--                                    <div class="widget-header widget-header-blue widget-header-flat">
                                                                            <h4 class="widget-title lighter">Form </h4>
                                                                        </div>-->

                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <div id="fuelux-wizard-container">
                                                <div>
                                                    <ul class="steps">
                                                        <li data-step="1" class="active">
                                                            <span class="step">1</span>
                                                            <span class="title">Penggagas / Auditor</span>
                                                        </li>

                                                        <li data-step="2">
                                                            <span class="step">2</span>
                                                            <span class="title">Tindak lanjut</span>
                                                        </li>

                                                        <li data-step="3">
                                                            <span class="step">3</span>
                                                            <span class="title">Verifikasi</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <hr />

                                                <div class="step-content pos-rel">
                                                    <div class="step-pane active" data-step="1">
                                                        <!--<h3 class="lighter block green">Enter the following information</h3>-->

                                                        <form class="form-horizontal active" id="validation-form" method="post">
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Nama:</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                        <input type="text" id="name" name="name" class="col-xs-12 col-sm-5" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="space-2"></div>

                                                            <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="bagian">Bagian:</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <select id="state" name="bagian" class="select2" data-placeholder="Click to Choose...">
                                                                        <option value="">&nbsp;</option>
                                                                        <option value="HRGA">HRGA</option>
                                                                        <option value="Marketing">Marketing</option>
                                                                        <option value="Technic">Technic</option>
                                                                        <option value="Procurement">Procurement</option>
                                                                        <option value="Finance & Accounting">Finance & Accounting</option>
                                                                        <option value="Production">Production</option>
                                                                        <option value="Operational">Operational</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="space-2"></div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right">Sumber Ketidaksesuaian:</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div>
                                                                        <label class="line-height-1 blue">
                                                                            <input name="keluhan" type="checkbox" class="ace" />
                                                                            <span class="lbl"> Keluhan Pelanggan</span>
                                                                        </label>
                                                                    </div>

                                                                    <div>
                                                                        <label class="line-height-1 blue">
                                                                            <input name="audit" type="checkbox" class="ace" />
                                                                            <span class="lbl"> Audit Internal</span>
                                                                        </label>
                                                                    </div>

                                                                    <div>
                                                                        <label class="line-height-1 blue">
                                                                            <input name="laporan" type="checkbox" class="ace" />
                                                                            <span class="lbl"> Laporan Ketidaksesuaian</span>
                                                                        </label>
                                                                    </div>

                                                                    <div>
                                                                        <label class="line-height-1 blue">
                                                                            <label class="middle ">
                                                                                <input class="ace" type="checkbox" id="id-disable-check">
                                                                                <span class="lbl"> Lain-lainnya, sebutkan:</span>
                                                                            </label>
                                                                            <div>
                                                                                <input type="text" class="col-sm-12" id="form-input-readonly" value="">                                                                
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="space-2"></div>

                                                            <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="masalah">Masalah</label>
                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                        <textarea class="input-xxlarge" name="comment" id="comment"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="space-2"></div>

                                                            <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="masalah">Attach</label>
                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                        <input type="file" class="col-xs-12" id="id-input-file-2" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="space-2"></div>

                                                            <div class="form-group"> 
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Tanggal Terjadi Masalah</label>
                                                                <div class="col-xs-12 col-sm-3">
                                                                    <div class="input-group">
                                                                        <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-calendar bigger-110"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="space-2"></div>
                                                            
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Lokasi/Tempat:</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                        <input type="text" id="name" name="lokasi" class="col-xs-12 col-sm-5" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="step-pane" data-step="2">

                                                    </div>

                                                    <div class="step-pane" data-step="3">
                                                        <div class="center">
                                                            <h3 class="blue lighter">This is step 3</h3>
                                                        </div>
                                                    </div>

                                                    <div class="step-pane" data-step="4">
                                                        <div class="center">
                                                            <h3 class="green">Congrats!</h3>
                                                            Your product is ready to ship! Click finish to continue!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr />
                                            <div class="wizard-actions">
                                                <button class="btn btn-prev">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    Prev
                                                </button>

                                                <button class="btn btn-success btn-next" data-last="Finish">
                                                    Next
                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                </button>
                                            </div>
                                        </div><!-- /.widget-main -->
                                    </div><!-- /.widget-body -->
                                </div>

                                <div id="modal-wizard" class="modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div id="modal-wizard-container">
                                                <div class="modal-header">
                                                    <ul class="steps">
                                                        <li data-step="1" class="active">
                                                            <span class="step">1</span>
                                                            <span class="title">Validation states</span>
                                                        </li>

                                                        <li data-step="2">
                                                            <span class="step">2</span>
                                                            <span class="title">Alerts</span>
                                                        </li>

                                                        <li data-step="3">
                                                            <span class="step">3</span>
                                                            <span class="title">Payment Info</span>
                                                        </li>

                                                        <li data-step="4">
                                                            <span class="step">4</span>
                                                            <span class="title">Other Info</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="modal-body step-content">
                                                    <div class="step-pane active" data-step="1">
                                                        <div class="center">
                                                            <h4 class="blue">Step 1</h4>
                                                        </div>
                                                    </div>

                                                    <div class="step-pane" data-step="2">
                                                        <div class="center">
                                                            <h4 class="blue">Step 2</h4>
                                                        </div>
                                                    </div>

                                                    <div class="step-pane" data-step="3">
                                                        <div class="center">
                                                            <h4 class="blue">Step 3</h4>
                                                        </div>
                                                    </div>

                                                    <div class="step-pane" data-step="4">
                                                        <div class="center">
                                                            <h4 class="blue">Step 4</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer wizard-actions">
                                                <button class="btn btn-sm btn-prev">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    Prev
                                                </button>

                                                <button class="btn btn-success btn-sm btn-next" data-last="Finish">
                                                    Next
                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                </button>

                                                <button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
                                                    <i class="ace-icon fa fa-times"></i>
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">Complain</span>
                            Application &copy; 2013-2014
                        </span>

                        &nbsp; &nbsp;
                        <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="assets/js/jquery.2.1.1.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

        <!--[if !IE]> -->
        <script type="text/javascript">
                window.jQuery || document.write("<script src='assets/js/jquery.min.js'>" + "<" + "/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement)
                document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->
        <script src="assets/js/fuelux.wizard.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/additional-methods.min.js"></script>
        <script src="assets/js/bootbox.min.js"></script>
        <script src="assets/js/jquery.maskedinput.min.js"></script>
        <script src="assets/js/select2.min.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
        <script src="assets/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/bootstrap-timepicker.min.js"></script>

        <!-- ace scripts -->
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function ($) {
                $('#id-disable-check').on('click', function () {
                    var inp = $('#form-input-readonly').get(0);
                    if (inp.hasAttribute('disabled')) {
//                        inp.setAttribute('readonly', 'true');
//                        inp.removeAttribute('disabled');
                        inp.setAttribute('disabled', 'disabled');
//                        inp.value = "This text field is readonly!";
                    }
                    else {
                        inp.removeAttribute('disabled');
//                        inp.removeAttribute('readonly');
//                        inp.value = "This text field is disabled!";
                    }
                });

                $('[data-rel=tooltip]').tooltip();

                $(".select2").css('width', '200px').select2({allowClear: true})
                        .on('change', function () {
                            $(this).closest('form').validate().element($(this));
                        });
                $('.date-picker').datepicker({
                    autoclose: true,
                    todayHighlight: true
                })

                var $validation = false;
                $('#fuelux-wizard-container')
                        .ace_wizard({
                            //step: 2 //optional argument. wizard will jump to step "2" at first
                            //buttons: '.wizard-actions:eq(0)'
                        })
                        .on('actionclicked.fu.wizard', function (e, info) {
                            if (info.step == 1 && $validation) {
                                if (!$('#validation-form').valid())
                                    e.preventDefault();
                            }
                        })
                        .on('finished.fu.wizard', function (e) {
                            bootbox.dialog({
                                message: "Thank you! Your information was successfully saved!",
                                buttons: {
                                    "success": {
                                        "label": "OK",
                                        "className": "btn-sm btn-primary"
                                    }
                                }
                            });
                        }).on('stepclick.fu.wizard', function (e) {
                    //e.preventDefault();//this will prevent clicking and selecting steps
                });


                //jump to a step
                /**
                 var wizard = $('#fuelux-wizard-container').data('fu.wizard')
                 wizard.currentStep = 3;
                 wizard.setState();
                 */

                //determine selected step
                //wizard.selectedItem().step



                //hide or show the other form which requires validation
                //this is for demo only, you usullay want just one form in your application
                $('#skip-validation').removeAttr('checked').on('click', function () {
                    $validation = this.checked;
                    if (this.checked) {
                        $('#sample-form').hide();
                        $('#validation-form').removeClass('hide');
                    }
                    else {
                        $('#validation-form').addClass('hide');
                        $('#sample-form').show();
                    }
                })

                $('.ace-file-container').addClass('col-sm-3');

                //documentation : http://docs.jquery.com/Plugins/Validation/validate


                $.mask.definitions['~'] = '[+-]';
                $('#phone').mask('(999) 999-9999');

                jQuery.validator.addMethod("phone", function (value, element) {
                    return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
                }, "Enter a valid phone number.");

                $('#validation-form').validate({
                    errorElement: 'div',
                    errorClass: 'help-block',
                    focusInvalid: false,
                    ignore: "",
                    rules: {
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true,
                            minlength: 5
                        },
                        password2: {
                            required: true,
                            minlength: 5,
                            equalTo: "#password"
                        },
                        name: {
                            required: true
                        },
                        phone: {
                            required: true,
                            phone: 'required'
                        },
                        url: {
                            required: true,
                            url: true
                        },
                        comment: {
                            required: true
                        },
                        state: {
                            required: true
                        },
                        platform: {
                            required: true
                        },
                        subscription: {
                            required: true
                        },
                        gender: {
                            required: true,
                        },
                        agree: {
                            required: true,
                        }
                    },
                    messages: {
                        email: {
                            required: "Please provide a valid email.",
                            email: "Please provide a valid email."
                        },
                        password: {
                            required: "Please specify a password.",
                            minlength: "Please specify a secure password."
                        },
                        state: "Please choose state",
                        subscription: "Please choose at least one option",
                        gender: "Please choose gender",
                        agree: "Please accept our policy"
                    },
                    highlight: function (e) {
                        $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
                    },
                    success: function (e) {
                        $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                        $(e).remove();
                    },
                    errorPlacement: function (error, element) {
                        if (element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                            var controls = element.closest('div[class*="col-"]');
                            if (controls.find(':checkbox,:radio').length > 1)
                                controls.append(error);
                            else
                                error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                        }
                        else if (element.is('.select2')) {
                            error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                        }
                        else if (element.is('.chosen-select')) {
                            error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                        }
                        else
                            error.insertAfter(element.parent());
                    },
                    submitHandler: function (form) {
                    },
                    invalidHandler: function (form) {
                    }
                });

                $('#id-input-file-1 , #id-input-file-2').ace_file_input({
                    no_file: 'No File ...',
                    btn_choose: 'Choose',
                    btn_change: 'Change',
                    droppable: false,
                    onchange: null,
                    thumbnail: false //| true | large
                            //whitelist:'gif|png|jpg|jpeg'
                            //blacklist:'exe|php'
                            //onchange:''
                            //
                });

                $('#modal-wizard-container').ace_wizard();
                $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');


                /**
                 $('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
                 $(this).closest('form').validate().element($(this));
                 });
                 
                 $('#mychosen').chosen().on('change', function(ev) {
                 $(this).closest('form').validate().element($(this));
                 });
                 */


                $(document).one('ajaxloadstart.page', function (e) {
                    //in ajax mode, remove remaining elements before leaving page
                    $('[class*=select2]').remove();
                });
            })
        </script>
    </body>
</html>
