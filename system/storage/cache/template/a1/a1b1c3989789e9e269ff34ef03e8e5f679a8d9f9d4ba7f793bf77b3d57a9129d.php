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

/* extension/payment/mobilpay.twig */
class __TwigTemplate_eb13afbfcbd299f61645030bdcffd5f07e845ba58e3e7cf1efff840a53af7365 extends \Twig\Template
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
\t  <div class=\"pull-right\">
\t    <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t<a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t  </div>
\t  <h1><img src=\"view/image/payment/mobilpay.gif\" alt=\"\" /> ";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t  <ul class=\"breadcrumb\">
\t    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t  </ul>
\t</div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 23
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
\t  <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t</div>
\t<div class=\"panel-body\">
\t  <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
\t    <div class=\"tab-content\">
\t\t  <div class=\"form-group required\">
\t\t    <label class=\"col-sm-2 control-label\" for=\"entry-signature\">";
        // line 31
        echo ($context["entry_signature"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"payment_mobilpay_signature\" value=\"";
        // line 33
        echo ($context["payment_mobilpay_signature"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_signature"] ?? null);
        echo "\" id=\"entry-signature\" class=\"form-control\"/>
                ";
        // line 34
        if (($context["error_signature"] ?? null)) {
            // line 35
            echo "                <div class=\"text-danger\">";
            echo ($context["error_signature"] ?? null);
            echo "</div>
                ";
        }
        // line 37
        echo "\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label class=\"col-sm-2 control-label\" for=\"input-test\">";
        // line 40
        echo ($context["entry_test"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_mobilpay_test\" id=\"input-test\" class=\"form-control\">
\t\t\t  ";
        // line 43
        if ((($context["payment_mobilpay_test"] ?? null) == "sandbox")) {
            // line 44
            echo "\t\t\t    <option value=\"sandbox\" selected=\"selected\">";
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
\t\t\t  ";
        } else {
            // line 46
            echo "                <option value=\"sandbox\">";
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
              ";
        }
        // line 48
        echo "\t\t\t  ";
        if ((($context["payment_mobilpay_test"] ?? null) == "live")) {
            // line 49
            echo "                <option value=\"live\" selected=\"selected\">";
            echo ($context["text_live"] ?? null);
            echo "</option>
              ";
        } else {
            // line 51
            echo "                <option value=\"live\">";
            echo ($context["text_live"] ?? null);
            echo "</option>
              ";
        }
        // line 53
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 57
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_mobilpay_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 60
        if (($context["payment_mobilpay_status"] ?? null)) {
            // line 61
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 62
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 64
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 65
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 67
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 71
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_mobilpay_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 75
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 75) == ($context["payment_mobilpay_order_status_id"] ?? null))) {
                // line 76
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 76);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 76);
                echo "</option>
                  ";
            } else {
                // line 78
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 78);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 78);
                echo "</option>
                  ";
            }
            // line 80
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 85
        echo ($context["entry_order_status_confirmed_pending"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_mobilpay_order_status_confirmed_pending_id\" id=\"input-order-status\" class=\"form-control\">
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 89
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 89) == ($context["payment_mobilpay_order_status_confirmed_pending_id"] ?? null))) {
                // line 90
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 90);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 90);
                echo "</option>
                  ";
            } else {
                // line 92
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 92);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 92);
                echo "</option>
                  ";
            }
            // line 94
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 99
        echo ($context["entry_order_status_paid_pending"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_mobilpay_order_status_paid_pending_id\" id=\"input-order-status\" class=\"form-control\">
                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 103
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 103) == ($context["payment_mobilpay_order_status_paid_pending_id"] ?? null))) {
                // line 104
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 104);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 104);
                echo "</option>
                  ";
            } else {
                // line 106
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 106);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 106);
                echo "</option>
                  ";
            }
            // line 108
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 113
        echo ($context["entry_order_status_paid"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_mobilpay_order_status_paid_id\" id=\"input-order-status\" class=\"form-control\">
                ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 117
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 117) == ($context["payment_mobilpay_order_status_paid_id"] ?? null))) {
                // line 118
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 118);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 118);
                echo "</option>
                  ";
            } else {
                // line 120
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 120);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 120);
                echo "</option>
                  ";
            }
            // line 122
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 127
        echo ($context["entry_order_status_canceled"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_mobilpay_order_status_canceled_id\" id=\"input-order-status\" class=\"form-control\">
                ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 131
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 131) == ($context["payment_mobilpay_order_status_canceled_id"] ?? null))) {
                // line 132
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 132);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 132);
                echo "</option>
                  ";
            } else {
                // line 134
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 134);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 134);
                echo "</option>
                  ";
            }
            // line 136
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 141
        echo ($context["entry_order_status_credit"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_mobilpay_order_status_credit_id\" id=\"input-order-status\" class=\"form-control\">
                ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 145
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 145) == ($context["payment_mobilpay_order_status_credit_id"] ?? null))) {
                // line 146
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 146);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 146);
                echo "</option>
                  ";
            } else {
                // line 148
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 148);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 148);
                echo "</option>
                  ";
            }
            // line 150
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 155
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_mobilpay_total\" value=\"";
        // line 157
        echo ($context["payment_mobilpay_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 161
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_mobilpay_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 164
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 166
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 166) == ($context["payment_mobilpay_geo_zone_id"] ?? null))) {
                // line 167
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 167);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 167);
                echo "</option>
                ";
            } else {
                // line 169
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 169);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 169);
                echo "</option>
                ";
            }
            // line 171
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 176
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_mobilpay_sort_order\" value=\"";
        // line 178
        echo ($context["payment_mobilpay_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
            </div>
          </div>
\t\t</div>
\t  </form>
\t</div>
  </div>
</div>
";
        // line 186
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/payment/mobilpay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 186,  520 => 178,  515 => 176,  509 => 172,  503 => 171,  495 => 169,  487 => 167,  484 => 166,  480 => 165,  476 => 164,  470 => 161,  461 => 157,  454 => 155,  448 => 151,  442 => 150,  434 => 148,  426 => 146,  423 => 145,  419 => 144,  413 => 141,  407 => 137,  401 => 136,  393 => 134,  385 => 132,  382 => 131,  378 => 130,  372 => 127,  366 => 123,  360 => 122,  352 => 120,  344 => 118,  341 => 117,  337 => 116,  331 => 113,  325 => 109,  319 => 108,  311 => 106,  303 => 104,  300 => 103,  296 => 102,  290 => 99,  284 => 95,  278 => 94,  270 => 92,  262 => 90,  259 => 89,  255 => 88,  249 => 85,  243 => 81,  237 => 80,  229 => 78,  221 => 76,  218 => 75,  214 => 74,  208 => 71,  202 => 67,  197 => 65,  192 => 64,  187 => 62,  182 => 61,  180 => 60,  174 => 57,  168 => 53,  162 => 51,  156 => 49,  153 => 48,  147 => 46,  141 => 44,  139 => 43,  133 => 40,  128 => 37,  122 => 35,  120 => 34,  114 => 33,  109 => 31,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/mobilpay.twig", "");
    }
}
