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

/* commandes/modification_commande_client.html.twig */
class __TwigTemplate_501efa99beb2de2277d082ca9e5a70bc extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/modification_commande_client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/modification_commande_client.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 3
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
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

        yield "Modification de votre commande";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<div style=\"width: 100%; padding: 20px; background-color: #f8f9fa; font-family: Arial, sans-serif;\">
    <div style=\"max-width: 600px; margin: auto; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);\">
        <h1 style=\"text-align: center; color: #7ED958; margin-bottom: 20px;\">Merci pour votre modification de commande, ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 7, $this->source); })()), "prenomClient", [], "any", false, false, false, 7), "html", null, true);
        yield " !</h1>

        <p style=\"font-size: 16px; color: #333;\">Nous avons bien reçu la modification de votre commande, elle est en cours de traitement. Vous trouverez ci-dessous les détails de votre commande.</p>

        <div style=\"background-color: #f1f1f1; padding: 15px; border-radius: 8px; margin-bottom: 20px;\">
            <h3 style=\"color: #6c757d; margin-bottom: 10px;\">Vos informations :</h3>
             <p><strong>Numéro de commande :</strong> #";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
            <p><strong>Nom :</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 14, $this->source); })()), "nomClient", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
            <p><strong>Prénom :</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 15, $this->source); })()), "prenomClient", [], "any", false, false, false, 15), "html", null, true);
        yield "</p>
            <p><strong>Email :</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 16, $this->source); })()), "mailClient", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
            <p><strong>Téléphone :</strong> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 17, $this->source); })()), "telephoneClient", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
            <p><strong>Date de récupération :</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 18, $this->source); })()), "dateRecuperation", [], "any", false, false, false, 18), "d/m/Y H:i"), "html", null, true);
        yield "</p>
        </div>

        <div style=\"background-color: #ffffff; padding: 15px; border-radius: 8px; border: 1px solid #ddd;\">
            <h3 style=\"color: #6c757d; margin-bottom: 10px;\">Détails de votre commande :</h3>
            <table style=\"width: 100%; border-collapse: collapse; text-align: center;\">
                <thead>
                    <tr style=\"background-color: #7ED958; color: #ffffff;\">
                        <th style=\"padding: 10px; border: 1px solid #ddd;\">Produit</th>
                        <th style=\"padding: 10px; border: 1px solid #ddd;\">Prix unitaire (€)</th>
                        <th style=\"padding: 10px; border: 1px solid #ddd;\">Quantité</th>
                        <th style=\"padding: 10px; border: 1px solid #ddd;\">Total (€)</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 33
        $context["totalCommande"] = 0;
        // line 34
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 34, $this->source); })()), "commandeProduits", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["produitCommande"]) {
            // line 35
            yield "                        <tr>
                            <td style=\"padding: 10px; border: 1px solid #ddd;\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "produit", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                            <td style=\"padding: 10px; border: 1px solid #ddd;\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "produit", [], "any", false, false, false, 37), "prix", [], "any", false, false, false, 37), 2, ".", ","), "html", null, true);
            yield "</td>
                            <td style=\"padding: 10px; border: 1px solid #ddd;\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "quantite", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                            <td style=\"padding: 10px; border: 1px solid #ddd;\">
                                ";
            // line 40
            $context["totalProduit"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "produit", [], "any", false, false, false, 40), "prix", [], "any", false, false, false, 40) * CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "quantite", [], "any", false, false, false, 40));
            // line 41
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalProduit"]) || array_key_exists("totalProduit", $context) ? $context["totalProduit"] : (function () { throw new RuntimeError('Variable "totalProduit" does not exist.', 41, $this->source); })()), 2, ".", ","), "html", null, true);
            yield "
                                ";
            // line 42
            $context["totalCommande"] = ((isset($context["totalCommande"]) || array_key_exists("totalCommande", $context) ? $context["totalCommande"] : (function () { throw new RuntimeError('Variable "totalCommande" does not exist.', 42, $this->source); })()) + (isset($context["totalProduit"]) || array_key_exists("totalProduit", $context) ? $context["totalProduit"] : (function () { throw new RuntimeError('Variable "totalProduit" does not exist.', 42, $this->source); })()));
            // line 43
            yield "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produitCommande'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                </tbody>
            </table>

            <div style=\"text-align: right; margin-top: 20px;\">
                <h4 style=\"color: #007bff;\">Total de la commande : ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalCommande"]) || array_key_exists("totalCommande", $context) ? $context["totalCommande"] : (function () { throw new RuntimeError('Variable "totalCommande" does not exist.', 50, $this->source); })()), 2, ".", ","), "html", null, true);
        yield " €</h4>
            </div>
        </div>

        <div style=\"margin-top: 20px; text-align: center;\">
            <p style=\"font-size: 16px; color: #333;\">Vous pouvez suivre, modifier ou annuler votre commande en cliquant sur le lien ci-dessous :</p>
            <a href=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
        yield "\" style=\"display: inline-block; background-color: #7ED958; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;\">Suivre ma commande</a>
        </div>

        <p style=\"margin-top: 20px; color: #333;\">Nous vous contacterons si nous avons besoin de plus d'informations. Vous pouvez nous joindre à tout moment à cette adresse : <a href=\"mailto:adanelylia@gmail.com\" style=\"color: #7ED958;\">adanelylia@gmail.com</a>.</p>

        <p style=\"color: #6c757d; text-align: center; margin-top: 30px;\">Merci de votre confiance !</p>
    </div>
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
        return "commandes/modification_commande_client.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  211 => 56,  202 => 50,  196 => 46,  188 => 43,  186 => 42,  181 => 41,  179 => 40,  174 => 38,  170 => 37,  166 => 36,  163 => 35,  158 => 34,  156 => 33,  138 => 18,  134 => 17,  130 => 16,  126 => 15,  122 => 14,  118 => 13,  109 => 7,  105 => 5,  92 => 4,  69 => 2,  58 => 4,  55 => 3,  53 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% block title %}Modification de votre commande{% endblock %}

