<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/account/vendor/lts_option_form.twig */
class __TwigTemplate_5fc94eb0ba893dc37dc65b57abc8aaab307eef4b8f0c0d0306784471565f04ea extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "     ";
        echo ($context["lts_column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-option-vendor\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">

            <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-option-vendor\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 29
        echo ($context["text_option"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\">";
        // line 31
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\"> ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 33
            echo "                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"catalog/language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 33);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 33);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 33);
            echo "\" /></span>
                  <input type=\"text\" name=\"option_description[";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 34);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["option_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 34)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["option_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 34)] ?? null) : null), "name", [], "any", false, false, false, 34)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\" />
                </div>
                ";
            // line 36
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36)] ?? null) : null)) {
                // line 37
                echo "                <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 37)] ?? null) : null);
                echo "</div>
                ";
            }
            // line 39
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-type\">";
        // line 42
        echo ($context["entry_type"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"type\" id=\"input-type\" class=\"form-control\">
                  <optgroup label=\"";
        // line 45
        echo ($context["text_choose"] ?? null);
        echo "\">
                ";
        // line 46
        if ((($context["type"] ?? null) == "select")) {
            // line 47
            echo "                
                
                  <option value=\"select\" selected=\"selected\">";
            // line 49
            echo ($context["text_select"] ?? null);
            echo "</option>
                  
                
                ";
        } else {
            // line 53
            echo "                
                
                  <option value=\"select\">";
            // line 55
            echo ($context["text_select"] ?? null);
            echo "</option>
                  
                
                ";
        }
        // line 59
        echo "                ";
        if ((($context["type"] ?? null) == "radio")) {
            // line 60
            echo "                
                
                  <option value=\"radio\" selected=\"selected\">";
            // line 62
            echo ($context["text_radio"] ?? null);
            echo "</option>
                  
                
                ";
        } else {
            // line 66
            echo "                
                
                  <option value=\"radio\">";
            // line 68
            echo ($context["text_radio"] ?? null);
            echo "</option>
                  
                
                ";
        }
        // line 72
        echo "                ";
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 73
            echo "                
                
                  <option value=\"checkbox\" selected=\"selected\">";
            // line 75
            echo ($context["text_checkbox"] ?? null);
            echo "</option>
                  
                
                ";
        } else {
            // line 79
            echo "                
                
                  <option value=\"checkbox\">";
            // line 81
            echo ($context["text_checkbox"] ?? null);
            echo "</option>
                  
                
                ";
        }
        // line 85
        echo "                </optgroup>
                  <optgroup label=\"";
        // line 86
        echo ($context["text_input"] ?? null);
        echo "\">
                ";
        // line 87
        if ((($context["type"] ?? null) == "text")) {
            // line 88
            echo "                
                
                  <option value=\"text\" selected=\"selected\">";
            // line 90
            echo ($context["text_text"] ?? null);
            echo "</option>
                  
                
                ";
        } else {
            // line 94
            echo "                
                
                  <option value=\"text\">";
            // line 96
            echo ($context["text_text"] ?? null);
            echo "</option>
                  
                
                ";
        }
        // line 100
        echo "                ";
        if ((($context["type"] ?? null) == "textarea")) {
            // line 101
            echo "                
                
                  <option value=\"textarea\" selected=\"selected\">";
            // line 103
            echo ($context["text_textarea"] ?? null);
            echo "</option>
                  
                
                ";
        } else {
            // line 107
            echo "                
                
                  <option value=\"textarea\">";
            // line 109
            echo ($context["text_textarea"] ?? null);
            echo "</option>
                  
                
                ";
        }
        // line 113
        echo "                </optgroup>
                  <optgroup label=\"";
        // line 114
        echo ($context["text_file"] ?? null);
        echo "\">
                ";
        // line 115
        if ((($context["type"] ?? null) == "file")) {
            // line 116
            echo "                
                
                  <option value=\"file\" selected=\"selected\">";
            // line 118
            echo ($context["text_file"] ?? null);
            echo "</option>
                  
                
                ";
        } else {
            // line 122
            echo "                
                
                  <option value=\"file\">";
            // line 124
            echo ($context["text_file"] ?? null);
            echo "</option>
                  
                
                ";
        }
        // line 128
        echo "                </optgroup>
                  <optgroup label=\"";
        // line 129
        echo ($context["text_date"] ?? null);
        echo "\">
                ";
        // line 130
        if ((($context["type"] ?? null) == "date")) {
            // line 131
            echo "                
                
                  <option value=\"date\" selected=\"selected\">";
            // line 133
            echo ($context["text_date"] ?? null);
            echo "</option>
                  
                
                ";
        } else {
            // line 137
            echo "                
                
                  <option value=\"date\">";
            // line 139
            echo ($context["text_date"] ?? null);
            echo "</option>
                  
                
                ";
        }
        // line 143
        echo "                ";
        if ((($context["type"] ?? null) == "time")) {
            // line 144
            echo "                
                
                  <option value=\"time\" selected=\"selected\">";
            // line 146
            echo ($context["text_time"] ?? null);
            echo "</option>
                  
                
                ";
        } else {
            // line 150
            echo "                
                
                  <option value=\"time\">";
            // line 152
            echo ($context["text_time"] ?? null);
            echo "</option>
                  
                
                ";
        }
        // line 156
        echo "                ";
        if ((($context["type"] ?? null) == "datetime")) {
            // line 157
            echo "                
                
                  <option value=\"datetime\" selected=\"selected\">";
            // line 159
            echo ($context["text_datetime"] ?? null);
            echo "</option>
                  
                
                ";
        } else {
            // line 163
            echo "                
                
                  <option value=\"datetime\">";
            // line 165
            echo ($context["text_datetime"] ?? null);
            echo "</option>
                  
                
                ";
        }
        // line 169
        echo "                </optgroup>
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 174
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 176
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 181
        echo ($context["text_value"] ?? null);
        echo "</legend>
            <table id=\"option-value\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left required\">";
        // line 185
        echo ($context["entry_option_value"] ?? null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 186
        echo ($context["entry_image"] ?? null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 187
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
              
              ";
        // line 193
        $context["option_value_row"] = 0;
        // line 194
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["option_values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
            // line 195
            echo "              <tr id=\"option-value-row";
            echo ($context["option_value_row"] ?? null);
            echo "\">
                <td class=\"text-center\"><input type=\"hidden\" name=\"option_value[";
            // line 196
            echo ($context["option_value_row"] ?? null);
            echo "][option_value_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 196);
            echo "\" />
                  ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 198
                echo "                  <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"catalog/language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 198);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 198);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 198);
                echo "\" /></span>
                    <input type=\"text\" name=\"option_value[";
                // line 199
                echo ($context["option_value_row"] ?? null);
                echo "][option_value_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 199);
                echo "][name]\" value=\"";
                echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_description", [], "any", false, false, false, 199)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 199)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_description", [], "any", false, false, false, 199)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 199)] ?? null) : null), "name", [], "any", false, false, false, 199)) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" class=\"form-control\" />
                  </div>
                  ";
                // line 201
                if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_option_value"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 201)] ?? null) : null)) {
                    // line 202
                    echo "                  <div class=\"text-danger\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_option_value"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 202)] ?? null) : null);
                    echo "</div>
                  ";
                }
                // line 204
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 205
            echo ($context["option_value_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "thumb", [], "any", false, false, false, 205);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
                  <input type=\"hidden\" name=\"option_value[";
            // line 206
            echo ($context["option_value_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 206);
            echo "\" id=\"input-image";
            echo ($context["option_value_row"] ?? null);
            echo "\" /></td>
                <td class=\"text-right\"><input type=\"text\" name=\"option_value[";
            // line 207
            echo ($context["option_value_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "sort_order", [], "any", false, false, false, 207);
            echo "\" class=\"form-control\" /></td>
                <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#option-value-row";
            // line 208
            echo ($context["option_value_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
              </tr>
              ";
            // line 210
            $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
            // line 211
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                </tbody>
              
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-right\"><button type=\"button\" onclick=\"addOptionValue();\" data-toggle=\"tooltip\" title=\"";
        // line 217
        echo ($context["text_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
        </form>

            
            </div>
          </div>
        </div>
      
  <script type=\"text/javascript\"><!--
\$('select[name=\\'type\\']').on('change', function() {
  if (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {
    \$('#option-value').parent().show();
  } else {
    \$('#option-value').parent().hide();
  }
});

\$('select[name=\\'type\\']').trigger('change');

var option_value_row = ";
        // line 240
        echo ($context["option_value_row"] ?? null);
        echo ";

function addOptionValue() {
  html  = '<tr id=\"option-value-row' + option_value_row + '\">';
    html += '  <td class=\"text-left\"><input type=\"hidden\" name=\"option_value[' + option_value_row + '][option_value_id]\" value=\"\" />';
  ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 246
            echo "  html += '    <div class=\"input-group\">';
  html += '      <span class=\"input-group-addon\"><img src=\"catalog/language/";
            // line 247
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 247);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 247);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 247);
            echo "\" /></span><input type=\"text\" name=\"option_value[' + option_value_row + '][option_value_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 247);
            echo "][name]\" value=\"\" placeholder=\"";
            echo ($context["entry_option_value"] ?? null);
            echo "\" class=\"form-control\" />';
    html += '    </div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "  html += '  </td>';
    html += '  <td class=\"text-center\"><a href=\"\" id=\"thumb-image' + option_value_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 251
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"option_value[' + option_value_row + '][image]\" value=\"\" id=\"input-image' + option_value_row + '\" /></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"option_value[' + option_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 252
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 253
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';

  \$('#option-value tbody').append(html);

  option_value_row++;
}
//--></script>
";
        // line 261
        echo ($context["footer"] ?? null);
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_option_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  639 => 261,  628 => 253,  624 => 252,  618 => 251,  615 => 250,  598 => 247,  595 => 246,  591 => 245,  583 => 240,  557 => 217,  550 => 212,  544 => 211,  542 => 210,  535 => 208,  529 => 207,  521 => 206,  513 => 205,  505 => 204,  499 => 202,  497 => 201,  486 => 199,  477 => 198,  473 => 197,  467 => 196,  462 => 195,  457 => 194,  455 => 193,  446 => 187,  442 => 186,  438 => 185,  431 => 181,  421 => 176,  416 => 174,  409 => 169,  402 => 165,  398 => 163,  391 => 159,  387 => 157,  384 => 156,  377 => 152,  373 => 150,  366 => 146,  362 => 144,  359 => 143,  352 => 139,  348 => 137,  341 => 133,  337 => 131,  335 => 130,  331 => 129,  328 => 128,  321 => 124,  317 => 122,  310 => 118,  306 => 116,  304 => 115,  300 => 114,  297 => 113,  290 => 109,  286 => 107,  279 => 103,  275 => 101,  272 => 100,  265 => 96,  261 => 94,  254 => 90,  250 => 88,  248 => 87,  244 => 86,  241 => 85,  234 => 81,  230 => 79,  223 => 75,  219 => 73,  216 => 72,  209 => 68,  205 => 66,  198 => 62,  194 => 60,  191 => 59,  184 => 55,  180 => 53,  173 => 49,  169 => 47,  167 => 46,  163 => 45,  157 => 42,  147 => 39,  141 => 37,  139 => 36,  130 => 34,  121 => 33,  117 => 32,  113 => 31,  108 => 29,  103 => 27,  96 => 23,  92 => 21,  84 => 17,  82 => 16,  77 => 13,  66 => 11,  62 => 10,  57 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_option_form.twig", "");
    }
}
