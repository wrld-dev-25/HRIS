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
use Twig\TemplateWrapper;

/* forms-file-upload.html.twig */
class __TwigTemplate_b640b4d5f68647200cf449743845ecba extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

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

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-file-upload.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-file-upload.html.twig"));

        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "File Upload";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        yield "
            ";
        // line 6
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Forms", "title" => "File Upload"]);
        yield "

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Dropzone</h6>
                        <div class=\"flex items-center justify-center border rounded-md cursor-pointer bg-slate-100 dropzone border-slate-200 dark:bg-zink-600 dark:border-zink-500\">
                            <div class=\"fallback\">
                                <input name=\"file\" type=\"file\" multiple=\"multiple\">
                            </div>
                            <div class=\"w-full py-5 text-lg text-center dz-message needsclick\">
                                <div class=\"mb-3\">
                                    <i data-lucide=\"upload-cloud\" class=\"block size-12 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500\"></i>
                                </div>

                                <h5 class=\"mb-0 font-normal text-slate-500 text-15\">Drag and drop your files or <a href=\"#!\">browse</a> your files</h5>
                            </div>
                        </div>

                        <ul class=\"mb-0\" id=\"dropzone-preview\">
                            <li class=\"mt-2\" id=\"dropzone-preview-list\">
                                <!-- This is used as the file preview template -->
                                <div class=\"border rounded border-slate-200 dark:border-zink-500\">
                                    <div class=\"flex p-2\">
                                        <div class=\"shrink-0 me-3\">
                                            <div class=\"p-2 rounded-md size-14 bg-slate-100 dark:bg-zink-600\">
                                                <img data-dz-thumbnail class=\"block w-full h-full rounded-md\" src=\"assets/images/new-document.png\" alt=\"Dropzone-Image\">
                                            </div>
                                        </div>
                                        <div class=\"grow\">
                                            <div class=\"pt-1\">
                                                <h5 class=\"mb-1 text-15\" data-dz-name>&nbsp;</h5>
                                                <p class=\"mb-0 text-slate-500 dark:text-zink-200\" data-dz-size></p>
                                                <strong class=\"error text-danger\" data-dz-errormessage></strong>
                                            </div>
                                        </div>
                                        <div class=\"shrink-0 ms-3\">
                                            <button data-dz-remove class=\"px-2 py-1.5 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Bordered Dashed Dropzone</h6>
                        <div class=\"flex items-center justify-center bg-white border border-dashed rounded-md cursor-pointer dropzone border-slate-300 dropzone2 dark:bg-zink-700 dark:border-zink-500\">
                            <div class=\"fallback\">
                                <input name=\"file\" type=\"file\" multiple=\"multiple\">
                            </div>
                            <div class=\"w-full py-5 text-lg text-center dz-message needsclick\">
                                <div class=\"mb-3\">
                                    <i data-lucide=\"upload-cloud\" class=\"block size-12 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500\"></i>
                                </div>

                                <h5 class=\"mb-0 font-normal text-slate-500 text-15\">Drag and drop your files or <a href=\"#!\">browse</a> your files</h5>
                            </div>
                        </div>

                        <ul class=\"flex flex-wrap mb-0 gap-x-5\" id=\"dropzone-preview2\">
                            <li class=\"mt-5\" id=\"dropzone-preview-list2\">
                                <!-- This is used as the file preview template -->
                                <div class=\"border rounded border-slate-200 dark:border-zink-500\">
                                    <div class=\"p-2 text-center\">
                                        <div>
                                            <div class=\"p-2 mx-auto rounded-md size-14 bg-slate-100 dark:bg-zink-600\">
                                                <img data-dz-thumbnail class=\"block w-full h-full rounded-md\" src=\"assets/images/new-document.png\" alt=\"Dropzone-Image\">
                                            </div>
                                        </div>
                                        <div class=\"pt-3\">
                                            <h5 class=\"mb-1 text-15\" data-dz-name>&nbsp;</h5>
                                            <p class=\"mb-0 text-slate-500 dark:text-zink-200\" data-dz-size></p>
                                            <strong class=\"error text-danger\" data-dz-errormessage></strong>
                                        </div>
                                        <div class=\"mt-2\">
                                            <button data-dz-remove class=\"px-2 py-1.5 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!--end card-->
        

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        yield "<script src=\"assets/libs/dropzone/dropzone-min.js\"></script>
<script src=\"assets/js/pages/form-file-upload.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 102
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms-file-upload.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  226 => 102,  222 => 100,  216 => 96,  203 => 95,  104 => 6,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}File Upload{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Forms', title: 'File Upload' }) }}

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Dropzone</h6>
                        <div class=\"flex items-center justify-center border rounded-md cursor-pointer bg-slate-100 dropzone border-slate-200 dark:bg-zink-600 dark:border-zink-500\">
                            <div class=\"fallback\">
                                <input name=\"file\" type=\"file\" multiple=\"multiple\">
                            </div>
                            <div class=\"w-full py-5 text-lg text-center dz-message needsclick\">
                                <div class=\"mb-3\">
                                    <i data-lucide=\"upload-cloud\" class=\"block size-12 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500\"></i>
                                </div>

                                <h5 class=\"mb-0 font-normal text-slate-500 text-15\">Drag and drop your files or <a href=\"#!\">browse</a> your files</h5>
                            </div>
                        </div>

                        <ul class=\"mb-0\" id=\"dropzone-preview\">
                            <li class=\"mt-2\" id=\"dropzone-preview-list\">
                                <!-- This is used as the file preview template -->
                                <div class=\"border rounded border-slate-200 dark:border-zink-500\">
                                    <div class=\"flex p-2\">
                                        <div class=\"shrink-0 me-3\">
                                            <div class=\"p-2 rounded-md size-14 bg-slate-100 dark:bg-zink-600\">
                                                <img data-dz-thumbnail class=\"block w-full h-full rounded-md\" src=\"assets/images/new-document.png\" alt=\"Dropzone-Image\">
                                            </div>
                                        </div>
                                        <div class=\"grow\">
                                            <div class=\"pt-1\">
                                                <h5 class=\"mb-1 text-15\" data-dz-name>&nbsp;</h5>
                                                <p class=\"mb-0 text-slate-500 dark:text-zink-200\" data-dz-size></p>
                                                <strong class=\"error text-danger\" data-dz-errormessage></strong>
                                            </div>
                                        </div>
                                        <div class=\"shrink-0 ms-3\">
                                            <button data-dz-remove class=\"px-2 py-1.5 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Bordered Dashed Dropzone</h6>
                        <div class=\"flex items-center justify-center bg-white border border-dashed rounded-md cursor-pointer dropzone border-slate-300 dropzone2 dark:bg-zink-700 dark:border-zink-500\">
                            <div class=\"fallback\">
                                <input name=\"file\" type=\"file\" multiple=\"multiple\">
                            </div>
                            <div class=\"w-full py-5 text-lg text-center dz-message needsclick\">
                                <div class=\"mb-3\">
                                    <i data-lucide=\"upload-cloud\" class=\"block size-12 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500\"></i>
                                </div>

                                <h5 class=\"mb-0 font-normal text-slate-500 text-15\">Drag and drop your files or <a href=\"#!\">browse</a> your files</h5>
                            </div>
                        </div>

                        <ul class=\"flex flex-wrap mb-0 gap-x-5\" id=\"dropzone-preview2\">
                            <li class=\"mt-5\" id=\"dropzone-preview-list2\">
                                <!-- This is used as the file preview template -->
                                <div class=\"border rounded border-slate-200 dark:border-zink-500\">
                                    <div class=\"p-2 text-center\">
                                        <div>
                                            <div class=\"p-2 mx-auto rounded-md size-14 bg-slate-100 dark:bg-zink-600\">
                                                <img data-dz-thumbnail class=\"block w-full h-full rounded-md\" src=\"assets/images/new-document.png\" alt=\"Dropzone-Image\">
                                            </div>
                                        </div>
                                        <div class=\"pt-3\">
                                            <h5 class=\"mb-1 text-15\" data-dz-name>&nbsp;</h5>
                                            <p class=\"mb-0 text-slate-500 dark:text-zink-200\" data-dz-size></p>
                                            <strong class=\"error text-danger\" data-dz-errormessage></strong>
                                        </div>
                                        <div class=\"mt-2\">
                                            <button data-dz-remove class=\"px-2 py-1.5 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!--end card-->
        

{% endblock %}
    
{% block javascripts %}
<script src=\"assets/libs/dropzone/dropzone-min.js\"></script>
<script src=\"assets/js/pages/form-file-upload.init.js\"></script>

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

{% endblock %}", "forms-file-upload.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\forms-file-upload.html.twig");
    }
}
