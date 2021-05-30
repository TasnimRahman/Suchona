<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view('layouts/admin/index');
    }
    function users(){
        return view('layouts/admin/users');
    }
    function blog(){
        return view('layouts/admin/blog');
    }
    function mail(){
        return view('layouts/admin/mail');
    }
    function slider(){
        return view('layouts/admin/slider');
    }
    function charts(){
        return view('layouts/admin/charts');
    }
    function table_basic(){
        return view('layouts/admin/table_basic');
    }
    function table_datatable(){
        return view('layouts/admin/table_datatable');
    }
    function formsGeneral(){
        return view('layouts/admin/forms_general');
    }
    function formsSelect(){
        return view('layouts/admin/forms_select');
    }
    function formsValidation(){
        return view('layouts/admin/forms_validation');
    }
    function formsTextEditors(){
        return view('layouts/admin/forms_text_editors');
    }
    function formsMultipleFileUpload(){
        return view('layouts/admin/forms_multiple_file_upload');
    }
    function formsDateTime(){
        return view('layouts/admin/forms_date_time');
    }
    function formsColorPicker(){
        return view('layouts/admin/forms_color_picker');
    }
    function mediaFancybox(){
        return view('layouts/admin/media_fancybox');
    }
    function mediaMasonry(){
        return view('layouts/admin/media_masonry');
    }
    function pagePricingTable(){
        return view('layouts/admin/page_pricing_table');
    }
    function pageTimeline(){
        return view('layouts/admin/page_timeline');
    }
}
