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
class __TwigTemplate_fc4b612a69ca5ef75f3519662ac78adf18590d053b3ad48f0a97424be91a6c8f extends \Twig\Template
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
    border: none;
    outline: none;
    text-align: left;
    width: 100%;
  }
</style>
";
        // line 54
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 59
        echo ($context["help_button_preview"] ?? null);
        echo "\" onclick=\"\$('#preview-mads').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-eye\"></i></button>
        <button type=\"submit\" form=\"form-mads\" data-toggle=\"tooltip\" title=\"";
        // line 60
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 61
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 62
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 65
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 65);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 65);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 71
        if (($context["error_warning"] ?? null)) {
            // line 72
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 76
        echo "    <div class=\"row\">
      <div id=\"preview-mads\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-eye\"></i> ";
        // line 80
        echo ($context["text_preview"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <h2 id=\"preview-title\"></h2>
              <div class=\"img-thumbnail\" style=\"width: 100%;\">
                <img id=\"preview_mads_image\" src=\"";
        // line 86
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
        // line 92
        echo ($context["entry_description"] ?? null);
        echo "</label>
                  <p id=\"preview-description\">";
        // line 93
        echo ($context["description"] ?? null);
        echo "</p>
                </div>
                <div>
                  <label class=\"control-label\">";
        // line 96
        echo ($context["entry_message_purchaser"] ?? null);
        echo "</label>
                  <p id=\"preview-message_purchaser\">";
        // line 97
        echo ($context["message_purchaser"] ?? null);
        echo "</p>
                </div>
                <div>
                  <label class=\"control-label\">";
        // line 100
        echo ($context["entry_commission"] ?? null);
        echo "</label>
                  <p id=\"preview-commission\">";
        // line 101
        echo ($context["commission"] ?? null);
        echo "</p>
                </div>
              </div>
            </div>
            ";
        // line 108
        echo "          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 114
        echo ($context["text_form"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 117
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-mads\" class=\"form-horizontal\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 119
        echo ($context["entry_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"title\" value=\"";
        // line 121
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" id=\"input-title\" class=\"form-control\" />
                  ";
        // line 122
        if (($context["error_title"] ?? null)) {
            // line 123
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 125
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-commission\">";
        // line 128
        echo ($context["entry_commission"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"commission\" value=\"";
        // line 130
        echo ($context["commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_commission"] ?? null);
        echo "\" id=\"input-commission\" class=\"form-control\" />
                  ";
        // line 131
        if (($context["error_commission"] ?? null)) {
            // line 132
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_commission"] ?? null);
            echo "</div>
                  ";
        }
        // line 134
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\">";
        // line 137
        echo ($context["entry_category"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"category_id\" id=\"input-category\" class=\"form-control\">
                    ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_item"]) {
            // line 141
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_item"], "category_id", [], "any", false, false, false, 141) == ($context["category_id"] ?? null))) {
                // line 142
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_item"], "category_id", [], "any", false, false, false, 142);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_item"], "name", [], "any", false, false, false, 142);
                echo "</option>
                      ";
            } else {
                // line 144
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_item"], "category_id", [], "any", false, false, false, 144);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_item"], "name", [], "any", false, false, false, 144);
                echo "</option>
                      ";
            }
            // line 146
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-description\">";
        // line 151
        echo ($context["entry_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"description\" rows=\"5\" placeholder=\"";
        // line 153
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-description\" class=\"form-control\">";
        echo ($context["description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-message_purchaser\">";
        // line 157
        echo ($context["entry_message_purchaser"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"message_purchaser\" rows=\"5\" placeholder=\"";
        // line 159
        echo ($context["entry_message_purchaser"] ?? null);
        echo "\" id=\"input-message_purchaser\" class=\"form-control\">";
        echo ($context["message_purchaser"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-main_image\">";
        // line 163
        echo ($context["entry_main_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 165
        echo ($context["thumb"] ?? null);
        echo "\" id=\"mads_image\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"main_image\" value=\"";
        // line 166
        echo ($context["main_image"] ?? null);
        echo "\" id=\"input-main_image\" />
                </div>
              </div>
              <input type=\"hidden\" name=\"sub_products\" value=\"";
        // line 169
        echo ($context["sub_products"] ?? null);
        echo "\" id=\"input-sub_products\" />
              <input type=\"hidden\" name=\"sub_products_quantity\" value=\"";
        // line 170
        echo ($context["sub_products_quantity"] ?? null);
        echo "\" id=\"sub_products_quantity\" />
            </form>
          </div>
        </div>

        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 177
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
        // line 187
        if (($context["all_products"] ?? null)) {
            // line 188
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["all_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 189
                echo "                    <li>
                      ";
                // line 190
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 190)) {
                    echo " 
                        <img src=\"";
                    // line 191
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 191);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 191);
                    echo "\" class=\"img-thumbnail\" />
                      ";
                } else {
                    // line 193
                    echo "                        <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>
                      ";
                }
                // line 195
                echo "                      <a onclick=\"onAddSubProduct(event, '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 195);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 195);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 195);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 195);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 195);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 195);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 195);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 195);
                echo "')\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 195);
                echo "</a>
                    </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "                ";
        }
        // line 199
        echo "              </ul>
            </div>

            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-center\">";
        // line 206
        echo ($context["column_sub_image"] ?? null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 207
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
        // line 208
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
        // line 209
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
                    <td class=\"text-left\">";
        // line 210
        echo ($context["column_sub_quantity"] ?? null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 211
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
        // line 212
        echo ($context["column_sub_action"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody id=\"added_subproducts_tbody\">
                  ";
        // line 216
        if (($context["table_sub_products"] ?? null)) {
            // line 217
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["table_sub_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 218
                echo "                      <tr>
                        <td class=\"text-center\">";
                // line 219
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 219)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 219);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 219);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                        <td class=\"text-left\">";
                // line 220
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 220);
                echo "</td>
                        <td class=\"text-left\">";
                // line 221
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 221);
                echo "</td>
                        <td class=\"text-right\">
                          ";
                // line 223
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 223)) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 223);
                    echo "</span><br />
                          <div class=\"text-danger\" data-toggle=\"popover\" title=\"";
                    // line 224
                    echo ($context["text_calculator"] ?? null);
                    echo "\" data-content=\"";
                    echo ($context["text_admin_commission"] ?? null);
                    echo " </br> ";
                    echo ($context["text_getway_charge"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 224);
                    echo "</div>
                          ";
                } else {
                    // line 226
                    echo "                          <div class=\"text\" data-toggle=\"popover\" title=\"";
                    echo ($context["text_calculator"] ?? null);
                    echo "\" data-content=\"";
                    echo ($context["text_admin_commission"] ?? null);
                    echo " , ";
                    echo ($context["text_getway_charge"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 226);
                    echo "</div>
                          ";
                }
                // line 228
                echo "                        </td>
                        <td class=\"text-left\"><input onchange=\"onChangeSubQuantity()\" id=\"sub_quantity-";
                // line 229
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 229);
                echo "\" class=\"sub-quantity\" type=\"number\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 229);
                echo "\" /></td>
                        <td class=\"text-left\"><kbd>";
                // line 230
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 230);
                echo "</kbd></td>
                        <td class=\"text-right\">
                          <button data-toggle=\"tooltip\" onclick=\"onRemoveSubProduct('";
                // line 232
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 232);
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
            // line 236
            echo "                  ";
        }
        // line 237
        echo "                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <span style=\"display: none;\" id=\"input-json_sub_products\">";
        // line 247
        echo ($context["json_sub_products"] ?? null);
        echo "</span>

  <script type=\"text/javascript\"><!--
    var addedSubProducts = JSON.parse(\$('#input-json_sub_products').text());
    var subProductsQuantities = '";
        // line 251
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
        // line 367
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
        return array (  767 => 367,  646 => 251,  639 => 247,  627 => 237,  624 => 236,  612 => 232,  607 => 230,  601 => 229,  598 => 228,  586 => 226,  575 => 224,  569 => 223,  564 => 221,  560 => 220,  548 => 219,  545 => 218,  540 => 217,  538 => 216,  531 => 212,  513 => 211,  509 => 210,  491 => 209,  473 => 208,  455 => 207,  451 => 206,  442 => 199,  439 => 198,  413 => 195,  409 => 193,  402 => 191,  398 => 190,  395 => 189,  390 => 188,  388 => 187,  375 => 177,  365 => 170,  361 => 169,  355 => 166,  349 => 165,  344 => 163,  335 => 159,  330 => 157,  321 => 153,  316 => 151,  310 => 147,  304 => 146,  296 => 144,  288 => 142,  285 => 141,  281 => 140,  275 => 137,  270 => 134,  264 => 132,  262 => 131,  256 => 130,  251 => 128,  246 => 125,  240 => 123,  238 => 122,  232 => 121,  227 => 119,  222 => 117,  216 => 114,  208 => 108,  201 => 101,  197 => 100,  191 => 97,  187 => 96,  181 => 93,  177 => 92,  166 => 86,  157 => 80,  151 => 76,  143 => 72,  141 => 71,  135 => 67,  124 => 65,  120 => 64,  115 => 62,  109 => 61,  105 => 60,  101 => 59,  92 => 54,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_mads_form.twig", "");
    }
}
