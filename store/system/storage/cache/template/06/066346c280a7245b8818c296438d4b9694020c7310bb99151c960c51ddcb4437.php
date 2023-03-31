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

/* default/template/account/vendor/lts_mads_form.twig */
class __TwigTemplate_195d1807cf0d253ebaf8dcc7f3100dd6451fa7cba3fef488c5f892c1f8d4ad40 extends \Twig\Template
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
        echo "<style type=\"text/css\">
  #productSearchInput {
    width: 100%;
    font-size: 16px;
    padding: 12px 20px 12px 45px;
    border: 1px solid #ddd;
    margin-bottom: 0px;
  }

  #productsList {
    list-style-type: none;
    padding: 0;
    margin: 0;
    margin-top: 30px;
  }

  #productsList li a {
    border: 1px solid #ddd;
    margin-top: -1px; /* Prevent double borders */
    background-color: #f6f6f6;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block
  }

  #productsList li a:hover:not(.header) {
    background-color: #eee;
  }

  .icon {
    position: absolute;  
    top: 50%;
    left: 13px;
    font-size: 24px !important;
    transform: translateY(-50%);
  }
</style>
";
        // line 40
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 45
        echo ($context["help_button_preview"] ?? null);
        echo "\" onclick=\"\$('#preview-mads').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-eye\"></i></button>
        <button type=\"submit\" form=\"form-mads\" data-toggle=\"tooltip\" title=\"";
        // line 46
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 47
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 48
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 51
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 51);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 51);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 57
        if (($context["error_warning"] ?? null)) {
            // line 58
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 62
        echo "    <div class=\"row\">
      <div id=\"preview-mads\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-eye\"></i> ";
        // line 66
        echo ($context["text_preview"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <h2 id=\"preview-title\"></h2>
              <div class=\"img-thumbnail\" style=\"width: 100%;\">
                <img src=\"";
        // line 72
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" style=\"width: 100%;height: auto;\" />
              </div>
            </div>
            <div class=\"form-group\">
              <div style=\"display: flex;flex-direction: column;gap: 10px;\">
                <div>
                  <label class=\"control-label\">";
        // line 78
        echo ($context["entry_description"] ?? null);
        echo "</label>
                  <p id=\"preview-description\"></p>
                </div>
                <div>
                  <label class=\"control-label\">";
        // line 82
        echo ($context["entry_message_purchaser"] ?? null);
        echo "</label>
                  <p id=\"preview-message_purchaser\"></p>
                </div>
                <div>
                  <label class=\"control-label\">";
        // line 86
        echo ($context["entry_commission"] ?? null);
        echo "</label>
                  <p id=\"preview-commission\"></p>
                </div>
              </div>
            </div>
            ";
        // line 94
        echo "          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 100
        echo ($context["text_form"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 103
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-mads\" class=\"form-horizontal\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 105
        echo ($context["entry_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"title\" value=\"";
        // line 107
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" id=\"input-title\" class=\"form-control\" />
                  ";
        // line 108
        if (($context["error_title"] ?? null)) {
            // line 109
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 111
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-commission\">";
        // line 114
        echo ($context["entry_commission"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"commission\" value=\"";
        // line 116
        echo ($context["commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_commission"] ?? null);
        echo "\" id=\"input-commission\" class=\"form-control\" />
                  ";
        // line 117
        if (($context["error_commission"] ?? null)) {
            // line 118
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_commission"] ?? null);
            echo "</div>
                  ";
        }
        // line 120
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-description\">";
        // line 123
        echo ($context["entry_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"description\" rows=\"5\" placeholder=\"";
        // line 125
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-description\" class=\"form-control\">";
        echo ($context["description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-message_purchaser\">";
        // line 129
        echo ($context["entry_message_purchaser"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"message_purchaser\" rows=\"5\" placeholder=\"";
        // line 131
        echo ($context["entry_message_purchaser"] ?? null);
        echo "\" id=\"input-message_purchaser\" class=\"form-control\">";
        echo ($context["message_purchaser"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-main_image\">";
        // line 135
        echo ($context["entry_main_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 137
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"main_image\" value=\"";
        // line 138
        echo ($context["main_image"] ?? null);
        echo "\" id=\"input-main_image\" />
                </div>
              </div>
              <input type=\"hidden\" name=\"sub_products[]\" value=\"";
        // line 141
        echo ($context["sub_products"] ?? null);
        echo "\" id=\"input-sub_products\" />
            </form>
          </div>
        </div>

        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 148
        echo ($context["text_sub_product"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div>
              <div style=\"position:relative;\">
                <i class=\"fa fa-search icon\"></i>
                <input type=\"text\" id=\"productSearchInput\" onkeyup=\"filterProducts()\" placeholder=\"Search for names..\" title=\"Type in a name\">
              </div>

              <ul id=\"productsList\">
                <li><a href=\"#\">Adele</a></li>
                <li><a href=\"#\">Agnes</a></li>
              
                <li><a href=\"#\">Billy</a></li>
                <li><a href=\"#\">Bob</a></li>
              
                <li><a href=\"#\">Calvin</a></li>
                <li><a href=\"#\">Christina</a></li>
                <li><a href=\"#\">Cindy</a></li>
              </ul>
            </div>
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-center\">";
        // line 173
        echo ($context["column_sub_image"] ?? null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 174
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sub_name"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_sub_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 175
        if ((($context["sort"] ?? null) == "p.model")) {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sub_model"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_sub_model"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">";
        // line 176
        if ((($context["sort"] ?? null) == "p.price")) {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sub_price"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_sub_price"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">";
        // line 177
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sub_quantity"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_sub_quantity"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 178
        if ((($context["sort"] ?? null) == "p.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sub_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_sub_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">";
        // line 179
        echo ($context["column_sub_action"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 183
        if (($context["products"] ?? null)) {
            // line 184
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 185
                echo "                      <tr>
                        <td class=\"text-center\">";
                // line 186
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 186)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 186);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 186);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                        <td class=\"text-left\">";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 187);
                echo "</td>
                        <td class=\"text-left\">";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 188);
                echo "</td>
                        <td class=\"text-right\">
                          ";
                // line 190
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 190)) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 190);
                    echo "</span><br />
                          <div class=\"text-danger\" data-toggle=\"popover\" title=\"";
                    // line 191
                    echo ($context["text_calculator"] ?? null);
                    echo "\" data-content=\"";
                    echo ($context["text_admin_commission"] ?? null);
                    echo " </br> ";
                    echo ($context["text_getway_charge"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 191);
                    echo "</div>
                          ";
                } else {
                    // line 193
                    echo "                          <div class=\"text\" data-toggle=\"popover\" title=\"";
                    echo ($context["text_calculator"] ?? null);
                    echo "\" data-content=\"";
                    echo ($context["text_admin_commission"] ?? null);
                    echo " , ";
                    echo ($context["text_getway_charge"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 193);
                    echo "</div>
                          ";
                }
                // line 195
                echo "                        </td>
                        <td class=\"text-right\">";
                // line 196
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 196) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 196);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 196) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 196);
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 196);
                    echo "</span> ";
                }
                echo "</td>
                        <td class=\"text-left\"><kbd>";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 197);
                echo "</kbd></td>
                        <td class=\"text-right\">
                          <button data-toggle=\"tooltip\" title=\"";
                // line 199
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></button>
                        </td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "                  ";
        } else {
            // line 204
            echo "                    <tr>
                        <td class=\"text-center\" colspan=\"8\">";
            // line 205
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 208
        echo "                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
    \$('#input-title').on('keyup', function() {
      \$('#preview-title').text(\$('#input-title').val());
    });
    \$('#input-commission').on('keyup', function() {
      \$('#preview-commission').text(\$('#input-commission').val());
    });
    \$('#input-message_purchaser').on('keyup', function() {
      \$('#preview-message_purchaser').text(\$('#input-message_purchaser').val());
    });
    \$('#input-description').on('keyup', function() {
      \$('#preview-description').text(\$('#input-description').val());
    });

    function filterProducts() {
      var filter, txtValue;
      filter = \$('#productSearchInput').val().toUpperCase();

      \$.each(\$('#productsList li'), function(index, item) {
        txtValue = \$(\$(item).find(\"a\")[0]).text().toUpperCase();

        if (txtValue.indexOf(filter) > -1 && filter!='') {
            \$(item).css('display', '');
        } else {
            \$(item).css('display', 'none');
        }
      });
    }
    filterProducts();
//--></script></div>
";
        // line 247
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_mads_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  583 => 247,  542 => 208,  536 => 205,  533 => 204,  530 => 203,  520 => 199,  515 => 197,  499 => 196,  496 => 195,  484 => 193,  473 => 191,  467 => 190,  462 => 188,  458 => 187,  446 => 186,  443 => 185,  438 => 184,  436 => 183,  429 => 179,  411 => 178,  393 => 177,  375 => 176,  357 => 175,  339 => 174,  335 => 173,  307 => 148,  297 => 141,  291 => 138,  285 => 137,  280 => 135,  271 => 131,  266 => 129,  257 => 125,  252 => 123,  247 => 120,  241 => 118,  239 => 117,  233 => 116,  228 => 114,  223 => 111,  217 => 109,  215 => 108,  209 => 107,  204 => 105,  199 => 103,  193 => 100,  185 => 94,  177 => 86,  170 => 82,  163 => 78,  152 => 72,  143 => 66,  137 => 62,  129 => 58,  127 => 57,  121 => 53,  110 => 51,  106 => 50,  101 => 48,  95 => 47,  91 => 46,  87 => 45,  78 => 40,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_mads_form.twig", "");
    }
}
