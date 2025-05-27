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

/* recherche/index.html.twig */
class __TwigTemplate_180b4c4b8a4dabba1aded623ebecbd1f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recherche/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recherche/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recherche/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"container mt-5\">
    <h2>Rechercher un produit</h2>

    <form method=\"post\">
        ";
        // line 8
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        yield "
        <div class=\"input-group mb-3\">
            ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "query", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Rechercher une catégorie..."]]);
        yield "
            <button class=\"btn btn-primary\" type=\"submit\">Rechercher</button>
        </div>
        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_end');
        yield "
    </form>

    <div class=\"row g-4\">
        ";
        // line 17
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 17, $this->source); })()))) {
            // line 18
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 19
                yield "                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"border rounded text-center p-4\">
                        <img src=\"";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 21), "html", null, true);
                yield "\" class=\"img-fluid mb-3\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 21), "html", null, true);
                yield "\" style=\"height: 200px; object-fit: cover;\">
                        <h5 class=\"mb-2\">";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 22), "html", null, true);
                yield "</h5>
                        <p class=\"text-muted mb-1\">";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idCategorie", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
                yield "</p>
                        <h6 class=\"text-primary mb-2\">";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 24), "html", null, true);
                yield " €</h6>
                        <small class=\"text-muted\">Unité : ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "uniteVente", [], "any", false, false, false, 25), "html", null, true);
                yield "</small>
                        <div class=\"mt-3\">
                            <a href=\"#\" class=\"btn btn-primary rounded-pill px-4 py-2\">
                                Ajouter au panier
                            </a>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "        ";
        } else {
            // line 35
            yield "            <div class=\"col-12 text-center\">
                <p>Aucun produit ou catégorie trouvée.</p>
            </div>
        ";
        }
        // line 39
        yield "    </div>

</div>
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
        return "recherche/index.html.twig";
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
        return array (  153 => 39,  147 => 35,  144 => 34,  129 => 25,  125 => 24,  121 => 23,  117 => 22,  111 => 21,  107 => 19,  102 => 18,  100 => 17,  93 => 13,  87 => 10,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container mt-5\">
    <h2>Rechercher un produit</h2>

    <form method=\"post\">
        {{ form_start(form) }}
        <div class=\"input-group mb-3\">
            {{ form_widget(form.query, {'attr': {'class': 'form-control', 'placeholder': 'Rechercher une catégorie...'}}) }}
            <button class=\"btn btn-primary\" type=\"submit\">Rechercher</button>
        </div>
        {{ form_end(form) }}
    </form>

    <div class=\"row g-4\">
        {% if produits is not empty %}
            {% for produit in produits %}
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"border rounded text-center p-4\">
                        <img src=\"{{ produit.image }}\" class=\"img-fluid mb-3\" alt=\"{{ produit.nom }}\" style=\"height: 200px; object-fit: cover;\">
                        <h5 class=\"mb-2\">{{ produit.nom }}</h5>
                        <p class=\"text-muted mb-1\">{{ produit.idCategorie.nom }}</p>
                        <h6 class=\"text-primary mb-2\">{{ produit.prix }} €</h6>
                        <small class=\"text-muted\">Unité : {{ produit.uniteVente }}</small>
                        <div class=\"mt-3\">
                            <a href=\"#\" class=\"btn btn-primary rounded-pill px-4 py-2\">
                                Ajouter au panier
                            </a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% else %}
            <div class=\"col-12 text-center\">
                <p>Aucun produit ou catégorie trouvée.</p>
            </div>
        {% endif %}
    </div>

</div>
{% endblock %}
", "recherche/index.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\recherche\\index.html.twig");
    }
}
