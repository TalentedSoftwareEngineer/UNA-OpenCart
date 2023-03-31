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
class __TwigTemplate_fc668ea21e8b96efd987755d68fb2cbc9c0142933cf8f239c0bb3eca0974786f extends \Twig\Template
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
    position: absolute;
    z-index: 200;
    width: 100%;
    max-height: 300px;
    overflow-y: auto;
    border-bottom: 1px solid #ddd;
  }

  #productsList li a {
    border: 1px solid #ddd;
    margin-top: -1px; /* Prevent double borders */
    background-color: #ffffff;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block;
    cursor: pointer;
    width: 100%;
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
        // line 47
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 52
        echo ($context["help_button_preview"] ?? null);
        echo "\" onclick=\"\$('#preview-mads').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-eye\"></i></button>
        <button type=\"submit\" form=\"form-mads\" data-toggle=\"tooltip\" title=\"";
        // line 53
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 54
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 55
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 58
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 58);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 58);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 64
        if (($context["error_warning"] ?? null)) {
            // line 65
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 69
        echo "    <div class=\"row\">
      <div id=\"preview-mads\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-eye\"></i> ";
        // line 73
        echo ($context["text_preview"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <h2 id=\"preview-title\"></h2>
              <div class=\"img-thumbnail\" style=\"width: 100%;\">
                <img src=\"";
        // line 79
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
        // line 85
        echo ($context["entry_description"] ?? null);
        echo "</label>
                  <p id=\"preview-description\"></p>
                </div>
                <div>
                  <label class=\"control-label\">";
        // line 89
        echo ($context["entry_message_purchaser"] ?? null);
        echo "</label>
                  <p id=\"preview-message_purchaser\"></p>
                </div>
                <div>
                  <label class=\"control-label\">";
        // line 93
        echo ($context["entry_commission"] ?? null);
        echo "</label>
                  <p id=\"preview-commission\"></p>
                </div>
              </div>
            </div>
            ";
        // line 101
        echo "          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 107
        echo ($context["text_form"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 110
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-mads\" class=\"form-horizontal\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 112
        echo ($context["entry_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"title\" value=\"";
        // line 114
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" id=\"input-title\" class=\"form-control\" />
                  ";
        // line 115
        if (($context["error_title"] ?? null)) {
            // line 116
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 118
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-commission\">";
        // line 121
        echo ($context["entry_commission"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"commission\" value=\"";
        // line 123
        echo ($context["commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_commission"] ?? null);
        echo "\" id=\"input-commission\" class=\"form-control\" />
                  ";
        // line 124
        if (($context["error_commission"] ?? null)) {
            // line 125
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_commission"] ?? null);
            echo "</div>
                  ";
        }
        // line 127
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\">";
        // line 130
        echo ($context["entry_category"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"category_id\" id=\"input-category\" class=\"form-control\">
                    ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_item"]) {
            // line 134
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_item"], "category_id", [], "any", false, false, false, 134) == ($context["category_id"] ?? null))) {
                // line 135
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_item"], "category_id", [], "any", false, false, false, 135);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_item"], "name", [], "any", false, false, false, 135);
                echo "</option>
                      ";
            } else {
                // line 137
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_item"], "category_id", [], "any", false, false, false, 137);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_item"], "name", [], "any", false, false, false, 137);
                echo "</option>
                      ";
            }
            // line 139
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-description\">";
        // line 144
        echo ($context["entry_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"description\" rows=\"5\" placeholder=\"";
        // line 146
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-description\" class=\"form-control\">";
        echo ($context["description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-message_purchaser\">";
        // line 150
        echo ($context["entry_message_purchaser"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"message_purchaser\" rows=\"5\" placeholder=\"";
        // line 152
        echo ($context["entry_message_purchaser"] ?? null);
        echo "\" id=\"input-message_purchaser\" class=\"form-control\">";
        echo ($context["message_purchaser"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-main_image\">";
        // line 156
        echo ($context["entry_main_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 158
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"main_image\" value=\"";
        // line 159
        echo ($context["main_image"] ?? null);
        echo "\" id=\"input-main_image\" />
                </div>
              </div>
              <input type=\"hidden\" name=\"sub_products\" value=\"";
        // line 162
        echo ($context["sub_products"] ?? null);
        echo "\" id=\"input-sub_products\" />
            </form>
          </div>
        </div>

        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 169
        echo ($context["text_sub_product"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div style=\"margin-bottom: 30px;position: relative;\">
              <div style=\"position:relative;\">
                <i class=\"fa fa-search icon\"></i>
                <input type=\"text\" id=\"productSearchInput\" onkeyup=\"filterProducts()\" placeholder=\"Search for names..\" title=\"Type in a name\">
              </div>

              <ul id=\"productsList\">
                ";
        // line 179
        if (($context["all_products"] ?? null)) {
            // line 180
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["all_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 181
                echo "                    <li>
                      ";
                // line 182
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 182)) {
                    echo " 
                        <img src=\"";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 183);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 183);
                    echo "\" class=\"img-thumbnail\" />
                      ";
                } else {
                    // line 185
                    echo "                        <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>
                      ";
                }
                // line 187
                echo "                      <a onclick=\"onAddSubProduct(event, '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 187);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 187);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 187);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 187);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 187);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 187);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 187);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 187);
                echo "')\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 187);
                echo "</a>
                    </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                ";
        }
        // line 191
        echo "              </ul>
            </div>

            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-center\">";
        // line 198
        echo ($context["column_sub_image"] ?? null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 199
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
        // line 200
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
        // line 201
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
        // line 202
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
        // line 203
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
        // line 204
        echo ($context["column_sub_action"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 208
        if (($context["products"] ?? null)) {
            // line 209
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 210
                echo "                      <tr>
                        <td class=\"text-center\">";
                // line 211
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 211)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 211);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 211);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                        <td class=\"text-left\">";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 212);
                echo "</td>
                        <td class=\"text-left\">";
                // line 213
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 213);
                echo "</td>
                        <td class=\"text-right\">
                          ";
                // line 215
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 215)) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 215);
                    echo "</span><br />
                          <div class=\"text-danger\" data-toggle=\"popover\" title=\"";
                    // line 216
                    echo ($context["text_calculator"] ?? null);
                    echo "\" data-content=\"";
                    echo ($context["text_admin_commission"] ?? null);
                    echo " </br> ";
                    echo ($context["text_getway_charge"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 216);
                    echo "</div>
                          ";
                } else {
                    // line 218
                    echo "                          <div class=\"text\" data-toggle=\"popover\" title=\"";
                    echo ($context["text_calculator"] ?? null);
                    echo "\" data-content=\"";
                    echo ($context["text_admin_commission"] ?? null);
                    echo " , ";
                    echo ($context["text_getway_charge"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 218);
                    echo "</div>
                          ";
                }
                // line 220
                echo "                        </td>
                        <td class=\"text-right\">";
                // line 221
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 221) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 221);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 221) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 221);
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 221);
                    echo "</span> ";
                }
                echo "</td>
                        <td class=\"text-left\"><kbd>";
                // line 222
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 222);
                echo "</kbd></td>
                        <td class=\"text-right\">
                          <button data-toggle=\"tooltip\" title=\"";
                // line 224
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>
                        </td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "                  ";
        }
        // line 229
        echo "                </tbody>
                <tbody id=\"added_subproducts_tbody\"></tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
    var addedSubProducts = [];

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

    function onAddSubProduct(event, product_id, image, name, model, price, special, quantity, status) {
      if(addedSubProducts.findIndex(function (item){return item.product_id == product_id})==-1) {
        addedSubProducts.push({product_id, image, name, model, price, special, quantity, status});
        \$('#input-sub_products').val(String(addedSubProducts.map(function(item){return item.product_id})));
      }
      \$('#added_subproducts_tbody').empty();
      \$.each(addedSubProducts, function(index, item){
        addSubProductTr(item);
      });
      closeSearchPanel();
    }

    function onRemoveSubProduct(product_id) {
      let index = addedSubProducts.findIndex(function (item){return item.product_id == product_id});
      addedSubProducts.splice(index, 1);
      \$('#input-sub_products').val(String(addedSubProducts.map(function(item){return item.product_id})));
      \$('#added_subproducts_tbody').empty();
      \$.each(addedSubProducts, function(index, item){
        addSubProductTr(item);
      });
    }

    function filterProducts() {
      var filter, txtValue;
      filter = \$('#productSearchInput').val().toUpperCase();

      \$.each(\$('#productsList li'), function(index, item) {
        txtValue = \$(\$(item).find(\"a\")[0]).text().toUpperCase();

        if (txtValue.indexOf(filter) > -1 && filter!='') {
            \$(item).css('display', 'flex');
        } else {
            \$(item).css('display', 'none');
        }
      });
    }

    function closeSearchPanel() {
      \$('#productSearchInput').val('');
      filterProducts();
    }

    function addSubProductTr(product) {
      var html = '';
      html += '<tr>';
      html += '<td class=\"text-center\">';
      html += Boolean(product.image) 
              ? ('<img src=\"' + product.image+ '\" alt=\"' + product.name + '\" class=\"img-thumbnail\" />')
              : ('<span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>');
      html += '</td>';
      html += '<td class=\"text-left\">' + product.name + '</td>';
      html += '<td class=\"text-left\">' + product.model + '</td>';
      html += '<td class=\"text-right\">';
      html += Boolean(product.special) 
              ? '<span style=\"text-decoration: line-through;\">' + product.price + '</span><br/><div class=\"text-danger\" data-toggle=\"popover\" title=\"Price calculator\" data-content=\"Admin commission(%s) </br> Payment getway charge\">' + product.special + '</div>'
              : '<div class=\"text\" data-toggle=\"popover\" title=\"Price calculator\" data-content=\"Admin commission(%s), Payment getway charge\">'+ product.price + '</div>';
      html += '</td>';
      html += '<td class=\"text-right\">';
      if(Number(product.quantity) <= 0) {
        html += '<span class=\"label label-warning\">' + product.quantity + '</span>';
      } else if(product.quantity <= 5) {
        html += '<span class=\"label label-danger\">' + product.quantity + '</span>';
      } else {
        html += '<span class=\"label label-success\">' + product.quantity + '</span>';
      }
      html += '</td>';
      html += '<td class=\"text-left\">';
      html += '<kbd>'+ product.status + '</kbd>';
      html += '</td>';
      html += '<td class=\"text-right\">';
      html += '<button onclick=\"onRemoveSubProduct(' + product.product_id + ')\" data-toggle=\"tooltip\" title=\"Cancel\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></button>';
      html += '</td>';
      html += '</tr>';
      \$('#added_subproducts_tbody').append(html);
    }

    filterProducts();
//--></script></div>
";
        // line 333
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
        return array (  735 => 333,  629 => 229,  626 => 228,  616 => 224,  611 => 222,  595 => 221,  592 => 220,  580 => 218,  569 => 216,  563 => 215,  558 => 213,  554 => 212,  542 => 211,  539 => 210,  534 => 209,  532 => 208,  525 => 204,  507 => 203,  489 => 202,  471 => 201,  453 => 200,  435 => 199,  431 => 198,  422 => 191,  419 => 190,  393 => 187,  389 => 185,  382 => 183,  378 => 182,  375 => 181,  370 => 180,  368 => 179,  355 => 169,  345 => 162,  339 => 159,  333 => 158,  328 => 156,  319 => 152,  314 => 150,  305 => 146,  300 => 144,  294 => 140,  288 => 139,  280 => 137,  272 => 135,  269 => 134,  265 => 133,  259 => 130,  254 => 127,  248 => 125,  246 => 124,  240 => 123,  235 => 121,  230 => 118,  224 => 116,  222 => 115,  216 => 114,  211 => 112,  206 => 110,  200 => 107,  192 => 101,  184 => 93,  177 => 89,  170 => 85,  159 => 79,  150 => 73,  144 => 69,  136 => 65,  134 => 64,  128 => 60,  117 => 58,  113 => 57,  108 => 55,  102 => 54,  98 => 53,  94 => 52,  85 => 47,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_mads_form.twig", "");
    }
}
