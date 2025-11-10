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
class __TwigTemplate_6445b25389b6b8e7ebf50aa2a9d12b85 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reset_password_link.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reset_password_link.html.twig"));

        // line 1
        yield from         $this->loadTemplate("partials/_head-css.html.twig", "emails/reset_password_link.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
<h3>Hello ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 3, $this->source); })()), "html", null, true);
        yield ",</h3>
<br>
<p>To reset your password, please click on the following link:</p>
<br>
<a href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resetUrl"]) || array_key_exists("resetUrl", $context) ? $context["resetUrl"] : (function () { throw new RuntimeError('Variable "resetUrl" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "\">Click here!</a>
<br>
<br>
<p>If you did not request a password reset, please ignore this email.</p>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  56 => 7,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'partials/_head-css.html.twig' %}

<h3>Hello {{ employee }},</h3>
<br>
<p>To reset your password, please click on the following link:</p>
<br>
<a href=\"{{ resetUrl }}\">Click here!</a>
<br>
<br>
<p>If you did not request a password reset, please ignore this email.</p>", "emails/reset_password_link.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\emails\\reset_password_link.html.twig");
    }
}
