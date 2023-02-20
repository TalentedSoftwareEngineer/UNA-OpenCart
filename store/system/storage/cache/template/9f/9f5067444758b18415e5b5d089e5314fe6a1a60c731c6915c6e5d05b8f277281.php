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

/* extension/module/lts_vendor.twig */
class __TwigTemplate_cc2162a6c69afa6b096d715f613115dc3fe2f3fca2e68ccb4eaa3dc070ff0dd3 extends \Twig\Template
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
                <button type=\"submit\" form=\"form-vendor\" data-toggle=\"tooltip\" title=\"";
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
            echo "                <li><a href=\"";
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
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"alert alert-success\"><i class=\"fa fa-info-circle\"></i> ";
        // line 17
        echo ($context["text_feedback"] ?? null);
        echo "</div>
        ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 23
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-vendor\" class=\"form-horizontal\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 30
        echo ($context["entry_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-9\">
                            <select name=\"module_lts_vendor_status\" id=\"input-status\" class=\"form-control\">
                                ";
        // line 33
        if (($context["module_lts_vendor_status"] ?? null)) {
            // line 34
            echo "                                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                <option value=\"0\">";
            // line 35
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 37
            echo "                                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                <option value=\"0\" selected=\"selected\">";
            // line 38
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 40
        echo "                            </select>
                        </div>
                    </div>
                    <hr>
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 45
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-product\" data-toggle=\"tab\">";
        // line 46
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-order\" data-toggle=\"tab\">";
        // line 47
        echo ($context["tab_order"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-profile\" data-toggle=\"tab\">";
        // line 48
        echo ($context["tab_profile"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-commission\" data-toggle=\"tab\">";
        // line 49
        echo ($context["tab_commission"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-amount_limit\" data-toggle=\"tab\">";
        // line 50
        echo ($context["entry_amount_limit"] ?? null);
        echo "</a></li>  
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            ";
        // line 68
        echo "                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 69
        echo ($context["entry_vendor_approval"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <select name=\"module_lts_vendor_approval\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 72
        if (($context["module_lts_vendor_approval"] ?? null)) {
            // line 73
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 74
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 76
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 77
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 79
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 83
        echo ($context["entry_product_approval"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <select name=\"module_lts_vendor_product_approval\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 86
        if (($context["module_lts_vendor_product_approval"] ?? null)) {
            // line 87
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 88
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 90
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 91
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 93
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 97
        echo ($context["entry_category_approval"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <select name=\"module_lts_vendor_category_approval\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 100
        if (($context["module_lts_vendor_category_approval"] ?? null)) {
            // line 101
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 102
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 104
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 105
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 107
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 111
        echo ($context["entry_review_action"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <select name=\"module_lts_vendor_review_action\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 114
        if (($context["module_lts_vendor_review_action"] ?? null)) {
            // line 115
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 116
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 118
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 119
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 121
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 125
        echo ($context["entry_vendor_name_in_cart"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <select name=\"module_lts_vendor_name_in_cart\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 128
        if (($context["module_lts_vendor_name_in_cart"] ?? null)) {
            // line 129
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 130
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 132
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 133
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 135
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-product\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 141
        echo ($context["entry_pincode_checker"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <div class=\"well well-sm\" style=\"height: 80px; overflow: auto;\">
                                        <div class=\"checkbox\">
                                            <label>
                                                ";
        // line 146
        if (($context["admin_pincode"] ?? null)) {
            // line 147
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_pincode_checker[admin]\" value=\"admin\" checked=\"checked\" /> ";
            echo ($context["text_admin"] ?? null);
            echo "
                                                ";
        } else {
            // line 149
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_pincode_checker[admin]\" value=\"admin\" /> ";
            echo ($context["text_admin"] ?? null);
            echo "
                                                ";
        }
        // line 151
        echo "                                            </label>
                                        </div>
                                        ";
        // line 162
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-multi-product\">";
        // line 166
        echo ($context["entry_multi_product_action"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <select name=\"module_lts_vendor_multi_product\" id=\"input-multi-product\" class=\"form-control\">
                                        ";
        // line 169
        if (($context["module_lts_vendor_multi_product"] ?? null)) {
            // line 170
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 171
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 173
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 174
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 176
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 180
        echo ($context["entry_product_category"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <select name=\"module_lts_vendor_category_required\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 183
        if (($context["module_lts_vendor_category_required"] ?? null)) {
            // line 184
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 185
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 187
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 188
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 190
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 194
        echo ($context["entry_admin_receive_mail_product_add"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <select name=\"module_lts_vendor_admin_receive_mail_product_add\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 197
        if (($context["module_lts_vendor_admin_receive_mail_product_add"] ?? null)) {
            // line 198
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 199
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 201
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 202
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 204
        echo "                                    </select>
                                </div>
                            </div>
                           <!--  <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 208
        echo ($context["entry_seller_delete_product"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <select name=\"module_lts_vendor_delete_product\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 211
        if (($context["module_lts_vendor_delete_product"] ?? null)) {
            // line 212
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 213
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 215
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 216
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 218
        echo "                                    </select>
                                </div>
                            </div> -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 222
        echo ($context["entry_product_tab"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        <div class=\"checkbox\">
                                            <label>
                                                ";
        // line 227
        if (($context["links"] ?? null)) {
            // line 228
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[links]\" value=\"";
            echo ($context["links"] ?? null);
            echo "\" checked=\"checked\" /> ";
            echo ($context["tab_links"] ?? null);
            echo "
                                                ";
        } else {
            // line 230
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[links]\" value=\"links\" /> ";
            echo ($context["tab_links"] ?? null);
            echo "
                                                ";
        }
        // line 232
        echo "                                            </label>
                                        </div>
                                        <div class=\"checkbox\">
                                            <label>
                                                ";
        // line 236
        if (($context["attribute"] ?? null)) {
            // line 237
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[attribute]\" value=\"attribute\" checked=\"checked\" /> ";
            echo ($context["tab_attribute"] ?? null);
            echo "
                                                ";
        } else {
            // line 239
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[attribute]\" value=\"attribute\" /> ";
            echo ($context["tab_attribute"] ?? null);
            echo "
                                                ";
        }
        // line 241
        echo "                                            </label>
                                        </div>
                                        <div class=\"checkbox\">
                                            <label>
                                                ";
        // line 245
        if (($context["option"] ?? null)) {
            // line 246
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[option]\" value=\"";
            echo ($context["option"] ?? null);
            echo "\" checked=\"checked\" /> ";
            echo ($context["tab_option"] ?? null);
            echo "
                                                ";
        } else {
            // line 248
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[option]\" value=\"option\" /> ";
            echo ($context["tab_option"] ?? null);
            echo "
                                                ";
        }
        // line 250
        echo "                                            </label>
                                        </div>
                                        <div class=\"checkbox\">
                                            <label>
                                                ";
        // line 254
        if (($context["discount"] ?? null)) {
            // line 255
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[";
            echo ($context["discount"] ?? null);
            echo "]\" value=\"";
            echo ($context["discount"] ?? null);
            echo "\" checked=\"checked\" /> ";
            echo ($context["tab_discount"] ?? null);
            echo "
                                                ";
        } else {
            // line 257
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[discount]\" value=\"discount\" /> ";
            echo ($context["tab_discount"] ?? null);
            echo "
                                                ";
        }
        // line 259
        echo "                                            </label>
                                        </div>
                                        <div class=\"checkbox\">
                                            <label>
                                                ";
        // line 263
        if (($context["special"] ?? null)) {
            // line 264
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[";
            echo ($context["special"] ?? null);
            echo "]\" value=\"";
            echo ($context["special"] ?? null);
            echo "\" checked=\"checked\" /> ";
            echo ($context["tab_special"] ?? null);
            echo "
                                                ";
        } else {
            // line 266
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[special]\" value=\"special\" /> ";
            echo ($context["tab_special"] ?? null);
            echo "
                                                ";
        }
        // line 268
        echo "                                            </label>
                                        </div>
                                        <div class=\"checkbox\">
                                            <label>
                                                ";
        // line 272
        if (($context["image"] ?? null)) {
            // line 273
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[";
            echo ($context["image"] ?? null);
            echo "]\" value=\"";
            echo ($context["image"] ?? null);
            echo "\" checked=\"checked\" /> ";
            echo ($context["tab_image"] ?? null);
            echo "
                                                ";
        } else {
            // line 275
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[image]\" value=\"image\" /> ";
            echo ($context["tab_image"] ?? null);
            echo "
                                                ";
        }
        // line 277
        echo "                                            </label>
                                        </div>
                                        <div class=\"checkbox\">
                                            <label>
                                                ";
        // line 281
        if (($context["reward"] ?? null)) {
            // line 282
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[";
            echo ($context["reward"] ?? null);
            echo "]\" value=\"";
            echo ($context["reward"] ?? null);
            echo "\" checked=\"checked\" /> ";
            echo ($context["tab_reward"] ?? null);
            echo "
                                                ";
        } else {
            // line 284
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[reward]\" value=\"reward\" /> ";
            echo ($context["tab_reward"] ?? null);
            echo "
                                                ";
        }
        // line 286
        echo "                                            </label>
                                        </div>
                                        <div class=\"checkbox\">
                                            <label>
                                                ";
        // line 290
        if (($context["seo"] ?? null)) {
            // line 291
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[";
            echo ($context["seo"] ?? null);
            echo "]\" value=\"";
            echo ($context["seo"] ?? null);
            echo "\" checked=\"checked\" /> ";
            echo ($context["tab_seo"] ?? null);
            echo "
                                                ";
        } else {
            // line 293
            echo "                                                <input type=\"checkbox\" name=\"module_lts_vendor_product_tab[seo]\" value=\"seo\" /> ";
            echo ($context["tab_seo"] ?? null);
            echo "
                                                ";
        }
        // line 295
        echo "                                            </label>
                                        </div>
                                    </div>
                                    <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 298
        echo ($context["text_select_all"] ?? null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo ($context["text_unselect_all"] ?? null);
        echo "</button>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-order\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 304
        echo ($context["entry_vendor_can_change_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <select name=\"module_lts_vendor_vendor_can_change_order_status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 307
        if (($context["module_lts_vendor_vendor_can_change_order_status"] ?? null)) {
            // line 308
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 309
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 311
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 312
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 314
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 318
        echo ($context["entry_order_status_change_by_vendor"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <select name=\"module_lts_vendor_order_status_change_by_vendor\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 321
        if (($context["module_lts_vendor_order_status_change_by_vendor"] ?? null)) {
            // line 322
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 323
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 325
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 326
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 328
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 332
        echo ($context["entry_vendor_receive_mail_product_purchase"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <select name=\"module_lts_vendor_receive_mail_product_purchase\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 335
        if (($context["module_lts_vendor_receive_mail_product_purchase"] ?? null)) {
            // line 336
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 337
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 339
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 340
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 342
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-profile\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 348
        echo ($context["entry_customer_can_see_vendor_email"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <select name=\"module_lts_vendor_customer_can_see_vendor_email\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 351
        if (($context["module_lts_vendor_customer_can_see_vendor_email"] ?? null)) {
            // line 352
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 353
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 355
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 356
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 358
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 362
        echo ($context["entry_customer_can_see_vendor_telephone"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <select name=\"module_lts_vendor_customer_can_see_vendor_telephone\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 365
        if (($context["module_lts_vendor_customer_can_see_vendor_telephone"] ?? null)) {
            // line 366
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 367
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 369
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 370
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 372
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-commission\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-receive-commission\">
                                    <span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 379
        echo ($context["text_commission"] ?? null);
        echo "\"> ";
        echo ($context["entry_commission_on_order"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-9\">
                                    <select name=\"module_lts_vendor_received_commission_status_id\" id=\"input-receive-commission\" class=\"form-control\">
                                        ";
        // line 382
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 383
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 383) == ($context["module_lts_vendor_received_commission_status_id"] ?? null))) {
                // line 384
                echo "                                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 384);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 384);
                echo "</option>
                                        ";
            } else {
                // line 386
                echo "                                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 386);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 386);
                echo "</option>
                                        ";
            }
            // line 388
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 389
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-default-commission\">";
        // line 393
        echo ($context["entry_default_commission"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <div class=\"input-group\">
                                        <input id=\"input-default-commission\" type=\"text\" class=\"form-control\" name=\"module_lts_vendor_default_commission\" value=\"";
        // line 396
        echo ($context["module_lts_vendor_default_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_default_commission"] ?? null);
        echo "\">
                                        <span class=\"input-group-addon\"><i class=\"fa fa-percent\"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-amount_limit\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-min-amount\">
                                      ";
        // line 405
        echo ($context["text_min_amount"] ?? null);
        echo " </label>
                                <div class=\"col-sm-9\">
                                    <input id=\"input-min-amount\" type=\"text\" class=\"form-control\" name=\"module_lts_vendor_min_amount_limit\" value=\"";
        // line 407
        echo ($context["module_lts_vendor_min_amount_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_min_amount"] ?? null);
        echo "\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-max-amount\">";
        // line 411
        echo ($context["text_max_amount"] ?? null);
        echo "</label>
                                <div class=\"col-sm-9\">                                                 
                                        <input id=\"input-max-amount\" type=\"text\" class=\"form-control\" name=\"module_lts_vendor_max_amount_limit\" value=\"";
        // line 413
        echo ($context["module_lts_vendor_max_amount_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_max_amount"] ?? null);
        echo "\">                             
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 422
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/lts_vendor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  990 => 422,  976 => 413,  971 => 411,  962 => 407,  957 => 405,  943 => 396,  937 => 393,  931 => 389,  925 => 388,  917 => 386,  909 => 384,  906 => 383,  902 => 382,  894 => 379,  885 => 372,  880 => 370,  875 => 369,  870 => 367,  865 => 366,  863 => 365,  857 => 362,  851 => 358,  846 => 356,  841 => 355,  836 => 353,  831 => 352,  829 => 351,  823 => 348,  815 => 342,  810 => 340,  805 => 339,  800 => 337,  795 => 336,  793 => 335,  787 => 332,  781 => 328,  776 => 326,  771 => 325,  766 => 323,  761 => 322,  759 => 321,  753 => 318,  747 => 314,  742 => 312,  737 => 311,  732 => 309,  727 => 308,  725 => 307,  719 => 304,  708 => 298,  703 => 295,  697 => 293,  687 => 291,  685 => 290,  679 => 286,  673 => 284,  663 => 282,  661 => 281,  655 => 277,  649 => 275,  639 => 273,  637 => 272,  631 => 268,  625 => 266,  615 => 264,  613 => 263,  607 => 259,  601 => 257,  591 => 255,  589 => 254,  583 => 250,  577 => 248,  569 => 246,  567 => 245,  561 => 241,  555 => 239,  549 => 237,  547 => 236,  541 => 232,  535 => 230,  527 => 228,  525 => 227,  517 => 222,  511 => 218,  506 => 216,  501 => 215,  496 => 213,  491 => 212,  489 => 211,  483 => 208,  477 => 204,  472 => 202,  467 => 201,  462 => 199,  457 => 198,  455 => 197,  449 => 194,  443 => 190,  438 => 188,  433 => 187,  428 => 185,  423 => 184,  421 => 183,  415 => 180,  409 => 176,  404 => 174,  399 => 173,  394 => 171,  389 => 170,  387 => 169,  381 => 166,  375 => 162,  371 => 151,  365 => 149,  359 => 147,  357 => 146,  349 => 141,  341 => 135,  336 => 133,  331 => 132,  326 => 130,  321 => 129,  319 => 128,  313 => 125,  307 => 121,  302 => 119,  297 => 118,  292 => 116,  287 => 115,  285 => 114,  279 => 111,  273 => 107,  268 => 105,  263 => 104,  258 => 102,  253 => 101,  251 => 100,  245 => 97,  239 => 93,  234 => 91,  229 => 90,  224 => 88,  219 => 87,  217 => 86,  211 => 83,  205 => 79,  200 => 77,  195 => 76,  190 => 74,  185 => 73,  183 => 72,  177 => 69,  174 => 68,  167 => 50,  163 => 49,  159 => 48,  155 => 47,  151 => 46,  147 => 45,  140 => 40,  135 => 38,  130 => 37,  125 => 35,  120 => 34,  118 => 33,  112 => 30,  107 => 28,  101 => 25,  97 => 23,  89 => 19,  87 => 18,  83 => 17,  77 => 13,  66 => 11,  62 => 10,  57 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/lts_vendor.twig", "");
    }
}