{% block body %}
<div style=\"width: 100%; padding: 20px; background-color: #f8f9fa; font-family: Arial, sans-serif;\">
    <div style=\"max-width: 600px; margin: auto; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);\">
        <h1 style=\"text-align: center; color: #7ED958; margin-bottom: 20px;\">Merci pour votre modification de commande, {{ commande.prenomClient }} !</h1>

        <p style=\"font-size: 16px; color: #333;\">Nous avons bien reçu la modification de votre commande, elle est en cours de traitement. Vous trouverez ci-dessous les détails de votre commande.</p>

        <div style=\"background-color: #f1f1f1; padding: 15px; border-radius: 8px; margin-bottom: 20px;\">
            <h3 style=\"color: #6c757d; margin-bottom: 10px;\">Vos informations :</h3>
             <p><strong>Numéro de commande :</strong> #{{ commande.id }}</p>
            <p><strong>Nom :</strong> {{ commande.nomClient }}</p>
            <p><strong>Prénom :</strong> {{ commande.prenomClient }}</p>
            <p><strong>Email :</strong> {{ commande.mailClient }}</p>
            <p><strong>Téléphone :</strong> {{ commande.telephoneClient }}</p>
            <p><strong>Date de récupération :</strong> {{ commande.dateRecuperation|date('d/m/Y H:i') }}</p>
        </div>

        <div style=\"background-color: #ffffff; padding: 15px; border-radius: 8px; border: 1px solid #ddd;\">
            <h3 style=\"color: #6c757d; margin-bottom: 10px;\">Détails de votre commande :</h3>
            <table style=\"width: 100%; border-collapse: collapse; text-align: center;\">
                <thead>
                    <tr style=\"background-color: #7ED958; color: #ffffff;\">
                        <th style=\"padding: 10px; border: 1px solid #ddd;\">Produit</th>
                        <th style=\"padding: 10px; border: 1px solid #ddd;\">Prix unitaire (€)</th>
                        <th style=\"padding: 10px; border: 1px solid #ddd;\">Quantité</th>
                        <th style=\"padding: 10px; border: 1px solid #ddd;\">Total (€)</th>
                    </tr>
                </thead>
                <tbody>
                    {% set totalCommande = 0 %}
                    {% for produitCommande in commande.commandeProduits %}
                        <tr>
                            <td style=\"padding: 10px; border: 1px solid #ddd;\">{{ produitCommande.produit.nom }}</td>
                            <td style=\"padding: 10px; border: 1px solid #ddd;\">{{ produitCommande.produit.prix | number_format(2, '.', ',') }}</td>
                            <td style=\"padding: 10px; border: 1px solid #ddd;\">{{ produitCommande.quantite }}</td>
                            <td style=\"padding: 10px; border: 1px solid #ddd;\">
                                {% set totalProduit = produitCommande.produit.prix * produitCommande.quantite %}
                                {{ totalProduit | number_format(2, '.', ',') }}
                                {% set totalCommande = totalCommande + totalProduit %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            <div style=\"text-align: right; margin-top: 20px;\">
                <h4 style=\"color: #007bff;\">Total de la commande : {{ totalCommande | number_format(2, '.', ',') }} €</h4>
            </div>
        </div>

        <div style=\"margin-top: 20px; text-align: center;\">
            <p style=\"font-size: 16px; color: #333;\">Vous pouvez suivre, modifier ou annuler votre commande en cliquant sur le lien ci-dessous :</p>
            <a href=\"{{ path('app_commandes_show', { 'id': commande.id }) }}\" style=\"display: inline-block; background-color: #7ED958; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;\">Suivre ma commande</a>
        </div>

        <p style=\"margin-top: 20px; color: #333;\">Nous vous contacterons si nous avons besoin de plus d'informations. Vous pouvez nous joindre à tout moment à cette adresse : <a href=\"mailto:adanelylia@gmail.com\" style=\"color: #7ED958;\">adanelylia@gmail.com</a>.</p>

        <p style=\"color: #6c757d; text-align: center; margin-top: 30px;\">Merci de votre confiance !</p>
    </div>
</div>
{% endblock %}
", "commandes/modification_commande_client.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\commandes\\modification_commande_client.html.twig");
    }
}
