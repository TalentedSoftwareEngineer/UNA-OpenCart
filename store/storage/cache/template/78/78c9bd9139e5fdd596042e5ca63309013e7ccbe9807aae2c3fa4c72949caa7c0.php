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

/* default/template/account/vendor/lts_order_list.twig */
class __TwigTemplate_7c9db356feb98a6141aebe911c591c95dd864b24feb72068dda35f8be23024d9 extends \Twig\Template
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
      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
      <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 7
        echo ($context["shipping"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></button>
      <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 8
        echo ($context["invoice"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i>
      </button>
    </div>
    <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 24
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 29
        echo "
  <div class=\"row\">
    <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
      <div class=\"panel panel-default\">  
          <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 34
        echo ($context["text_filter"] ?? null);
        echo "</h3>
        </div>
    <div class=\"panel-body\">
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-id\">";
        // line 38
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 39
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer\">";
        // line 42
        echo ($context["entry_customer"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 43
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-status\">";
        // line 46
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
            <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
              <option value=\"\"></option>
              
              ";
        // line 50
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 51
            echo "              
              <option value=\"0\" selected=\"selected\">";
            // line 52
            echo ($context["text_missing"] ?? null);
            echo "</option>
              
              ";
        } else {
            // line 55
            echo "              
              <option value=\"0\">";
            // line 56
            echo ($context["text_missing"] ?? null);
            echo "</option>
              
              ";
        }
        // line 59
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 60
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 60) == ($context["filter_order_status_id"] ?? null))) {
                // line 61
                echo "              
              <option value=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 62);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 62);
                echo "</option>
              
              ";
            } else {
                // line 65
                echo "              
              <option value=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 66);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 66);
                echo "</option>
              
              ";
            }
            // line 69
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            
            </select>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-total\">";
        // line 74
        echo ($context["entry_total"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_total\" value=\"";
        // line 75
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-added\">";
        // line 78
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 80
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-modified\">";
        // line 86
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 88
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group text-right\">
            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 94
        echo ($context["button_filter"] ?? null);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
         <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 102
        echo ($context["text_list"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
 
            <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                    <td class=\"text-left\">";
        // line 112
        if ((($context["sort"] ?? null) == "o.order_id")) {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 113
        if ((($context["sort"] ?? null) == "customer")) {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 114
        if ((($context["sort"] ?? null) == "order_status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 115
        if ((($context["sort"] ?? null) == "o.total")) {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 116
        if ((($context["sort"] ?? null) == "o.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 117
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-center\">";
        // line 118
        echo ($context["column_action"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
        // line 123
        if (($context["orders"] ?? null)) {
            // line 124
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 125
                echo "
                <tr>
                  <td class=\"text-center\"> ";
                // line 127
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 127), ($context["selected"] ?? null))) {
                    // line 128
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 128);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 130
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 130);
                    echo "\" />
                    ";
                }
                // line 132
                echo "                    <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 132);
                echo "\" /></td>

                  <td class=\"text-left\">";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 134);
                echo "</td>
                  <td class=\"text-left\">";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 135);
                echo "</td>
                  <td class=\"text-left\">";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 136);
                echo "</td>
                  <td class=\"text-left\">";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 137);
                echo "</td>
                  <td class=\"text-left\">";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 138);
                echo "</td>
                  <td class=\"text-left\">";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 139);
                echo "</td>
                  <td class=\"text-center\"><a href=\"";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 140);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                 </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                ";
        } else {
            // line 145
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 146
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 149
        echo "                  </tbody>
                
              </table>
            </div>
          </form>
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 155
        echo ($context["pagination"] ?? null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 156
        echo ($context["results"] ?? null);
        echo "</div>
          </div>

            </div>
          </div>
        </div>
      </div>  
    </div>
<script type=\"text/javascript\"><!--
    \$('#button-filter').on('click', function() {
      url = '';

      var filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

      if (filter_order_id) {
        url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
      }

      var filter_customer = \$('input[name=\\'filter_customer\\']').val();

      if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
      }

      var filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();

      if (filter_order_status_id !== '') {
        url += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
      }

      var filter_total = \$('input[name=\\'filter_total\\']').val();

      if (filter_total) {
        url += '&filter_total=' + encodeURIComponent(filter_total);
      }

      var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

      if (filter_date_added) {
        url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
      }

      var filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

      if (filter_date_modified) {
        url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
      }

      location = 'index.php?route=account/vendor/lts_order'+ url;
    });
    //--></script> 
      <script type=\"text/javascript\"><!--
    \$('input[name=\\'filter_customer\\']').autocomplete({
      'source': function(request, response) {
        \$.ajax({
          url: 'index.php?route=account/vendor/lts_customer_list/autocomplete&filter_name=' +  encodeURIComponent(request),
          dataType: 'json',
          success: function(json) {
            response(\$.map(json, function(item) {
              return {
                label: item['name'],
                value: item['customer_id']
              }
            }));
          }
        });
      },
      'select': function(item) {
        \$('input[name=\\'filter_customer\\']').val(item['label']);
      }
    });
    //--></script> 
      <script type=\"text/javascript\"><!--
    \$('input[name^=\\'selected\\']').on('change', function() {
      \$('#button-shipping, #button-invoice').prop('disabled', true);

      var selected = \$('input[name^=\\'selected\\']:checked');

      if (selected.length) {
        \$('#button-invoice').prop('disabled', false);
      }

      for (i = 0; i < selected.length; i++) {
        if (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {
          \$('#button-shipping').prop('disabled', false);

          break;
        }
      }
    });

    \$('#button-shipping, #button-invoice').prop('disabled', true);

    \$('input[name^=\\'selected\\']:first').trigger('change');

    // IE and Edge fix!
    \$('#button-shipping, #button-invoice').on('click', function(e) {
      \$('#form-order').attr('action', this.getAttribute('formAction'));
    });

    \$('#form-order li:last-child a').on('click', function(e) {
      e.preventDefault();
      
      var element = this;
      
      if (confirm('";
        // line 261
        echo ($context["text_confirm"] ?? null);
        echo "')) {
        \$.ajax({
          url: '";
        // line 263
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/delete&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=' + \$(element).attr('href'),
          dataType: 'json',
          beforeSend: function() {
            \$(element).parent().parent().parent().find('button').button('loading');
          },
          complete: function() {
            \$(element).parent().parent().parent().find('button').button('reset');
          },
          success: function(json) {
            \$('.alert-dismissible').remove();
      
            if (json['error']) {
              \$('#content > .container').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }
      
            if (json['success']) {
              location = '";
        // line 279
        echo ($context["delete"] ?? null);
        echo "';
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    });
    //--></script> 
      <script src=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
      <link href=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
      <script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
      language: '";
        // line 293
        echo ($context["datepicker"] ?? null);
        echo "',
      pickTime: false
    });
    //--></script>
    ";
        // line 297
        echo ($context["footer"] ?? null);
        echo " 
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  653 => 297,  646 => 293,  629 => 279,  606 => 263,  601 => 261,  493 => 156,  489 => 155,  481 => 149,  475 => 146,  472 => 145,  469 => 144,  457 => 140,  453 => 139,  449 => 138,  445 => 137,  441 => 136,  437 => 135,  433 => 134,  427 => 132,  421 => 130,  415 => 128,  413 => 127,  409 => 125,  404 => 124,  402 => 123,  394 => 118,  376 => 117,  358 => 116,  340 => 115,  322 => 114,  304 => 113,  286 => 112,  273 => 102,  262 => 94,  251 => 88,  246 => 86,  235 => 80,  230 => 78,  222 => 75,  218 => 74,  212 => 70,  206 => 69,  198 => 66,  195 => 65,  187 => 62,  184 => 61,  181 => 60,  176 => 59,  170 => 56,  167 => 55,  161 => 52,  158 => 51,  156 => 50,  149 => 46,  141 => 43,  137 => 42,  129 => 39,  125 => 38,  118 => 34,  111 => 29,  103 => 25,  100 => 24,  92 => 20,  90 => 19,  85 => 16,  74 => 14,  70 => 13,  65 => 11,  57 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_order_list.twig", "");
    }
}
