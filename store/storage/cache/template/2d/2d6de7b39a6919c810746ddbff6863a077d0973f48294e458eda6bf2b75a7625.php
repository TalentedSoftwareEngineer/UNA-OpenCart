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

/* default/template/account/vendor/lts_product_form.twig */
class __TwigTemplate_6aff83f58b635b8e3cb237fe77a5865b5286ef606858a75ae612bff7a5ad8704 extends \Twig\Template
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
        echo "  ";
        echo ($context["lts_column_left"] ?? null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"lts-vendor-form-product\" data-toggle=\"tooltip\" title=\"";
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
            echo "          <li><a href=\"";
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
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>

      </div>
    ";
        }
        // line 22
        echo "   

  ";
        // line 24
        if (($context["success"] ?? null)) {
            // line 25
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 29
        echo "       <div class=\"panel panel-default\">      
            <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 31
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
          <div class=\"panel-body\">              
            <form action=\"";
        // line 34
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"lts-vendor-form-product\" class=\"form-horizontal\">
              <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
                  ";
        // line 38
        if (($context["links"] ?? null)) {
            // line 39
            echo "                  <li><a href=\"#tab-links\" data-toggle=\"tab\">";
            echo ($context["tab_links"] ?? null);
            echo "</a></li>
                  ";
        }
        // line 41
        echo "                  ";
        if (($context["attribute"] ?? null)) {
            // line 42
            echo "                  <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
                  ";
        }
        // line 44
        echo "                  ";
        if (($context["option"] ?? null)) {
            // line 45
            echo "                  <li><a href=\"#tab-option\" data-toggle=\"tab\">";
            echo ($context["tab_option"] ?? null);
            echo "</a></li>
                  ";
        }
        // line 47
        echo "                ";
        if (($context["discount"] ?? null)) {
            // line 48
            echo "                  <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
            echo ($context["tab_discount"] ?? null);
            echo "</a></li>
                  ";
        }
        // line 50
        echo "                  ";
        if (($context["special"] ?? null)) {
            // line 51
            echo "                  <li><a href=\"#tab-special\" data-toggle=\"tab\">";
            echo ($context["tab_special"] ?? null);
            echo "</a></li>
                  ";
        }
        // line 53
        echo "
                ";
        // line 54
        if (($context["vendor_pincode"] ?? null)) {
            echo " 
                  <li><a href=\"#tab-pincode-checker\" data-toggle=\"tab\">";
            // line 55
            echo ($context["tab_pincode_checker"] ?? null);
            echo "</a></li>
                  ";
        }
        // line 57
        echo "
                ";
        // line 58
        if (($context["images"] ?? null)) {
            // line 59
            echo "                  <li><a href=\"#tab-image\" data-toggle=\"tab\">";
            echo ($context["tab_image"] ?? null);
            echo "</a></li>
                  ";
        }
        // line 61
        echo "                  ";
        if (($context["reward"] ?? null)) {
            // line 62
            echo "                  <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
            echo ($context["tab_reward"] ?? null);
            echo "</a></li>
                  ";
        }
        // line 64
        echo "                  ";
        if (($context["seo"] ?? null)) {
            // line 65
            echo "                  <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
            echo ($context["tab_seo"] ?? null);
            echo "</a></li>
                  ";
        }
        // line 67
        echo "              </ul>
              <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab-general\">

                  <ul class=\"nav nav-tabs\" id=\"language\">
                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 73
            echo "                      <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
            echo "\" data-toggle=\"tab\"><img src=\"catalog/language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 73);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 73);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 73);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 73);
            echo "</a>
                      </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                  </ul>
                  <div class=\"tab-content\">
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 79
            echo "                      <input type=\"hidden\" name=\"language_id\" id=\"language_id\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79);
            echo "\" />
                      <div class=\"tab-pane\" id=\"language";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
            echo "\">
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 82);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"product_description[";
            // line 84
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["product_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["product_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84)] ?? null) : null), "name", [], "any", false, false, false, 84)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84);
            echo "\" class=\"form-control product-name\" />
                            <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 85
            echo ($context["product_id"] ?? null);
            echo "\" />
                            ";
            // line 86
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86)] ?? null) : null)) {
                // line 87
                echo "                              <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87)] ?? null) : null);
                echo "</div>
                            ";
            }
            // line 88
            echo " 
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"product_description[";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["product_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["product_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94)] ?? null) : null), "description", [], "any", false, false, false, 94)) : (""));
            echo "</textarea>
                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 98);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"product_description[";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["product_description"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["product_description"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100)] ?? null) : null), "meta_title", [], "any", false, false, false, 100)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100);
            echo "\" class=\"form-control\" />
                            ";
            // line 101
            if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_meta_title"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101)] ?? null) : null)) {
                // line 102
                echo "                              <div class=\"text-danger\">";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_meta_title"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102)] ?? null) : null);
                echo "</div>
                            ";
            }
            // line 103
            echo " </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"product_description[";
            // line 108
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
            echo "\" class=\"form-control\">";
            echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["product_description"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["product_description"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108)] ?? null) : null), "meta_description", [], "any", false, false, false, 108)) : (""));
            echo "</textarea>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 112);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"product_description[";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
            echo "\" class=\"form-control\">";
            echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["product_description"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["product_description"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 114)) : (""));
            echo "</textarea>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 118
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"product_description[";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120);
            echo "][tag]\" value=\"";
            echo (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["product_description"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["product_description"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120)] ?? null) : null), "tag", [], "any", false, false, false, 120)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120);
            echo "\" class=\"form-control\" />
                          </div>
                        </div>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                  </div>
                </div>
                <div class=\"tab-pane\" id=\"tab-data\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 129
        echo ($context["entry_model"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"model\" value=\"";
        // line 131
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
                      ";
        // line 132
        if (($context["error_model"] ?? null)) {
            // line 133
            echo "                        <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                      ";
        }
        // line 134
        echo "</div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 137
        echo ($context["help_sku"] ?? null);
        echo "\">";
        echo ($context["entry_sku"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"sku\" value=\"";
        // line 139
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 143
        echo ($context["help_upc"] ?? null);
        echo "\">";
        echo ($context["entry_upc"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"upc\" value=\"";
        // line 145
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 149
        echo ($context["help_ean"] ?? null);
        echo "\">";
        echo ($context["entry_ean"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"ean\" value=\"";
        // line 151
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 155
        echo ($context["help_jan"] ?? null);
        echo "\">";
        echo ($context["entry_jan"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"jan\" value=\"";
        // line 157
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 161
        echo ($context["help_isbn"] ?? null);
        echo "\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"isbn\" value=\"";
        // line 163
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"";
        // line 167
        echo ($context["help_mpn"] ?? null);
        echo "\">";
        echo ($context["entry_mpn"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"mpn\" value=\"";
        // line 169
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 173
        echo ($context["entry_location"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"location\" value=\"";
        // line 175
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 179
        echo ($context["entry_price"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"price\" value=\"";
        // line 181
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 185
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                        <option value=\"0\">";
        // line 188
        echo ($context["text_none"] ?? null);
        echo "</option>


                        ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 192
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 192) == ($context["tax_class_id"] ?? null))) {
                // line 193
                echo "

                            <option value=\"";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 195);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 195);
                echo "</option>


                          ";
            } else {
                // line 199
                echo "

                            <option value=\"";
                // line 201
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 201);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 201);
                echo "</option>


                          ";
            }
            // line 205
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "

                      </select>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 212
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"quantity\" value=\"";
        // line 214
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
        // line 218
        echo ($context["help_minimum"] ?? null);
        echo "\">";
        echo ($context["entry_minimum"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"minimum\" value=\"";
        // line 220
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 224
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">


                        ";
        // line 229
        if (($context["subtract"] ?? null)) {
            // line 230
            echo "

                          <option value=\"1\" selected=\"selected\">";
            // line 232
            echo ($context["text_yes"] ?? null);
            echo "</option>
                          <option value=\"0\">";
            // line 233
            echo ($context["text_no"] ?? null);
            echo "</option>


                        ";
        } else {
            // line 237
            echo "

                          <option value=\"1\">";
            // line 239
            echo ($context["text_yes"] ?? null);
            echo "</option>
                          <option value=\"0\" selected=\"selected\">";
            // line 240
            echo ($context["text_no"] ?? null);
            echo "</option>


                        ";
        }
        // line 244
        echo "

                      </select>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 250
        echo ($context["help_stock_status"] ?? null);
        echo "\">";
        echo ($context["entry_stock_status"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">


                        ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 256
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 256) == ($context["stock_status_id"] ?? null))) {
                // line 257
                echo "

                            <option value=\"";
                // line 259
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 259);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 259);
                echo "</option>


                          ";
            } else {
                // line 263
                echo "

                            <option value=\"";
                // line 265
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 265);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 265);
                echo "</option>


                          ";
            }
            // line 269
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        echo "

                      </select>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">";
        // line 276
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <label class=\"radio-inline\"> 
                        ";
        // line 279
        if (($context["shipping"] ?? null)) {
            // line 280
            echo "                          <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                          ";
            // line 281
            echo ($context["text_yes"] ?? null);
            echo "
                        ";
        } else {
            // line 283
            echo "                          <input type=\"radio\" name=\"shipping\" value=\"1\" />
                          ";
            // line 284
            echo ($context["text_yes"] ?? null);
            echo "
                        ";
        }
        // line 285
        echo " </label>
                      <label class=\"radio-inline\"> 
                        ";
        // line 287
        if ( !($context["shipping"] ?? null)) {
            // line 288
            echo "                          <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                          ";
            // line 289
            echo ($context["text_no"] ?? null);
            echo "
                        ";
        } else {
            // line 291
            echo "                          <input type=\"radio\" name=\"shipping\" value=\"0\" />
                          ";
            // line 292
            echo ($context["text_no"] ?? null);
            echo "
                        ";
        }
        // line 293
        echo " </label>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 297
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                    <div class=\"col-sm-3\">
                      <div class=\"input-group date\">
                        <input type=\"text\" name=\"date_available\" value=\"";
        // line 300
        echo ($context["date_available"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_available"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                          <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 307
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"row\">
                        <div class=\"col-sm-4\">
                          <input type=\"text\" name=\"length\" value=\"";
        // line 311
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\" />
                        </div>
                        <div class=\"col-sm-4\">
                          <input type=\"text\" name=\"width\" value=\"";
        // line 314
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                        </div>
                        <div class=\"col-sm-4\">
                          <input type=\"text\" name=\"height\" value=\"";
        // line 317
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 323
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">

                        ";
        // line 327
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 328
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 328) == ($context["length_class_id"] ?? null))) {
                // line 329
                echo "
                            <option value=\"";
                // line 330
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 330);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 330);
                echo "</option>

                          ";
            } else {
                // line 333
                echo "
                            <option value=\"";
                // line 334
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 334);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 334);
                echo "</option>

                          ";
            }
            // line 337
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "
                      </select>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 343
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"weight\" value=\"";
        // line 345
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 349
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">

                        ";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 354
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 354) == ($context["weight_class_id"] ?? null))) {
                // line 355
                echo "
                            <option value=\"";
                // line 356
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 356);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 356);
                echo "</option>

                          ";
            } else {
                // line 359
                echo "
                            <option value=\"";
                // line 360
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 360);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 360);
                echo "</option>

                          ";
            }
            // line 363
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
        echo "
                      </select>
                    </div> 
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 370
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"sort_order\" value=\"";
        // line 372
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 377
        echo ($context["entry_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">                     

                      <select name=\"status\" id=\"input-status\" class=\"form-control\">


                        ";
        // line 383
        if (($context["status"] ?? null)) {
            // line 384
            echo "

                          <option value=\"1\" selected=\"selected\">";
            // line 386
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                          <option value=\"0\">";
            // line 387
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                        ";
        } else {
            // line 391
            echo "

                          <option value=\"1\">";
            // line 393
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                          <option value=\"0\" selected=\"selected\">";
            // line 394
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                        ";
        }
        // line 398
        echo "

                      </select>
                    </div>
                  </div>


                </div>
                <div class=\"tab-pane\" id=\"tab-links\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 408
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 410
        echo ($context["manufacturer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\" />
                      <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 411
        echo ($context["manufacturer_id"] ?? null);
        echo "\" />
                    </div>
                  </div>
                  <div class=\"form-group ";
        // line 414
        if (($context["module_lts_vendor_category_required"] ?? null)) {
            echo " required ";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 415
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 417
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                      <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> 
                        ";
        // line 419
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 420
            echo "                          <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 420);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 420);
            echo "
                            <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 421
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 421);
            echo "\" />
                          </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 424
        echo "                      </div>
                      ";
        // line 425
        if (($context["module_lts_vendor_category_required"] ?? null)) {
            echo " 
                        ";
            // line 426
            if (($context["error_product_category"] ?? null)) {
                // line 427
                echo "                          <div class=\"text-danger\">";
                echo ($context["error_product_category"] ?? null);
                echo "</div>
                        ";
            }
            // line 429
            echo "                      ";
        }
        // line 430
        echo "                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 433
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 435
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\" />
                      <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 436
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 437
            echo "                        <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 437);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 437);
            echo "
                          <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 438
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 438);
            echo "\" />
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        echo "</div>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\">";
        // line 444
        echo ($context["entry_store"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                          ";
        // line 447
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 448
            echo "                            <div class=\"checkbox\">
                              <label> 
                                ";
            // line 450
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 450), ($context["product_store"] ?? null))) {
                // line 451
                echo "                                  <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 451);
                echo "\" checked=\"checked\" />
                                  ";
                // line 452
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 452);
                echo "
                                ";
            } else {
                // line 454
                echo "                                  <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 454);
                echo "\" />
                                  ";
                // line 455
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 455);
                echo "
                                ";
            }
            // line 456
            echo " </label>
                            </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 458
        echo "</div>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 462
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 464
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" class=\"form-control\" />
                        <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> 
                          ";
        // line 466
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 467
            echo "                            <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 467);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 467);
            echo "
                              <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 468
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 468);
            echo "\" />
                            </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 470
        echo "</div>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 474
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 476
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\" />
                        <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> 
                          ";
        // line 478
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 479
            echo "                            <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 479);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 479);
            echo "
                              <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 480
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 480);
            echo "\" />
                            </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 482
        echo "</div>
                      </div>
                    </div>
                  </div>
                  <div class=\"tab-pane\" id=\"tab-attribute\">
                    <div class=\"table-responsive\">
                      <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                          <tr>
                            <td class=\"text-left\">";
        // line 491
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 492
        echo ($context["entry_text"] ?? null);
        echo "</td>
                            <td></td>
                          </tr>
                        </thead>
                        <tbody>

                          ";
        // line 498
        $context["attribute_row"] = 0;
        // line 499
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 500
            echo "                            <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                              <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 501
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 501);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\" />
                                <input type=\"hidden\" name=\"product_attribute[";
            // line 502
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 502);
            echo "\" /></td>
                              <td class=\"text-left\">
                                ";
            // line 504
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 505
                echo "                                  <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"admin/language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 505);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 505);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 505);
                echo "\" /></span>
                                    <textarea name=\"product_attribute[";
                // line 506
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 506);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\">";
                echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 506)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 506)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 506)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 506)] ?? null) : null), "text", [], "any", false, false, false, 506)) : (""));
                echo "</textarea>
                                  </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 508
            echo "</td>
                              <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 509
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                            </tr>
                            ";
            // line 511
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 512
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 513
        echo "                        </tbody>

                        <tfoot>
                          <tr>
                            <td colspan=\"2\"></td>
                            <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 518
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                  <div class=\"tab-pane\" id=\"tab-option\">
                    <div class=\"row\">
                      <div class=\"col-sm-2\">
                        <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                           
                          ";
        // line 529
        $context["option_row"] = 0;
        // line 530
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 531
            echo "                            <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 531);
            echo "</a></li>
                              ";
            // line 532
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 533
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "    
                          <li>
                            <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 535
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\" class=\"form-control\" />
                          </li>
                        </ul>
                      </div>
                      <div class=\"col-sm-10\">   

                        <div class=\"tab-content\">";
        // line 541
        $context["option_row"] = 0;
        // line 542
        echo "                          ";
        $context["option_value_row"] = 0;
        // line 543
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 544
            echo "                            <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                              <input type=\"hidden\" name=\"product_option[";
            // line 545
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 545);
            echo "\" />
                              <input type=\"hidden\" name=\"product_option[";
            // line 546
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 546);
            echo "\" />
                              <input type=\"hidden\" name=\"product_option[";
            // line 547
            echo ($context["option_row"] ?? null);
            echo "][option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 547);
            echo "\" />
                              <input type=\"hidden\" name=\"product_option[";
            // line 548
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 548);
            echo "\" />
                              <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 550
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                                <div class=\"col-sm-10\">
                                  <select name=\"product_option[";
            // line 552
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\" class=\"form-control\">

                                    ";
            // line 554
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 554)) {
                // line 555
                echo "
                                      <option value=\"1\" selected=\"selected\">";
                // line 556
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                      <option value=\"0\">";
                // line 557
                echo ($context["text_no"] ?? null);
                echo "</option>

                                    ";
            } else {
                // line 560
                echo "
                                      <option value=\"1\">";
                // line 561
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                      <option value=\"0\" selected=\"selected\">";
                // line 562
                echo ($context["text_no"] ?? null);
                echo "</option>

                                    ";
            }
            // line 565
            echo "
                                  </select>
                                </div>
                              </div>
                              ";
            // line 569
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 569) == "text")) {
                // line 570
                echo "                                <div class=\"form-group\">
                                  <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 571
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                  <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"product_option[";
                // line 573
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 573);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                                  </div>
                                </div>
                              ";
            }
            // line 577
            echo "                              ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 577) == "textarea")) {
                // line 578
                echo "                                <div class=\"form-group\">
                                  <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 579
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                  <div class=\"col-sm-10\">
                                    <textarea name=\"product_option[";
                // line 581
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 581);
                echo "</textarea>
                                  </div>
                                </div>
                              ";
            }
            // line 585
            echo "                              ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 585) == "file")) {
                // line 586
                echo "                                <div class=\"form-group\" style=\"display: none;\">
                                  <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 587
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                  <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"product_option[";
                // line 589
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 589);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                                  </div>
                                </div>
                              ";
            }
            // line 593
            echo "                              ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 593) == "date")) {
                // line 594
                echo "                                <div class=\"form-group\">
                                  <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 595
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                  <div class=\"col-sm-3\">
                                    <div class=\"input-group date\">
                                      <input type=\"text\" name=\"product_option[";
                // line 598
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 598);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                                      <span class=\"input-group-btn\">
                                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                      </span></div>
                                  </div>
                                </div>
                              ";
            }
            // line 605
            echo "                              ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 605) == "time")) {
                // line 606
                echo "                                <div class=\"form-group\">
                                  <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 607
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                  <div class=\"col-sm-10\">
                                    <div class=\"input-group time\">
                                      <input type=\"text\" name=\"product_option[";
                // line 610
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 610);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                                      <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                      </span></div>
                                  </div>
                                </div>
                              ";
            }
            // line 617
            echo "                              ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 617) == "datetime")) {
                // line 618
                echo "                                <div class=\"form-group\">
                                  <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 619
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                  <div class=\"col-sm-10\">
                                    <div class=\"input-group datetime\">
                                      <input type=\"text\" name=\"product_option[";
                // line 622
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 622);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                                      <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                      </span></div>
                                  </div>
                                </div>
                              ";
            }
            // line 629
            echo "                              ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 629) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 629) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 629) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 629) == "image"))) {
                // line 630
                echo "                                <div class=\"table-responsive\">
                                  <table id=\"option-value";
                // line 631
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                      <tr>
                                        <td class=\"text-left\">";
                // line 634
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                                        <td class=\"text-right\">";
                // line 635
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                        <td class=\"text-left\">";
                // line 636
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                        <td class=\"text-right\">";
                // line 637
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                        <td class=\"text-right\">";
                // line 638
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                        <td class=\"text-right\">";
                // line 639
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                                        <td></td>
                                      </tr>
                                    </thead>
                                    <tbody>

                                      ";
                // line 645
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 645));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 646
                    echo "                                       
                                        <tr id=\"option-value-row";
                    // line 647
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                          <td class=\"text-left\"><select name=\"product_option[";
                    // line 648
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\" class=\"form-control\">

                                              ";
                    // line 650
                    if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["option_values"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 650)] ?? null) : null)) {
                        // line 651
                        echo "
                                                ";
                        // line 652
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["option_values"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 652)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 653
                            echo "
                                                  ";
                            // line 654
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 654) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 654))) {
                                // line 655
                                echo "

                                                    <option value=\"";
                                // line 657
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 657);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 657);
                                echo "</option>


                                                  ";
                            } else {
                                // line 661
                                echo "

                                                    <option value=\"";
                                // line 663
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 663);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 663);
                                echo "</option>


                                                  ";
                            }
                            // line 667
                            echo "                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 668
                        echo "                                              ";
                    }
                    // line 669
                    echo "
                                            </select>
                                            <input type=\"hidden\" name=\"product_option[";
                    // line 671
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 671);
                    echo "\" /></td>
                                          <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                    // line 672
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 672);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                                          <td class=\"text-left\"><select name=\"product_option[";
                    // line 673
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\" class=\"form-control\">

                                              ";
                    // line 675
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 675)) {
                        // line 676
                        echo "
                                                <option value=\"1\" selected=\"selected\">";
                        // line 677
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                <option value=\"0\">";
                        // line 678
                        echo ($context["text_no"] ?? null);
                        echo "</option>

                                              ";
                    } else {
                        // line 681
                        echo "
                                                <option value=\"1\">";
                        // line 682
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                <option value=\"0\" selected=\"selected\">";
                        // line 683
                        echo ($context["text_no"] ?? null);
                        echo "</option>

                                              ";
                    }
                    // line 686
                    echo "
                                            </select></td>
                                          <td class=\"text-right\"><select name=\"product_option[";
                    // line 688
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\" class=\"form-control\">

                                              ";
                    // line 690
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 690) == "+")) {
                        // line 691
                        echo "
                                                <option value=\"+\" selected=\"selected\">+</option>

                                              ";
                    } else {
                        // line 695
                        echo "
                                                <option value=\"+\">+</option>

                                              ";
                    }
                    // line 699
                    echo "                                              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 699) == "-")) {
                        // line 700
                        echo "
                                                <option value=\"-\" selected=\"selected\">-</option>

                                              ";
                    } else {
                        // line 704
                        echo "
                                                <option value=\"-\">-</option>

                                              ";
                    }
                    // line 708
                    echo "
                                            </select>
                                            <input type=\"text\" name=\"product_option[";
                    // line 710
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 710);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                                          <td class=\"text-right\"><select name=\"product_option[";
                    // line 711
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\" class=\"form-control\">

                                              ";
                    // line 713
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 713) == "+")) {
                        // line 714
                        echo "
                                                <option value=\"+\" selected=\"selected\">+</option>

                                              ";
                    } else {
                        // line 718
                        echo "
                                                <option value=\"+\">+</option>

                                              ";
                    }
                    // line 722
                    echo "                                              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 722) == "-")) {
                        // line 723
                        echo "

                                                <option value=\"-\" selected=\"selected\">-</option>


                                              ";
                    } else {
                        // line 729
                        echo "

                                                <option value=\"-\">-</option>


                                              ";
                    }
                    // line 735
                    echo "

                                            </select>
                                            <input type=\"text\" name=\"product_option[";
                    // line 738
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 738);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                                          <td class=\"text-right\"><select name=\"product_option[";
                    // line 739
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\" class=\"form-control\">

                                              ";
                    // line 741
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 741) == "+")) {
                        // line 742
                        echo "

                                                <option value=\"+\" selected=\"selected\">+</option>


                                              ";
                    } else {
                        // line 748
                        echo "

                                                <option value=\"+\">+</option>


                                              ";
                    }
                    // line 754
                    echo "                                              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 754) == "-")) {
                        // line 755
                        echo "

                                                <option value=\"-\" selected=\"selected\">-</option>


                                              ";
                    } else {
                        // line 761
                        echo "

                                                <option value=\"-\">-</option>


                                              ";
                    }
                    // line 767
                    echo "

                                            </select>
                                            <input type=\"text\" name=\"product_option[";
                    // line 770
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 770);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                                          <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');
                                              \$('#option-value-row";
                    // line 772
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                        </tr>
                                        ";
                    // line 774
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 775
                    echo "                                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 776
                echo "                                    </tbody>

                                    <tfoot>
                                      <tr>
                                        <td colspan=\"6\"></td>
                                        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 781
                echo ($context["option_row"] ?? null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                      </tr>
                                    </tfoot>
                                  </table>
                                </div>
                                <select id=\"option-values";
                // line 786
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                                  ";
                // line 789
                if ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["option_values"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 789)] ?? null) : null)) {
                    // line 790
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["option_values"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 790)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 791
                        echo "

                                      <option value=\"";
                        // line 793
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 793);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 793);
                        echo "</option>


                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 797
                    echo "                                  ";
                }
                // line 798
                echo "

                                </select>
                              ";
            }
            // line 801
            echo " </div>
                              ";
            // line 802
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 803
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
                      </div>
                    </div>
                  </div>
                  ";
        // line 879
        echo "                  <div class=\"tab-pane\" id=\"tab-discount\">
                    <div class=\"table-responsive\">
                      <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                          <tr>
                            <td class=\"text-left\">";
        // line 884
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 885
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 886
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 887
        echo ($context["entry_price"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 888
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 889
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                            <td></td>
                          </tr>
                        </thead>
                        <tbody>

                          ";
        // line 895
        $context["discount_row"] = 0;
        echo "                          
                          ";
        // line 896
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 897
            echo "                          
                            <tr id=\"discount-row";
            // line 898
            echo ($context["discount_row"] ?? null);
            echo "\">
                              <td class=\"text-left\"><select name=\"product_discount[";
            // line 899
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                                  ";
            // line 900
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 901
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 901) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 901))) {
                    // line 902
                    echo "                                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 902);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 902);
                    echo "</option>
                                    ";
                } else {
                    // line 904
                    echo "                                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 904);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 904);
                    echo "</option>
                                    ";
                }
                // line 906
                echo "                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 907
            echo "                                </select></td>
                           
                              <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 909
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 909);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\" /></td>
                              <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 910
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 910);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\" /></td>
                              <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 911
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 911);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>
                              <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                                  <input type=\"text\" name=\"product_discount[";
            // line 913
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 913);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                                  <span class=\"input-group-btn\">
                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                  </span></div></td>
                              <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                                  <input type=\"text\" name=\"product_discount[";
            // line 918
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 918);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                                  <span class=\"input-group-btn\">
                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                  </span></div></td>
                              <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 922
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                            </tr>
                            ";
            // line 924
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 925
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 926
        echo "                        </tbody>

                        <tfoot>
                          <tr>
                            <td colspan=\"6\"></td>
                            <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 931
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                  <div class=\"tab-pane\" id=\"tab-special\">
                    <div class=\"table-responsive\">
                      <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                          <tr>
                            <td class=\"text-left\">";
        // line 942
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 943
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 944
        echo ($context["entry_price"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 945
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 946
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                            <td></td>
                          </tr>
                        </thead>
                        <tbody>

                          ";
        // line 952
        $context["special_row"] = 0;
        // line 953
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 954
            echo "                            <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                              <td class=\"text-left\"><select name=\"product_special[";
            // line 955
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                                  ";
            // line 958
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 959
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 959) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 959))) {
                    // line 960
                    echo "

                                      <option value=\"";
                    // line 962
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 962);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 962);
                    echo "</option>


                                    ";
                } else {
                    // line 966
                    echo "

                                      <option value=\"";
                    // line 968
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 968);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 968);
                    echo "</option>


                                    ";
                }
                // line 972
                echo "                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 973
            echo "

                                </select></td>
                              <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 976
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 976);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\" /></td>
                              <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 977
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 977);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>
                              <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                                  <input type=\"text\" name=\"product_special[";
            // line 979
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 979);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                                  <span class=\"input-group-btn\">
                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                  </span></div></td>
                              <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                                  <input type=\"text\" name=\"product_special[";
            // line 984
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 984);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                                  <span class=\"input-group-btn\">
                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                  </span></div></td>
                              <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 988
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                            </tr>
                            ";
            // line 990
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 991
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 992
        echo "                        </tbody>

                        <tfoot>
                          <tr>
                            <td colspan=\"5\"></td>
                            <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 997
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                  <div class=\"tab-pane\" id=\"tab-pincode-checker\">
                    <div class=\"table-responsive\">
                      <table id=\"pincode-checker\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                          <tr>
                            <td class=\"text-left\">";
        // line 1008
        echo ($context["entry_pincode"] ?? null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 1009
        echo ($context["entry_status"] ?? null);
        echo "</td>
                            <td></td>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 1014
        $context["pincode_row"] = 0;
        // line 1015
        echo "                          ";
        if (($context["pincode_checkers"] ?? null)) {
            // line 1016
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pincode_checkers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pincode"]) {
                // line 1017
                echo "                              <tr id=\"pincode-checker";
                echo ($context["pincode_row"] ?? null);
                echo "\">
                                <td>
                                  <input type=\"text\" name=\"pincode[";
                // line 1019
                echo ($context["pincode_row"] ?? null);
                echo "][pincode]\" class=\"form-control\" placeholder=\"";
                echo ($context["entry_pincode"] ?? null);
                echo "\"  value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["pincode"], "pincode", [], "any", false, false, false, 1019);
                echo "\"/>
                                </td>
                                <td>
                                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                    ";
                // line 1023
                if (($context["status"] ?? null)) {
                    // line 1024
                    echo "                                      <option value=\"1\" selected=\"selected\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</option>
                                      <option value=\"0\">";
                    // line 1025
                    echo ($context["text_disabled"] ?? null);
                    echo "</option>    
                                    ";
                } else {
                    // line 1027
                    echo "                                      <option value=\"1\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</option>
                                      <option value=\"0\" selected=\"selected\">";
                    // line 1028
                    echo ($context["text_disabled"] ?? null);
                    echo "</option>    
                                    ";
                }
                // line 1030
                echo "                                  </select>
                                </td>
                                <td>
                                  <button type=\"button\" onclick=\"\$('#pincode-checker";
                // line 1033
                echo ($context["pincode_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                                </td>
                              </tr>
                              ";
                // line 1036
                $context["pincode_row"] = (($context["pincode_row"] ?? null) + 1);
                // line 1037
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pincode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1038
            echo "                          ";
        }
        // line 1039
        echo "
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan=\"2\"></td>
                            <td class=\"text-left\"><button type=\"button\" onclick=\"addPincode();\" data-toggle=\"tooltip\" title=\"";
        // line 1044
        echo ($context["button_pincode_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>       
                  <div class=\"tab-pane\" id=\"tab-image\">
                    <div class=\"table-responsive\">
                      <table class=\"table table-striped table-bordered table-hover\">
                        <thead>
                          <tr>
                            <td class=\"text-left\">";
        // line 1055
        echo ($context["entry_image"] ?? null);
        echo "</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1060
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                              <input type=\"hidden\" name=\"image\" value=\"";
        // line 1061
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" /></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class=\"table-responsive\">
                      <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                          <tr>
                            <td class=\"text-left\">";
        // line 1070
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 1071
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                            <td></td>
                          </tr>
                        </thead>
                        <tbody>

                          ";
        // line 1077
        $context["image_row"] = 0;
        // line 1078
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1079
            echo "                            <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                              <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1080
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1080);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
                                <input type=\"hidden\" name=\"product_image[";
            // line 1081
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1081);
            echo "\" id=\"input-image";
            echo ($context["image_row"] ?? null);
            echo "\" /></td>
                              <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1082
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1082);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\" /></td>
                              <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1083
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                            </tr>
                            ";
            // line 1085
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1086
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1087
        echo "                        </tbody>

                        <tfoot>
                          <tr>
                            <td colspan=\"2\"></td>
                            <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 1092
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                  <div class=\"tab-pane\" id=\"tab-reward\">
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 1100
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"points\" value=\"";
        // line 1102
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"table-responsive\">
                      <table class=\"table table-bordered table-hover\">
                        <thead>
                          <tr>
                            <td class=\"text-left\">";
        // line 1109
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 1110
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                          </tr>
                        </thead>
                        <tbody>

                          ";
        // line 1115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1116
            echo "                            <tr>
                              <td class=\"text-left\">";
            // line 1117
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1117);
            echo "</td>
                              <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1118
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1118);
            echo "][points]\" value=\"";
            echo (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["product_reward"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1118)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["product_reward"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1118)] ?? null) : null), "points", [], "any", false, false, false, 1118)) : (""));
            echo "\" class=\"form-control\" /></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1121
        echo "                        </tbody>

                      </table>
                    </div>
                  </div>
                  <div class=\"tab-pane\" id=\"tab-seo\">
                    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1127
        echo ($context["text_keyword"] ?? null);
        echo "</div>            
                    <div class=\"table-responsive\">
                      <table class=\"table table-bordered table-hover\">
                        <thead>
                          <tr>
                            <td class=\"text-left\">";
        // line 1132
        echo ($context["entry_store"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 1133
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 1137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1138
            echo "                            <tr>
                              <td class=\"text-left\">";
            // line 1139
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1139);
            echo "</td>
                              <td class=\"text-left\">";
            // line 1140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1141
                echo "                                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"catalog/language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1141);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1141);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1141);
                echo "\" /></span>
                                  <input type=\"text\" name=\"product_seo_url[";
                // line 1142
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1142);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1142);
                echo "]\" value=\"";
                if ((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["product_seo_url"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1142)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1142)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["product_seo_url"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1142)] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1142)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\"/>
                                </div>
                                ";
                // line 1144
                if ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["error_keyword"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1144)] ?? null) : null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1144)] ?? null) : null)) {
                    // line 1145
                    echo "                                  <div class=\"text-danger\">";
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_keyword"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1145)] ?? null) : null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1145)] ?? null) : null);
                    echo "</div>
                                ";
                }
                // line 1146
                echo " 
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1147
            echo "</td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1150
        echo "                          </tbody>

                        </table>
                      </div>
                    </div>

                  </div>
                </form>

              </div>
            </div>
          </div>
     
      <div id=\"maindd\"></div>

    <link href=\"catalog/view/javascript/vendor/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
    <link href=\"catalog/view/javascript/vendor/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
    <script type=\"text/javascript\" src=\"catalog/view/javascript/vendor/codemirror/lib/codemirror.js\"></script> 
    <script type=\"text/javascript\" src=\"catalog/view/javascript/vendor/codemirror/lib/xml.js\"></script> 
    <script type=\"text/javascript\" src=\"catalog/view/javascript/vendor/codemirror/lib/formatting.js\"></script> 
    <script type=\"text/javascript\" src=\"catalog/view/javascript/vendor/summernote/summernote.js\"></script>
    <link href=\"catalog/view/javascript/vendor/summernote/summernote.css\" rel=\"stylesheet\" />
    <script type=\"text/javascript\" src=\"catalog/view/javascript/vendor/summernote/summernote-image-attributes.js\"></script> 
    <script type=\"text/javascript\" src=\"catalog/view/javascript/vendor/summernote/opencart.js\"></script> 
 <script type=\"text/javascript\">
  <!--
