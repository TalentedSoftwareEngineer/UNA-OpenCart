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
class __TwigTemplate_31bdeb6ead0ae66c6e79a3f2c19639e6eda1af8aeb7bbc18f3604ccf32ab0200 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["help_button_preview"] ?? null);
        echo "\" onclick=\"\$('#preview-mads').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-eye\"></i></button>
        <button type=\"submit\" form=\"form-mads\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    <div class=\"row\">
      <div id=\"preview-mads\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-eye\"></i> ";
        // line 27
        echo ($context["text_preview"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <h2 id=\"preview-title\"></h2>
              <div class=\"img-thumbnail\" style=\"width: 100%;\">
                <img src=\"";
        // line 33
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
        // line 39
        echo ($context["entry_description"] ?? null);
        echo "</label>
                  <p id=\"preview-description\"></p>
                </div>
                <div>
                  <label class=\"control-label\">";
        // line 43
        echo ($context["entry_message_purchaser"] ?? null);
        echo "</label>
                  <p id=\"preview-message_purchaser\"></p>
                </div>
                <div>
                  <label class=\"control-label\">";
        // line 47
        echo ($context["entry_commission"] ?? null);
        echo "</label>
                  <p id=\"preview-commission\"></p>
                </div>
              </div>
            </div>
            ";
        // line 55
        echo "          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 61
        echo ($context["text_form"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 64
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-mads\" class=\"form-horizontal\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 66
        echo ($context["entry_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"title\" value=\"";
        // line 68
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" id=\"input-title\" class=\"form-control\" />
                  ";
        // line 69
        if (($context["error_title"] ?? null)) {
            // line 70
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 72
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-commission\">";
        // line 75
        echo ($context["entry_commission"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"commission\" value=\"";
        // line 77
        echo ($context["commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_commission"] ?? null);
        echo "\" id=\"input-commission\" class=\"form-control\" />
                  ";
        // line 78
        if (($context["error_commission"] ?? null)) {
            // line 79
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_commission"] ?? null);
            echo "</div>
                  ";
        }
        // line 81
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-description\">";
        // line 84
        echo ($context["entry_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"description\" rows=\"5\" placeholder=\"";
        // line 86
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-description\" class=\"form-control\">";
        echo ($context["description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-message_purchaser\">";
        // line 90
        echo ($context["entry_message_purchaser"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"message_purchaser\" rows=\"5\" placeholder=\"";
        // line 92
        echo ($context["entry_message_purchaser"] ?? null);
        echo "\" id=\"input-message_purchaser\" class=\"form-control\">";
        echo ($context["message_purchaser"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-main_image\">";
        // line 96
        echo ($context["entry_main_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 98
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"main_image\" value=\"";
        // line 99
        echo ($context["main_image"] ?? null);
        echo "\" id=\"input-main_image\" />
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 108
        echo ($context["text_sub_product"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-center\">";
        // line 115
        echo ($context["column_sub_image"] ?? null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 116
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
        // line 117
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
        // line 118
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
        // line 119
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
        // line 120
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
        // line 121
        echo ($context["column_sub_action"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 125
        if (($context["products"] ?? null)) {
            // line 126
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 127
                echo "                      <tr>
                        <td class=\"text-center\">";
                // line 128
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 128)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 128);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 128);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                        <td class=\"text-left\">";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 129);
                echo "</td>
                        <td class=\"text-left\">";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 130);
                echo "</td>
                        <td class=\"text-right\">
                          ";
                // line 132
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 132)) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 132);
                    echo "</span><br />
                          <div class=\"text-danger\" data-toggle=\"popover\" title=\"";
                    // line 133
                    echo ($context["text_calculator"] ?? null);
                    echo "\" data-content=\"";
                    echo ($context["text_admin_commission"] ?? null);
                    echo " </br> ";
                    echo ($context["text_getway_charge"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 133);
                    echo "</div>
                          ";
                } else {
                    // line 135
                    echo "                          <div class=\"text\" data-toggle=\"popover\" title=\"";
                    echo ($context["text_calculator"] ?? null);
                    echo "\" data-content=\"";
                    echo ($context["text_admin_commission"] ?? null);
                    echo " , ";
                    echo ($context["text_getway_charge"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 135);
                    echo "</div>
                          ";
                }
                // line 137
                echo "                        </td>
                        <td class=\"text-right\">";
                // line 138
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 138) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 138);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 138) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 138);
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 138);
                    echo "</span> ";
                }
                echo "</td>
                        <td class=\"text-left\"><kbd>";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 139);
                echo "</kbd></td>
                        <td class=\"text-right\"><a href=\"";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 140);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                  ";
        } else {
            // line 144
            echo "                    <tr>
                        <td class=\"text-center\" colspan=\"8\">";
            // line 145
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 148
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
//--></script></div>
";
        // line 171
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
        return array (  504 => 171,  479 => 148,  473 => 145,  470 => 144,  467 => 143,  456 => 140,  452 => 139,  436 => 138,  433 => 137,  421 => 135,  410 => 133,  404 => 132,  399 => 130,  395 => 129,  383 => 128,  380 => 127,  375 => 126,  373 => 125,  366 => 121,  348 => 120,  330 => 119,  312 => 118,  294 => 117,  276 => 116,  272 => 115,  262 => 108,  250 => 99,  244 => 98,  239 => 96,  230 => 92,  225 => 90,  216 => 86,  211 => 84,  206 => 81,  200 => 79,  198 => 78,  192 => 77,  187 => 75,  182 => 72,  176 => 70,  174 => 69,  168 => 68,  163 => 66,  158 => 64,  152 => 61,  144 => 55,  136 => 47,  129 => 43,  122 => 39,  111 => 33,  102 => 27,  96 => 23,  88 => 19,  86 => 18,  80 => 14,  69 => 12,  65 => 11,  60 => 9,  54 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_mads_form.twig", "");
    }
}
