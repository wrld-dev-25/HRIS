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

/* plugins-lightbox.html.twig */
class __TwigTemplate_7513b49aba1acb10347ca488fd75bf61 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plugins-lightbox.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plugins-lightbox.html.twig"));

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

        yield "Lightbox";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    <link rel=\"stylesheet\" href=\"assets/libs/glightbox/css/glightbox.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "
            ";
        // line 8
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Plugins", "title" => "Lightbox"]);
        yield "

                <div>
                    <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-1\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Simple Image Gallery</h6>
                                
                                <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4\">
                                    <div>
                                        <a href=\"assets/images/small/img-2.jpg\" class=\"glightbox\">
                                            <img src=\"assets/images/small/img-2.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"assets/images/small/img-3.jpg\" class=\"glightbox\">
                                            <img src=\"assets/images/small/img-3.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"assets/images/small/img-4.jpg\" class=\"glightbox\">
                                            <img src=\"assets/images/small/img-4.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"assets/images/small/img-5.jpg\" class=\"glightbox\">
                                            <img src=\"assets/images/small/img-5.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->

                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Images with Description</h6>
                        
                                <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4\">
                                    <div>
                                        <a href=\"assets/images/small/img-10.jpg\" class=\"description\" data-glightbox=\"title:Description Bottom; description: You can set the position of the description <a href=&quot;http://google.com&quot;>with a link to Google</a>\">
                                            <img src=\"assets/images/small/img-10.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"assets/images/small/img-9.jpg\" class=\"description\" data-glightbox=\"title:Description Bottom; description: You can set the position of the description <a href=&quot;http://google.com&quot;>with a link to Google</a>\">
                                            <img src=\"assets/images/small/img-9.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"assets/images/small/img-8.jpg\" class=\"description\" data-glightbox=\"title:Description Bottom; description: You can set the position of the description <a href=&quot;http://google.com&quot;>with a link to Google</a>\">
                                            <img src=\"assets/images/small/img-8.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"assets/images/small/img-7.jpg\" class=\"description\" data-glightbox=\"title:Description Bottom; description: You can set the position of the description <a href=&quot;http://google.com&quot;>with a link to Google</a>\">
                                            <img src=\"assets/images/small/img-7.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->

                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Videos Gallery</h6>
                        
                                <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4\">
                                    <div>
                                        <a href=\"https://www.youtube.com/embed/qYgogv4R8zg?si=_YxUDmc2fDgHyPae\" class=\"video\">
                                            <img src=\"https://i.ytimg.com/vi/qYgogv4R8zg/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBcI9Cw0yBtGv_ashbS-ogqh1OGpQ\" alt=\"image\" class=\"object-cover w-full rounded-md h-30\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"https://www.youtube.com/embed/waoOK5s9ypc?si=yzK5f339AF_hoXdn\" class=\"video\">
                                            <img src=\"https://i.ytimg.com/vi/waoOK5s9ypc/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCkSGeAQ17_LFepTKdEByyVTZkeVw\" alt=\"image\" class=\"object-cover w-full rounded-md h-30\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"https://www.youtube.com/embed/waoOK5s9ypc?si=yzK5f339AF_hoXdn\" class=\"video\">
                                            <img src=\"https://i.ytimg.com/vi/waoOK5s9ypc/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCkSGeAQ17_LFepTKdEByyVTZkeVw\" alt=\"image\" class=\"object-cover w-full rounded-md h-30\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"https://www.youtube.com/embed/TrftauE2Vyk?si=HRCFmq5956C01yB3\" class=\"video\">
                                            <img src=\"https://i.ytimg.com/vi/TrftauE2Vyk/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCm6UjEfDC3R5dJik1gEW__HEnaAA\" alt=\"image\" class=\"object-cover w-full rounded-md h-30\">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                        
                        
                    </div><!--end grid-->
                </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 105
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

        // line 106
        yield "
<script src=\"assets/libs/glightbox/js/glightbox.min.js\"></script>