var option_row = ";
        // line 1176
        echo ($context["option_row"] ?? null);
        echo ";
var attribute_row = ";
        // line 1177
        echo ($context["attribute_row"] ?? null);
        echo ";
var discount_row = ";
        // line 1178
        echo ($context["discount_row"] ?? null);
        echo ";
var special_row = ";
        // line 1179
        echo ($context["special_row"] ?? null);
        echo ";
var image_row = ";
        // line 1180
        echo ($context["image_row"] ?? null);
        echo ";
var option_value_row = ";
        // line 1181
        echo ($context["option_value_row"] ?? null);
        echo ";
var pincode_row = ";
        // line 1182
        echo ($context["pincode_row"] ?? null);
        echo ";
// Manufacturer
\$('input[name=\\'manufacturer\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=account/vendor/lts_manufacturer/autocomplete&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
      
        json.unshift({
          manufacturer_id: 0,
          name: '";
        // line 1193
        echo ($context["text_none"] ?? null);
        echo "'
        });

        response(\$.map(json, function(item) {

          return {
            label: item['name'],
            value: item['manufacturer_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'manufacturer\\']').val(item['label']);
    \$('input[name=\\'manufacturer_id\\']').val(item['value']);
  }
});

// Product
 var languages = ";
        // line 1213
        echo json_encode(($context["languages"] ?? null));
        echo "; 
  var exist_product_id='";
        // line 1214
        echo ($context["exist_product_id"] ?? null);
        echo "';
   
  if(!exist_product_id){

     \$.each( languages, function( key, value ) {
      \$('input[name=\\'product_description['+value.language_id+'][name]\\']').autocomplete({

      'source': function(request, response) {    
        
        \$.ajax({
          url: 'index.php?route=account/vendor/lts_product/autocomplete&filter_name=' +  encodeURIComponent(request),
          dataType: 'json',
          success: function(json) {
          
            json.unshift({
              product_id: 0,
              name: '";
        // line 1230
        echo ($context["text_none"] ?? null);
        echo "'
            });

            response(\$.map(json, function(item) {
              return {
                label: item['name'],
                value: item['product_id']
              }
            }));
          }
        });
      },
      'select': function(item) {
        \$('input[name=\\'product_description['+value.language_id+'][name]\\']').val(item['label']);
        \$('input[name=\\'product_id\\']').val(item['value']);
        // location.reload(); 
            fillproductInfo(item['value']);
      }
    });
    }); 

}


function fillproductInfo(product_id){
  // alert(product_id );
  var languages = ";
        // line 1256
        echo json_encode(($context["languages"] ?? null));
        echo "; 
  
  \$.ajax({
    url:'index.php?route=account/vendor/lts_product/getProductInfo&product_id='+product_id,     
    success: function(response)
    {   
       let st=\"https://multivendor.vxinfosystem.com/image/cache/\"+response.image;
       let image;
          if(response.image==\"\")
          {
        image=\"https://multivendor.vxinfosystem.com/image/cache/no_image-100x100.png\";
          }
          else if(st.search(\".png\")==-1)
          {
        image=st.replace(\".jpg\", \"-100x100.jpg\");
          }
          else
          {
            image=st.replace(\".png\", \"-100x100.png\");
          }

       
        // image.replace(\"https://multivendor.vxinfosystem.com/image/cache/\", \"https://multivendor.vxinfosystem.com/image/cache/no_image-100x100.png\");
       
       
      // console.log(response);    
         
         
       // console.log(response);
       \$('#product_id').val(response.product_id);
       \$('#input-model').val(response.model).attr(\"readonly\",true);
       // let images=('#thumb-image').children('img').attr('data-placeholder');
       // console.log(images);
       \$('#thumb-image').children('img').attr('src',image).attr(\"readonly\",true);
       // \$('#manufacturer_id').val(response.manufacturer_id);
       \$('#input-sku').val(response.sku).attr(\"readonly\",true);

       \$('#input-upc').val(response.upc).attr(\"readonly\",true);
       \$('#input-ean').val(response.ean).attr(\"readonly\",true);
        
       \$('#input-jan').val(response.jan).attr(\"readonly\",true);
       \$('#input-isbn').val(response.isbn).attr(\"readonly\",true);
       \$('#input-mpn').val(response.mpn).attr(\"readonly\",true);
       \$('#input-location').val(response.location).attr(\"readonly\",true);      
       \$('#input-quantity').val(response.quantity);
       \$('#input-minimum').val(response.minimum);
       \$('#input-subtract').attr(\"readonly\", true);
       \$('#input-stock-status').val(response.stock_status);
       \$('#input-sort-order').attr(\"readonly\", true);
       \$('#input-length').val(response.length).attr(\"readonly\",true);
       \$('#input-width').val(response.width).attr(\"readonly\",true);
       \$('#input-height').val(response.height).attr(\"readonly\",true);
       \$('#input-length-class').val(response.length_class_id).attr(\"readonly\",true);
       \$('#input-weight').val(response.weight).attr(\"readonly\",true);
       \$('#input-weight-class').val(response.weight_class_id).attr(\"readonly\",true);;
       \$('#input-status').val(response.status);
       \$('#input-manufacturer').val(response.manufacturer_name).attr(\"readonly\",true);
       \$('#manufacturer_id').val(response.manufacturer_id).attr(\"readonly\",true); 
       \$('#input-price').val(response.price);
       \$('#input-points').val(response.points).attr(\"readonly\",true);      
       \$('#input-stock-status').val(response.stock_status_id);
       \$('input[name=\"shipping\"]');
      \$('#input-category').attr('readonly',true);

      \$.each( languages, function( key, value ) {
        
          \$('#input-name'+value.language_id).val((response.product_description[value.language_id].name).replace(\"&quot;\",'\"')).attr(\"readonly\",true);
         \$('#input-meta-title'+value.language_id).val(response.product_description[value.language_id].meta_title).attr(\"readonly\",true);;      
         \$('#input-meta-keyword'+value.language_id).val(response.product_description[value.language_id].meta_keyword).attr(\"readonly\",true);;
         \$('#input-meta-description'+value.language_id).val(response.product_description[value.language_id].meta_description).attr(\"readonly\",true);
          \$.each(response.product_reward, function(index, language){
        \$('[name=\"product_reward['+value.language_id+'][points]\"]').val(language.points).attr(\"readonly\",true);
          });
        for(let i=0;i<response.product_seourl.length;i++){
        
          \$('[name=\"product_seo_url['+i+']['+value.language_id+']\"]').val(response.product_seourl[i][value.language_id]);           
        }

         \$('#input-tag'+value.language_id).val(response.product_description[value.language_id].tag).attr(\"readonly\",true); 
          var sumenotedescription=\$('<div />').html(response.product_description[value.language_id].description);
        \$('[name=\"product_description['+value.language_id+'][description]\"]').summernote('code',sumenotedescription.text());    
      });

      for(let i in response.product_category_name)
      {
        \$('#product-category').append('<div id=\"product-category' +i+ '\"><i class=\"fa fa-minus-circle\"></i> ' + response.product_category_name[i] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' +i+ '\" readonly=\"readonly\" /></div>');
        \$('#product-category'+i).find('.fa-minus-circle').remove('.fa-minus-circle');
      }

      for(let i in response.product_filter_name)
      {
        \$('#product-filter').append('<div id=\"product-filter' +i+ '\"><i class=\"fa fa-minus-circle\"></i> ' + response.product_filter_name[i] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' +i+ '\" readonly=\"readonly\"/></div>');
        \$('#product-filter'+i).find('.fa-minus-circle').remove('.fa-minus-circle');
      }

      for(let i in response.product_download_name)
      {
      \$('#product-download').append('<div id=\"product-download' + i + '\"><i class=\"fa fa-minus-circle\"></i> ' + response.product_download_name[i] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + i + '\" readonly=\"readonly\" /></div>');
      \$('#product-download'+i).find('.fa-minus-circle').remove('.fa-minus-circle');
      }

      for(let i in response.product_related_name)
      {
      \$('#product-related').append('<div id=\"product-related' + i + '\"><i class=\"fa fa-minus-circle\"></i> ' + response.product_related_name[i] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + i + '\" readonly=\"readonly\" /></div>');
      \$('#product-related'+i).find('.fa-minus-circle').remove('.fa-minus-circle');
      }

      for( attribute_row; attribute_row<response.product_attribute.length;attribute_row++) {
        html  = '<tr id=\"attribute-row' + attribute_row + '\">';
        html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value='+response.product_attribute[attribute_row].attribute_name+' placeholder=\"";
        // line 1365
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" readonly /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"'+response.product_attribute[attribute_row].attribute_id+'\"\"/></td>';
        html += '  <td class=\"text-left\">';
       ";
        // line 1367
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1368
            echo "        html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"admin/language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1368);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1368);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1368);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1368);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\" readonly>'+response.product_attribute[attribute_row].product_attribute_description[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1368);
            echo "].text+'</textarea></div>';
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1369
        echo "          
        html += '  </td>';
        html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1371
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
        html += '</tr>';
        \$('#attribute tbody').append(html);
        attributeautocomplete(attribute_row);        
      }

      for(discount_row; discount_row<response.product_discount.length;discount_row++) {
          html  = '<tr id=\"discount-row' + discount_row + '\">';
        html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
        ";
        // line 1380
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1381
            echo "        html += '    <option value='+response.product_discount[discount_row].customer_group_id+'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1381), "js");
            echo "</option>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1383
        echo "        html += '  </select></td>';
        html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value='+response.product_discount[discount_row].quantity+' placeholder=\"";
        // line 1384
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" readonly /></td>';
        html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value='+response.product_discount[discount_row].priority+' placeholder=\"";
        // line 1385
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" readonly /></td>';
        html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value='+response.product_discount[discount_row].price+' placeholder=\"";
        // line 1386
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" readonly /></td>';
        html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value='+response.product_discount[discount_row].date_start+' placeholder=\"";
        // line 1387
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" readonly /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\" disabled><i class=\"fa fa-calendar\"></i></button></span></div></td>';
        html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value='+response.product_discount[discount_row].date_end+'  placeholder=\"";
        // line 1388
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" readonly /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\" disabled><i class=\"fa fa-calendar\"></i></button></span></div></td>';
        html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1389
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\" disabled><i class=\"fa fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#discount tbody').append(html);

        \$('.date').datetimepicker({
          pickTime: false
        });
      }


      for(special_row; special_row<response.product_special.length;special_row++) {
                          html  = '<tr id=\"special-row' + special_row + '\">';
        html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
        ";
        // line 1403
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1404
            echo "        html += '      <option value='+response.product_special[special_row].customer_group_id+'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1404), "js");
            echo "</option>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1406
        echo "        html += '  </select></td>';
        html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value='+response.product_special[special_row].priority+' placeholder=\"";
        // line 1407
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" readonly /></td>';
        html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value='+response.product_special[special_row].price+' placeholder=\"";
        // line 1408
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" readonly /></td>';
        html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value='+response.product_special[special_row].date_start+' placeholder=\"";
        // line 1409
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" readonly /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\" disabled><i class=\"fa fa-calendar\"></i></button></span></div></td>';
        html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value='+response.product_special[special_row].date_end+' placeholder=\"";
        // line 1410
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" readonly /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\" disabled><i class=\"fa fa-calendar\"></i></button></span></div></td>';
        html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1411
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\" disabled><i class=\"fa fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#special tbody').append(html);

        \$('.date').datetimepicker({
        language: '";
        // line 1417
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
         });
      } 

    for(image_row; image_row<response.product_image.length;image_row++)
    {     
      let str=response.product_image[image_row].image;       
        // let image_path=str.replace(\".jpg\", \"-100x100.jpg\"); 
      let st=str;
      let image_path;
        if(st==\"\")
        {
      image_path=\"no_image-100x100.png\";
        }
        else if(st.search(\".png\")==-1)
        {
      image_path=st.replace(\".jpg\", \"-100x100.jpg\");
        }
        else
        {
          image_path=st.replace(\".png\", \"-100x100.png\");
        }       
      html  = '<tr id=\"image-row' + image_row + '\">';
      html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=https://multivendor.vxinfosystem.com/image/cache/'+image_path+' alt=\"\" title=\"\" data-placeholder=\"";
        // line 1441
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value='+response.product_image[image_row].image+' id=\"input-image' + image_row + '\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value='+response.product_image[image_row].sort_order+' placeholder=\"";
        // line 1442
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1443
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
      html += '</tr>';
      \$('#images tbody').append(html);
    }
    
    var product_options_data=response.product_option;
    \$.each(product_options_data, function(index, response) {  
       
       
      html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
      html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"' + response.product_option_id + '\" />';
      html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + response.name + '\" />';
      html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + response.value + '\" />';
      html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + response.type + '\" />';

      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1459
        echo ($context["entry_required"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + response.required + '\" class=\"form-control\">';

      html += '       <option value=\"1\">";
        // line 1462
        echo ($context["text_yes"] ?? null);
        echo " </option>';
      html += '       <option value=\"0\">";
        // line 1463
        echo ($context["text_no"] ?? null);
        echo "  </option>';

      html += '   </select></div>';
      html += ' </div>';
      if (response.type == 'text') {
          html += ' <div class=\"form-group\">';
          html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1469
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
          html += '   <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"' + response.value + '\" placeholder=\"";
        // line 1470
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" readonly /></div>';
          html += ' </div>';
      }
      if (response.type == 'textarea') {
          html += ' <div class=\"form-group\">';
          html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1475
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
          html += '   <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1476
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" readonly >' + response.value + '</textarea></div>';
          html += ' </div>';
      }
      if (response.type == 'file') {
          html += ' <div class=\"form-group\" style=\"display: none;\">';
          html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1481
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
          html += '   <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"' + response.value + '\" placeholder=\"";
        // line 1482
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" readonly /></div>';
          html += ' </div>';
      }
      if (response.type == 'date') {
          html += ' <div class=\"form-group\">';
          html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1487
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
          html += '   <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"' + response.value + '\" placeholder=\"";
        // line 1488
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" readonly /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\" disabled><i class=\"fa fa-calendar\"></i></button></span></div></div>';
          html += ' </div>';
      }
      if (response.type == 'time') {
          html += ' <div class=\"form-group\">';
          html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1493
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
          html += '   <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"' + response.value + '\" placeholder=\"";
        // line 1494
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" readonly /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\" disabled><i class=\"fa fa-calendar\"></i></button></span></div></div>';
          html += ' </div>';
      }
      if (response.type == 'datetime') {
          html += ' <div class=\"form-group\">';
          html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1499
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
          html += '   <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"' + response.value + '\" placeholder=\"";
        // line 1500
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" readonly /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\" disabled><i class=\"fa fa-calendar\"></i></button></span></div></div>';
          html += ' </div>';
      }
      if (response.type == 'select' || response.type == 'radio' || response.type == 'checkbox' || response.type == 'image') {
          html += '<div class=\"table-responsive\">';
          html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
          html += '    <thead>';
          html += '      <tr>';
          html += '        <td class=\"text-left\">";
        // line 1508
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
          html += '        <td class=\"text-right\">";
        // line 1509
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
          html += '        <td class=\"text-left\">";
        // line 1510
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
          html += '        <td class=\"text-right\">";
        // line 1511
        echo ($context["entry_price"] ?? null);
        echo "</td>';
          html += '        <td class=\"text-right\">";
        // line 1512
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
          html += '        <td class=\"text-right\">";
        // line 1513
        echo ($context["entry_weight"] ?? null);
        echo "</td>';
          html += '        <td></td>';
          html += '      </tr>';
          html += '    </thead>';
          html += '    <tbody>';
          html += '    </tbody>';
          html += '    <tfoot>';
          html += '      <tr>';
          html += '        <td colspan=\"6\"></td>';
          html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1522
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
          html += '      </tr>';
          html += '    </tfoot>';
          html += '  </table>';
          html += '</div>';           
      }
      \$('#tab-option .tab-content').append(html);

        \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + response.name + '</li>');

        \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

        \$('[data-toggle=\\'tooltip\\']').tooltip({
            container: 'body',
            html: true
        });

        \$('.date').datetimepicker({
            language: '";
        // line 1540
        echo ($context["datepicker"] ?? null);
        echo "',
            pickTime: false
        });

        \$('.time').datetimepicker({
            language: '";
        // line 1545
        echo ($context["datepicker"] ?? null);
        echo "',
            pickDate: false
        });

        \$('.datetime').datetimepicker({
            language: '";
        // line 1550
        echo ($context["datepicker"] ?? null);
        echo "',
            pickDate: true,
            pickTime: true
        });

          var option_value_rows=option_row;
        for(option_value_row=0; option_value_row < response.product_option_value.length; option_value_row++) {
              html = '<tr id=\"option-value-row' + option_value_rows + '\">';
              html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
              for (i = 0; i < response.product_option_value.length; i++) {
                   if(response.product_option_value[option_value_row].product_option_value_id==response.product_option_value[i].product_option_value_id){
                      html += '  <option value=\"' + response.product_option_value[i]['option_value_id'] + '\" selected=\"selected\">' + response.product_option_value[i].option_value_name + '</option>';
                   }
                 else {
                    html += '  <option value=\"' + response.product_option_value[i]['option_value_id'] + '\">' + response.product_option_value[i].option_value_name + '</option>';
                  }

               }
              // html += \$('#option-values' + option_row).html();
              html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_rows + '][product_option_value_id]\" value=\"' + response.product_option_value[option_value_row].product_option_value_id + '\"/></td>';          

              html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"' + response.product_option_value[option_value_row].quantity + '\" placeholder=\"";
        // line 1571
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" readonly /></td>';

              html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
              if(response.product_option_value[option_value_row].subtract=='1')
              {
              html += '    <option value=\"' + response.product_option_value[option_value_row].subtract + '\" selected=\"selected\">";
        // line 1576
        echo ($context["text_yes"] ?? null);
        echo "</option>';
              }
              else
              {
              html += '    <option value=\"' + response.product_option_value[option_value_row].subtract + '\" selected=\"selected\">";
        // line 1580
        echo ($context["text_no"] ?? null);
        echo "</option>';
              }
              html += '  </select></td>';

              html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
              if (response.product_option_value[option_value_row].price_prefix == '+') {
                  html += '<option value=\"' + response.product_option_value[option_value_row].price_prefix + '\">'+response.product_option_value[option_value_row].price_prefix+'</option>';
                   
              } else {
                  html += '<option value=\"' + response.product_option_value[option_value_row].price_prefix + '\">'+response.product_option_value[option_value_row].price_prefix+'</option>';
              }

              html += '  </select>';
              html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"' + response.product_option_value[option_value_row].price + '\" placeholder=\"";
        // line 1593
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" readonly /></td>';
              html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
             if (response.product_option_value[option_value_row].points_prefix == '+') {
                  html += '<option value=\"' + response.product_option_value[option_value_row].points_prefix + '\">'+response.product_option_value[option_value_row].points_prefix+'</option>';
                   
              } else {
                  html += '<option value=\"' + response.product_option_value[option_value_row].points_prefix + '\">'+response.product_option_value[option_value_row].points_prefix+'</option>';
              }
              html += '  </select>';
              html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"' + response.product_option_value[option_value_row].points + '\" placeholder=\"";
        // line 1602
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" readonly /></td>';
              html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
              if (response.product_option_value[option_value_row].weight_prefix == '+') {
                  html += '<option value=\"' + response.product_option_value[option_value_row].weight_prefix + '\">'+response.product_option_value[option_value_row].weight_prefix+'</option>';
                   
              } else {
                  html += '<option value=\"' + response.product_option_value[option_value_row].weight_prefix + '\">'+response.product_option_value[option_value_row].weight_prefix+'</option>';
              }
              html += '  </select>';
              html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"' + response.product_option_value[option_value_row].weight + '\" placeholder=\"";
        // line 1611
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" readonly /></td>';
              html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1612
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\" disabled ><i class=\"fa fa-minus-circle\"></i></button></td>';
              option_value_rows++;
              html += '</tr>';

              \$('#option-value' + option_row + ' tbody').append(html);
              \$('[rel=tooltip]').tooltip();
          }
          option_row++;
      });   
    }
  });

}

 
 




// document.getElementById(\"divMain\").innerHTML= textToHTML('<h1>Hello</h1><p>Your HTML Contents are visible now</p>');


// Category
\$('input[name=\\'category\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=account/vendor/lts_category/autocomplete&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['category_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'category\\']').val('');

    \$('#product-category' + item['value']).remove();

    \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
  }
});

\$('#product-category').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});

// Filter
\$('input[name=\\'filter\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=account/vendor/lts_filter/autocomplete&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['filter_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'filter\\']').val('');

    \$('#product-filter' + item['value']).remove();

    \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
  }
});

\$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});

// Downloads
\$('input[name=\\'download\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=account/vendor/lts_download/autocomplete&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {

            label: item['name'],
            value: item['download_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
     
    \$('input[name=\\'download\\']').val('');

    \$('#product-download' + item['value']).remove();

    \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
  }
});

\$('#product-download').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});

// Related
\$('input[name=\\'related\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=account/vendor/lts_product/autocomplete&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['product_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'related\\']').val('');

    \$('#product-related' + item['value']).remove();

    \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
  }
});

\$('#product-related').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});
//--></script> 

 

  <script type=\"text/javascript\"><!--
// var attribute_row = ";
        // line 1757
        echo ($context["attribute_row"] ?? null);
        echo ";

function addAttribute() {
  html  = '<tr id=\"attribute-row' + attribute_row + '\">';
  html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1761
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
  html += '  <td class=\"text-left\">';
  ";
        // line 1763
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1764
            echo "  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"admin/language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1764);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1764);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1764);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1764);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1766
        echo "  html += '  </td>';
  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1767
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
    html += '</tr>';

  \$('#attribute tbody').append(html);

  attributeautocomplete(attribute_row);

  attribute_row++;
}

function attributeautocomplete(attribute_row) {
  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=account/vendor/lts_attribute/autocomplete&filter_name=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              category: item.attribute_group,
              label: item.name,
              value: item.attribute_id
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
      \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
    }
  });
}

\$('#attribute tbody tr').each(function(index, element) {
  attributeautocomplete(index);
});
//--></script> 
  <script type=\"text/javascript\"><!--

    

\$('input[name=\\'option\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=account/vendor/lts_option/autocomplete&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            category: item['category'],
            label: item['name'],
            value: item['option_id'],
            type: item['type'],
            option_value: item['option_value']
          }
        }));
      }
    });
  },
  'select': function(item) {

    html  = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
    html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
    html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
    html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
    html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

    html += ' <div class=\"form-group\">';
    html += '   <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1836
        echo ($context["entry_required"] ?? null);
        echo "</label>';
    html += '   <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
    html += '       <option value=\"1\">";
        // line 1838
        echo ($context["text_yes"] ?? null);
        echo "</option>';
    html += '       <option value=\"0\">";
        // line 1839
        echo ($context["text_no"] ?? null);
        echo "</option>';
    html += '   </select></div>';
    html += ' </div>';

    if (item['type'] == 'text') {
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1845
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1846
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
      html += ' </div>';
    }

    if (item['type'] == 'textarea') {
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1852
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1853
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
      html += ' </div>';
    }

    if (item['type'] == 'file') {
      html += ' <div class=\"form-group\" style=\"display: none;\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1859
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1860
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
      html += ' </div>';
    }

    if (item['type'] == 'date') {
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1866
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1867
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
      html += ' </div>';
    }

    if (item['type'] == 'time') {
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1873
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1874
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
      html += ' </div>';
    }

    if (item['type'] == 'datetime') {
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1880
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1881
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
      html += ' </div>';
    }

    if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
      html += '<div class=\"table-responsive\">';
      html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
      html += '    <thead>';
      html += '      <tr>';
      html += '        <td class=\"text-left\">";
        // line 1890
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
      html += '        <td class=\"text-right\">";
        // line 1891
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
      html += '        <td class=\"text-left\">";
        // line 1892
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
      html += '        <td class=\"text-right\">";
        // line 1893
        echo ($context["entry_price"] ?? null);
        echo "</td>';
      html += '        <td class=\"text-right\">";
        // line 1894
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
      html += '        <td class=\"text-right\">";
        // line 1895
        echo ($context["entry_weight"] ?? null);
        echo "</td>';
      html += '        <td></td>';
      html += '      </tr>';
      html += '    </thead>';
      html += '    <tbody>';
      html += '    </tbody>';
      html += '    <tfoot>';
      html += '      <tr>';
      html += '        <td colspan=\"6\"></td>';
      html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1904
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
      html += '      </tr>';
      html += '    </tfoot>';
      html += '  </table>';
      html += '</div>';

            html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

            for (i = 0; i < item['option_value'].length; i++) {

        html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '  </select>';
      html += '</div>';
    }

    \$('#tab-option .tab-content').append(html);

    \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

    \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

    \$('[data-toggle=\\'tooltip\\']').tooltip({
      container: 'body',
      html: true
    });

    \$('.date').datetimepicker({
      language: '";
        // line 1933
        echo ($context["datepicker"] ?? null);
        echo "',
      pickTime: false
    });

    \$('.time').datetimepicker({
      language: '";
        // line 1938
        echo ($context["datepicker"] ?? null);
        echo "',
      pickDate: false
    });

    \$('.datetime').datetimepicker({
      language: '";
        // line 1943
        echo ($context["datepicker"] ?? null);
        echo "',
      pickDate: true,
      pickTime: true
    });

    option_row++;
  }
});
//--></script> 
  <script type=\"text/javascript\"><!--


function addOptionValue(option_row) {
  html  = '<tr id=\"option-value-row' + option_value_row + '\">';
  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
  html += \$('#option-values' + option_row).html();
  html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1960
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
  html += '    <option value=\"1\">";
        // line 1962
        echo ($context["text_yes"] ?? null);
        echo "</option>';
  html += '    <option value=\"0\">";
        // line 1963
        echo ($context["text_no"] ?? null);
        echo "</option>';
  html += '  </select></td>';
  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
  html += '    <option value=\"+\">+</option>';
  html += '    <option value=\"-\">-</option>';
  html += '  </select>';
  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1969
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
  html += '    <option value=\"+\">+</option>';
  html += '    <option value=\"-\">-</option>';
  html += '  </select>';
  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1974
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
  html += '    <option value=\"+\">+</option>';
  html += '    <option value=\"-\">-</option>';
  html += '  </select>';
  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1979
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1980
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';

  \$('#option-value' + option_row + ' tbody').append(html);
  \$('[rel=tooltip]').tooltip();

  option_value_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
// var discount_row = ";
        // line 1990
        echo ($context["discount_row"] ?? null);
        echo ";

function addDiscount() {
  html  = '<tr id=\"discount-row' + discount_row + '\">';
    html += '<td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1995
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1996
            echo "    html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1996);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1996), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1998
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1999
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
    html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2000
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 2001
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
    html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2002
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2003
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2004
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';

  \$('#discount tbody').append(html);

  \$('.date').datetimepicker({
    pickTime: false
  });

  discount_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
// var special_row = ";
        // line 2017
        echo ($context["special_row"] ?? null);
        echo ";

function addSpecial() {
  html  = '<tr id=\"special-row' + special_row + '\">';
    html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 2022
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2023
            echo "    html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2023);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2023), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2025
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2026
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 2027
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
    html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2028
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2029
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2030
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';

  \$('#special tbody').append(html);

  \$('.date').datetimepicker({
    language: '";
        // line 2036
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });

  special_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
// var image_row = ";
        // line 2044
        echo ($context["image_row"] ?? null);
        echo ";

function addImage() {
  html  = '<tr id=\"image-row' + image_row + '\">';
  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 2048
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 2049
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2050
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';

  \$('#images tbody').append(html);

  image_row++;
}
//--></script> 
 ";
        // line 2059
        echo "  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  language: '";
        // line 2061
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.time').datetimepicker({
  language: '";
        // line 2066
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 2071
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true 
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
\$('#option a:first').tab('show');
//--></script>
<script type=\"text/javascript\"><!--
 
 function addPincode() {
    html  = '<tr id=\"pincode-checker' + pincode_row + '\">';
    html += '  <td class=\"left\">';
    html += '    <input type=\"text\" name=\"pincode_checker[' + pincode_row + '][pincode]\" class=\"form-control\" placeholder=\"";
        // line 2085
        echo ($context["entry_pincode"] ?? null);
        echo "\" />';
    html += '  </td>';
    html += '  <td class=\"left\">';
    html += '    <select name=\"pincode_checker[' + pincode_row + '][status]\" class=\"form-control\">>';
    html += '      <option value=\"1\" selected=\"selected\">";
        // line 2089
        echo ($context["text_enabled"] ?? null);
        echo "</option>';
    html += '      <option value=\"0\">";
        // line 2090
        echo ($context["text_disabled"] ?? null);
        echo "</option>';
    html += '    </select>';
    html += '  </td>';
    html += '  <td class=\"left\">';
    html += '    <button type=\"button\" onclick=\"\$(\\'#pincode-checker' + pincode_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2094
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>';
    html += '  </td>';
    html += '</tr>';

    \$('#tab-pincode-checker table tbody').append(html);
    
    pincode_row++;
}
//--></script> 

";
        // line 2104
        echo ($context["footer"] ?? null);
        echo " 
</div>


";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4222 => 2104,  4209 => 2094,  4202 => 2090,  4198 => 2089,  4191 => 2085,  4174 => 2071,  4166 => 2066,  4158 => 2061,  4154 => 2059,  4143 => 2050,  4139 => 2049,  4133 => 2048,  4126 => 2044,  4115 => 2036,  4106 => 2030,  4102 => 2029,  4098 => 2028,  4094 => 2027,  4090 => 2026,  4087 => 2025,  4076 => 2023,  4072 => 2022,  4064 => 2017,  4048 => 2004,  4044 => 2003,  4040 => 2002,  4036 => 2001,  4032 => 2000,  4028 => 1999,  4025 => 1998,  4014 => 1996,  4010 => 1995,  4002 => 1990,  3989 => 1980,  3985 => 1979,  3977 => 1974,  3969 => 1969,  3960 => 1963,  3956 => 1962,  3951 => 1960,  3931 => 1943,  3923 => 1938,  3915 => 1933,  3883 => 1904,  3871 => 1895,  3867 => 1894,  3863 => 1893,  3859 => 1892,  3855 => 1891,  3851 => 1890,  3839 => 1881,  3835 => 1880,  3826 => 1874,  3822 => 1873,  3813 => 1867,  3809 => 1866,  3800 => 1860,  3796 => 1859,  3787 => 1853,  3783 => 1852,  3774 => 1846,  3770 => 1845,  3761 => 1839,  3757 => 1838,  3752 => 1836,  3680 => 1767,  3677 => 1766,  3660 => 1764,  3656 => 1763,  3651 => 1761,  3644 => 1757,  3496 => 1612,  3492 => 1611,  3480 => 1602,  3468 => 1593,  3452 => 1580,  3445 => 1576,  3437 => 1571,  3413 => 1550,  3405 => 1545,  3397 => 1540,  3376 => 1522,  3364 => 1513,  3360 => 1512,  3356 => 1511,  3352 => 1510,  3348 => 1509,  3344 => 1508,  3333 => 1500,  3329 => 1499,  3321 => 1494,  3317 => 1493,  3309 => 1488,  3305 => 1487,  3297 => 1482,  3293 => 1481,  3285 => 1476,  3281 => 1475,  3273 => 1470,  3269 => 1469,  3260 => 1463,  3256 => 1462,  3250 => 1459,  3231 => 1443,  3227 => 1442,  3223 => 1441,  3196 => 1417,  3187 => 1411,  3183 => 1410,  3179 => 1409,  3175 => 1408,  3171 => 1407,  3168 => 1406,  3159 => 1404,  3155 => 1403,  3138 => 1389,  3134 => 1388,  3130 => 1387,  3126 => 1386,  3122 => 1385,  3118 => 1384,  3115 => 1383,  3106 => 1381,  3102 => 1380,  3090 => 1371,  3086 => 1369,  3067 => 1368,  3063 => 1367,  3058 => 1365,  2946 => 1256,  2917 => 1230,  2898 => 1214,  2894 => 1213,  2871 => 1193,  2857 => 1182,  2853 => 1181,  2849 => 1180,  2845 => 1179,  2841 => 1178,  2837 => 1177,  2833 => 1176,  2805 => 1150,  2797 => 1147,  2790 => 1146,  2784 => 1145,  2782 => 1144,  2769 => 1142,  2760 => 1141,  2756 => 1140,  2752 => 1139,  2749 => 1138,  2745 => 1137,  2738 => 1133,  2734 => 1132,  2726 => 1127,  2718 => 1121,  2707 => 1118,  2703 => 1117,  2700 => 1116,  2696 => 1115,  2688 => 1110,  2684 => 1109,  2672 => 1102,  2665 => 1100,  2654 => 1092,  2647 => 1087,  2641 => 1086,  2639 => 1085,  2632 => 1083,  2624 => 1082,  2616 => 1081,  2608 => 1080,  2603 => 1079,  2598 => 1078,  2596 => 1077,  2587 => 1071,  2583 => 1070,  2571 => 1061,  2565 => 1060,  2557 => 1055,  2543 => 1044,  2536 => 1039,  2533 => 1038,  2527 => 1037,  2525 => 1036,  2517 => 1033,  2512 => 1030,  2507 => 1028,  2502 => 1027,  2497 => 1025,  2492 => 1024,  2490 => 1023,  2479 => 1019,  2473 => 1017,  2468 => 1016,  2465 => 1015,  2463 => 1014,  2455 => 1009,  2451 => 1008,  2437 => 997,  2430 => 992,  2424 => 991,  2422 => 990,  2415 => 988,  2404 => 984,  2392 => 979,  2383 => 977,  2375 => 976,  2370 => 973,  2364 => 972,  2355 => 968,  2351 => 966,  2342 => 962,  2338 => 960,  2335 => 959,  2331 => 958,  2325 => 955,  2320 => 954,  2315 => 953,  2313 => 952,  2304 => 946,  2300 => 945,  2296 => 944,  2292 => 943,  2288 => 942,  2274 => 931,  2267 => 926,  2261 => 925,  2259 => 924,  2252 => 922,  2241 => 918,  2229 => 913,  2220 => 911,  2212 => 910,  2204 => 909,  2200 => 907,  2194 => 906,  2186 => 904,  2178 => 902,  2175 => 901,  2171 => 900,  2167 => 899,  2163 => 898,  2160 => 897,  2156 => 896,  2152 => 895,  2143 => 889,  2139 => 888,  2135 => 887,  2131 => 886,  2127 => 885,  2123 => 884,  2116 => 879,  2105 => 803,  2103 => 802,  2100 => 801,  2094 => 798,  2091 => 797,  2079 => 793,  2075 => 791,  2070 => 790,  2068 => 789,  2062 => 786,  2052 => 781,  2045 => 776,  2039 => 775,  2037 => 774,  2030 => 772,  2019 => 770,  2014 => 767,  2006 => 761,  1998 => 755,  1995 => 754,  1987 => 748,  1979 => 742,  1977 => 741,  1970 => 739,  1960 => 738,  1955 => 735,  1947 => 729,  1939 => 723,  1936 => 722,  1930 => 718,  1924 => 714,  1922 => 713,  1915 => 711,  1905 => 710,  1901 => 708,  1895 => 704,  1889 => 700,  1886 => 699,  1880 => 695,  1874 => 691,  1872 => 690,  1865 => 688,  1861 => 686,  1855 => 683,  1851 => 682,  1848 => 681,  1842 => 678,  1838 => 677,  1835 => 676,  1833 => 675,  1826 => 673,  1816 => 672,  1808 => 671,  1804 => 669,  1801 => 668,  1795 => 667,  1786 => 663,  1782 => 661,  1773 => 657,  1769 => 655,  1767 => 654,  1764 => 653,  1760 => 652,  1757 => 651,  1755 => 650,  1748 => 648,  1744 => 647,  1741 => 646,  1737 => 645,  1728 => 639,  1724 => 638,  1720 => 637,  1716 => 636,  1712 => 635,  1708 => 634,  1702 => 631,  1699 => 630,  1696 => 629,  1680 => 622,  1672 => 619,  1669 => 618,  1666 => 617,  1650 => 610,  1642 => 607,  1639 => 606,  1636 => 605,  1620 => 598,  1612 => 595,  1609 => 594,  1606 => 593,  1593 => 589,  1586 => 587,  1583 => 586,  1580 => 585,  1567 => 581,  1560 => 579,  1557 => 578,  1554 => 577,  1541 => 573,  1534 => 571,  1531 => 570,  1529 => 569,  1523 => 565,  1517 => 562,  1513 => 561,  1510 => 560,  1504 => 557,  1500 => 556,  1497 => 555,  1495 => 554,  1488 => 552,  1481 => 550,  1474 => 548,  1468 => 547,  1462 => 546,  1456 => 545,  1451 => 544,  1446 => 543,  1443 => 542,  1441 => 541,  1432 => 535,  1423 => 533,  1421 => 532,  1410 => 531,  1405 => 530,  1403 => 529,  1389 => 518,  1382 => 513,  1376 => 512,  1374 => 511,  1367 => 509,  1364 => 508,  1349 => 506,  1340 => 505,  1336 => 504,  1329 => 502,  1321 => 501,  1316 => 500,  1311 => 499,  1309 => 498,  1300 => 492,  1296 => 491,  1285 => 482,  1276 => 480,  1269 => 479,  1265 => 478,  1260 => 476,  1253 => 474,  1247 => 470,  1238 => 468,  1231 => 467,  1227 => 466,  1222 => 464,  1215 => 462,  1209 => 458,  1201 => 456,  1196 => 455,  1191 => 454,  1186 => 452,  1181 => 451,  1179 => 450,  1175 => 448,  1171 => 447,  1165 => 444,  1159 => 440,  1150 => 438,  1143 => 437,  1139 => 436,  1135 => 435,  1128 => 433,  1123 => 430,  1120 => 429,  1114 => 427,  1112 => 426,  1108 => 425,  1105 => 424,  1096 => 421,  1089 => 420,  1085 => 419,  1080 => 417,  1073 => 415,  1067 => 414,  1061 => 411,  1055 => 410,  1048 => 408,  1036 => 398,  1029 => 394,  1025 => 393,  1021 => 391,  1014 => 387,  1010 => 386,  1006 => 384,  1004 => 383,  995 => 377,  985 => 372,  980 => 370,  972 => 364,  966 => 363,  958 => 360,  955 => 359,  947 => 356,  944 => 355,  941 => 354,  937 => 353,  930 => 349,  921 => 345,  916 => 343,  909 => 338,  903 => 337,  895 => 334,  892 => 333,  884 => 330,  881 => 329,  878 => 328,  874 => 327,  867 => 323,  856 => 317,  848 => 314,  840 => 311,  833 => 307,  821 => 300,  815 => 297,  809 => 293,  804 => 292,  801 => 291,  796 => 289,  793 => 288,  791 => 287,  787 => 285,  782 => 284,  779 => 283,  774 => 281,  771 => 280,  769 => 279,  763 => 276,  755 => 270,  749 => 269,  740 => 265,  736 => 263,  727 => 259,  723 => 257,  720 => 256,  716 => 255,  706 => 250,  698 => 244,  691 => 240,  687 => 239,  683 => 237,  676 => 233,  672 => 232,  668 => 230,  666 => 229,  658 => 224,  649 => 220,  642 => 218,  633 => 214,  628 => 212,  620 => 206,  614 => 205,  605 => 201,  601 => 199,  592 => 195,  588 => 193,  585 => 192,  581 => 191,  575 => 188,  569 => 185,  560 => 181,  555 => 179,  546 => 175,  541 => 173,  532 => 169,  525 => 167,  516 => 163,  509 => 161,  500 => 157,  493 => 155,  484 => 151,  477 => 149,  468 => 145,  461 => 143,  452 => 139,  445 => 137,  440 => 134,  434 => 133,  432 => 132,  426 => 131,  421 => 129,  415 => 125,  398 => 120,  389 => 118,  376 => 114,  369 => 112,  356 => 108,  349 => 106,  344 => 103,  338 => 102,  336 => 101,  326 => 100,  319 => 98,  304 => 94,  297 => 92,  291 => 88,  285 => 87,  283 => 86,  279 => 85,  269 => 84,  262 => 82,  257 => 80,  252 => 79,  248 => 78,  244 => 76,  226 => 73,  222 => 72,  215 => 67,  209 => 65,  206 => 64,  200 => 62,  197 => 61,  191 => 59,  189 => 58,  186 => 57,  181 => 55,  177 => 54,  174 => 53,  168 => 51,  165 => 50,  159 => 48,  156 => 47,  150 => 45,  147 => 44,  141 => 42,  138 => 41,  132 => 39,  130 => 38,  126 => 37,  122 => 36,  117 => 34,  111 => 31,  107 => 29,  99 => 25,  97 => 24,  93 => 22,  84 => 17,  82 => 16,  77 => 13,  66 => 11,  62 => 10,  57 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_product_form.twig", "");
    }
}
