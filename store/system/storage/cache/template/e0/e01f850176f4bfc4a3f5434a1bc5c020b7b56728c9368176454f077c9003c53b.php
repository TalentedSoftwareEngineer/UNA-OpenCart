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

/* default/template/account/vendor/product_mail.twig */
class __TwigTemplate_5c000f5148bf63f5c4d29fe7c6446a17675430dd110ee6bfccf6a697f00717a0 extends \Twig\Template
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
        echo ($context["store"] ?? null);
        echo "
";
        // line 2
        echo ($context["title_mail"] ?? null);
        echo "

";
        // line 4
        if (($context["vendor"] ?? null)) {
            // line 5
            echo "
";
            // line 6
            echo ($context["mail_vendor_id"] ?? null);
            echo "
";
            // line 7
            echo twig_get_attribute($this->env, $this->source, ($context["vendor"] ?? null), "vendor_id", [], "any", false, false, false, 7);
            echo "

";
            // line 9
            echo ($context["mail_vendor_name"] ?? null);
            echo "
";
            // line 10
            echo twig_get_attribute($this->env, $this->source, ($context["vendor"] ?? null), "store_owner", [], "any", false, false, false, 10);
            echo "

";
            // line 12
            echo ($context["mail_text"] ?? null);
            echo "

";
        }
        // line 15
        echo "
";
        // line 16
        if (($context["product"] ?? null)) {
            // line 17
            echo "
";
            // line 18
            echo ($context["mail_product_id"] ?? null);
            echo "
";
            // line 19
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 19);
            echo "

";
            // line 21
            echo ($context["mail_product_name"] ?? null);
            echo "
";
            // line 22
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 22);
            echo "


";
        }
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/product_mail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  92 => 21,  87 => 19,  83 => 18,  80 => 17,  78 => 16,  75 => 15,  69 => 12,  64 => 10,  60 => 9,  55 => 7,  51 => 6,  48 => 5,  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/product_mail.twig", "");
    }
}
