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

/* vendor/lts_vendor_list.twig */
class __TwigTemplate_262ae2f2645dab3418835f53a393a65f12e98da7be82c60cb06fc2530dada46d extends \Twig\Template
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
        echo " ";
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        ";
        // line 7
        echo "
        ";
        // line 9
        echo "
        ";
        // line 11
        echo "      </div>
      <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </ul>  
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 21
        if (($context["error_warning"] ?? null)) {
            // line 22
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 26
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 27
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 31
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 34
        echo ($context["text_vendor"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
          <div class=\"well\">
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <div class=\"form-group\">                 
                  <label class=\"control-label\" for=\"input-name\">";
        // line 41
        echo ($context["entry_store_owner"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_store_owner\" value=\"";
        // line 42
        echo ($context["filter_store_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_store_owner"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                </div>

                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-store_name\">";
        // line 46
        echo ($context["entry_store_name"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_store_name\" value=\"";
        // line 47
        echo ($context["filter_store_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_store_name"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\" />
                </div>
                
              </div>
              <div class=\"col-sm-3\">

                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-email\">";
        // line 54
        echo ($context["entry_email"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_email\" value=\"";
        // line 55
        echo ($context["filter_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                </div>



                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-status\">";
        // line 61
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                    <option value=\"\"></option>

                    ";
        // line 65
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 66
            echo "
                      <option value=\"1\" selected=\"selected\">";
            // line 67
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 71
            echo "
                      <option value=\"1\">";
            // line 72
            echo ($context["text_enabled"] ?? null);
            echo "</option>

                    ";
        }
        // line 75
        echo "                    ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 76
            echo "
                      <option value=\"0\" selected=\"selected\">";
            // line 77
            echo ($context["text_enabled"] ?? null);
            echo "</option>

                    ";
        } else {
            // line 80
            echo "
                      <option value=\"0\">";
            // line 81
            echo ($context["text_disabled"] ?? null);
            echo "</option>

                    ";
        }
        // line 84
        echo "
                  </select>
                </div>


              </div>

              <div class=\"col-sm-3\">

                <div class=\"form-group\">

                <label class=\"control-label\" for=\"input-approved\">";
        // line 95
        echo ($context["entry_approved"] ?? null);
        echo "</label>
                <select name=\"filter_approved\" id=\"input-approved\" class=\"form-control\">
                  <option value=\"\"></option>
                  ";
        // line 98
        if ((($context["filter_approved"] ?? null) == "1")) {
            // line 99
            echo "                    <option value=\"0\" selected=\"selected\">";
            echo ($context["text_no"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 101
            echo "                    <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                  ";
        }
        // line 103
        echo "
                  ";
        // line 104
        if ((($context["filter_approved"] ?? null) == "0")) {
            // line 105
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>

                  ";
        } else {
            // line 108
            echo "
                    <option value=\"0\">";
            // line 109
            echo ($context["text_no"] ?? null);
            echo "</option>

                  ";
        }
        // line 112
        echo "
                </select>
                  
                </div>

               
              </div>


                <div class=\"col-sm-3\">

                  <div class=\"form-group\">
                    <label class=\"control-label\" for=\"input-date-added\">";
        // line 124
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 126
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span> </div>
                  </div>
                  
                  <div class=\"form-group text-right\">
                    <button type=\"button\" id=\"button-filter\" data-toggle=\"tooltip\" title=\"";
        // line 133
        echo ($context["button_filter"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        echo ($context["button_filter"] ?? null);
        echo "</button>
                  </div>

                </div>

            </div>
          </div>




      \t<form action=\"";
        // line 144
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-vendor\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr> 
                  <td class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /> </td>

                  <td class=\"text-left\">";
        // line 151
        if ((($context["sort"] ?? null) == "store_owner")) {
            echo " <a href=\"";
            echo ($context["sort_store_owner"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_vendor"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_store_owner"] ?? null);
            echo "\">";
            echo ($context["column_vendor"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 152
        if ((($context["sort"] ?? null) == "lvs.store_name")) {
            echo " <a href=\"";
            echo ($context["sort_store_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_store_name"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_store_name"] ?? null);
            echo "\">";
            echo ($context["column_store_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                  <td class=\"text-center\">";
        // line 153
        if ((($context["sort"] ?? null) == "lp.sort_total_products")) {
            echo " <a href=\"";
            echo ($context["sort_total_products"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_total_products"] ?? null);
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 154
        if ((($context["sort"] ?? null) == "lv.email")) {
            echo " <a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 155
        if ((($context["sort"] ?? null) == "lv.status")) {
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
                  <td class=\"text-left\"><a href=\"";
        // line 156
        echo ($context["sort_status"] ?? null);
        echo "\">";
        echo ($context["column_date_added"] ?? null);
        echo "</a></td>
                \t<td class=\"text-right\">";
        // line 157
        echo ($context["column_action"] ?? null);
        echo "</td>
\t            </tr>
              </thead>
              <tbody>
              \t<tr>
              \t\t";
        // line 162
        if (($context["vendors"] ?? null)) {
            // line 163
            echo "              \t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vendors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["vendor"]) {
                // line 164
                echo "              \t\t\t\t<tr>
              \t\t\t\t\t<td class=\"text-center\">
                          ";
                // line 166
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["vendor"], "vendor_id", [], "any", false, false, false, 166), ($context["selected"] ?? null))) {
                    // line 167
                    echo "                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["vendor"], "vendor_id", [], "any", false, false, false, 167);
                    echo "\" checked=\"checked\" />
                          ";
                } else {
                    // line 169
                    echo "                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["vendor"], "vendor_id", [], "any", false, false, false, 169);
                    echo "\" />
                          ";
                }
                // line 171
                echo "                        </td>
              \t\t\t\t\t<td class=\"text-left\">";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["vendor"], "store_owner", [], "any", false, false, false, 172);
                echo "</td>
                        <td class=\"text-left\"><b>";
                // line 173
                echo twig_get_attribute($this->env, $this->source, $context["vendor"], "store_name", [], "any", false, false, false, 173);
                echo "</b> </td>
                        <td class=\"text-center\"><b> <span class=\"label label-success\" style=\"font-size: 11px;\">";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["vendor"], "total_products", [], "any", false, false, false, 174);
                echo "</span> </b> </td>
              \t\t\t\t\t<td class=\"text-left\">";
                // line 175
                echo twig_get_attribute($this->env, $this->source, $context["vendor"], "email", [], "any", false, false, false, 175);
                echo "</td>
              \t\t\t\t\t<td class=\"text-left\">";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["vendor"], "status", [], "any", false, false, false, 176);
                echo "</td>
                        <td class=\"text-left\">";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["vendor"], "date_added", [], "any", false, false, false, 177);
                echo "</td>
              \t\t\t\t\t<td class=\"text-right\">
                          ";
                // line 179
                if (twig_get_attribute($this->env, $this->source, $context["vendor"], "approved", [], "any", false, false, false, 179)) {
                    // line 180
                    echo "                          ";
                } else {
                    // line 181
                    echo "                          <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["vendor"], "approve", [], "any", false, false, false, 181);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_approve"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-thumbs-o-up\"></i></a>";
                }
                // line 182
                echo "                          <div class=\"btn-group\"  data-toggle=\"tooltip\" title=\"";
                echo ($context["text_login_store"] ?? null);
                echo "\">
                            <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-info dropdown-toggle\"><i class=\"fa fa-lock\"></i></button>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                             <li class=\"enabled\"><a href=\"";
                // line 185
                echo twig_get_attribute($this->env, $this->source, $context["vendor"], "login", [], "any", false, false, false, 185);
                echo "\" target=\"_blank\">";
                echo ($context["text_default"] ?? null);
                echo "</a></li>
                             
                            </ul>
                          </div>
                          <a href=\"";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["vendor"], "edit", [], "any", false, false, false, 189);
                echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_edit"] ?? null);
                echo "\" ><i class=\"fa fa-pencil\"></i> </a> 

                        </td>
              \t\t\t\t</tr>
              \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "                    ";
        } else {
            // line 195
            echo "                        <tr>
                          <td class=\"text-center\" colspan=\"8\">";
            // line 196
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                        </tr>
              \t\t";
        }
        // line 199
        echo "              \t</tr>

               </tbody>
            </table>
          </div>
        </form>
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 206
        echo ($context["pagination"] ?? null);
        echo "</div>
             <div class=\"col-sm-6 text-right\">";
        // line 207
        echo ($context["results"] ?? null);
        echo "</div>
          </div>
      </div>
  \t</div>
  </div>

    <script type=\"text/javascript\"><!--
  \$('#button-filter').on('click', function() {
    url = '';

    var filter_store_owner = \$('input[name=\\'filter_store_owner\\']').val();

    if (filter_store_owner) {
      url += '&filter_store_owner=' + encodeURIComponent(filter_store_owner);
    }

    var filter_store_name = \$('input[name=\\'filter_store_name\\']').val(); 
     
     if (filter_store_name) {
      url += '&filter_store_name=' + encodeURIComponent(filter_store_name);
    }

    var filter_email = \$('input[name=\\'filter_email\\']').val();
    
    if (filter_email) {
      url += '&filter_email=' + encodeURIComponent(filter_email);
    }

    var filter_approved = \$('select[name=\\'filter_approved\\']').val();

    if (filter_approved) {
      url += '&filter_approved=' + encodeURIComponent(filter_approved);
    }


    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }


    var filter_status = \$('select[name=\\'filter_status\\']').val();

    if (filter_status) {
      url += '&filter_status=' + encodeURIComponent(filter_status);
    }

    location = 'index.php?route=vendor/lts_vendor&user_token=";
        // line 255
        echo ($context["user_token"] ?? null);
        echo "' + url;
  });
  //--></script> 
    <script type=\"text/javascript\"><!--
  \$('input[name=\\'filter_store_owner\\']').autocomplete({
    
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=vendor/lts_vendor/autocomplete&user_token=";
        // line 263
        echo ($context["user_token"] ?? null);
        echo "&filter_store_owner=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['filter_store_owner'],
              value: item['vendor_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_store_owner\\']').val(item['label']);
    }
  });
  //--></script> 

<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"> </script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 285
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });
  //--></script>

";
        // line 290
        echo ($context["footer"] ?? null);
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "vendor/lts_vendor_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 290,  632 => 285,  607 => 263,  596 => 255,  545 => 207,  541 => 206,  532 => 199,  526 => 196,  523 => 195,  520 => 194,  507 => 189,  498 => 185,  491 => 182,  484 => 181,  481 => 180,  479 => 179,  474 => 177,  470 => 176,  466 => 175,  462 => 174,  458 => 173,  454 => 172,  451 => 171,  445 => 169,  439 => 167,  437 => 166,  433 => 164,  428 => 163,  426 => 162,  418 => 157,  412 => 156,  394 => 155,  376 => 154,  358 => 153,  340 => 152,  322 => 151,  312 => 144,  296 => 133,  284 => 126,  279 => 124,  265 => 112,  259 => 109,  256 => 108,  249 => 105,  247 => 104,  244 => 103,  238 => 101,  232 => 99,  230 => 98,  224 => 95,  211 => 84,  205 => 81,  202 => 80,  196 => 77,  193 => 76,  190 => 75,  184 => 72,  181 => 71,  174 => 67,  171 => 66,  169 => 65,  162 => 61,  151 => 55,  147 => 54,  135 => 47,  131 => 46,  122 => 42,  118 => 41,  108 => 34,  103 => 31,  95 => 27,  92 => 26,  84 => 22,  82 => 21,  76 => 17,  65 => 15,  61 => 14,  56 => 12,  53 => 11,  50 => 9,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vendor/lts_vendor_list.twig", "");
    }
}
