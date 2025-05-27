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

/* commandes/edit.html.twig */
class __TwigTemplate_bc77088bedeee8c51bd3ff472eaf16fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commandes/edit.html.twig", 1);
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

        yield "Modifier la Commande";
        
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
        yield "<!--  Checkout Page Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <h1 class=\"mb-4\">Modifier la Commande</h1>
        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        yield "
        <div class=\"row g-5\">
            <div class=\"col-md-12 col-lg-6 col-xl-7\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-6\">
                        <div class=\"form-item w-100\">
                            <label class=\"form-label my-3\">Nom<sup>*</sup></label>
                            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nom_client", [], "any", false, false, false, 17), 'widget');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-12 col-lg-6\">
                        <div class=\"form-item w-100\">
                            <label class=\"form-label my-3\">Prénom<sup>*</sup></label>
                            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prenom_client", [], "any", false, false, false, 23), 'widget');
        yield "
                        </div>
                    </div>
                </div>
                <div class=\"form-item\">
                    <label class=\"form-label my-3\">Adresse mail<sup>*</sup></label>
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "mail_client", [], "any", false, false, false, 29), 'widget');
        yield "
                </div>
                <div class=\"form-item\">
                    <label class=\"form-label my-3\">Numéro de téléphone <sup>*</sup></label>
                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "telephone_client", [], "any", false, false, false, 33), 'widget');
        yield "
                </div>
                <div class=\"form-item\">
                    <label class=\"form-label my-3\">Date/Heure de récupération de la commande<sup>*</sup></label>
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "date_recuperation", [], "any", false, false, false, 37), 'widget');
        yield "
                </div>
                <div class=\"form-item\">
                    <label class=\"form-label my-3\">Commentaires</label>
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "commentaires", [], "any", false, false, false, 41), 'widget');
        yield "
                </div>
            </div>
<div class=\"col-md-12 col-lg-6 col-xl-5\">
    <div class=\"table-responsive\">
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
        // line 57
        $context["totalCommande"] = 0;
        yield "  
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "commandeProduits", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["produitCommande"]) {
            // line 59
            yield "                    ";
            $context["sousTotal"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "vars", [], "any", false, false, false, 59), "data", [], "any", false, false, false, 59), "produit", [], "any", false, false, false, 59), "prix", [], "any", false, false, false, 59) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "vars", [], "any", false, false, false, 59), "data", [], "any", false, false, false, 59), "quantite", [], "any", false, false, false, 59));
            // line 60
            yield "                    ";
            $context["totalCommande"] = ((isset($context["totalCommande"]) || array_key_exists("totalCommande", $context) ? $context["totalCommande"] : (function () { throw new RuntimeError('Variable "totalCommande" does not exist.', 60, $this->source); })()) + (isset($context["sousTotal"]) || array_key_exists("sousTotal", $context) ? $context["sousTotal"] : (function () { throw new RuntimeError('Variable "sousTotal" does not exist.', 60, $this->source); })()));
            yield "  ";
            // line 61
            yield "
                    <tr>
                        <th scope=\"row\">
                            <div class=\"d-flex align-items-center mt-2\">
                                <img src=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "vars", [], "any", false, false, false, 65), "data", [], "any", false, false, false, 65), "produit", [], "any", false, false, false, 65), "image", [], "any", false, false, false, 65))), "html", null, true);
            yield "\" class=\"img-fluid rounded-circle\" style=\"width: 90px; height: 90px;\" alt=\"\">
                            </div>
                        </th>
                        <td class=\"py-5\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "vars", [], "any", false, false, false, 68), "data", [], "any", false, false, false, 68), "produit", [], "any", false, false, false, 68), "nom", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                        <td class=\"py-5\">
                            ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "vars", [], "any", false, false, false, 70), "data", [], "any", false, false, false, 70), "produit", [], "any", false, false, false, 70), "prix", [], "any", false, false, false, 70), 2, ".", ","), "html", null, true);
            yield "
                        </td>
                        <td class=\"py-5\">
                            ";
            // line 73
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "quantite", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control", "onchange" => "updateTotal(this)"]]);
            yield "
                        </td>
                        <td class=\"py-5\">
                            <span class=\"total-price\">
                                 ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["sousTotal"]) || array_key_exists("sousTotal", $context) ? $context["sousTotal"] : (function () { throw new RuntimeError('Variable "sousTotal" does not exist.', 77, $this->source); })()), 2, ".", ","), "html", null, true);
            yield "
                            </span>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produitCommande'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "            </tbody>
        </table>
    </div>
     <div class=\"container-fluid py-2\">
            <div class=\"container py-2\">
                <div class=\"p-2 bg-light rounded\">
    <!-- Section pour le total de la commande -->
    <div class=\"row g-4 text-center align-items-center justify-content-center pt-4\">
        <div class=\"col-md-12\">
            <h5 class=\"mb-3\">Total de la commande :</h5>
           <h3 id=\"totalCommande\" class=\"text-primary\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalCommande"]) || array_key_exists("totalCommande", $context) ? $context["totalCommande"] : (function () { throw new RuntimeError('Variable "totalCommande" does not exist.', 92, $this->source); })()), 2, ".", ","), "html", null, true);
        yield " €</h3>
        </div>
    </div>

    <!-- Section pour le bouton -->
    <div class=\"row g-4 text-center align-items-center justify-content-center pt-4\">
        <div class=\"col-md-12\">
            <button type=\"submit\" class=\"btn border-secondary py-3 px-4 text-uppercase w-100 text-primary\">
                Enregistrer les modifications
            </button>
        </div>
    </div>
