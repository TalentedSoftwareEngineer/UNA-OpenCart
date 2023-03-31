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
class __TwigTemplate_dd0f64c28ca6d080e03fac7b73b296e9c93e0db364b1c2050b73c02505f07880 extends \Twig\Template
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
    flex: 1;
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

  .sub-quantity {
    
  }
</style>
";
        // line 51
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 56
        echo ($context["help_button_preview"] ?? null);
        echo "\" onclick=\"\$('#preview-mads').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-eye\"></i></button>
        <button type=\"submit\" form=\"form-mads\" data-toggle=\"tooltip\" title=\"";
        // line 57
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 58
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 59
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 62
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 62);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 62);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 68
        if (($context["error_warning"] ?? null)) {
            // line 69
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 73
        echo "    <div class=\"row\">
      <div id=\"preview-mads\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-eye\"></i> ";
        // line 77
        echo ($context["text_preview"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <h2 id=\"preview-title\"></h2>
              <div class=\"img-thumbnail\" style=\"width: 100%;\">
                <img id=\"preview_mads_image\" src=\"";
        // line 83
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
        // line 89
        echo ($context["entry_description"] ?? null);
        echo "</label>
                  <p id=\"preview-description\">";
        // line 90
        echo ($context["description"] ?? null);
        echo "</p>
                </div>
                <div>
                  <label class=\"control-label\">";
        // line 93
        echo ($context["entry_message_purchaser"] ?? null);
        echo "</label>
                  <p id=\"preview-message_purchaser\">";
        // line 94
        echo ($context["message_purchaser"] ?? null);
        echo "</p>
                </div>
                <div>
                  <label class=\"control-label\">";
        // line 97
        echo ($context["entry_commission"] ?? null);
        echo "</label>
                  <p id=\"preview-commission\">";
        // line 98
        echo ($context["commission"] ?? null);
        echo "</p>
                </div>
              </div>
            </div>
            ";
        // line 105
        echo "          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 111
        echo ($context["text_form"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 114
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-mads\" class=\"form-horizontal\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 116
        echo ($context["entry_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"title\" value=\"";
        // line 118
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" id=\"input-title\" class=\"form-control\" />
                  ";
        // line 119
        if (($context["error_title"] ?? null)) {
            // line 120
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 122
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-commission\">";
        // line 125
        echo ($context["entry_commission"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"commission\" value=\"";
        // line 127
        echo ($context["commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_commission"] ?? null);
        echo "\" id=\"input-commission\" class=\"form-control\" />
                  ";
        // line 128
        if (($context["error_commission"] ?? null)) {
            // line 129
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_commission"] ?? null);
            echo "</div>
                  ";
        }
        // line 131
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\">";
        // line 134
        echo ($context["entry_category"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"category_id\" id=\"input-category\" class=\"form-control\">
                    ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_item"]) {
            // line 138
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_item"], "category_id", [], "any", false, false, false, 138) == ($context["category_id"] ?? null))) {
                // line 139
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_item"], "category_id", [], "any", false, false, false, 139);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_item"], "name", [], "any", false, false, false, 139);
                echo "</option>
                      ";
            } else {
                // line 141
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_item"], "category_id", [], "any", false, false, false, 141);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_item"], "name", [], "any", false, false, false, 141);
                echo "</option>
                      ";
            }
            // line 143
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-description\">";
        // line 148
        echo ($context["entry_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"description\" rows=\"5\" placeholder=\"";
        // line 150
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-description\" class=\"form-control\">";
        echo ($context["description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-message_purchaser\">";
        // line 154
        echo ($context["entry_message_purchaser"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"message_purchaser\" rows=\"5\" placeholder=\"";
        // line 156
        echo ($context["entry_message_purchaser"] ?? null);
        echo "\" id=\"input-message_purchaser\" class=\"form-control\">";
        echo ($context["message_purchaser"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-main_image\">";
        // line 160
        echo ($context["entry_main_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 162
        echo ($context["thumb"] ?? null);
        echo "\" id=\"mads_image\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"main_image\" value=\"";
        // line 163
        echo ($context["main_image"] ?? null);
        echo "\" id=\"input-main_image\" />
                </div>
              </div>
              <input type=\"hidden\" name=\"sub_products\" value=\"";
        // line 166
        echo ($context["sub_products"] ?? null);
        echo "\" id=\"input-sub_products\" />
              <input type=\"hidden\" name=\"sub_products_quantity\" value=\"";
        // line 167
        echo ($context["sub_products_quantity"] ?? null);
        echo "\" id=\"sub_products_quantity\" />
            </form>
          </div>
        </div>

        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 174
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
        // line 184
        if (($context["all_products"] ?? null)) {
            // line 185
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["all_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 186
                echo "                    <li>
                      ";
                // line 187
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 187)) {
                    echo " 
                        <img src=\"";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 188);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 188);
                    echo "\" class=\"img-thumbnail\" />
                      ";
                } else {
                    // line 190
                    echo "                        <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>
                      ";
                }
                // line 192
                echo "                      <a onclick=\"onAddSubProduct(event, '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 192);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 192);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 192);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 192);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 192);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 192);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 192);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 192);
                echo "')\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 192);
                echo "</a>
                    </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "                ";
        }
        // line 196
        echo "              </ul>
            </div>

            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-center\">";
        // line 203
        echo ($context["column_sub_image"] ?? null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 204
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
        // line 205
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
        // line 206
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
        // line 207
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
        // line 208
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
        // line 209
        echo ($context["column_sub_action"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody id=\"added_subproducts_tbody\">
                  ";
        // line 213
        if (($context["table_sub_products"] ?? null)) {
            // line 214
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["table_sub_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 215
                echo "                      <tr>
                        <td class=\"text-center\">";
                // line 216
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 216)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 216);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 216);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                        <td class=\"text-left\">";
                // line 217
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 217);
                echo "</td>
                        <td class=\"text-left\">";
                // line 218
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 218);
                echo "</td>
                        <td class=\"text-right\">
                          ";
                // line 220
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 220)) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 220);
                    echo "</span><br />
                          <div class=\"text-danger\" data-toggle=\"popover\" title=\"";
                    // line 221
                    echo ($context["text_calculator"] ?? null);
                    echo "\" data-content=\"";
                    echo ($context["text_admin_commission"] ?? null);
                    echo " </br> ";
                    echo ($context["text_getway_charge"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 221);
                    echo "</div>
                          ";
                } else {
                    // line 223
                    echo "                          <div class=\"text\" data-toggle=\"popover\" title=\"";
                    echo ($context["text_calculator"] ?? null);
                    echo "\" data-content=\"";
                    echo ($context["text_admin_commission"] ?? null);
                    echo " , ";
                    echo ($context["text_getway_charge"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 223);
                    echo "</div>
                          ";
                }
                // line 225
                echo "                        </td>
                        <td class=\"text-right\"><input onchange=\"onChangeSubQuantity()\" id=\"sub_quantity-";
                // line 226
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 226);
                echo "\" class=\"sub-quantity\" type=\"number\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 226);
                echo "\" /></td>
                        <td class=\"text-left\"><kbd>";
                // line 227
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 227);
                echo "</kbd></td>
                        <td class=\"text-right\">
                          <button data-toggle=\"tooltip\" onclick=\"onRemoveSubProduct('";
                // line 229
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 229);
                echo "')\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>
                        </td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "                  ";
        }
        // line 234
        echo "                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <span style=\"display: none;\" id=\"input-json_sub_products\">";
        // line 244
        echo ($context["json_sub_products"] ?? null);
        echo "</span>

  <script type=\"text/javascript\"><!--
    var addedSubProducts = JSON.parse(\$('#input-json_sub_products').text());
    var subProductsQuantities = '";
        // line 248
        echo ($context["sub_products_quantity"] ?? null);
        echo "' == '' ? [] : JSON.parse('";
        echo ($context["sub_products_quantity"] ?? null);
        echo "');

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

    \$('#mads_image').on('load', function () {
      \$('#preview_mads_image').attr('src', \$('#mads_image').attr('src'));
    });

    function onChangeSubQuantity() {
      subProductsQuantities = addedSubProducts.map(function(item) {
        return {product_id: item.product_id, quantity: \$('#sub_quantity-' + item.product_id).val()}
      });

      \$('#sub_products_quantity').val(JSON.stringify(subProductsQuantities));
    }

    function onAddSubProduct(event, product_id, image, name, model, price, special, quantity, status) {
      if(addedSubProducts.findIndex(function (item){return item.product_id == product_id})==-1) {
        addedSubProducts.push({product_id, image, name, model, price, special, quantity, status});
        \$('#input-sub_products').val(String(addedSubProducts.map(function(item){return item.product_id})));

        subProductsQuantities.push({product_id: product_id, quantity: 1});
        \$('#sub_products_quantity').val(JSON.stringify(subProductsQuantities));
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

      let quantity_index = subProductsQuantities.findIndex(function (item){return item.product_id == product_id});
      subProductsQuantities.splice(quantity_index, 1);
      \$('#sub_products_quantity').val(JSON.stringify(subProductsQuantities));

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

    function getSubProductQuantity(product_id) {
      if(Boolean(subProductsQuantities.find(function(item){return item.product_id == product_id}))) {
        return subProductsQuantities.find(function(item){return item.product_id == product_id}).quantity;
      } else {
        return 1;
      }
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
      html += '<input onchange=\"onChangeSubQuantity()\" id=\"sub_quantity-' + product.product_id + '\" class=\"sub-quantity\" type=\"number\" value=\"' + getSubProductQuantity(product.product_id)  + '\" />';
      html += '</td>';
      html += '<td class=\"text-left\">';
      html += '<kbd>'+ product.status + '</kbd>';
      html += '</td>';
      html += '<td class=\"text-right\">';
      html += '<button onclick=\"onRemoveSubProduct(' + product.product_id + ')\" data-toggle=\"tooltip\" title=\"Cancel\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>';
      html += '</td>';
      html += '</tr>';
      \$('#added_subproducts_tbody').append(html);
    }

    filterProducts();
//--></script>

";
        // line 364
        echo ($context["footer"] ?? null);
        echo "
</div>

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
        return array (  778 => 364,  657 => 248,  650 => 244,  638 => 234,  635 => 233,  623 => 229,  618 => 227,  612 => 226,  609 => 225,  597 => 223,  586 => 221,  580 => 220,  575 => 218,  571 => 217,  559 => 216,  556 => 215,  551 => 214,  549 => 213,  542 => 209,  524 => 208,  506 => 207,  488 => 206,  470 => 205,  452 => 204,  448 => 203,  439 => 196,  436 => 195,  410 => 192,  406 => 190,  399 => 188,  395 => 187,  392 => 186,  387 => 185,  385 => 184,  372 => 174,  362 => 167,  358 => 166,  352 => 163,  346 => 162,  341 => 160,  332 => 156,  327 => 154,  318 => 150,  313 => 148,  307 => 144,  301 => 143,  293 => 141,  285 => 139,  282 => 138,  278 => 137,  272 => 134,  267 => 131,  261 => 129,  259 => 128,  253 => 127,  248 => 125,  243 => 122,  237 => 120,  235 => 119,  229 => 118,  224 => 116,  219 => 114,  213 => 111,  205 => 105,  198 => 98,  194 => 97,  188 => 94,  184 => 93,  178 => 90,  174 => 89,  163 => 83,  154 => 77,  148 => 73,  140 => 69,  138 => 68,  132 => 64,  121 => 62,  117 => 61,  112 => 59,  106 => 58,  102 => 57,  98 => 56,  89 => 51,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_mads_form.twig", "");
    }
}
