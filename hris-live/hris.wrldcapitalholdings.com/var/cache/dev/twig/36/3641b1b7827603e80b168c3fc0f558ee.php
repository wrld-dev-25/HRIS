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

/* ui-gallery.html.twig */
class __TwigTemplate_a459c498ef31d648cdf02be16c1e3c48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-gallery.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-gallery.html.twig"));

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

        yield "Gallery";
        
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
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "UI Elements", "title" => "Gallery"]);
        yield "

                <div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Gallery Content</h6>
                            <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-5\">
                                <div class=\"relative rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-1.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-2.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-3.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-5.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Gallery with Overlay Content</h6>
                            <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-5\">
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-10.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->
                    
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">With Animation</h6>
                            <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-5\">
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-1.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-2.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-3.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-5.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Gallery with Card</h6>
                            <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-5\">
                                <div class=\"relative mb-0 overflow-hidden transition-all duration-300 ease-linear rounded-md group/gallery card hover:-translate-y-2\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"card-body\">
                                        <h5 class=\"mb-0 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative mb-0 overflow-hidden transition-all duration-300 ease-linear rounded-md group/gallery card hover:-translate-y-2\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"card-body\">
                                        <h5 class=\"mb-0 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative mb-0 overflow-hidden transition-all duration-300 ease-linear rounded-md group/gallery card hover:-translate-y-2\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"card-body\">
                                        <h5 class=\"mb-0 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative mb-0 overflow-hidden transition-all duration-300 ease-linear rounded-md group/gallery card hover:-translate-y-2\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"card-body\">
                                        <h5 class=\"mb-0 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative mb-0 overflow-hidden transition-all duration-300 ease-linear rounded-md group/gallery card hover:-translate-y-2\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-10.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"card-body\">
                                        <h5 class=\"mb-0 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                    </div>
                                </div>
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Grid Gallery</h6>
                            <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-5\">
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-10.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-1.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-2.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-3.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-5.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->
                </div>
            

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 277
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

        // line 278
        yield "
<!-- App js -->
<script src=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 282
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
        return "ui-gallery.html.twig";
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
        return array (  406 => 282,  402 => 280,  398 => 278,  385 => 277,  104 => 6,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Gallery{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'UI Elements', title: 'Gallery' }) }}

                <div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Gallery Content</h6>
                            <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-5\">
                                <div class=\"relative rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-1.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-2.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-3.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-5.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Gallery with Overlay Content</h6>
                            <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-5\">
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-10.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->
                    
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">With Animation</h6>
                            <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-5\">
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-1.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-2.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-3.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-5.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"pt-3\">
                                        <h5 class=\"mb-1 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                        <p class=\"text-slate-500 dark:zink-200\">Artyom is depicted as a silent protagonist and a blank slate for the player.</p>
                                    </div>
                                </div>
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Gallery with Card</h6>
                            <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-5\">
                                <div class=\"relative mb-0 overflow-hidden transition-all duration-300 ease-linear rounded-md group/gallery card hover:-translate-y-2\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"card-body\">
                                        <h5 class=\"mb-0 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative mb-0 overflow-hidden transition-all duration-300 ease-linear rounded-md group/gallery card hover:-translate-y-2\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"card-body\">
                                        <h5 class=\"mb-0 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative mb-0 overflow-hidden transition-all duration-300 ease-linear rounded-md group/gallery card hover:-translate-y-2\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"card-body\">
                                        <h5 class=\"mb-0 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative mb-0 overflow-hidden transition-all duration-300 ease-linear rounded-md group/gallery card hover:-translate-y-2\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"card-body\">
                                        <h5 class=\"mb-0 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative mb-0 overflow-hidden transition-all duration-300 ease-linear rounded-md group/gallery card hover:-translate-y-2\">
                                    <div class=\"overflow-hidden\">
                                        <img src=\"assets/images/small/img-10.jpg\" alt=\"\" class=\"transition-all duration-300 ease-linear group-hover/gallery:scale-110\">
                                    </div>
                                    <div class=\"card-body\">
                                        <h5 class=\"mb-0 text-16\"><a href=\"#!\" class=\"transition-all duration-300 ease-linear hover:text-custom-500\">Cinematic Metro</a></h5>
                                    </div>
                                </div>
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Grid Gallery</h6>
                            <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-5\">
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-10.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-1.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-2.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-3.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                                <div class=\"relative overflow-hidden rounded-md group/gallery\">
                                    <img src=\"assets/images/small/img-5.jpg\" alt=\"\" class=\"rounded-md\">
                                    <div class=\"absolute inset-0 transition-all duration-300 ease-linear opacity-0 group-hover/gallery:opacity-50 bg-gradient-to-t from-gray-900 to-transparent\"></div>
                                    <div class=\"absolute bottom-0 transition-all duration-300 ease-linear opacity-0 left-3 right-3 group-hover/gallery:opacity-100 group-hover/gallery:bottom-3\">
                                        <h5 class=\"font-normal text-white\"><a href=\"#!\">Image title</a></h5>
                                    </div>
                                </div>
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->
                </div>
            

{% endblock %}
    
{% block javascripts %}

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

{% endblock %}", "ui-gallery.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\ui-gallery.html.twig");
    }
}
