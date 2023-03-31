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

/* default/template/account/vendor/lts_coupon_form.twig */
class __TwigTemplate_3b990c99ee1b534e6a01907ad2136886c85b507dc29f8d0b0f76d369d9f2b965 extends \Twig\Template
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
        echo "   ";
        echo ($context["lts_column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"lts-vendor-form-coupon\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"lts-vendor-form-coupon\" class=\"form-horizontal\">
                <ul class=\"nav nav-tabs\">
                  <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                  ";
        // line 30
        if (($context["coupon_id"] ?? null)) {
            // line 31
            echo "                  <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            echo ($context["tab_history"] ?? null);
            echo "</a></li>
                  ";
        }
        // line 33
        echo "                </ul>
                <div class=\"tab-content\">
                  <div class=\"tab-pane active\" id=\"tab-general\">
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 37
        echo ($context["entry_name"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"name\" value=\"";
        // line 39
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                        ";
        // line 40
        if (($context["error_name"] ?? null)) {
            // line 41
            echo "                        <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                        ";
        }
        // line 42
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-code\"><span data-toggle=\"tooltip\" title=\"";
        // line 45
        echo ($context["help_code"] ?? null);
        echo "\">";
        echo ($context["entry_code"] ?? null);
        echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"code\" value=\"";
        // line 47
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
                        ";
        // line 48
        if (($context["error_code"] ?? null)) {
            // line 49
            echo "                        <div class=\"text-danger\">";
            echo ($context["error_code"] ?? null);
            echo "</div>
                        ";
        }
        // line 50
        echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-type\"><span data-toggle=\"tooltip\" title=\"";
        // line 53
        echo ($context["help_type"] ?? null);
        echo "\">";
        echo ($context["entry_type"] ?? null);
        echo "</span></label>
                      <div class=\"col-sm-10\">
                        <select name=\"type\" id=\"input-type\" class=\"form-control\">
                          
                          ";
        // line 57
        if ((($context["type"] ?? null) == "P")) {
            // line 58
            echo "                          
                          <option value=\"P\" selected=\"selected\">";
            // line 59
            echo ($context["text_percent"] ?? null);
            echo "</option>
                          
                          ";
        } else {
            // line 62
            echo "                          
                          <option value=\"P\">";
            // line 63
            echo ($context["text_percent"] ?? null);
            echo "</option>
                          
                          ";
        }
        // line 66
        echo "                          ";
        if ((($context["type"] ?? null) == "F")) {
            // line 67
            echo "                          
                          <option value=\"F\" selected=\"selected\">";
            // line 68
            echo ($context["text_amount"] ?? null);
            echo "</option>
                          
                          ";
        } else {
            // line 71
            echo "                          
                          <option value=\"F\">";
            // line 72
            echo ($context["text_amount"] ?? null);
            echo "</option>
                          
                          ";
        }
        // line 75
        echo "                        
                        </select>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-discount\">";
        // line 80
        echo ($context["entry_discount"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"discount\" value=\"";
        // line 82
        echo ($context["discount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount"] ?? null);
        echo "\" id=\"input-discount\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 86
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"total\" value=\"";
        // line 88
        echo ($context["total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 92
        echo ($context["help_logged"] ?? null);
        echo "\">";
        echo ($context["entry_logged"] ?? null);
        echo "</span></label>
                      <div class=\"col-sm-10\">
                        <label class=\"radio-inline\"> ";
        // line 94
        if (($context["logged"] ?? null)) {
            // line 95
            echo "                          <input type=\"radio\" name=\"logged\" value=\"1\" checked=\"checked\" />
                          ";
            // line 96
            echo ($context["text_yes"] ?? null);
            echo "
                          ";
        } else {
            // line 98
            echo "                          <input type=\"radio\" name=\"logged\" value=\"1\" />
                          ";
            // line 99
            echo ($context["text_yes"] ?? null);
            echo "
                          ";
        }
        // line 100
        echo " </label>
                        <label class=\"radio-inline\"> ";
        // line 101
        if ( !($context["logged"] ?? null)) {
            // line 102
            echo "                          <input type=\"radio\" name=\"logged\" value=\"0\" checked=\"checked\" />
                          ";
            // line 103
            echo ($context["text_no"] ?? null);
            echo "
                          ";
        } else {
            // line 105
            echo "                          <input type=\"radio\" name=\"logged\" value=\"0\" />
                          ";
            // line 106
            echo ($context["text_no"] ?? null);
            echo "
                          ";
        }
        // line 107
        echo " </label>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\">";
        // line 111
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <label class=\"radio-inline\"> ";
        // line 113
        if (($context["shipping"] ?? null)) {
            // line 114
            echo "                          <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                          ";
            // line 115
            echo ($context["text_yes"] ?? null);
            echo "
                          ";
        } else {
            // line 117
            echo "                          <input type=\"radio\" name=\"shipping\" value=\"1\" />
                          ";
            // line 118
            echo ($context["text_yes"] ?? null);
            echo "
                          ";
        }
        // line 119
        echo " </label>
                        <label class=\"radio-inline\"> ";
        // line 120
        if ( !($context["shipping"] ?? null)) {
            // line 121
            echo "                          <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                          ";
            // line 122
            echo ($context["text_no"] ?? null);
            echo "
                          ";
        } else {
            // line 124
            echo "                          <input type=\"radio\" name=\"shipping\" value=\"0\" />
                          ";
            // line 125
            echo ($context["text_no"] ?? null);
            echo "
                          ";
        }
        // line 126
        echo " </label>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 130
        echo ($context["help_product"] ?? null);
        echo "\">";
        echo ($context["entry_product"] ?? null);
        echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 132
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                        <div id=\"coupon-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_product"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_product"]) {
            // line 134
            echo "                          <div id=\"coupon-product";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 134);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "name", [], "any", false, false, false, 134);
            echo "
                            <input type=\"hidden\" name=\"coupon_product[]\" value=\"";
            // line 135
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 135);
            echo "\" />
                          </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo " </div>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 141
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 143
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                        <div id=\"coupon-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_category"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_category"]) {
            // line 145
            echo "                          <div id=\"coupon-category";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 145);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "name", [], "any", false, false, false, 145);
            echo "
                            <input type=\"hidden\" name=\"coupon_category[]\" value=\"";
            // line 146
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 146);
            echo "\" />
                          </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo " </div>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-date-start\">";
        // line 152
        echo ($context["entry_date_start"] ?? null);
        echo "</label>
                      <div class=\"col-sm-3\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"date_start\" value=\"";
        // line 155
        echo ($context["date_start"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-start\" class=\"form-control\" />
                          <span class=\"input-group-btn\">
                          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                          </span></div>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-date-end\">";
        // line 162
        echo ($context["entry_date_end"] ?? null);
        echo "</label>
                      <div class=\"col-sm-3\">
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"date_end\" value=\"";
        // line 165
        echo ($context["date_end"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-end\" class=\"form-control\" />
                          <span class=\"input-group-btn\">
                          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                          </span></div>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-uses-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 172
        echo ($context["help_uses_total"] ?? null);
        echo "\">";
        echo ($context["entry_uses_total"] ?? null);
        echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"uses_total\" value=\"";
        // line 174
        echo ($context["uses_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_total"] ?? null);
        echo "\" id=\"input-uses-total\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-uses-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 178
        echo ($context["help_uses_customer"] ?? null);
        echo "\">";
        echo ($context["entry_uses_customer"] ?? null);
        echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"uses_customer\" value=\"";
        // line 180
        echo ($context["uses_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_customer"] ?? null);
        echo "\" id=\"input-uses-customer\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 184
        echo ($context["entry_status"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"status\" id=\"input-status\" class=\"form-control\">
                          
                          ";
        // line 188
        if (($context["status"] ?? null)) {
            // line 189
            echo "                          
                          <option value=\"1\" selected=\"selected\">";
            // line 190
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                          <option value=\"0\">";
            // line 191
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                          
                          ";
        } else {
            // line 194
            echo "                          
                          <option value=\"1\">";
            // line 195
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                          <option value=\"0\" selected=\"selected\">";
            // line 196
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                          
                          ";
        }
        // line 199
        echo "                        
                        </select>
                      </div>
                    </div>
                  </div>
                  ";
        // line 204
        if (($context["coupon_id"] ?? null)) {
            // line 205
            echo "                  <div class=\"tab-pane\" id=\"tab-history\">
                    <fieldset>
                      <legend>";
            // line 207
            echo ($context["text_coupon"] ?? null);
            echo "</legend>
                      <div id=\"history\"></div>
                    </fieldset>
                  </div>
                  ";
        }
        // line 211
        echo " </div>
              </form>

            </div>
          </div>
        </div>
     
<script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=account/vendor/lts_product/autocomplete&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',     
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['product_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'product\\']').val('');
    
    \$('#coupon-product' + item['value']).remove();
    
    \$('#coupon-product').append('<div id=\"coupon-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"coupon_product[]\" value=\"' + item['value'] + '\" /></div>'); 
  }
});

\$('#coupon-product').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});

// Category
\$('input[name=\\'category\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=account/vendor/lts_category/autocomplete&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['category_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'category\\']').val('');
    
    \$('#coupon-category' + item['value']).remove();
    
    \$('#coupon-category').append('<div id=\"coupon-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"coupon_category[]\" value=\"' + item['value'] + '\" /></div>');
  } 
});

\$('#coupon-category').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});
//--></script> 
  ";
        // line 276
        if (($context["coupon_id"] ?? null)) {
            echo " 
  <script type=\"text/javascript\"><!--
\$('#history').delegate('.pagination a', 'click', function(e) {
  e.preventDefault();
  
  \$('#history').load(this.href);
});     

\$('#history').load('index.php?route=account/vendor/lts_coupon/history&coupon_id=";
            // line 284
            echo ($context["coupon_id"] ?? null);
            echo "');
//--></script> 
  ";
        }
        // line 286
        echo " 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  language: '";
        // line 289
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});
//--></script>

