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

/* panier/index.html.twig */
class __TwigTemplate_67ba2b901a3a4b835fb044f797ecc9c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
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

        yield "Votre panier";
        
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
        yield "<!-- Page Header Start -->
<div class=\"container-fluid page-header py-5\">
    <h1 class=\"text-center text-white display-6\">Votre Panier</h1>
    <ol class=\"breadcrumb justify-content-center mb-0\">
        <li class=\"breadcrumb-item\"><a href=\"#\">Accueil</a></li>
        <li class=\"breadcrumb-item\"><a href=\"#\">Boutique</a></li>
        <li class=\"breadcrumb-item active text-white\">Panier</li>
    </ol>
</div>
<!-- Page Header End -->

<!-- Cart Page Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <div class=\"table-responsive\">
            ";
        // line 21
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 21, $this->source); })())) > 0)) {
            // line 22
            yield "                <table class=\"table align-middle text-center\">
                    <thead class=\"table-light\">
                        <tr>
                            <th scope=\"col\">Image</th>
                            <th scope=\"col\">Nom</th>
                            <th scope=\"col\">Prix</th>
                            <th scope=\"col\">Quantité</th>
                            <th scope=\"col\">Total</th>
                            <th scope=\"col\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                yield "                            <tr>
                                <td>
                                    <img src=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 37), "image", [], "any", false, false, false, 37))), "html", null, true);
                yield "\" class=\"img-fluid rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 37), "nom", [], "any", false, false, false, 37), "html", null, true);
                yield "\">
                                </td>
                                <td>";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 39), "nom", [], "any", false, false, false, 39), "html", null, true);
                yield "</td>
                                <td>";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 40), "prix", [], "any", false, false, false, 40), "html", null, true);
                yield " €</td>
                                <td>
                                    <div class=\"d-flex justify-content-center align-items-center\">
                                        <a href=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-secondary rounded-circle me-2\">
                                            <i class=\"fas fa-minus\"></i>
                                        </a>
                                        <span class=\"px-2\">";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 46), "html", null, true);
                yield "</span>
                                        <a href=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-secondary rounded-circle ms-2\">
                                            <i class=\"fas fa-plus\"></i>
                                        </a>
                                    </div>
                                </td>
                                <td>";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 52), "prix", [], "any", false, false, false, 52) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 52)), 2, ".", ","), "html", null, true);
                yield " €</td>
                                <td>
                                    <a href=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\" class=\"btn btn-danger btn-sm rounded-circle\">
                                        <i class=\"fa fa-times\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "                    </tbody>
                </table>
            ";
        } else {
            // line 63
            yield "                <p class=\"text-center\">Votre panier est vide !</p>
            ";
        }
        // line 65
        yield "        </div>

        ";
        // line 67
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 67, $this->source); })())) > 0)) {
            // line 68
            yield "        <div class=\"row g-4 justify-content-end mt-5\">
            <div class=\"col-8\"></div>
            <div class=\"col-sm-8 col-md-7 col-lg-6 col-xl-4\">
                <div class=\"bg-light rounded\">
                    <div class=\"py-4 mb-4 border-top border-bottom d-flex justify-content-between\">
                        <h5 class=\"mb-0 ps-4 me-4\">Total général</h5>
                        <p class=\"mb-0 pe-4\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 74, $this->source); })()), 2, ".", ","), "html", null, true);
            yield " €</p>
                    </div>
                    <a href=\"";
            // line 76
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes_new");
            yield "\" class=\"btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4\">
                        Valider le panier
                    </a>

                </div>
            </div>
        </div>
        ";
        }
        // line 84
        yield "    </div>
</div>
<!-- Cart Page End -->
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
        return "panier/index.html.twig";
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
        return array (  232 => 84,  221 => 76,  216 => 74,  208 => 68,  206 => 67,  202 => 65,  198 => 63,  193 => 60,  181 => 54,  176 => 52,  168 => 47,  164 => 46,  158 => 43,  152 => 40,  148 => 39,  141 => 37,  137 => 35,  133 => 34,  119 => 22,  117 => 21,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre panier{% endblock %}

{% block body %}
<!-- Page Header Start -->
<div class=\"container-fluid page-header py-5\">
    <h1 class=\"text-center text-white display-6\">Votre Panier</h1>
    <ol class=\"breadcrumb justify-content-center mb-0\">
        <li class=\"breadcrumb-item\"><a href=\"#\">Accueil</a></li>
        <li class=\"breadcrumb-item\"><a href=\"#\">Boutique</a></li>
        <li class=\"breadcrumb-item active text-white\">Panier</li>
    </ol>
</div>
<!-- Page Header End -->

<!-- Cart Page Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <div class=\"table-responsive\">
            {% if items | length > 0 %}
                <table class=\"table align-middle text-center\">
                    <thead class=\"table-light\">
                        <tr>
                            <th scope=\"col\">Image</th>
                            <th scope=\"col\">Nom</th>
                            <th scope=\"col\">Prix</th>
                            <th scope=\"col\">Quantité</th>
                            <th scope=\"col\">Total</th>
                            <th scope=\"col\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in items %}
                            <tr>
                                <td>
                                    <img src=\"{{ asset('uploads/images/' ~ item.produit.image) }}\" class=\"img-fluid rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"{{ item.produit.nom }}\">
                                </td>
                                <td>{{ item.produit.nom }}</td>
                                <td>{{ item.produit.prix }} €</td>
                                <td>
                                    <div class=\"d-flex justify-content-center align-items-center\">
                                        <a href=\"{{ path('panier_remove', {'id' : item.produit.id}) }}\" class=\"btn btn-sm btn-outline-secondary rounded-circle me-2\">
                                            <i class=\"fas fa-minus\"></i>
                                        </a>
                                        <span class=\"px-2\">{{ item.quantity }}</span>
                                        <a href=\"{{ path('panier_add', {'id' : item.produit.id}) }}\" class=\"btn btn-sm btn-outline-secondary rounded-circle ms-2\">
                                            <i class=\"fas fa-plus\"></i>
                                        </a>
                                    </div>
                                </td>
                                <td>{{ (item.produit.prix * item.quantity)|number_format(2, '.', ',') }} €</td>
                                <td>
                                    <a href=\"{{ path('panier_delete', {'id' : item.produit.id}) }}\" class=\"btn btn-danger btn-sm rounded-circle\">
                                        <i class=\"fa fa-times\"></i>
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% else %}
                <p class=\"text-center\">Votre panier est vide !</p>
            {% endif %}
        </div>

        {% if items | length > 0 %}
        <div class=\"row g-4 justify-content-end mt-5\">
            <div class=\"col-8\"></div>
            <div class=\"col-sm-8 col-md-7 col-lg-6 col-xl-4\">
                <div class=\"bg-light rounded\">
                    <div class=\"py-4 mb-4 border-top border-bottom d-flex justify-content-between\">
                        <h5 class=\"mb-0 ps-4 me-4\">Total général</h5>
                        <p class=\"mb-0 pe-4\">{{ total|number_format(2, '.', ',') }} €</p>
                    </div>
                    <a href=\"{{ path('app_commandes_new') }}\" class=\"btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4\">
                        Valider le panier
                    </a>

                </div>
            </div>
        </div>
        {% endif %}
    </div>
</div>
<!-- Cart Page End -->
{% endblock %}
", "panier/index.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\panier\\index.html.twig");
    }
}