</div>
</div>
</div>
</div>
        ";
        // line 108
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_end');
        yield "
    </div>
</div>
<!-- Checkout Page End -->

<a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>
<script>
function updateTotal(input) {
    let row = input.closest('tr');
    // Récupérer le prix correctement, remplacer virgule par point pour parseFloat
    let priceText = row.querySelector('td:nth-child(3)').textContent.trim();
    let price = parseFloat(priceText.replace('€', '').replace(',', '.'));
    
    let quantity = parseInt(input.value);
    if (isNaN(quantity) || quantity < 0) quantity = 0;

    let totalProduct = price * quantity;
    row.querySelector('.total-price').textContent = totalProduct.toFixed(2) + ' €';

    // Recalculer le total de la commande
    let totalCommande = 0;
    document.querySelectorAll('.total-price').forEach(function(span) {
        let val = parseFloat(span.textContent.replace('€', '').replace(',', '.'));
        if (!isNaN(val)) {
            totalCommande += val;
        }
    });

    // Mettre à jour le total général
    document.getElementById('totalCommande').textContent = totalCommande.toFixed(2) + ' €';
}
</script>
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
        return "commandes/edit.html.twig";
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
        return array (  261 => 108,  242 => 92,  230 => 82,  219 => 77,  212 => 73,  206 => 70,  201 => 68,  195 => 65,  189 => 61,  185 => 60,  182 => 59,  178 => 58,  174 => 57,  155 => 41,  148 => 37,  141 => 33,  134 => 29,  125 => 23,  116 => 17,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier la Commande{% endblock %}

{% block body %}
<!--  Checkout Page Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <h1 class=\"mb-4\">Modifier la Commande</h1>
        {{ form_start(form) }}
        <div class=\"row g-5\">
            <div class=\"col-md-12 col-lg-6 col-xl-7\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-6\">
                        <div class=\"form-item w-100\">
                            <label class=\"form-label my-3\">Nom<sup>*</sup></label>
                            {{ form_widget(form.nom_client) }}
                        </div>
                    </div>
                    <div class=\"col-md-12 col-lg-6\">
                        <div class=\"form-item w-100\">
                            <label class=\"form-label my-3\">Prénom<sup>*</sup></label>
                            {{ form_widget(form.prenom_client) }}
                        </div>
                    </div>
                </div>
                <div class=\"form-item\">
                    <label class=\"form-label my-3\">Adresse mail<sup>*</sup></label>
                    {{ form_widget(form.mail_client) }}
                </div>
                <div class=\"form-item\">
                    <label class=\"form-label my-3\">Numéro de téléphone <sup>*</sup></label>
                    {{ form_widget(form.telephone_client) }}
                </div>
                <div class=\"form-item\">
                    <label class=\"form-label my-3\">Date/Heure de récupération de la commande<sup>*</sup></label>
                    {{ form_widget(form.date_recuperation) }}
                </div>
                <div class=\"form-item\">
                    <label class=\"form-label my-3\">Commentaires</label>
                    {{ form_widget(form.commentaires) }}
                </div>
            </div>
<div class=\"col-md-12 col-lg-6 col-xl-5\">
    <div class=\"table-responsive\">
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
                {% set totalCommande = 0 %}  
                {% for produitCommande in form.commandeProduits %}
                    {% set sousTotal = produitCommande.vars.data.produit.prix * produitCommande.vars.data.quantite %}
                    {% set totalCommande = totalCommande + sousTotal %}  {# Addition du sous-total au total #}

                    <tr>
                        <th scope=\"row\">
                            <div class=\"d-flex align-items-center mt-2\">
                                <img src=\"{{ asset('uploads/images/' ~ produitCommande.vars.data.produit.image) }}\" class=\"img-fluid rounded-circle\" style=\"width: 90px; height: 90px;\" alt=\"\">
                            </div>
                        </th>
                        <td class=\"py-5\">{{ produitCommande.vars.data.produit.nom }}</td>
                        <td class=\"py-5\">
                            {{ produitCommande.vars.data.produit.prix | number_format(2, '.', ',') }}
                        </td>
                        <td class=\"py-5\">
                            {{ form_widget(produitCommande.quantite, { 'attr': {'class': 'form-control', 'onchange': 'updateTotal(this)' } }) }}
                        </td>
                        <td class=\"py-5\">
                            <span class=\"total-price\">
                                 {{ sousTotal | number_format(2, '.', ',') }}
                            </span>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
     <div class=\"container-fluid py-2\">
            <div class=\"container py-2\">
                <div class=\"p-2 bg-light rounded\">
    <!-- Section pour le total de la commande -->
    <div class=\"row g-4 text-center align-items-center justify-content-center pt-4\">
        <div class=\"col-md-12\">
            <h5 class=\"mb-3\">Total de la commande :</h5>
           <h3 id=\"totalCommande\" class=\"text-primary\">{{ totalCommande | number_format(2, '.', ',') }} €</h3>
        </div>
    </div>

    <!-- Section pour le bouton -->
    <div class=\"row g-4 text-center align-items-center justify-content-center pt-4\">
        <div class=\"col-md-12\">
            <button type=\"submit\" class=\"btn border-secondary py-3 px-4 text-uppercase w-100 text-primary\">
                Enregistrer les modifications
            </button>
        </div>
    </div>
</div>
</div>
</div>
</div>
        {{ form_end(form) }}
    </div>
</div>
<!-- Checkout Page End -->

<a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>
<script>
function updateTotal(input) {
    let row = input.closest('tr');
    // Récupérer le prix correctement, remplacer virgule par point pour parseFloat
    let priceText = row.querySelector('td:nth-child(3)').textContent.trim();
    let price = parseFloat(priceText.replace('€', '').replace(',', '.'));
    
    let quantity = parseInt(input.value);
    if (isNaN(quantity) || quantity < 0) quantity = 0;

    let totalProduct = price * quantity;
    row.querySelector('.total-price').textContent = totalProduct.toFixed(2) + ' €';

    // Recalculer le total de la commande
    let totalCommande = 0;
    document.querySelectorAll('.total-price').forEach(function(span) {
        let val = parseFloat(span.textContent.replace('€', '').replace(',', '.'));
        if (!isNaN(val)) {
            totalCommande += val;
        }
    });

    // Mettre à jour le total général
    document.getElementById('totalCommande').textContent = totalCommande.toFixed(2) + ' €';
}
</script>
{% endblock %}", "commandes/edit.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\commandes\\edit.html.twig");
    }
}
