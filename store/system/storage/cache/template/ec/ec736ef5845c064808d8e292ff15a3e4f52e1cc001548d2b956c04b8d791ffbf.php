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

/* default/template/account/vendor/lts_store.twig */
class __TwigTemplate_942a4cf6b17841e3f3be5d075dceca57d9ffcb736ab1316a14a6c916f773b0b2 extends \Twig\Template
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
  .switch {
    position: relative;
    display: inline-block;
    width: 55px;
    height: 28px;
  }

  .switch input { 
    opacity: 0;
    width: 0;
    height: 0;
  }

  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }

  .slider:before {
    position: absolute;
    content: \"\";
    height: 20px;
    width: 20px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }

  input:checked + .slider {
    background-color: #2196F3;
  }

  input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
  }

  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }

  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }

  .slider.round:before {
    border-radius: 50%;
  }
</style>
";
        // line 62
        echo ($context["header"] ?? null);
        echo ($context["lts_column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <h1>";
        // line 66
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 69
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 69);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 69);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </ul>
        </div>
    </div>
    ";
        // line 74
        if (($context["error_warning"] ?? null)) {
            // line 75
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 79
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 80
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
    ";
        }
        // line 82
        echo "    <div class=\"panel panel-default\">         
        <div class=\"panel-body\">

        <div class=\"row\">
          ";
        // line 86
        if ( !twig_test_empty(($context["already_apply"] ?? null))) {
            // line 87
            echo "              <div class=\"col-md-12 pt-2\" style=\"margin-top:50px; \">
                 <span class=\"text-center\"><h2>";
            // line 88
            echo ($context["text_message_wait4approve"] ?? null);
            echo "</h2></span>
                 <span class=\"text-center\"><h4><a href=\"";
            // line 89
            echo ($context["account_link"] ?? null);
            echo "\">";
            echo ($context["text_back2account"] ?? null);
            echo "</a></h4></span>
              </div>
            
            ";
        } else {
            // line 93
            echo "          <div class=\"col-sm-12 lts-products\">

            <div class=\"panel panel-default\">
              <div class=\"panel-heading clearfix\"><b><span >";
            // line 96
            echo ($context["text_form"] ?? null);
            echo "</span></b>
                <div class=\"pull-right\">
                  <button type=\"submit\" form=\"form-vendor-store\" data-toggle=\"tooltip\" title=\"";
            // line 98
            echo ($context["button_save"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>

                  <a href=\"";
            // line 100
            echo ($context["cancel"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_cancel"] ?? null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>

                </div><br><br>
                <form action=\"";
            // line 103
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-vendor-store\" class=\"form-horizontal\">

              <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
            // line 106
            echo ($context["tab_general"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-store\" data-toggle=\"tab\">";
            // line 107
            echo ($context["tab_store"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-local\" data-toggle=\"tab\">";
            // line 108
            echo ($context["tab_local"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-image\" data-toggle=\"tab\">";
            // line 109
            echo ($context["tab_image"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-social\" data-toggle=\"tab\">";
            // line 110
            echo ($context["tab_social"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
            // line 111
            echo ($context["tab_seo"] ?? null);
            echo "</a></li>
              </ul>

              <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab-general\">

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description\">";
            // line 118
            echo ($context["entry_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"description\" class=\"form-control\" rows=\"5\" placeholder=\"";
            // line 120
            echo ($context["entry_description"] ?? null);
            echo "\">";
            echo ($context["description"] ?? null);
            echo "</textarea>
                    </div>
                  </div> 

                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-title\">";
            // line 125
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"meta_title\" value=\"";
            // line 127
            echo ($context["meta_title"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\">
                      ";
            // line 128
            if (($context["error_meta_title"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 129
                echo ($context["error_meta_title"] ?? null);
                echo "</div>
                      ";
            }
            // line 131
            echo "                    </div>
                  </div> 

                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
            // line 135
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"meta_description\" class=\"form-control\" rows=\"5\" placeholder=\"";
            // line 137
            echo ($context["entry_meta_description"] ?? null);
            echo "\">";
            echo ($context["meta_description"] ?? null);
            echo "</textarea>
                      ";
            // line 138
            if (($context["error_meta_description"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 139
                echo ($context["error_meta_description"] ?? null);
                echo "</div>
                      ";
            }
            // line 141
            echo "                    </div>
                  </div> 

                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
            // line 145
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"meta_keyword\" class=\"form-control\" rows=\"5\" placeholder=\"";
            // line 147
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\">";
            echo ($context["meta_keyword"] ?? null);
            echo "</textarea>
                      ";
            // line 148
            if (($context["error_meta_keyword"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 149
                echo ($context["error_meta_keyword"] ?? null);
                echo "</div>
                      ";
            }
            // line 151
            echo "                    </div>
                  </div> 



                </div>
                <div class=\"tab-pane\" id=\"tab-store\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-store-owner\">";
            // line 159
            echo ($context["entry_store_owner"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"store_owner\" value=\"";
            // line 161
            echo ($context["store_owner"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_store_owner"] ?? null);
            echo "\">
                      ";
            // line 162
            if (($context["error_store_owner"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 163
                echo ($context["error_store_owner"] ?? null);
                echo "</div>
                      ";
            }
            // line 165
            echo "                    </div>
                  </div> 


                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-store-name\">";
            // line 170
            echo ($context["entry_store_name"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"store_name\" value=\"";
            // line 172
            echo ($context["store_name"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_store_name"] ?? null);
            echo "\">
                      ";
            // line 173
            if (($context["error_store_name"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 174
                echo ($context["error_store_name"] ?? null);
                echo "</div>
                      ";
            }
            // line 176
            echo "                    </div>
                  </div>  

                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 180
            echo ($context["entry_address"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                    ";
            // line 183
            echo "
                    <textarea name=\"address\" class=\"form-control\" placeholder=\"";
            // line 184
            echo ($context["entry_address"] ?? null);
            echo "\">";
            echo ($context["address"] ?? null);
            echo "</textarea>

                      ";
            // line 186
            if (($context["error_address"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 187
                echo ($context["error_address"] ?? null);
                echo "</div>
                      ";
            }
            // line 189
            echo "                    </div>
                  </div> 


                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 194
            echo ($context["entry_email"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"email\" value=\"";
            // line 196
            echo ($context["email"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_email"] ?? null);
            echo "\">
                      ";
            // line 197
            if (($context["error_email"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 198
                echo ($context["error_email"] ?? null);
                echo "</div>
                      ";
            }
            // line 200
            echo "                    </div>
                  </div> 

                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 204
            echo ($context["entry_telephone"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"telephone\" value=\"";
            // line 206
            echo ($context["telephone"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_telephone"] ?? null);
            echo "\">
                      ";
            // line 207
            if (($context["error_telephone"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 208
                echo ($context["error_telephone"] ?? null);
                echo "</div>
                      ";
            }
            // line 210
            echo "                    </div>
                  </div> 

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 214
            echo ($context["entry_fax"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"fax\" value=\"";
            // line 216
            echo ($context["fax"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_fax"] ?? null);
            echo "\">
                    </div>
                  </div> 

                  <div class=\"form-group\">
                    <div class=\"col-sm-2\"></div>
                    <div class=\"col-sm-10\">
                      <label class=\"switch\">
                        <input type=\"checkbox\" checked>
                        <span class=\"slider round\"></span>
                      </label>
                      <strong>Physical store owner</strong>
                    </div>
                  </div>

                </div>


                <div class=\"tab-pane\" id=\"tab-local\">

                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 237
            echo ($context["entry_country"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
                        <option value=\"\">";
            // line 240
            echo ($context["text_select"] ?? null);
            echo "</option>
                        ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 242
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 242) == ($context["country_id"] ?? null))) {
                    // line 243
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 243);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 243);
                    echo "</option>
                          ";
                } else {
                    // line 245
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 245);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 245);
                    echo "</option>
                          ";
                }
                // line 247
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "                      </select>
                      ";
            // line 249
            if (($context["error_country"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 250
                echo ($context["error_country"] ?? null);
                echo "</div>
                      ";
            }
            // line 252
            echo "                    </div>
                  </div> 
   
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 256
            echo ($context["entry_state"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
                      </select>
                      ";
            // line 260
            if (($context["error_zone"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 261
                echo ($context["error_zone"] ?? null);
                echo "</div>
                      ";
            }
            // line 263
            echo "                    </div>
                  </div> 


                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 268
            echo ($context["entry_city"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"city\" class=\"form-control\" value=\"";
            // line 270
            echo ($context["city"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_city"] ?? null);
            echo "\">
                      ";
            // line 271
            if (($context["error_city"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 272
                echo ($context["error_city"] ?? null);
                echo "</div>
                      ";
            }
            // line 274
            echo "                    </div>
                  </div> 
                </div> 
                <div class=\"tab-pane\" id=\"tab-image\">

                  <div class=\"form-group \">
                    <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
            // line 280
            echo ($context["entry_logo"] ?? null);
            echo "
                    <br><i style=\"font-size: 9px;\">";
            // line 281
            echo ($context["text_logo"] ?? null);
            echo "</i>
                    </label>
                    <div class=\"col-sm-10\">
                      <a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 284
            echo ($context["logo_thumb"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>

                      <input type=\"hidden\" name=\"logo\" value=\"";
            // line 286
            echo ($context["logo"] ?? null);
            echo "\" id=\"input-logo\" />
                    </div>
                  </div> 

                  <div class=\"form-group \">
                    <label class=\"col-sm-2 control-label\" for=\"input-banner\">";
            // line 291
            echo ($context["entry_banner"] ?? null);
            echo "<br><i style=\"font-size: 9px;\">";
            echo ($context["text_banner"] ?? null);
            echo "</i></label>
                    <div class=\"col-sm-10\">
                      <a href=\"\" id=\"thumb-banner\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 293
            echo ($context["banner_thumb"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
                      <input type=\"hidden\" name=\"banner\" value=\"";
            // line 294
            echo ($context["banner"] ?? null);
            echo "\" id=\"input-banner\"/>
                    </div>
                  </div> 

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-profile-image\">";
            // line 299
            echo ($context["entry_profile_image"] ?? null);
            echo "<br><i style=\"font-size: 9px;\">";
            echo ($context["text_profile"] ?? null);
            echo "</i></label>
                    <div class=\"col-sm-10\">
                      <a href=\"\" id=\"thumb-profile\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 301
            echo ($context["profile_image_thumb"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
                      <input type=\"hidden\" name=\"profile_image\" value=\"";
            // line 302
            echo ($context["profile_image"] ?? null);
            echo "\" id=\"input-profile-image\"/>
                    </div>
                  </div>  

                </div>

                <div class=\"tab-pane\" id=\"tab-social\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 310
            echo ($context["entry_facebook"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 314
            echo ($context["entry_facebook"] ?? null);
            echo "\" value=\"";
            echo ($context["facebook"] ?? null);
            echo "\" name=\"facebook\">
                      </div>
                    </div>
                  </div> 

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 320
            echo ($context["entry_instagram"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 324
            echo ($context["entry_instagram"] ?? null);
            echo "\" value=\"";
            echo ($context["instagram"] ?? null);
            echo "\" name=\"instagram\">
                      </div>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 330
            echo ($context["entry_youtube"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 334
            echo ($context["entry_youtube"] ?? null);
            echo "\" value=\"";
            echo ($context["youtube"] ?? null);
            echo "\" name=\"youtube\">
                      </div>
                    </div>
                  </div> 


                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 341
            echo ($context["entry_twitter"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 345
            echo ($context["entry_twitter"] ?? null);
            echo "\" value=\"";
            echo ($context["twitter"] ?? null);
            echo "\" name=\"twitter\">
                      </div>
                    </div>
                  </div> 

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 351
            echo ($context["entry_pintrest"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 355
            echo ($context["entry_pintrest"] ?? null);
            echo "\" value=\"";
            echo ($context["pinterest"] ?? null);
            echo "\" name=\"pinterest\">
                      </div>
                    </div>
                  </div> 

                </div>

                <div class=\"tab-pane\" id=\"tab-seo\">
                  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 363
            echo ($context["text_keyword"] ?? null);
            echo "</div>
                  <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover\">
                      <thead>
                        <tr>
                          <td class=\"text-left\">";
            // line 368
            echo ($context["entry_store"] ?? null);
            echo "</td>
                          <td class=\"text-left\">";
            // line 369
            echo ($context["entry_keyword"] ?? null);
            echo "</td>
                        </tr>
                      </thead>
                      <tbody>
                        ";
            // line 373
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 374
                echo "                          <tr>
                            <td class=\"text-left\">";
                // line 375
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 375);
                echo "</td>
                            <td class=\"text-left\">";
                // line 376
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 377
                    echo "                                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"catalog/language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 377);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 377);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 377);
                    echo "\"/></span> <input type=\"text\" name=\"vendor_seo_url[";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 377);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 377);
                    echo "]\" value=\"";
                    if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["vendor_seo_url"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 377)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 377)] ?? null) : null)) {
                        echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["vendor_seo_url"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 377)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 377)] ?? null) : null);
                    }
                    echo "\" placeholder=\"";
                    echo ($context["entry_keyword"] ?? null);
                    echo "\" class=\"form-control\"/>
                                </div>
                                ";
                    // line 379
                    if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["error_keyword"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 379)] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 379)] ?? null) : null)) {
                        // line 380
                        echo "                                  <div class=\"text-danger\">";
                        echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_keyword"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 380)] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 380)] ?? null) : null);
                        echo "</div>
                                ";
                    }
                    // line 382
                    echo "                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</td>
                          </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 385
            echo "                      </tbody>

                    </table>
                  </div>
                </div>

              </div>

            </form>
              </div>
            </div>
        
            

          </div>
          ";
        }
        // line 401
        echo "
        </div>
      </div>
    </div>  
    <script type=\"text/javascript\"><!--
\$('select[name=\\'country_id\\']').on('change', function () {
        \$.ajax({
          url: 'index.php?route=account/vendor/lts_store/country&country_id=' + this.value,
          dataType: 'json',

          success: function (json) {
            html = '<option value=\"\">";
        // line 412
        echo ($context["text_select"] ?? null);
        echo "</option>';
            if (json['zone'] && json['zone'] != '') {
              for (i = 0; i < json['zone'].length; i++) {
                html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                if (json['zone'][i]['zone_id'] == '";
        // line 417
        echo ($context["zone_id"] ?? null);
        echo "') {
                  html += ' selected=\"selected\"';
                }

                html += '>' + json['zone'][i]['name'] + '</option>';
              }
            } else {
              html += '<option value=\"0\" selected=\"selected\">";
        // line 424
        echo ($context["text_none"] ?? null);
        echo "</option>';
            }
            \$('select[name=\\'zone_id\\']').html(html);
          },
          error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      });

      \$('select[name=\\'country_id\\']').trigger('change');

      //--></script>
";
        // line 437
        echo ($context["footer"] ?? null);
        echo "  
  </div>";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_store.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  910 => 437,  894 => 424,  884 => 417,  876 => 412,  863 => 401,  845 => 385,  832 => 382,  826 => 380,  824 => 379,  804 => 377,  800 => 376,  796 => 375,  793 => 374,  789 => 373,  782 => 369,  778 => 368,  770 => 363,  757 => 355,  750 => 351,  739 => 345,  732 => 341,  720 => 334,  713 => 330,  702 => 324,  695 => 320,  684 => 314,  677 => 310,  666 => 302,  660 => 301,  653 => 299,  645 => 294,  639 => 293,  632 => 291,  624 => 286,  617 => 284,  611 => 281,  607 => 280,  599 => 274,  594 => 272,  590 => 271,  584 => 270,  579 => 268,  572 => 263,  567 => 261,  563 => 260,  556 => 256,  550 => 252,  545 => 250,  541 => 249,  538 => 248,  532 => 247,  524 => 245,  516 => 243,  513 => 242,  509 => 241,  505 => 240,  499 => 237,  473 => 216,  468 => 214,  462 => 210,  457 => 208,  453 => 207,  447 => 206,  442 => 204,  436 => 200,  431 => 198,  427 => 197,  421 => 196,  416 => 194,  409 => 189,  404 => 187,  400 => 186,  393 => 184,  390 => 183,  385 => 180,  379 => 176,  374 => 174,  370 => 173,  364 => 172,  359 => 170,  352 => 165,  347 => 163,  343 => 162,  337 => 161,  332 => 159,  322 => 151,  317 => 149,  313 => 148,  307 => 147,  302 => 145,  296 => 141,  291 => 139,  287 => 138,  281 => 137,  276 => 135,  270 => 131,  265 => 129,  261 => 128,  255 => 127,  250 => 125,  240 => 120,  235 => 118,  225 => 111,  221 => 110,  217 => 109,  213 => 108,  209 => 107,  205 => 106,  199 => 103,  191 => 100,  186 => 98,  181 => 96,  176 => 93,  167 => 89,  163 => 88,  160 => 87,  158 => 86,  152 => 82,  146 => 80,  143 => 79,  135 => 75,  133 => 74,  128 => 71,  117 => 69,  113 => 68,  108 => 66,  100 => 62,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_store.twig", "");
    }
}
