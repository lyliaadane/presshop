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

/* commandes/annulation_commande_client.html.twig */
class __TwigTemplate_a68b6d07e4ca783e7bb5ee4d7785370e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/annulation_commande_client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/annulation_commande_client.html.twig"));

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

        yield "Annulation de votre commande";
        
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
        <h1 style=\"text-align: center; color: #ff0000; margin-bottom: 20px;\">Votre commande a été annulé, ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 7, $this->source); })()), "prenomClient", [], "any", false, false, false, 7), "html", null, true);
        yield " !</h1>

        <p style=\"font-size: 16px; color: #333;\">Malheuresuement votre commande ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        yield " a été annulée. Pour en connaitre les raisons, veuillez contactez le magasin !</p>

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


        <p style=\"margin-top: 20px; color: #333;\">Nous vous contacterons si nous avons besoin de plus d'informations. Vous pouvez nous joindre à tout moment à cette adresse : <a href=\"mailto:adanelylia@gmail.com\" style=\"color: #7ED958;\">adanelylia@gmail.com</a>.</p>

        <p style=\"color: #6c757d; text-align: center; margin-top: 30px;\">Merci de votre compréhension !</p>
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
        return "commandes/annulation_commande_client.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  141 => 18,  137 => 17,  133 => 16,  129 => 15,  125 => 14,  121 => 13,  114 => 9,  109 => 7,  105 => 5,  92 => 4,  69 => 2,  58 => 4,  55 => 3,  53 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% block title %}Annulation de votre commande{% endblock %}

{% block body %}
<div style=\"width: 100%; padding: 20px; background-color: #f8f9fa; font-family: Arial, sans-serif;\">
    <div style=\"max-width: 600px; margin: auto; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);\">
        <h1 style=\"text-align: center; color: #ff0000; margin-bottom: 20px;\">Votre commande a été annulé, {{ commande.prenomClient }} !</h1>

        <p style=\"font-size: 16px; color: #333;\">Malheuresuement votre commande {{ commande.id }} a été annulée. Pour en connaitre les raisons, veuillez contactez le magasin !</p>

        <div style=\"background-color: #f1f1f1; padding: 15px; border-radius: 8px; margin-bottom: 20px;\">
            <h3 style=\"color: #6c757d; margin-bottom: 10px;\">Vos informations :</h3>
             <p><strong>Numéro de commande :</strong> #{{ commande.id }}</p>
            <p><strong>Nom :</strong> {{ commande.nomClient }}</p>
            <p><strong>Prénom :</strong> {{ commande.prenomClient }}</p>
            <p><strong>Email :</strong> {{ commande.mailClient }}</p>
            <p><strong>Téléphone :</strong> {{ commande.telephoneClient }}</p>
            <p><strong>Date de récupération :</strong> {{ commande.dateRecuperation|date('d/m/Y H:i') }}</p>
        </div>


        <p style=\"margin-top: 20px; color: #333;\">Nous vous contacterons si nous avons besoin de plus d'informations. Vous pouvez nous joindre à tout moment à cette adresse : <a href=\"mailto:adanelylia@gmail.com\" style=\"color: #7ED958;\">adanelylia@gmail.com</a>.</p>

        <p style=\"color: #6c757d; text-align: center; margin-top: 30px;\">Merci de votre compréhension !</p>
    </div>
</div>
{% endblock %}
", "commandes/annulation_commande_client.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\commandes\\annulation_commande_client.html.twig");
    }
}