<script src=\"assets/js/pages/plugins-lightbox.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 114
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
        return "plugins-lightbox.html.twig";
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
        return array (  262 => 114,  258 => 112,  250 => 106,  237 => 105,  130 => 8,  127 => 7,  114 => 6,  102 => 4,  89 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Lightbox{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"assets/libs/glightbox/css/glightbox.min.css\">
{% endblock %}
{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Plugins', title: 'Lightbox' }) }}

                <div>
                    <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-1\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Simple Image Gallery</h6>
                                
                                <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4\">
                                    <div>
                                        <a href=\"assets/images/small/img-2.jpg\" class=\"glightbox\">
                                            <img src=\"assets/images/small/img-2.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"assets/images/small/img-3.jpg\" class=\"glightbox\">
                                            <img src=\"assets/images/small/img-3.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"assets/images/small/img-4.jpg\" class=\"glightbox\">
                                            <img src=\"assets/images/small/img-4.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"assets/images/small/img-5.jpg\" class=\"glightbox\">
                                            <img src=\"assets/images/small/img-5.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->

                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Images with Description</h6>
                        
                                <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4\">
                                    <div>
                                        <a href=\"assets/images/small/img-10.jpg\" class=\"description\" data-glightbox=\"title:Description Bottom; description: You can set the position of the description <a href=&quot;http://google.com&quot;>with a link to Google</a>\">
                                            <img src=\"assets/images/small/img-10.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"assets/images/small/img-9.jpg\" class=\"description\" data-glightbox=\"title:Description Bottom; description: You can set the position of the description <a href=&quot;http://google.com&quot;>with a link to Google</a>\">
                                            <img src=\"assets/images/small/img-9.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"assets/images/small/img-8.jpg\" class=\"description\" data-glightbox=\"title:Description Bottom; description: You can set the position of the description <a href=&quot;http://google.com&quot;>with a link to Google</a>\">
                                            <img src=\"assets/images/small/img-8.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"assets/images/small/img-7.jpg\" class=\"description\" data-glightbox=\"title:Description Bottom; description: You can set the position of the description <a href=&quot;http://google.com&quot;>with a link to Google</a>\">
                                            <img src=\"assets/images/small/img-7.jpg\" alt=\"image\" class=\"rounded-md\">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->

                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Videos Gallery</h6>
                        
                                <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4\">
                                    <div>
                                        <a href=\"https://www.youtube.com/embed/qYgogv4R8zg?si=_YxUDmc2fDgHyPae\" class=\"video\">
                                            <img src=\"https://i.ytimg.com/vi/qYgogv4R8zg/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBcI9Cw0yBtGv_ashbS-ogqh1OGpQ\" alt=\"image\" class=\"object-cover w-full rounded-md h-30\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"https://www.youtube.com/embed/waoOK5s9ypc?si=yzK5f339AF_hoXdn\" class=\"video\">
                                            <img src=\"https://i.ytimg.com/vi/waoOK5s9ypc/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCkSGeAQ17_LFepTKdEByyVTZkeVw\" alt=\"image\" class=\"object-cover w-full rounded-md h-30\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"https://www.youtube.com/embed/waoOK5s9ypc?si=yzK5f339AF_hoXdn\" class=\"video\">
                                            <img src=\"https://i.ytimg.com/vi/waoOK5s9ypc/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCkSGeAQ17_LFepTKdEByyVTZkeVw\" alt=\"image\" class=\"object-cover w-full rounded-md h-30\">
                                        </a>
                                    </div>
                                    <div>
                                        <a href=\"https://www.youtube.com/embed/TrftauE2Vyk?si=HRCFmq5956C01yB3\" class=\"video\">
                                            <img src=\"https://i.ytimg.com/vi/TrftauE2Vyk/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCm6UjEfDC3R5dJik1gEW__HEnaAA\" alt=\"image\" class=\"object-cover w-full rounded-md h-30\">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                        
                        
                    </div><!--end grid-->
                </div>

{% endblock %}
    
{% block javascripts %}

<script src=\"assets/libs/glightbox/js/glightbox.min.js\"></script>

<script src=\"assets/js/pages/plugins-lightbox.init.js\"></script>

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

{% endblock %}", "plugins-lightbox.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\plugins-lightbox.html.twig");
    }
}
