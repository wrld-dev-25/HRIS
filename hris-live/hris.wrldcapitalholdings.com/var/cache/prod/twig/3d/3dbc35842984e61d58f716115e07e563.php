<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* emails/reset_password_link.html.twig */
class __TwigTemplate_fcad64a1f606307f89c4f6961e632286 extends Template
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
        yield from         $this->loadTemplate("partials/_head-css.html.twig", "emails/reset_password_link.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
<h3>Hello ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["employee"] ?? null), "html", null, true);
        yield ",</h3>
<br>
<p>To reset your password, please click on the following link:</p>
<br>
<a href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["resetUrl"] ?? null), "html", null, true);
        yield "\">Click here!</a>
<br>
<br>
<p>If you did not request a password reset, please ignore this email.</p>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emails/reset_password_link.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  50 => 7,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/reset_password_link.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/emails/reset_password_link.html.twig");
    }
}
