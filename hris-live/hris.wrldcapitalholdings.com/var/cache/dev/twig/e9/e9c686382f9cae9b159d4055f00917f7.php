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

/* ui-timeline.html.twig */
class __TwigTemplate_17091435c30eb8ffc8cb10493a52bb1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-timeline.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "ui-timeline.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Timeline";
        
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "UI Elements", "title" => "Timeline"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-4 xl:grid-cols-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Circle Timeline</h6>
                            <div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4 dark:before:border-zink-500\">
                                    <h6 class=\"mb-4 text-15\">Invitation Sent</h6>
                                    <p class=\"mb-2 text-slate-400 dark:text-zink-200\">No candidate reply</p>
                                    <p class=\"text-sm text-slate-400 dark:text-zink-200\">02 Aug, 2023</p>
                                </div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4 dark:before:border-zink-500\">
                                    <h6 class=\"mb-4 text-15\">Sent to reminder to candidate</h6>
                                    <p class=\"mb-2 text-slate-500 dark:text-zink-200\">Preview message sent</p>
                                    <p class=\"text-sm text-slate-500 dark:text-zink-200\">15 Aug, 2023</p>
                                </div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4 dark:before:border-zink-500\">
                                    <h6 class=\"mb-4 text-15\">Scheduled</h6>
                                </div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 after:absolute after:size-2 after:bg-custom-500 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5\">
                                    <h6 class=\"mb-4 text-15\">Interview Done</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Square Timeline</h6>
                            <div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-sm ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4 dark:before:border-zink-500\">
                                    <h6 class=\"mb-4 text-15\">Invitation Sent</h6>
                                    <p class=\"mb-2 text-slate-500 dark:text-zink-200\">No candidate reply</p>
                                    <p class=\"text-sm text-slate-500 dark:text-zink-200\">02 Aug, 2023</p>
                                </div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-sm ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4 dark:before:border-zink-500\">
                                    <h6 class=\"mb-4 text-15\">Sent to reminder to candidate</h6>
                                    <p class=\"mb-2 text-slate-500 dark:text-zink-200\">Preview message sent</p>
                                    <p class=\"text-sm text-slate-500 dark:text-zink-200\">15 Aug, 2023</p>
                                </div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-sm ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4 dark:before:border-zink-500\">
                                    <h6 class=\"mb-4 text-15\">Scheduled</h6>
                                </div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 after:absolute after:size-2 after:bg-custom-500 after:rounded-sm ltr:after:left-0 rtl:after:right-0 after:top-1.5\">
                                    <h6 class=\"mb-4 text-15\">Interview Done</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Progress Timeline</h6>
                            <div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r rtl:before:right-[.22rem] before:border-custom-500 before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4\">
                                    <h6 class=\"mb-4 text-15\">Invitation Sent</h6>
                                    <p class=\"mb-2 text-slate-500 dark:text-zink-200\">No candidate reply</p>
                                    <p class=\"text-sm text-slate-500 dark:text-zink-200\">02 Aug, 2023</p>
                                </div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r rtl:before:right-[.22rem] before:border-custom-500 before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4\">
                                    <h6 class=\"mb-4 text-15\">Sent to reminder to candidate</h6>
                                    <p class=\"mb-2 text-slate-500 dark:text-zink-200\">Preview message sent</p>
                                    <p class=\"text-sm text-slate-500 dark:text-zink-200\">15 Aug, 2023</p>
                                </div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-custom-500 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4 dark:before:border-zink-500\">
                                    <h6 class=\"mb-4 text-15\">Scheduled</h6>
                                </div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 after:absolute after:size-2 after:bg-white after:border after:border-slate-200 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 dark:after:bg-zink-700 dark:after:border-zink-500\">
                                    <h6 class=\"mb-4 text-15\">Interview Done</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Outline Timeline</h6>
                            <div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-white after:border after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4 dark:after:bg-zink-700 dark:after:border-zink-500 dark:before:border-zink-500\">
                                    <h6 class=\"mb-4 text-15\">Invitation Sent</h6>
                                    <p class=\"mb-2 text-slate-500 dark:text-zink-200\">No candidate reply</p>
                                    <p class=\"text-sm text-slate-500 dark:text-zink-200\">02 Aug, 2023</p>
                                </div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-white after:border after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4 dark:after:bg-zink-700 dark:after:border-zink-500 dark:before:border-zink-500\">
                                    <h6 class=\"mb-4 text-15\">Sent to reminder to candidate</h6>
                                    <p class=\"mb-2 text-slate-500 dark:text-zink-200\">Preview message sent</p>
                                    <p class=\"text-sm text-slate-500 dark:text-zink-200\">15 Aug, 2023</p>
                                </div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l ltr:before:left-[.22rem] rtl:before:border-r before:border-slate-200 rtl:before:right-[.22rem] before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-white after:border after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4 dark:after:bg-zink-700 dark:after:border-zink-500 dark:before:border-zink-500\">
                                    <h6 class=\"mb-4 text-15\">Scheduled</h6>
                                </div>
                                <div class=\"relative ltr:pl-6 rtl:pr-6 after:absolute after:size-2 after:bg-white after:border-slate-200 after:border after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 dark:after:bg-zink-700 dark:after:border-zink-500\">
                                    <h6 class=\"mb-4 text-15\">Interview Done</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

                <h5 class=\"mb-5 underline\">Timeline With Avatar</h5>

                <div class=\"grid grid-cols-1 gap-x-4 xl:grid-cols-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Timeline with Avatar</h6>
                            <div>
                                <div class=\"relative before:absolute ltr:before:border-l-2 rtl:before:border-r-2 ltr:before:left-3.5 rtl:before:right-3.5 before:top-1.5 before:-bottom-1.5 pb-4 dark:before:border-zink-500\">
                                    <div class=\"relative flex gap-2\">
                                        <img src=\"assets/images/users/avatar-1.png\" alt=\"\" class=\"size-8 p-0.5 bg-white border rounded-full shrink-0 border-slate-200 dark:border-zink-500 dark:bg-zink-700\">
                                        <div>
                                            <h6 class=\"mb-1\">Purchased by James Price</h6>
                                            <p class=\"mb-2 text-slate-500 dark:text-zink-200\">Product noise evolve smartwatch</p>
                                            <p class=\"text-sm text-slate-500 dark:text-zink-200\">05:57 AM Today</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"relative before:absolute ltr:before:border-l-2 rtl:before:border-r-2 ltr:before:left-3.5 rtl:before:right-3.5 before:top-1.5 before:-bottom-1.5 pb-4 dark:before:border-zink-500\">
                                    <div class=\"relative flex gap-2\">
                                        <img src=\"assets/images/users/avatar-2.png\" alt=\"\" class=\"size-8 p-0.5 bg-white border rounded-full shrink-0 border-slate-200 dark:border-zink-500 dark:bg-zink-700\">
                                        <div>
                                            <h6 class=\"mb-1\">Natasha Carey have liked the products</h6>
                                            <p class=\"mb-2 text-slate-500 dark:text-zink-200\">Allow users to like products in your WooCommerce store.</p>
                                            <p class=\"text-sm text-slate-500 dark:text-zink-200\">25 Dec, 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"relative before:absolute ltr:before:border-l-2 rtl:before:border-r-2 ltr:before:left-3.5 rtl:before:right-3.5 before:top-1.5 before:-bottom-1.5 pb-4 dark:before:border-zink-500\">
                                    <div class=\"relative flex gap-2\">
                                        <img src=\"assets/images/users/avatar-3.png\" alt=\"\" class=\"size-8 p-0.5 bg-white border rounded-full shrink-0 border-slate-200 dark:border-zink-500 dark:bg-zink-700\">
                                        <div>
                                            <h6 class=\"mb-1\">Today offers by Digitech Galaxy</h6>
                                            <p class=\"mb-2 text-slate-500 dark:text-zink-200\">Offer is valid on orders of \$230 Or above for selected products only.</p>
                                            <p class=\"text-sm text-slate-500 dark:text-zink-200\">12 Dec, 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"relative\">
                                    <div class=\"relative flex gap-2\">
                                        <img src=\"assets/images/users/avatar-3.png\" alt=\"\" class=\"size-8 p-0.5 bg-white border rounded-full shrink-0 border-slate-200 dark:border-zink-500 dark:bg-zink-700\">
                                        <div>
                                            <h6 class=\"mb-1\">New ticket received</h6>
                                            <p class=\"mb-2 text-slate-500 dark:text-zink-200\">User <a href=\"#!\" class=\"text-custom-500\">Erica245</a> submitted a ticket</p>
                                            <p class=\"text-sm text-slate-500 dark:text-zink-200\">26 Dec, 2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Timeline with Icon</h6>
                            <div>
                                <div class=\"relative before:absolute ltr:before:border-l-2 rtl:before:border-r-2 ltr:before:left-3.5 rtl:before:right-3.5 before:top-1.5 before:-bottom-1.5 pb-4 dark:before:border-zink-500\">
                                    <div class=\"relative flex gap-2\">
                                        <div class=\"size-8 p-0.5 bg-white text-custom-500 flex items-center justify-center border rounded-full shrink-0 border-slate-200 dark:border-zink-500 dark:bg-zink-700\">
                                            <i data-lucide=\"bar-chart-horizontal-big\" class=\"size-4\"></i>
                                        </div>
                                        <div>
                                            <h6 class=\"mb-1\">Purchased by James Price</h6>
                                            <p class=\"mb-2 text-slate-500 dark:text-zink-200\">Product noise evolve smartwatch</p>
                                            <p class=\"text-sm text-slate-500 dark:text-zink-200\">05:57 AM Today</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"relative before:absolute ltr:before:border-l-2 rtl:before:border-r-2 ltr:before:left-3.5 rtl:before:right-3.5 before:top-1.5 before:-bottom-1.5 pb-4 dark:before:border-zink-500\">
                                    <div class=\"relative flex gap-2\">
                                        <div class=\"size-8 p-0.5 bg-white text-red-500 flex items-center justify-center border rounded-full shrink-0 border-slate-200 dark:border-zink-500 dark:bg-zink-700\">
                                            <i data-lucide=\"store\" class=\"size-4\"></i>
                                        </div>
                                        <div>
                                            <h6 class=\"mb-1\">Natasha Carey have liked the products</h6>
                                            <p class=\"mb-2 text-slate-500 dark:text-zink-200\">Allow users to like products in your WooCommerce store.</p>
                                            <p class=\"text-sm text-slate-500 dark:text-zink-200\">25 Dec, 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"relative before:absolute ltr:before:border-l-2 rtl:before:border-r-2 ltr:before:left-3.5 rtl:before:right-3.5 before:top-1.5 before:-bottom-1.5 pb-4 dark:before:border-zink-500\">
                                    <div class=\"relative flex gap-2\">
                                        <div class=\"size-8 p-0.5 bg-white text-green-500 flex items-center justify-center border rounded-full shrink-0 border-slate-200 dark:border-zink-500 dark:bg-zink-700\">
                                            <i data-lucide=\"shopping-cart\" class=\"size-4\"></i>
                                        </div>
                                        <div>
                                            <h6 class=\"mb-1\">Today offers by Digitech Galaxy</h6>
                                            <p class=\"mb-2 text-slate-500 dark:text-zink-200\">Offer is valid on orders of \$230 Or above for selected products only.</p>
                                            <p class=\"text-sm text-slate-500 dark:text-zink-200\">12 Dec, 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"relative\">
                                    <div class=\"relative flex gap-2\">
                                        <div class=\"size-8 p-0.5 bg-white text-purple-500 flex items-center justify-center border rounded-full shrink-0 border-slate-200 dark:border-zink-500 dark:bg-zink-700\">
                                            <i data-lucide=\"percent\" class=\"size-4\"></i>
                                        </div>
                                        <div>
                                            <h6 class=\"mb-1\">New ticket received</h6>
                                            <p class=\"mb-2 text-slate-500 dark:text-zink-200\">User <a href=\"#!\" class=\"text-custom-500\">Erica245</a> submitted a ticket</p>
                                            <p class=\"text-sm text-slate-500 dark:text-zink-200\">26 Dec, 2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                </div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 212
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 213
        yield "
<!-- App js -->
<script src=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 217
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
        return "ui-timeline.html.twig";
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
        return array (  307 => 217,  303 => 215,  299 => 213,  292 => 212,  79 => 6,  76 => 5,  69 => 4,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ui-timeline.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\ui-timeline.html.twig");
    }
}
