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

/* produit/index.html.twig */
class __TwigTemplate_0434ac820e0a9ab17e909756c53e6fd7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/index.html.twig", 1);
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

        yield "Nos Produits";
        
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
        yield "<!-- Fruits Shop Start -->
<div class=\"container-fluid fruite py-5\">
    <div class=\"container py-5\">
        <br/>
        <form method=\"post\" class=\"mb-4\">
            ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        yield "
            <div class=\"input-group\">
                ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "query", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Rechercher un produit ou une catégorie..."]]);
        yield "
                <button class=\"btn btn-primary\" type=\"submit\">Rechercher</button>
            </div>
            ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_end');
        yield "
        </form>
        <div class=\"tab-class text-center\">
            <div class=\"row g-4\">
                <div class=\"col-lg-4 text-start\">
                    <h1>Nos Produits</h1>
                </div>
                <div class=\"col-lg-8 text-end\">
                    <ul class=\"nav nav-pills d-inline-flex text-center mb-5\">
                        <li class=\"nav-item\">
                            <a class=\"d-flex m-2 py-2 bg-light rounded-pill active\" data-bs-toggle=\"pill\" href=\"#tab-all\">
                                <span class=\"text-dark\" style=\"width: 130px;\">Tous</span>
                            </a>
                        </li>
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 31
            yield "                            <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 33), "html", null, true);
            yield "</span>
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                    </ul>
                </div>
            </div>

            <div class=\"tab-content\">
                <!-- Tous les produits -->
                <div id=\"tab-all\" class=\"tab-pane fade show p-0 active\">
                    <div class=\"row g-4\">
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 46
            yield "                            <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                <div class=\"rounded position-relative fruite-item\">
                                    <div class=\"fruite-img\">
                                        <img src=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 49))), "html", null, true);
            yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 49), "html", null, true);
            yield "\">
                                    </div>
                                    <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">
                                        ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idCategorie", [], "any", false, false, false, 52), "nom", [], "any", false, false, false, 52), "html", null, true);
            yield "
                                    </div>
                                    <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                        <h4>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 55), "html", null, true);
            yield "</h4>
                                        <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                            <p class=\"text-dark fs-5 fw-bold mb-0\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 57), "html", null, true);
            yield " € / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "uniteVente", [], "any", false, false, false, 57), "html", null, true);
            yield "</p>
                                            <a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Ajouter au panier
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "                    </div>
                    <div class=\"pagination justify-content-center mt-4\">
                        ";
        // line 68
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 68, $this->source); })()));
        yield "
                    </div>
                </div>

                <!-- Produits par catégorie -->
                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 74
            yield "                    <div id=\"tab-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 74), "html", null, true);
            yield "\" class=\"tab-pane fade show p-0\">
                        <div class=\"row g-4\">
                            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produitsParCategorie"]) || array_key_exists("produitsParCategorie", $context) ? $context["produitsParCategorie"] : (function () { throw new RuntimeError('Variable "produitsParCategorie" does not exist.', 76, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 76), [], "array", false, false, false, 76));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 77
                yield "                                <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                    <div class=\"rounded position-relative fruite-item\">
                                        <div class=\"fruite-img\">
                                            <img src=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 80))), "html", null, true);
                yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 80), "html", null, true);
                yield "\">
                                        </div>
                                        <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">
                                            ";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 83), "html", null, true);
                yield "
                                        </div>
                                        <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                            <h4>";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 86), "html", null, true);
                yield "</h4>
                                            <p>Stock: ";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 87), "html", null, true);
                yield " | ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "uniteVente", [], "any", false, false, false, 87), "html", null, true);
                yield "</p>
                                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                <p class=\"text-dark fs-5 fw-bold mb-0\">";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 89), "html", null, true);
                yield " €</p>
                                                <a href=\"";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                yield "\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                    <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Ajouter au panier
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 98
                yield "                                <p class=\"text-muted\">Aucun produit dans cette catégorie.</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "                        </div>
                        <div class=\"pagination justify-content-center mt-4\">
                        ";
            // line 102
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["produitsParCategorie"]) || array_key_exists("produitsParCategorie", $context) ? $context["produitsParCategorie"] : (function () { throw new RuntimeError('Variable "produitsParCategorie" does not exist.', 102, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 102), [], "array", false, false, false, 102))) {
                // line 103
                yield "                            ";
                yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["produitsParCategorie"]) || array_key_exists("produitsParCategorie", $context) ? $context["produitsParCategorie"] : (function () { throw new RuntimeError('Variable "produitsParCategorie" does not exist.', 103, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 103), [], "array", false, false, false, 103));
                yield "
                        ";
            }
            // line 105
            yield "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "            </div>
        </div>
    </div>
