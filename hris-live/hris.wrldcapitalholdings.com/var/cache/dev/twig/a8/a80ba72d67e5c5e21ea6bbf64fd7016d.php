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

/* ui-lists.html.twig */
class __TwigTemplate_67769c62093dff993ef696bdbdb5aca3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-lists.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "ui-lists.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Lists";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        yield "
            ";
        // line 6
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "UI Elements", "title" => "Lists"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Basic List</h6>
                            <ul class=\"space-y-5 rounded-md\">
                                <li>Send the billing agreement</li>
                                <li>Send over all the documentation.</li>
                                <li>Meeting with daron to review the intake form</li>
                                <li>Check tailwick theme and give customer support</li>
                            </ul>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Bullet List</h6>
                            <ul class=\"space-y-5 list-disc list-inside rounded-md\">
                                <li>Send the billing agreement</li>
                                <li>Send over all the documentation.</li>
                                <li>Meeting with daron to review the intake form</li>
                                <li>Check tailwick theme and give customer support</li>
                            </ul>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">List with Numbered</h6>
                            <ul class=\"space-y-5 list-decimal list-inside rounded-md\">
                                <li>Send the billing agreement</li>
                                <li>Send over all the documentation.</li>
                                <li>Meeting with daron to review the intake form</li>
                                <li>Check tailwick theme and give customer support</li>
                            </ul>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Marker Colors</h6>
                            <ul class=\"space-y-5 list-disc list-inside rounded-md marker:text-red-500\">
                                <li>Send the billing agreement</li>
                                <li>Send over all the documentation.</li>
                                <li>Meeting with daron to review the intake form</li>
                                <li>Check tailwick theme and give customer support</li>
                            </ul>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Marker Colors</h6>
                            <ul class=\"space-y-5 list-decimal list-inside rounded-md marker:text-custom-500\">
                                <li>Send the billing agreement</li>
                                <li>Send over all the documentation.</li>
                                <li>Meeting with daron to review the intake form</li>
                                <li>Check tailwick theme and give customer support</li>
                            </ul>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Custom Square List</h6>
                            <ul class=\"list-[square] rounded-md list-inside space-y-5\">
                                <li>Send the billing agreement</li>
                                <li>Send over all the documentation.</li>
                                <li>Meeting with daron to review the intake form</li>
                                <li>Check tailwick theme and give customer support</li>
                            </ul>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Bordered List</h6>
                            <ul class=\"border rounded-md border-slate-200 dark:border-zink-500\">
                                <li class=\"px-3.5 py-2.5 border-b dark:border-zink-500\">Send the billing agreement</li>
                                <li class=\"px-3.5 py-2.5 border-b dark:border-zink-500 text-custom-50 bg-custom-500\">Send over all the documentation.</li>
                                <li class=\"px-3.5 py-2.5 border-b dark:border-zink-500\">Meeting with daron to review the intake form</li>
                                <li class=\"px-3.5 py-2.5\">Check tailwick theme and give customer support</li>
                            </ul>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Flush List</h6>
                            <ul>
                                <li class=\"px-3.5 py-2.5 border-b dark:border-zink-500\">Send the billing agreement</li>
                                <li class=\"px-3.5 py-2.5 border-b dark:border-zink-500\">Send over all the documentation.</li>
                                <li class=\"px-3.5 py-2.5 border-b dark:border-zink-500\">Meeting with daron to review the intake form</li>
                                <li class=\"px-3.5 py-2.5\">Check tailwick theme and give customer support</li>
                            </ul>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">List with Link</h6>
                            <div class=\"flex flex-col border rounded-md dark:border-zink-500\">
                                <a href=\"#!\" class=\"block px-3.5 py-2.5 transition border-b dark:border-zink-500 hover:bg-slate-100 dark:hover:bg-zink-600\">Category Download</a>
                                <a href=\"#!\" class=\"block px-3.5 py-2.5 transition border-b dark:border-zink-500 bg-custom-500 text-custom-50\">Security Access</a>
                                <a href=\"#!\" class=\"block px-3.5 py-2.5 transition border-b dark:border-zink-500 hover:bg-slate-100 dark:hover:bg-zink-600\">Storage folder</a>
                                <a href=\"#!\" class=\"block px-3.5 py-2.5 transition pointer-events-none bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600\">Push Notification disabled</a>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">List with Checkbox</h6>
                            <div class=\"flex flex-col border rounded-md dark:border-zink-300/20\">
                                <label class=\"px-3.5 py-2.5 border-b dark:border-zink-300/20 flex items-center gap-2\">
                                    <input class=\"size-4 border rounded-sm appearance-none bg-slate-100 border-slate-200 ltr:mr-1 rtl:ml-1 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-600 dark:border-zink-500 dark:checked:bg-custom-500 dark:checked:border-custom-500\" type=\"checkbox\" value=\"\" checked>
                                    Declined Payment
                                </label>
                                <label class=\"px-3.5 py-2.5 border-b dark:border-zink-300/20 flex items-center gap-2\">
                                    <input class=\"size-4 border rounded-sm appearance-none bg-slate-100 border-slate-200 ltr:mr-1 rtl:ml-1 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-600 dark:border-zink-500 dark:checked:bg-custom-500 dark:checked:border-custom-500\" type=\"checkbox\" value=\"\">
                                    Delivery Error
                                </label>
                                <label class=\"px-3.5 py-2.5 border-b dark:border-zink-300/20 flex items-center gap-2\">
                                    <input class=\"size-4 border rounded-sm appearance-none bg-slate-100 border-slate-200 ltr:mr-1 rtl:ml-1 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-600 dark:border-zink-500 dark:checked:bg-custom-500 dark:checked:border-custom-500\" type=\"checkbox\" value=\"\">
                                    Wrong Amount
                                </label>
                                <label class=\"px-3.5 py-2.5 border-b dark:border-zink-300/20 flex items-center gap-2\">
                                    <input class=\"size-4 border rounded-sm appearance-none bg-slate-100 border-slate-200 ltr:mr-1 rtl:ml-1 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-600 dark:border-zink-500 dark:checked:bg-custom-500 dark:checked:border-custom-500\" type=\"checkbox\" value=\"\" checked>
                                    Wrong Address
                                </label>
                                <label class=\"px-3.5 py-2.5 flex items-center gap-2\">
                                    <input class=\"size-4 border rounded-sm appearance-none bg-slate-100 border-slate-200 ltr:mr-1 rtl:ml-1 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-600 dark:border-zink-500 dark:checked:bg-custom-500 dark:checked:border-custom-500\" type=\"checkbox\" value=\"\">
                                    Wrong UX/UI Solution
                                </label>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">List with Radio</h6>
                            <div class=\"flex flex-col border rounded-md dark:border-zink-300/20\">
                                <label class=\"px-3.5 py-2.5 border-b dark:border-zink-300/20 flex items-center gap-2\">
                                    <input class=\"size-4 border rounded-full appearance-none bg-slate-100 border-slate-200 text-custom-600 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-600 dark:border-zink-500 dark:checked:bg-custom-500 dark:checked:border-custom-500\" type=\"radio\" name=\"listWithRadio\" value=\"\">
                                    Declined Payment
                                </label>
                                <label class=\"px-3.5 py-2.5 border-b dark:border-zink-300/20 flex items-center gap-2\">
                                    <input class=\"size-4 border rounded-full appearance-none bg-slate-100 border-slate-200 text-custom-600 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-600 dark:border-zink-500 dark:checked:bg-custom-500 dark:checked:border-custom-500\" type=\"radio\" name=\"listWithRadio\" value=\"\" checked>
                                    Delivery Error
                                </label>
                                <label class=\"px-3.5 py-2.5 border-b dark:border-zink-300/20 flex items-center gap-2\">
                                    <input class=\"size-4 border rounded-full appearance-none bg-slate-100 border-slate-200 text-custom-600 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-600 dark:border-zink-500 dark:checked:bg-custom-500 dark:checked:border-custom-500\" type=\"radio\" name=\"listWithRadio\" value=\"\">
                                    Wrong Amount
                                </label>
                                <label class=\"px-3.5 py-2.5 border-b dark:border-zink-300/20 flex items-center gap-2\">
                                    <input class=\"size-4 border rounded-full appearance-none bg-slate-100 border-slate-200 text-custom-600 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-600 dark:border-zink-500 dark:checked:bg-custom-500 dark:checked:border-custom-500\" type=\"radio\" name=\"listWithRadio\" value=\"\">
                                    Wrong Address
                                </label>
                                <label class=\"px-3.5 py-2.5 flex items-center gap-2\">
                                    <input class=\"size-4 border rounded-full appearance-none bg-slate-100 border-slate-200 text-custom-600 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-600 dark:border-zink-500 dark:checked:bg-custom-500 dark:checked:border-custom-500\" type=\"radio\" name=\"listWithRadio\" value=\"\" checked>
                                    Wrong UX/UI Solution
                                </label>
                            </div>
                        </div>
                    </div><!--end card-->
                </div>
         

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 167
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 168
        yield "
<!-- App js -->
<script src=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 172
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ui-lists.html.twig";
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
        return array (  262 => 172,  258 => 170,  254 => 168,  247 => 167,  79 => 6,  76 => 5,  69 => 4,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ui-lists.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\ui-lists.html.twig");
    }
}
