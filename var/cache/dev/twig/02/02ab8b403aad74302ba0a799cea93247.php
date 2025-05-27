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

/* commandes/new.html.twig */
class __TwigTemplate_4075b15a24f4be9c538a440e083c7aae extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commandes/new.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Nouvelle Commande";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<!--  Checkout Page Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <h1 class=\"mb-4\">Informations</h1>
        ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        yield "
        <div class=\"row g-5\">
            <div class=\"col-md-12 col-lg-6 col-xl-7\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-6\">
                        <div class=\"form-item w-100\">
                            <label class=\"form-label my-3\">Nom<sup>*</sup></label>
                            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nom_client", [], "any", false, false, false, 18), 'widget');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-12 col-lg-6\">
                        <div class=\"form-item w-100\">
                            <label class=\"form-label my-3\">Prénom<sup>*</sup></label>
                            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prenom_client", [], "any", false, false, false, 24), 'widget');
        yield "
                        </div>
                    </div>
                </div>
                <div class=\"form-item\">
                    <label class=\"form-label my-3\">Adresse mail<sup>*</sup></label>
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "mail_client", [], "any", false, false, false, 30), 'widget');
        yield "
                </div>
                <div class=\"form-item\">
                    <label class=\"form-label my-3\">Numéro de téléphone <sup>*</sup></label>
                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "telephone_client", [], "any", false, false, false, 34), 'widget');
        yield "
                </div>
                <div class=\"form-item\">
                    <label class=\"form-label my-3\">Date/Heure de récupération de la commande<sup>*</sup></label>
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "date_recuperation", [], "any", false, false, false, 38), 'widget');
        yield "
                </div>
                <div class=\"form-item\">
                    <label class=\"form-label my-3\">Commentaires</label>
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "commentaires", [], "any", false, false, false, 42), 'widget');
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
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "commandeProduits", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["produitCommande"]) {
            // line 59
            yield "                    <tr>
                        <th scope=\"row\">
                            <div class=\"d-flex align-items-center mt-2\">
                                <img src=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "vars", [], "any", false, false, false, 62), "data", [], "any", false, false, false, 62), "produit", [], "any", false, false, false, 62), "image", [], "any", false, false, false, 62))), "html", null, true);
            yield "\" class=\"img-fluid rounded-circle\" style=\"width: 90px; height: 90px;\" alt=\"\">
                            </div>
                        </th>
                        <td class=\"py-5\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "vars", [], "any", false, false, false, 65), "data", [], "any", false, false, false, 65), "produit", [], "any", false, false, false, 65), "nom", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                        <td class=\"py-5\">
                           ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "vars", [], "any", false, false, false, 67), "data", [], "any", false, false, false, 67), "produit", [], "any", false, false, false, 67), "prix", [], "any", false, false, false, 67), 2, ".", ","), "html", null, true);
            yield "€
                        </td>
                        <td class=\"py-5\">
                            ";
            // line 70
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "quantite", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "onchange" => "updateTotal(this)"]]);
            yield "
                        </td>
                        <td class=\"py-5\">
                            <span class=\"total-price\">
                                ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "vars", [], "any", false, false, false, 74), "data", [], "any", false, false, false, 74), "produit", [], "any", false, false, false, 74), "prix", [], "any", false, false, false, 74) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "vars", [], "any", false, false, false, 74), "data", [], "any", false, false, false, 74), "quantite", [], "any", false, false, false, 74)), 2, ".", ","), "html", null, true);
            yield "€
                            </span>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produitCommande'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "            </tbody>
        </table>
    </div>
     <div class=\"container-fluid py-2\">
            <div class=\"container py-2\">
                <div class=\"p-2 bg-light rounded\">
    <!-- Section pour le total de la commande -->
    <div class=\"row g-4 text-center align-items-center justify-content-center pt-4\">
        <div class=\"col-md-12\">

            <input type=\"hidden\" name=\"commande[montant_total]\" id=\"montant_total_input\">
            <div class=\"h5\">Total de la commande : <span id=\"totalCommande\"></span></div>
        </div>
    </div>

    <!-- Section pour le bouton -->
    <div class=\"row g-4 text-center align-items-center justify-content-center pt-4\">
        <div class=\"col-md-12\">
            <!-- <button type=\"button\" class=\"btn border-secondary py-3 px-4 text-uppercase w-100 text-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#modalPaiement\">
                Procéder au paiement
            </button>-->
            <button type=\"button\" class=\"btn border-secondary py-3 px-4 text-uppercase w-100 text-primary\" id=\"btnValiderPaiement\">
             Procéder au paiement
            </button>

        </div>
    </div>
