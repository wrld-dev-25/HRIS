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

/* employee_payroll/index.html.twig */
class __TwigTemplate_cad7811ba2714d110a220947f4773388 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>

<title>Hello EmployeePayrollController!</title>

";
        // line 5
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        return; yield '';
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["controller_name"] ?? null), "html", null, true);
        yield "! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code>E:/xampp/htdocs/Techrustrom/wchhris/src/Controller/EmployeePayrollController.php</code></li>
        <li>Your template at <code>E:/xampp/htdocs/Techrustrom/wchhris/templates/employee_payroll/index.html.twig</code></li>
    </ul>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "employee_payroll/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  61 => 12,  53 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "employee_payroll/index.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/employee_payroll/index.html.twig");
    }
}
