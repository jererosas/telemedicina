<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{

    public function form_advanced_select()
    {
        return view('pages.forms.formelements.form-advanced-select');
    }
    
    public function form_check_radios()
    {
        return view('pages.forms.formelements.form-check-radios');
    }

    public function form_color_pickers()
    {
        return view('pages.forms.formelements.form-color-pickers');
    }

    public function form_counters_markup()
    {
        return view('pages.forms.formelements.form-counters-markup');
    }

    public function form_datetime_pickers()
    {
        return view('pages.forms.formelements.form-datetime-pickers');
    }

    public function form_file_uploads()
    {
        return view('pages.forms.formelements.form-file-uploads');
    }

    public function form_input_groups()
    {
        return view('pages.forms.formelements.form-input-groups');
    }

    public function form_input_masks()
    {
        return view('pages.forms.formelements.form-input-masks');
    }

    public function form_input_numbers()
    {
        return view('pages.forms.formelements.form-input-numbers');
    }

    public function form_inputs()
    {
        return view('pages.forms.formelements.form-inputs');
    }

    public function form_passwords()
    {
        return view('pages.forms.formelements.form-passwords');
    }

    public function form_range()
    {
        return view('pages.forms.formelements.form-range');
    }

    public function form_select()
    {
        return view('pages.forms.formelements.form-select');
    }

    public function form_switch()
    {
        return view('pages.forms.formelements.form-switch');
    }

    public function form_wizards()
    {
        return view('pages.forms.formelements.form-wizards');
    }

    public function form_advanced()
    {
        return view('pages.forms.form-advanced');
    }

    public function form_layouts()
    {
        return view('pages.forms.form-layouts');
    }

    public function form_select2()
    {
        return view('pages.forms.form-select2');
    }

    public function form_validations()
    {
        return view('pages.forms.form-validations');
    }

    public function quill_editor()
    {
        return view('pages.forms.quill-editor');
    }

}