</div>
</div>
</div>
</div>
        ";
        // line 110
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_end');
        yield "
    </div>
</div>


<!-- Modale Paiement -->
<div class=\"modal fade\" id=\"modalPaiement\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Paiement</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"mb-3\">
                    <label>Numéro de carte</label>
                    <input type=\"text\" class=\"form-control\" name=\"carte_numero\" required>
                </div>
                <div class=\"mb-3\">
                    <label>Date d'expiration</label>
                    <input type=\"text\" class=\"form-control\" name=\"carte_expiration\" placeholder=\"MM/AA\" required>
                </div>
                <div class=\"mb-3\">
                    <label>CVV</label>
                    <input type=\"text\" class=\"form-control\" name=\"carte_cvv\" required>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn border-secondary py-3 px-4 text-uppercase w-100 text-primary\" id=\"btnValiderPaiement\">Valider et Soumettre</button>
            </div>
        </div>
    </div>
</div>


<a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>
<script>
function updateTotal(input) {
    let row = input.closest('tr');
    let price = parseFloat(row.querySelector('td:nth-child(3)').textContent.replace('€', '').replace(',', '.'));
    let quantity = parseInt(input.value) || 0;
    let total = price * quantity;

    row.querySelector('.total-price').textContent = total.toFixed(2) + '€';
    updateOrderTotal();
}

function updateOrderTotal() {
    let total = 0;
    document.querySelectorAll('tbody tr').forEach(row => {
        let price = parseFloat(row.querySelector('td:nth-child(3)').textContent.replace('€', '').replace(',', '.'));
        let quantityInput = row.querySelector('input');
        let quantity = parseInt(quantityInput.value) || 0;
        total += price * quantity;
    });

    document.getElementById('totalCommande').textContent = total.toFixed(2) + '€';
    document.getElementById('montant_total_input').value = total.toFixed(2); // met à jour le champ hidden
}

document.addEventListener('DOMContentLoaded', () => {
    updateOrderTotal();
});
</script>

