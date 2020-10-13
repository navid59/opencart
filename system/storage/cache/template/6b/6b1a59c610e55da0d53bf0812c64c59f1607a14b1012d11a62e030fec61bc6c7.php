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

/* default/template/extension/payment/mobilpay.twig */
class __TwigTemplate_9f9693e0e46424d02aea221fc42931f00c78944c18a453eeb6c0dde42acf7386 extends \Twig\Template
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
        echo "<form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" id=\"payment\">
  <input type=\"hidden\" name=\"env_key\" value=\"";
        // line 2
        echo ($context["env_key"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"data\" value=\"";
        // line 3
        echo ($context["data"] ?? null);
        echo "\"/>
  <div class=\"buttons\">
    <div class=\"pull-right\">
    <a onclick=\"\$('#payment').submit();\" class=\"btn btn-primary\">";
        // line 6
        echo ($context["button_confirm"] ?? null);
        echo "</a>
    </div>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/mobilpay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/mobilpay.twig", "");
    }
}