</div>
<!-- Fruits Shop End -->

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
        return "produit/index.html.twig";
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
        return array (  316 => 109,  307 => 105,  301 => 103,  299 => 102,  295 => 100,  288 => 98,  275 => 90,  271 => 89,  264 => 87,  260 => 86,  254 => 83,  246 => 80,  241 => 77,  236 => 76,  230 => 74,  226 => 73,  218 => 68,  214 => 66,  200 => 58,  194 => 57,  189 => 55,  183 => 52,  175 => 49,  170 => 46,  166 => 45,  156 => 37,  146 => 33,  142 => 32,  139 => 31,  135 => 30,  118 => 16,  112 => 13,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos Produits{% endblock %}

{% block body %}
<!-- Fruits Shop Start -->
<div class=\"container-fluid fruite py-5\">
    <div class=\"container py-5\">
        <br/>
        <form method=\"post\" class=\"mb-4\">
            {{ form_start(form) }}
            <div class=\"input-group\">
                {{ form_widget(form.query, {'attr': {'class': 'form-control', 'placeholder': 'Rechercher un produit ou une catégorie...'}}) }}
                <button class=\"btn btn-primary\" type=\"submit\">Rechercher</button>
            </div>
            {{ form_end(form) }}
        </form>
        <div class=\"tab-class text-center\">
            <div class=\"row g-4\">
                <div class=\"col-lg-4 text-start\">
                    <h1>Nos Produits</h1>
                </div>
                <div class=\"col-lg-8 text-end\">
                    <ul class=\"nav nav-pills d-inline-flex text-center mb-5\">
                        <li class=\"nav-item\">
                            <a class=\"d-flex m-2 py-2 bg-light rounded-pill active\" data-bs-toggle=\"pill\" href=\"#tab-all\">
                                <span class=\"text-dark\" style=\"width: 130px;\">Tous</span>
                            </a>
                        </li>
                        {% for categorie in categories %}
                            <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-{{ categorie.id }}\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">{{ categorie.nom }}</span>
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>

            <div class=\"tab-content\">
                <!-- Tous les produits -->
                <div id=\"tab-all\" class=\"tab-pane fade show p-0 active\">
                    <div class=\"row g-4\">
                        {% for produit in produits %}
                            <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                <div class=\"rounded position-relative fruite-item\">
                                    <div class=\"fruite-img\">
                                        <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" class=\"img-fluid w-100 rounded-top\" alt=\"{{ produit.nom }}\">
                                    </div>
                                    <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">
                                        {{ produit.idCategorie.nom }}
                                    </div>
                                    <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                        <h4>{{ produit.nom }}</h4>
                                        <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                            <p class=\"text-dark fs-5 fw-bold mb-0\">{{ produit.prix }} € / {{ produit.uniteVente }}</p>
                                            <a href=\"{{ path('panier_add', {'id': produit.id}) }}\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Ajouter au panier
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    <div class=\"pagination justify-content-center mt-4\">
                        {{ knp_pagination_render(produits) }}
                    </div>
                </div>

                <!-- Produits par catégorie -->
                {% for categorie in categories %}
                    <div id=\"tab-{{ categorie.id }}\" class=\"tab-pane fade show p-0\">
                        <div class=\"row g-4\">
                            {% for produit in produitsParCategorie[categorie.id] %}
                                <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                    <div class=\"rounded position-relative fruite-item\">
                                        <div class=\"fruite-img\">
                                            <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" class=\"img-fluid w-100 rounded-top\" alt=\"{{ produit.nom }}\">
                                        </div>
                                        <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">
                                            {{ categorie.nom }}
                                        </div>
                                        <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                            <h4>{{ produit.nom }}</h4>
                                            <p>Stock: {{ produit.quantite }} | {{ produit.uniteVente }}</p>
                                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                <p class=\"text-dark fs-5 fw-bold mb-0\">{{ produit.prix }} €</p>
                                                <a href=\"{{ path('panier_add', {'id': produit.id}) }}\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                    <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Ajouter au panier
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% else %}
                                <p class=\"text-muted\">Aucun produit dans cette catégorie.</p>
                            {% endfor %}
                        </div>
                        <div class=\"pagination justify-content-center mt-4\">
                        {% if produitsParCategorie[categorie.id] is not null %}
                            {{ knp_pagination_render(produitsParCategorie[categorie.id]) }}
                        {% endif %}

                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>
<!-- Fruits Shop End -->

{% endblock %}
", "produit/index.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\produit\\index.html.twig");
    }
}
