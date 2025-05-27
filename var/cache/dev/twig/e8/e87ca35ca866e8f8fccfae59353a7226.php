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

/* commandes/show.html.twig */
class __TwigTemplate_9e17e6dfd18be1685b5fde1d896c41f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commandes/show.html.twig", 1);
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

        yield "Consultation de la Commande";
        
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
        yield "<!-- Consultation Page Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <h1 class=\"mb-4\">Détails de la Commande</h1>
        <div class=\"row g-5\">
            <div class=\"col-md-12 col-lg-6 col-xl-7\">
                <div class=\"card mb-4\">
                    <div class=\"card-header bg-primary text-white\">
                        Informations Client
                    </div>
                    <div class=\"card-body\">
                        <p><strong>Nom :</strong> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 17, $this->source); })()), "nomClient", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
                        <p><strong>Prénom :</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 18, $this->source); })()), "prenomClient", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
                        <p><strong>Email :</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 19, $this->source); })()), "mailClient", [], "any", false, false, false, 19), "html", null, true);
        yield "</p>
                        <p><strong>Téléphone :</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 20, $this->source); })()), "telephoneClient", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
                        <p><strong>Date/Heure de récupération :</strong> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 21, $this->source); })()), "dateRecuperation", [], "any", false, false, false, 21), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                         <p><strong>Commentaires :</strong> ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 22, $this->source); })()), "commentaires", [], "any", false, false, false, 22), "html", null, true);
        yield "</p>
                       
                    </div>
                </div>
            </div>

            <div class=\"col-md-12 col-lg-6 col-xl-5\">
                <div class=\"card mb-4\">
                    <div class=\"card-header bg-primary text-white\">
                        Produits Commandés
                    </div>
                    <div class=\"card-body table-responsive\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th scope=\"col\">Produit</th>
                                    <th scope=\"col\">Nom</th>
                                    <th scope=\"col\">Prix</th>
                                    <th scope=\"col\">Quantité</th>
                                    <th scope=\"col\">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 45, $this->source); })()), "commandeProduits", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["produitCommande"]) {
            // line 46
            yield "                                    <tr>
                                        <td>
                                            <img src=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "produit", [], "any", false, false, false, 48), "image", [], "any", false, false, false, 48))), "html", null, true);
            yield "\" class=\"img-fluid rounded-circle\" style=\"width: 90px; height: 90px;\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "produit", [], "any", false, false, false, 48), "nom", [], "any", false, false, false, 48), "html", null, true);
            yield "\">
                                        </td>
                                        <td class=\"py-3\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "produit", [], "any", false, false, false, 50), "nom", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                                        <td class=\"py-3\">
                                            ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "produit", [], "any", false, false, false, 52), "prix", [], "any", false, false, false, 52), 2, ".", ","), "html", null, true);
            yield " €
                                        </td>
                                        <td class=\"py-3\">
                                            ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "quantite", [], "any", false, false, false, 55), "html", null, true);
            yield "
                                        </td>
                                        <td class=\"py-3\">
                                            ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "produit", [], "any", false, false, false, 58), "prix", [], "any", false, false, false, 58) * CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "quantite", [], "any", false, false, false, 58)), 2, ".", ","), "html", null, true);
            yield " €
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produitCommande'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <h5 class=\"mb-3\">Total de la commande :</h5>
                        <h3 class=\"text-primary\">
                            ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::reduce($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 70, $this->source); })()), "commandeProduits", [], "any", false, false, false, 70), function ($__total__, $__produitCommande__) use ($context, $macros) { $context["total"] = $__total__; $context["produitCommande"] = $__produitCommande__; return ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 70, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["produitCommande"]) || array_key_exists("produitCommande", $context) ? $context["produitCommande"] : (function () { throw new RuntimeError('Variable "produitCommande" does not exist.', 70, $this->source); })()), "produit", [], "any", false, false, false, 70), "prix", [], "any", false, false, false, 70) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["produitCommande"]) || array_key_exists("produitCommande", $context) ? $context["produitCommande"] : (function () { throw new RuntimeError('Variable "produitCommande" does not exist.', 70, $this->source); })()), "quantite", [], "any", false, false, false, 70))); }, 0), 2, ".", ","), "html", null, true);
        yield " €
                        </h3>
                       
                    </div>
                </div>
                 ";
        // line 76
        yield "                        ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 76, $this->source); })()), "statut", [], "any", false, false, false, 76) == 0) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 76, $this->source); })()), "dateRecuperation", [], "any", false, false, false, 76) > $this->extensions['Twig\Extension\CoreExtension']->modifyDate($this->extensions['Twig\Extension\CoreExtension']->convertDate(), "+30 minutes")))) {
            // line 77
            yield "                            <div class=\"mt-4 d-flex justify-content-center gap-3\">
                                <a href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">
                                    Modifier la Commande
                                </a>
                                <form method=\"post\" action=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler cette commande ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82))), "html", null, true);
            yield "\">
                                    <button class=\"btn btn-danger\">Annuler la Commande</button>
                                </form>
                            </div>
                        ";
        }
        // line 87
        yield "            </div>
        </div>
    </div>