<script>
document.getElementById('btnValiderPaiement').addEventListener('click', async () => {
    console.log(\"Bouton cliqué\");

    // Récupérer les données du formulaire
    let form = document.querySelector('form');
    let formData = new FormData(form);
    let totalCommande = document.getElementById('totalCommande').textContent.replace('€', '').trim();
   /* formData.append('commande[montant_total]', totalCommande);
    console.log(totalCommande);

console.log(formData);*/

    // Enregistrer la commande dans la session avec AJAX
    let response = await fetch(\"/commandes/store\", {
        method: 'POST',
        body: formData
    });

    let result = await response.json();
    console.log(\"Session enregistrée :\", result);

    if (result.success) {
        let totalCommande = parseFloat(document.getElementById('totalCommande').textContent.replace('€', '').replace(',', ''));
        let stripe = Stripe('";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_public_key"]) || array_key_exists("stripe_public_key", $context) ? $context["stripe_public_key"] : (function () { throw new RuntimeError('Variable "stripe_public_key" does not exist.', 200, $this->source); })()), "html", null, true);
        yield "');
        let session = await fetch(\"/create-checkout-session\", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
    body: JSON.stringify({
                items: [
                    {
                        name: \"Total Commande\",
                        price: parseFloat(totalCommande), // Montant total envoyé
                        quantity: 1
                    }
                ]
            })
        });

        let data = await session.json();

        if (data.id) {
            stripe.redirectToCheckout({ sessionId: data.id });
        }
    } else {
        alert(\"Erreur lors de l'enregistrement de la commande\");
    }
});


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
        return "commandes/new.html.twig";
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
        return array (  344 => 200,  251 => 110,  218 => 79,  207 => 74,  200 => 70,  194 => 67,  189 => 65,  183 => 62,  178 => 59,  174 => 58,  155 => 42,  148 => 38,  141 => 34,  134 => 30,  125 => 24,  116 => 18,  106 => 11,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Nouvelle Commande{% endblock %}

{% block body %}
<!--  Checkout Page Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <h1 class=\"mb-4\">Informations</h1>
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
                {% for produitCommande in form.commandeProduits %}
                    <tr>
                        <th scope=\"row\">
                            <div class=\"d-flex align-items-center mt-2\">
                                <img src=\"{{ asset('uploads/images/' ~ produitCommande.vars.data.produit.image) }}\" class=\"img-fluid rounded-circle\" style=\"width: 90px; height: 90px;\" alt=\"\">
                            </div>
                        </th>
                        <td class=\"py-5\">{{ produitCommande.vars.data.produit.nom }}</td>
                        <td class=\"py-5\">
                           {{ produitCommande.vars.data.produit.prix | number_format(2, '.', ',') }}€
                        </td>
                        <td class=\"py-5\">
                            {{ form_widget(produitCommande.quantite, { 'attr': {'class': 'form-control', 'onchange': 'updateTotal(this)' } }) }}
                        </td>
                        <td class=\"py-5\">
                            <span class=\"total-price\">
                                {{ (produitCommande.vars.data.produit.prix * produitCommande.vars.data.quantite) | number_format(2, '.', ',') }}€
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

            <input type=\"hidden\" name=\"commande[montant_total]\" id=\"montant_total_input\">
            <div class=\"h5\">Total de la commande : <span id=\"totalCommande\"></span></div>
        </div>
    </div>

    <!-- Section pour le bouton -->
    <div class=\"row g-4 text-center align-items-center justify-content-center pt-4\">
        <div class=\"col-md-12\">
            <!-- <button type=\"button\" class=\"btn border-secondary py-3 px-4 text-uppercase w-100 text-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#modalPaiement\">
                Procéder au paiement
            </button>-->
            <button type=\"button\" class=\"btn border-secondary py-3 px-4 text-uppercase w-100 text-primary\" id=\"btnValiderPaiement\">
             Procéder au paiement
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


<!-- Modale Paiement -->
<div class=\"modal fade\" id=\"modalPaiement\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Paiement</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"mb-3\">
                    <label>Numéro de carte</label>
                    <input type=\"text\" class=\"form-control\" name=\"carte_numero\" required>
                </div>
                <div class=\"mb-3\">
                    <label>Date d'expiration</label>
                    <input type=\"text\" class=\"form-control\" name=\"carte_expiration\" placeholder=\"MM/AA\" required>
                </div>
                <div class=\"mb-3\">
                    <label>CVV</label>
                    <input type=\"text\" class=\"form-control\" name=\"carte_cvv\" required>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn border-secondary py-3 px-4 text-uppercase w-100 text-primary\" id=\"btnValiderPaiement\">Valider et Soumettre</button>
            </div>
        </div>
    </div>
</div>


<a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>
<script>
function updateTotal(input) {
    let row = input.closest('tr');
    let price = parseFloat(row.querySelector('td:nth-child(3)').textContent.replace('€', '').replace(',', '.'));
    let quantity = parseInt(input.value) || 0;
    let total = price * quantity;

    row.querySelector('.total-price').textContent = total.toFixed(2) + '€';
    updateOrderTotal();
}

function updateOrderTotal() {
    let total = 0;
    document.querySelectorAll('tbody tr').forEach(row => {
        let price = parseFloat(row.querySelector('td:nth-child(3)').textContent.replace('€', '').replace(',', '.'));
        let quantityInput = row.querySelector('input');
        let quantity = parseInt(quantityInput.value) || 0;
        total += price * quantity;
    });

    document.getElementById('totalCommande').textContent = total.toFixed(2) + '€';
    document.getElementById('montant_total_input').value = total.toFixed(2); // met à jour le champ hidden
}

document.addEventListener('DOMContentLoaded', () => {
    updateOrderTotal();
});
</script>

<script>
document.getElementById('btnValiderPaiement').addEventListener('click', async () => {
    console.log(\"Bouton cliqué\");

    // Récupérer les données du formulaire
    let form = document.querySelector('form');
    let formData = new FormData(form);
    let totalCommande = document.getElementById('totalCommande').textContent.replace('€', '').trim();
   /* formData.append('commande[montant_total]', totalCommande);
    console.log(totalCommande);

console.log(formData);*/

    // Enregistrer la commande dans la session avec AJAX
    let response = await fetch(\"/commandes/store\", {
        method: 'POST',
        body: formData
    });

    let result = await response.json();
    console.log(\"Session enregistrée :\", result);

    if (result.success) {
        let totalCommande = parseFloat(document.getElementById('totalCommande').textContent.replace('€', '').replace(',', ''));
        let stripe = Stripe('{{ stripe_public_key }}');
        let session = await fetch(\"/create-checkout-session\", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
    body: JSON.stringify({
                items: [
                    {
                        name: \"Total Commande\",
                        price: parseFloat(totalCommande), // Montant total envoyé
                        quantity: 1
                    }
                ]
            })
        });

        let data = await session.json();

        if (data.id) {
            stripe.redirectToCheckout({ sessionId: data.id });
        }
    } else {
        alert(\"Erreur lors de l'enregistrement de la commande\");
    }
});


</script>

{% endblock %}
", "commandes/new.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\commandes\\new.html.twig");
    }
}