";
        // line 294
        echo ($context["footer"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_coupon_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  660 => 294,  652 => 289,  647 => 286,  641 => 284,  630 => 276,  563 => 211,  555 => 207,  551 => 205,  549 => 204,  542 => 199,  536 => 196,  532 => 195,  529 => 194,  523 => 191,  519 => 190,  516 => 189,  514 => 188,  507 => 184,  498 => 180,  491 => 178,  482 => 174,  475 => 172,  463 => 165,  457 => 162,  445 => 155,  439 => 152,  433 => 148,  424 => 146,  417 => 145,  413 => 144,  409 => 143,  402 => 141,  396 => 137,  387 => 135,  380 => 134,  376 => 133,  372 => 132,  365 => 130,  359 => 126,  354 => 125,  351 => 124,  346 => 122,  343 => 121,  341 => 120,  338 => 119,  333 => 118,  330 => 117,  325 => 115,  322 => 114,  320 => 113,  315 => 111,  309 => 107,  304 => 106,  301 => 105,  296 => 103,  293 => 102,  291 => 101,  288 => 100,  283 => 99,  280 => 98,  275 => 96,  272 => 95,  270 => 94,  263 => 92,  254 => 88,  247 => 86,  238 => 82,  233 => 80,  226 => 75,  220 => 72,  217 => 71,  211 => 68,  208 => 67,  205 => 66,  199 => 63,  196 => 62,  190 => 59,  187 => 58,  185 => 57,  176 => 53,  171 => 50,  165 => 49,  163 => 48,  157 => 47,  150 => 45,  145 => 42,  139 => 41,  137 => 40,  131 => 39,  126 => 37,  120 => 33,  114 => 31,  112 => 30,  108 => 29,  103 => 27,  96 => 23,  92 => 21,  84 => 17,  82 => 16,  77 => 13,  66 => 11,  62 => 10,  57 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_coupon_form.twig", "");
    }
}
