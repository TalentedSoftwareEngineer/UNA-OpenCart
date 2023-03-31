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
class __TwigTemplate_23eea3762f8632cdc2b65f7ab8db01342cd67a7a6a8dd61e12156bd2c21c4ed4 extends \Twig\Template
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

  .d-flex {
    display: flex !important;
  }

  .justify-content-center {
    justify-content: center !important;
  }

  .align-items-center {
    align-items: center !important;
  }
</style>
";
        // line 74
        echo ($context["header"] ?? null);
        echo ($context["lts_column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <h1>";
        // line 78
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 81
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 81);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 81);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "            </ul>
        </div>
    </div>
    ";
        // line 86
        if (($context["error_warning"] ?? null)) {
            // line 87
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 91
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 92
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
    ";
        }
        // line 94
        echo "    <div class=\"panel panel-default\">         
        <div class=\"panel-body\">

        <div class=\"row\">
          ";
        // line 98
        if ( !twig_test_empty(($context["already_apply"] ?? null))) {
            // line 99
            echo "              <div class=\"col-md-12 pt-2\" style=\"margin-top:50px; \">
                 <span class=\"text-center\"><h2>";
            // line 100
            echo ($context["text_message_wait4approve"] ?? null);
            echo "</h2></span>
                 <span class=\"text-center\"><h4><a href=\"";
            // line 101
            echo ($context["account_link"] ?? null);
            echo "\">";
            echo ($context["text_back2account"] ?? null);
            echo "</a></h4></span>
              </div>
            
            ";
        } else {
            // line 105
            echo "          <div class=\"col-sm-12 lts-products\">

            <div class=\"panel panel-default\">
              <div class=\"panel-heading clearfix\"><b><span >";
            // line 108
            echo ($context["text_form"] ?? null);
            echo "</span></b>
                <div class=\"pull-right\">
                  <button type=\"submit\" form=\"form-vendor-store\" data-toggle=\"tooltip\" title=\"";
            // line 110
            echo ($context["button_save"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>

                  <a href=\"";
            // line 112
            echo ($context["cancel"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_cancel"] ?? null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>

                </div><br><br>
                <form action=\"";
            // line 115
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-vendor-store\" class=\"form-horizontal\">

              <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
            // line 118
            echo ($context["tab_general"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-store\" data-toggle=\"tab\">";
            // line 119
            echo ($context["tab_store"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-local\" data-toggle=\"tab\">";
            // line 120
            echo ($context["tab_local"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-image\" data-toggle=\"tab\">";
            // line 121
            echo ($context["tab_image"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-social\" data-toggle=\"tab\">";
            // line 122
            echo ($context["tab_social"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
            // line 123
            echo ($context["tab_seo"] ?? null);
            echo "</a></li>
              </ul>

              <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab-general\">

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description\">";
            // line 130
            echo ($context["entry_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"description\" class=\"form-control\" rows=\"5\" placeholder=\"";
            // line 132
            echo ($context["entry_description"] ?? null);
            echo "\">";
            echo ($context["description"] ?? null);
            echo "</textarea>
                    </div>
                  </div> 

                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-title\">";
            // line 137
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"meta_title\" value=\"";
            // line 139
            echo ($context["meta_title"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\">
                      ";
            // line 140
            if (($context["error_meta_title"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 141
                echo ($context["error_meta_title"] ?? null);
                echo "</div>
                      ";
            }
            // line 143
            echo "                    </div>
                  </div> 

                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
            // line 147
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"meta_description\" class=\"form-control\" rows=\"5\" placeholder=\"";
            // line 149
            echo ($context["entry_meta_description"] ?? null);
            echo "\">";
            echo ($context["meta_description"] ?? null);
            echo "</textarea>
                      ";
            // line 150
            if (($context["error_meta_description"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 151
                echo ($context["error_meta_description"] ?? null);
                echo "</div>
                      ";
            }
            // line 153
            echo "                    </div>
                  </div> 

                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
            // line 157
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"meta_keyword\" class=\"form-control\" rows=\"5\" placeholder=\"";
            // line 159
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\">";
            echo ($context["meta_keyword"] ?? null);
            echo "</textarea>
                      ";
            // line 160
            if (($context["error_meta_keyword"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 161
                echo ($context["error_meta_keyword"] ?? null);
                echo "</div>
                      ";
            }
            // line 163
            echo "                    </div>
                  </div> 



                </div>
                <div class=\"tab-pane\" id=\"tab-store\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-store-owner\">";
            // line 171
            echo ($context["entry_store_owner"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"store_owner\" value=\"";
            // line 173
            echo ($context["store_owner"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_store_owner"] ?? null);
            echo "\">
                      ";
            // line 174
            if (($context["error_store_owner"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 175
                echo ($context["error_store_owner"] ?? null);
                echo "</div>
                      ";
            }
            // line 177
            echo "                    </div>
                  </div> 


                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-store-name\">";
            // line 182
            echo ($context["entry_store_name"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"store_name\" value=\"";
            // line 184
            echo ($context["store_name"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_store_name"] ?? null);
            echo "\">
                      ";
            // line 185
            if (($context["error_store_name"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 186
                echo ($context["error_store_name"] ?? null);
                echo "</div>
                      ";
            }
            // line 188
            echo "                    </div>
                  </div>  

                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 192
            echo ($context["entry_address"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                    ";
            // line 195
            echo "
                    <textarea name=\"address\" class=\"form-control\" placeholder=\"";
            // line 196
            echo ($context["entry_address"] ?? null);
            echo "\">";
            echo ($context["address"] ?? null);
            echo "</textarea>

                      ";
            // line 198
            if (($context["error_address"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 199
                echo ($context["error_address"] ?? null);
                echo "</div>
                      ";
            }
            // line 201
            echo "                    </div>
                  </div> 


                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 206
            echo ($context["entry_email"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"email\" value=\"";
            // line 208
            echo ($context["email"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_email"] ?? null);
            echo "\">
                      ";
            // line 209
            if (($context["error_email"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 210
                echo ($context["error_email"] ?? null);
                echo "</div>
                      ";
            }
            // line 212
            echo "                    </div>
                  </div> 

                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 216
            echo ($context["entry_telephone"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"telephone\" value=\"";
            // line 218
            echo ($context["telephone"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_telephone"] ?? null);
            echo "\">
                      ";
            // line 219
            if (($context["error_telephone"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 220
                echo ($context["error_telephone"] ?? null);
                echo "</div>
                      ";
            }
            // line 222
            echo "                    </div>
                  </div> 

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 226
            echo ($context["entry_fax"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"fax\" value=\"";
            // line 228
            echo ($context["fax"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_fax"] ?? null);
            echo "\">
                    </div>
                  </div> 

                  <div class=\"form-group\">
                    <div class=\"col-sm-2\"></div>
                    <div class=\"col-sm-10 d-flex align-items-center\">
                      <label class=\"switch\">
                        <input id=\"toggle_store_type\" type=\"checkbox\">
                        <span class=\"slider round\"></span>
                      </label>
                      <strong id=\"store_type_label\" style=\"margin-left: 10px;\">Physical store</strong>
                    </div>
                  </div>

                </div>


                <div class=\"tab-pane\" id=\"tab-local\">

                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 249
            echo ($context["entry_country"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
                        <option value=\"\">";
            // line 252
            echo ($context["text_select"] ?? null);
            echo "</option>
                        ";
            // line 253
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 254
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 254) == ($context["country_id"] ?? null))) {
                    // line 255
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 255);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 255);
                    echo "</option>
                          ";
                } else {
                    // line 257
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 257);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 257);
                    echo "</option>
                          ";
                }
                // line 259
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 260
            echo "                      </select>
                      ";
            // line 261
            if (($context["error_country"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 262
                echo ($context["error_country"] ?? null);
                echo "</div>
                      ";
            }
            // line 264
            echo "                    </div>
                  </div> 
   
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 268
            echo ($context["entry_state"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
                      </select>
                      ";
            // line 272
            if (($context["error_zone"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 273
                echo ($context["error_zone"] ?? null);
                echo "</div>
                      ";
            }
            // line 275
            echo "                    </div>
                  </div> 


                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 280
            echo ($context["entry_city"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"city\" class=\"form-control\" value=\"";
            // line 282
            echo ($context["city"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_city"] ?? null);
            echo "\">
                      ";
            // line 283
            if (($context["error_city"] ?? null)) {
                echo "  
                        <div class=\"text-danger\">";
                // line 284
                echo ($context["error_city"] ?? null);
                echo "</div>
                      ";
            }
            // line 286
            echo "                    </div>
                  </div> 
                </div> 
                <div class=\"tab-pane\" id=\"tab-image\">

                  <div class=\"form-group \">
                    <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
            // line 292
            echo ($context["entry_logo"] ?? null);
            echo "
                    <br><i style=\"font-size: 9px;\">";
            // line 293
            echo ($context["text_logo"] ?? null);
            echo "</i>
                    </label>
                    <div class=\"col-sm-10\">
                      <a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 296
            echo ($context["logo_thumb"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>

                      <input type=\"hidden\" name=\"logo\" value=\"";
            // line 298
            echo ($context["logo"] ?? null);
            echo "\" id=\"input-logo\" />
                    </div>
                  </div> 

                  <div class=\"form-group \">
                    <label class=\"col-sm-2 control-label\" for=\"input-banner\">";
            // line 303
            echo ($context["entry_banner"] ?? null);
            echo "<br><i style=\"font-size: 9px;\">";
            echo ($context["text_banner"] ?? null);
            echo "</i></label>
                    <div class=\"col-sm-10\">
                      <a href=\"\" id=\"thumb-banner\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 305
            echo ($context["banner_thumb"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
                      <input type=\"hidden\" name=\"banner\" value=\"";
            // line 306
            echo ($context["banner"] ?? null);
            echo "\" id=\"input-banner\"/>
                    </div>
                  </div> 

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-profile-image\">";
            // line 311
            echo ($context["entry_profile_image"] ?? null);
            echo "<br><i style=\"font-size: 9px;\">";
            echo ($context["text_profile"] ?? null);
            echo "</i></label>
                    <div class=\"col-sm-10\">
                      <a href=\"\" id=\"thumb-profile\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 313
            echo ($context["profile_image_thumb"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
                      <input type=\"hidden\" name=\"profile_image\" value=\"";
            // line 314
            echo ($context["profile_image"] ?? null);
            echo "\" id=\"input-profile-image\"/>
                    </div>
                  </div>  

                </div>

                <div class=\"tab-pane\" id=\"tab-social\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 322
            echo ($context["entry_facebook"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 326
            echo ($context["entry_facebook"] ?? null);
            echo "\" value=\"";
            echo ($context["facebook"] ?? null);
            echo "\" name=\"facebook\">
                      </div>
                    </div>
                  </div> 

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 332
            echo ($context["entry_instagram"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 336
            echo ($context["entry_instagram"] ?? null);
            echo "\" value=\"";
            echo ($context["instagram"] ?? null);
            echo "\" name=\"instagram\">
                      </div>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 342
            echo ($context["entry_youtube"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 346
            echo ($context["entry_youtube"] ?? null);
            echo "\" value=\"";
            echo ($context["youtube"] ?? null);
            echo "\" name=\"youtube\">
                      </div>
                    </div>
                  </div> 


                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 353
            echo ($context["entry_twitter"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 357
            echo ($context["entry_twitter"] ?? null);
            echo "\" value=\"";
            echo ($context["twitter"] ?? null);
            echo "\" name=\"twitter\">
                      </div>
                    </div>
                  </div> 

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 363
            echo ($context["entry_pintrest"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 367
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
            // line 375
            echo ($context["text_keyword"] ?? null);
            echo "</div>
                  <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover\">
                      <thead>
                        <tr>
                          <td class=\"text-left\">";
            // line 380
            echo ($context["entry_store"] ?? null);
            echo "</td>
                          <td class=\"text-left\">";
            // line 381
            echo ($context["entry_keyword"] ?? null);
            echo "</td>
                        </tr>
                      </thead>
                      <tbody>
                        ";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 386
                echo "                          <tr>
                            <td class=\"text-left\">";
                // line 387
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 387);
                echo "</td>
                            <td class=\"text-left\">";
                // line 388
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 389
                    echo "                                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"catalog/language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 389);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 389);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 389);
                    echo "\"/></span> <input type=\"text\" name=\"vendor_seo_url[";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 389);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 389);
                    echo "]\" value=\"";
                    if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["vendor_seo_url"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 389)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 389)] ?? null) : null)) {
                        echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["vendor_seo_url"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 389)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 389)] ?? null) : null);
                    }
                    echo "\" placeholder=\"";
                    echo ($context["entry_keyword"] ?? null);
                    echo "\" class=\"form-control\"/>
                                </div>
                                ";
                    // line 391
                    if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["error_keyword"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 391)] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 391)] ?? null) : null)) {
                        // line 392
                        echo "                                  <div class=\"text-danger\">";
                        echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_keyword"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 392)] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 392)] ?? null) : null);
                        echo "</div>
                                ";
                    }
                    // line 394
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
            // line 397
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
        // line 413
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
        // line 424
        echo ($context["text_select"] ?? null);
        echo "</option>';
            if (json['zone'] && json['zone'] != '') {
              for (i = 0; i < json['zone'].length; i++) {
                html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                if (json['zone'][i]['zone_id'] == '";
        // line 429
        echo ($context["zone_id"] ?? null);
        echo "') {
                  html += ' selected=\"selected\"';
                }

                html += '>' + json['zone'][i]['name'] + '</option>';
              }
            } else {
              html += '<option value=\"0\" selected=\"selected\">";
        // line 436
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

      \$('#toggle_store_type').change(function() {
        if(this.checked) {
          \$('#store_type_label').text('Virtual store');
        } else {
          \$('#store_type_label').text('Physical store');
        }

        
      });

      //--></script>
";
        // line 459
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
        return array (  932 => 459,  906 => 436,  896 => 429,  888 => 424,  875 => 413,  857 => 397,  844 => 394,  838 => 392,  836 => 391,  816 => 389,  812 => 388,  808 => 387,  805 => 386,  801 => 385,  794 => 381,  790 => 380,  782 => 375,  769 => 367,  762 => 363,  751 => 357,  744 => 353,  732 => 346,  725 => 342,  714 => 336,  707 => 332,  696 => 326,  689 => 322,  678 => 314,  672 => 313,  665 => 311,  657 => 306,  651 => 305,  644 => 303,  636 => 298,  629 => 296,  623 => 293,  619 => 292,  611 => 286,  606 => 284,  602 => 283,  596 => 282,  591 => 280,  584 => 275,  579 => 273,  575 => 272,  568 => 268,  562 => 264,  557 => 262,  553 => 261,  550 => 260,  544 => 259,  536 => 257,  528 => 255,  525 => 254,  521 => 253,  517 => 252,  511 => 249,  485 => 228,  480 => 226,  474 => 222,  469 => 220,  465 => 219,  459 => 218,  454 => 216,  448 => 212,  443 => 210,  439 => 209,  433 => 208,  428 => 206,  421 => 201,  416 => 199,  412 => 198,  405 => 196,  402 => 195,  397 => 192,  391 => 188,  386 => 186,  382 => 185,  376 => 184,  371 => 182,  364 => 177,  359 => 175,  355 => 174,  349 => 173,  344 => 171,  334 => 163,  329 => 161,  325 => 160,  319 => 159,  314 => 157,  308 => 153,  303 => 151,  299 => 150,  293 => 149,  288 => 147,  282 => 143,  277 => 141,  273 => 140,  267 => 139,  262 => 137,  252 => 132,  247 => 130,  237 => 123,  233 => 122,  229 => 121,  225 => 120,  221 => 119,  217 => 118,  211 => 115,  203 => 112,  198 => 110,  193 => 108,  188 => 105,  179 => 101,  175 => 100,  172 => 99,  170 => 98,  164 => 94,  158 => 92,  155 => 91,  147 => 87,  145 => 86,  140 => 83,  129 => 81,  125 => 80,  120 => 78,  112 => 74,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_store.twig", "");
    }
}
