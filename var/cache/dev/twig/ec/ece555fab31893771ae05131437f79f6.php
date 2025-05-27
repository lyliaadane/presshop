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

/* commandes/suivi.html.twig */
class __TwigTemplate_a1e9b920315ea95d1851b8e91f82a113 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/suivi.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/suivi.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commandes/suivi.html.twig", 1);
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

        yield "Suivi de votre commande";
        
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
        yield " <br/>
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
<div style=\"width: 100%; padding: 20px; background-color: #f8f9fa; font-family: Arial, sans-serif;\">
    <div style=\"max-width: 600px; margin: auto; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);\">
        <h1 style=\"text-align: center; color: #7ED958; margin-bottom: 20px;\">Suivi de votre commande, ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 10, $this->source); })()), "prenomClient", [], "any", false, false, false, 10), "html", null, true);
        yield " !</h1>

        <p style=\"font-size: 16px; color: #333; text-align: center;\">Voici l'état actuel de votre commande.</p>

        <!-- Barre de suivi -->
        <div style=\"display: flex; justify-content: space-between; align-items: center; margin: 30px 0;\">
            ";
        // line 16
        $context["etapes"] = ["Confirmée", "En préparation", "Expédiée", "Livrée"];
        // line 17
        yield "            ";
        $context["currentStep"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 17, $this->source); })()), "statut", [], "any", false, false, false, 17);
        yield " ";
        // line 18
        yield "            <div style=\"display: flex; justify-content: space-between; width: 100%;\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 20
            yield "                    <div style=\"text-align: center; flex: 1;\">
                        <div style=\"
                            width: 30px;
                            height: 30px;
                            border-radius: 50%;
                            background-color: ";
            // line 25
            yield ((($context["i"] <= (isset($context["currentStep"]) || array_key_exists("currentStep", $context) ? $context["currentStep"] : (function () { throw new RuntimeError('Variable "currentStep" does not exist.', 25, $this->source); })()))) ? ("#7ED958") : ("#ccc"));
            yield ";
                            margin: 0 auto;
                            line-height: 30px;
                            color: white;
                            font-weight: bold;
                        \">
                            ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["i"] + 1), "html", null, true);
            yield "
                        </div>
                        <p style=\"font-size: 12px; color: ";
            // line 33
            yield ((($context["i"] <= (isset($context["currentStep"]) || array_key_exists("currentStep", $context) ? $context["currentStep"] : (function () { throw new RuntimeError('Variable "currentStep" does not exist.', 33, $this->source); })()))) ? ("#7ED958") : ("#aaa"));
            yield ";\">
                            ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["etapes"]) || array_key_exists("etapes", $context) ? $context["etapes"] : (function () { throw new RuntimeError('Variable "etapes" does not exist.', 34, $this->source); })()), $context["i"], [], "array", false, false, false, 34), "html", null, true);
            yield "
                        </p>
                    </div>
                    ";
            // line 37
            if (($context["i"] < 3)) {
                // line 38
                yield "                        <div style=\"flex: none; width: 20px; border-top: 2px solid ";
                yield ((($context["i"] < (isset($context["currentStep"]) || array_key_exists("currentStep", $context) ? $context["currentStep"] : (function () { throw new RuntimeError('Variable "currentStep" does not exist.', 38, $this->source); })()))) ? ("#7ED958") : ("#ccc"));
                yield "; margin-top: 15px;\"></div>
                    ";
            }
            // line 40
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "            </div>
        </div>

        <!-- Infos Client -->
        <div style=\"background-color: #f1f1f1; padding: 15px; border-radius: 8px; margin-bottom: 20px;\">
            <h3 style=\"color: #6c757d; margin-bottom: 10px;\">Informations client :</h3>
            <p><strong>Commande n° :</strong> #";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47), "html", null, true);
        yield "</p>
            <p><strong>Nom :</strong> ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 48, $this->source); })()), "nomClient", [], "any", false, false, false, 48), "html", null, true);
        yield "</p>
            <p><strong>Prénom :</strong> ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 49, $this->source); })()), "prenomClient", [], "any", false, false, false, 49), "html", null, true);
        yield "</p>
            <p><strong>Téléphone :</strong> ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 50, $this->source); })()), "telephoneClient", [], "any", false, false, false, 50), "html", null, true);
        yield "</p>
            <p><strong>Date de récupération :</strong> ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 51, $this->source); })()), "dateRecuperation", [], "any", false, false, false, 51), "d/m/Y H:i"), "html", null, true);
        yield "</p>
        </div>

        <!-- Lien vers commande -->
        <div style=\"margin-top: 30px; text-align: center;\">
            <a href=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
        yield "\" style=\"display: inline-block; background-color:#7ED958; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;\">Voir ma commande</a>
        </div>

        <p style=\"margin-top: 20px; color: #6c757d; text-align: center;\">Une question ? Contactez-nous à <a href=\"mailto:adanelylia@gmail.com\" style=\"color: #7ED958;\">adanelylia@gmail.com</a>.</p>
    </div>