</div>
<!-- Consultation Page End -->

<a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\">
    <i class=\"fa fa-arrow-up\"></i>
</a>
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
        return "commandes/show.html.twig";
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
        return array (  243 => 87,  235 => 82,  231 => 81,  225 => 78,  222 => 77,  219 => 76,  211 => 70,  201 => 62,  191 => 58,  185 => 55,  179 => 52,  174 => 50,  167 => 48,  163 => 46,  159 => 45,  133 => 22,  129 => 21,  125 => 20,  121 => 19,  117 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Consultation de la Commande{% endblock %}

{% block body %}
<!-- Consultation Page Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <h1 class=\"mb-4\">Détails de la Commande</h1>
        <div class=\"row g-5\">
            <div class=\"col-md-12 col-lg-6 col-xl-7\">
                <div class=\"card mb-4\">
                    <div class=\"card-header bg-primary text-white\">
                        Informations Client
                    </div>
                    <div class=\"card-body\">
                        <p><strong>Nom :</strong> {{ commande.nomClient }}</p>
                        <p><strong>Prénom :</strong> {{ commande.prenomClient }}</p>
                        <p><strong>Email :</strong> {{ commande.mailClient }}</p>
                        <p><strong>Téléphone :</strong> {{ commande.telephoneClient }}</p>
                        <p><strong>Date/Heure de récupération :</strong> {{ commande.dateRecuperation|date('d/m/Y H:i') }}</p>
                         <p><strong>Commentaires :</strong> {{ commande.commentaires }}</p>
                       
                    </div>
                </div>
            </div>

            <div class=\"col-md-12 col-lg-6 col-xl-5\">
                <div class=\"card mb-4\">
                    <div class=\"card-header bg-primary text-white\">
                        Produits Commandés
                    </div>
                    <div class=\"card-body table-responsive\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th scope=\"col\">Produit</th>
                                    <th scope=\"col\">Nom</th>
                                    <th scope=\"col\">Prix</th>
                                    <th scope=\"col\">Quantité</th>
                                    <th scope=\"col\">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for produitCommande in commande.commandeProduits %}
                                    <tr>
                                        <td>
                                            <img src=\"{{ asset('uploads/images/' ~  produitCommande.produit.image) }}\" class=\"img-fluid rounded-circle\" style=\"width: 90px; height: 90px;\" alt=\"{{ produitCommande.produit.nom }}\">
                                        </td>
                                        <td class=\"py-3\">{{ produitCommande.produit.nom }}</td>
                                        <td class=\"py-3\">
                                            {{ produitCommande.produit.prix | number_format(2, '.', ',') }} €
                                        </td>
                                        <td class=\"py-3\">
                                            {{ produitCommande.quantite }}
                                        </td>
                                        <td class=\"py-3\">
                                            {{ (produitCommande.produit.prix * produitCommande.quantite) | number_format(2, '.', ',') }} €
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <h5 class=\"mb-3\">Total de la commande :</h5>
                        <h3 class=\"text-primary\">
                            {{ commande.commandeProduits | reduce((total, produitCommande) => total + (produitCommande.produit.prix * produitCommande.quantite), 0) | number_format(2, '.', ',') }} €
                        </h3>
                       
                    </div>
                </div>
                 {# Boutons Modifier et Annuler #}
                        {% if commande.statut == 0 and commande.dateRecuperation > (date()|date_modify('+30 minutes')) %}
                            <div class=\"mt-4 d-flex justify-content-center gap-3\">
                                <a href=\"{{ path('app_commandes_edit', {'id': commande.id}) }}\" class=\"btn btn-warning\">
                                    Modifier la Commande
                                </a>
                                <form method=\"post\" action=\"{{ path('app_commandes_delete', {'id': commande.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler cette commande ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ commande.id) }}\">
                                    <button class=\"btn btn-danger\">Annuler la Commande</button>
                                </form>
                            </div>
                        {% endif %}
            </div>
        </div>
    </div>
</div>
<!-- Consultation Page End -->

<a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\">
    <i class=\"fa fa-arrow-up\"></i>
</a>
{% endblock %}
", "commandes/show.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\commandes\\show.html.twig");
    }
}
