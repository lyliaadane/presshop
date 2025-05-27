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

/* index/contact.html.twig */
class __TwigTemplate_f796d111c055e95e4fdb431df20e05e6 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/contact.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Contact";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
    <!-- Contact Start -->
    <br/>
    <div class=\"container-fluid contact py-5\">
        <div class=\"container py-5\">
            <div class=\"p-5 bg-light rounded\">
                <div class=\"row g-4\">
                    <div class=\"col-12\">
                        <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">
                            <h1 class=\"text-primary\">Nous Contacter</h1>
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"h-100 rounded\">
                            <iframe class=\"rounded w-100\" 
                                style=\"height: 400px;\" 
                                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2526.3399480830625!2d3.142849576787196!3d50.72477167152278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c328de39635a07%3A0x40af13e81646510!2s186%20Boulevard%20Gambetta%2C%2059200%20Tourcoing%2C%20France!5e0!3m2!1sfr!2sfr!4v1711200000000\" 
                                loading=\"lazy\" 
                                referrerpolicy=\"no-referrer-when-downgrade\">
                            </iframe>
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <form action=\"\" class=\"\">
                            <input type=\"text\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"Your Name\">
                            <input type=\"email\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"Enter Your Email\">
                            <textarea class=\"w-100 form-control border-0 mb-4\" rows=\"5\" cols=\"10\" placeholder=\"Your Message\"></textarea>
                            <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>
                        </form>
                    </div>
                    <div class=\"col-lg-5\">             
                        <div class=\"d-flex p-4 rounded mb-4 bg-white\">
                            <i class=\"fas fa-envelope fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Email</h4>
                                <p class=\"mb-2\">info@example.com</p>
                            </div>
                        </div>
                        <div class=\"d-flex p-4 rounded bg-white\">
                            <i class=\"fa fa-phone-alt fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Telephone</h4>
                                <p class=\"mb-2\">09 54 80 42 35</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
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
        return "index/contact.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact{% endblock %}

{% block body %}

    <!-- Contact Start -->
    <br/>
    <div class=\"container-fluid contact py-5\">
        <div class=\"container py-5\">
            <div class=\"p-5 bg-light rounded\">
                <div class=\"row g-4\">
                    <div class=\"col-12\">
                        <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">
                            <h1 class=\"text-primary\">Nous Contacter</h1>
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"h-100 rounded\">
                            <iframe class=\"rounded w-100\" 
                                style=\"height: 400px;\" 
                                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2526.3399480830625!2d3.142849576787196!3d50.72477167152278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c328de39635a07%3A0x40af13e81646510!2s186%20Boulevard%20Gambetta%2C%2059200%20Tourcoing%2C%20France!5e0!3m2!1sfr!2sfr!4v1711200000000\" 
                                loading=\"lazy\" 
                                referrerpolicy=\"no-referrer-when-downgrade\">
                            </iframe>
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <form action=\"\" class=\"\">
                            <input type=\"text\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"Your Name\">
                            <input type=\"email\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"Enter Your Email\">
                            <textarea class=\"w-100 form-control border-0 mb-4\" rows=\"5\" cols=\"10\" placeholder=\"Your Message\"></textarea>
                            <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>
                        </form>
                    </div>
                    <div class=\"col-lg-5\">             
                        <div class=\"d-flex p-4 rounded mb-4 bg-white\">
                            <i class=\"fas fa-envelope fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Email</h4>
                                <p class=\"mb-2\">info@example.com</p>
                            </div>
                        </div>
                        <div class=\"d-flex p-4 rounded bg-white\">
                            <i class=\"fa fa-phone-alt fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Telephone</h4>
                                <p class=\"mb-2\">09 54 80 42 35</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
{% endblock %}", "index/contact.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\index\\contact.html.twig");
    }
}