</div>
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
        return "commandes/suivi.html.twig";
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
        return array (  206 => 56,  198 => 51,  194 => 50,  190 => 49,  186 => 48,  182 => 47,  174 => 41,  168 => 40,  162 => 38,  160 => 37,  154 => 34,  150 => 33,  145 => 31,  136 => 25,  129 => 20,  125 => 19,  122 => 18,  118 => 17,  116 => 16,  107 => 10,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Suivi de votre commande{% endblock %}

{% block body %}
 <br/>
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
<div style=\"width: 100%; padding: 20px; background-color: #f8f9fa; font-family: Arial, sans-serif;\">
    <div style=\"max-width: 600px; margin: auto; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);\">
        <h1 style=\"text-align: center; color: #7ED958; margin-bottom: 20px;\">Suivi de votre commande, {{ commande.prenomClient }} !</h1>

        <p style=\"font-size: 16px; color: #333; text-align: center;\">Voici l'état actuel de votre commande.</p>

        <!-- Barre de suivi -->
        <div style=\"display: flex; justify-content: space-between; align-items: center; margin: 30px 0;\">
            {% set etapes = ['Confirmée', 'En préparation', 'Expédiée', 'Livrée'] %}
            {% set currentStep = commande.statut %} {# Ex : 0, 1, 2, 3 #}
            <div style=\"display: flex; justify-content: space-between; width: 100%;\">
                {% for i in 0..3 %}
                    <div style=\"text-align: center; flex: 1;\">
                        <div style=\"
                            width: 30px;
                            height: 30px;
                            border-radius: 50%;
                            background-color: {{ i <= currentStep ? '#7ED958' : '#ccc' }};
                            margin: 0 auto;
                            line-height: 30px;
                            color: white;
                            font-weight: bold;
                        \">
                            {{ i + 1 }}
                        </div>
                        <p style=\"font-size: 12px; color: {{ i <= currentStep ? '#7ED958' : '#aaa' }};\">
                            {{ etapes[i] }}
                        </p>
                    </div>
                    {% if i < 3 %}
                        <div style=\"flex: none; width: 20px; border-top: 2px solid {{ i < currentStep ? '#7ED958' : '#ccc' }}; margin-top: 15px;\"></div>
                    {% endif %}
                {% endfor %}
            </div>
        </div>

        <!-- Infos Client -->
        <div style=\"background-color: #f1f1f1; padding: 15px; border-radius: 8px; margin-bottom: 20px;\">
            <h3 style=\"color: #6c757d; margin-bottom: 10px;\">Informations client :</h3>
            <p><strong>Commande n° :</strong> #{{ commande.id }}</p>
            <p><strong>Nom :</strong> {{ commande.nomClient }}</p>
            <p><strong>Prénom :</strong> {{ commande.prenomClient }}</p>
            <p><strong>Téléphone :</strong> {{ commande.telephoneClient }}</p>
            <p><strong>Date de récupération :</strong> {{ commande.dateRecuperation|date('d/m/Y H:i') }}</p>
        </div>

        <!-- Lien vers commande -->
        <div style=\"margin-top: 30px; text-align: center;\">
            <a href=\"{{ path('app_commandes_show', { 'id': commande.id }) }}\" style=\"display: inline-block; background-color:#7ED958; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;\">Voir ma commande</a>
        </div>

        <p style=\"margin-top: 20px; color: #6c757d; text-align: center;\">Une question ? Contactez-nous à <a href=\"mailto:adanelylia@gmail.com\" style=\"color: #7ED958;\">adanelylia@gmail.com</a>.</p>
    </div>
</div>
</div>
</div>
{% endblock %}
", "commandes/suivi.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\commandes\\suivi.html.twig");
    }
}
