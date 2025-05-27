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

/* index/privacy_policy.html.twig */
class __TwigTemplate_b56546c28e5861a5619dfb477448426c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/privacy_policy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/privacy_policy.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/privacy_policy.html.twig", 1);
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

        yield "Politique de confidentialité";
        
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
        yield "    <div class=\"container my-5\">
        <h1 class=\"mb-4\">Politique de confidentialité</h1>

        <p>Chez PrèsShop, la protection de vos données personnelles est une priorité. Cette politique de confidentialité a pour but de vous informer sur la manière dont nous collectons, utilisons, protégeons et partageons vos données personnelles lorsque vous utilisez notre site internet. En visitant notre site, vous acceptez les pratiques décrites dans cette politique.</p>

        <h2>1. Responsable du traitement</h2>
        <p>L'entreprise PrèsShop (ci-après « nous », « notre » ou « PrèsShop »), enregistrée au Registre du Commerce et des Sociétés de Lille sous le numéro …… et située à Tourcoing, est responsable du traitement des données personnelles collectées sur notre site internet.</p>

        <h2>2. Respect du RGPD</h2>
        <p>PrèsShop s'engage à collecter et traiter vos données personnelles de manière transparente conformément au Règlement Général sur la Protection des Données (« RGPD ») et à la loi « Informatique et Libertés ».</p>

        <h2>3. Informations personnelles collectées</h2>
        <p>Les types d'informations personnelles que nous collectons dépendent de votre utilisation du site :</p>
        <ul>
            <li><strong>Coordonnées</strong> : nom, numéro de téléphone, adresse e-mail.</li>
            <li><strong>Informations de commande</strong> : nom, adresse de facturation, confirmation de paiement, email, numéro de téléphone.</li>
            <li><strong>Données de transaction</strong> : coordonnées bancaires, informations de paiement.</li>
            <li><strong>Service client</strong> : contenu de vos messages via notre formulaire de contact.</li>
        </ul>
        <p>Le non-fournissement de certaines données peut limiter votre accès à certaines fonctionnalités.</p>

        <h2>4. Utilisation des données personnelles</h2>
        <ul>
            <li>Gérer les commandes et les paiements.</li>
            <li>Améliorer notre site et nos services (analyse des données de navigation).</li>
            <li>Assurer la sécurité (prévention des fraudes et violations).</li>
        </ul>

        <h2>5. Sécurité des données</h2>
        <p>Nous mettons en œuvre des mesures techniques et organisationnelles appropriées pour protéger vos données. Cependant, aucune méthode n’est infaillible et nous ne pouvons garantir une sécurité absolue, notamment durant la transmission de données.</p>

        <h2>6. Durée de conservation</h2>
        <p>La durée de conservation dépend de nos obligations légales, contractuelles ou opérationnelles (fourniture des services, litiges, etc.).</p>

        <h2>7. Vos droits</h2>
        <p>Selon votre lieu de résidence, vous pouvez bénéficier des droits suivants :</p>
        <ul>
            <li><strong>Droit d’accès</strong> : consulter les données que nous détenons sur vous.</li>
            <li><strong>Droit de suppression</strong> : demander la suppression de vos données.</li>
            <li><strong>Droit de correction</strong> : demander la rectification de vos données.</li>
            <li><strong>Droit à la portabilité</strong> : recevoir une copie de vos données.</li>
            <li><strong>Droit d’opposition</strong> : refuser la vente, le partage ou l'utilisation à des fins de publicité ciblée.</li>
            <li><strong>Restriction du traitement</strong> : demander la limitation du traitement de vos données.</li>
            <li><strong>Retrait du consentement</strong> : retirer votre consentement à tout moment.</li>
        </ul>
        <p>Nous pourrons vous demander des informations supplémentaires pour vérifier votre identité avant de répondre à votre demande. Vous pouvez aussi désigner un mandataire autorisé.</p>

        <h2>8. Exercer vos droits</h2>
        <p>Pour exercer vos droits, contactez-nous à l’adresse suivante : <strong>[email protected]</strong>.</p>

        <h2>9. Contact</h2>
        <p>Pour toute question sur cette politique ou l’exercice de vos droits, contactez-nous par email à <strong>[email protected]</strong> ou via le formulaire de contact.</p>

        <p><strong>Dernière mise à jour :</strong> 18/05/2025</p>

        <p>En utilisant notre site, vous acceptez les termes de cette politique de confidentialité.</p>
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
        return "index/privacy_policy.html.twig";
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

{% block title %}Politique de confidentialité{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <h1 class=\"mb-4\">Politique de confidentialité</h1>

        <p>Chez PrèsShop, la protection de vos données personnelles est une priorité. Cette politique de confidentialité a pour but de vous informer sur la manière dont nous collectons, utilisons, protégeons et partageons vos données personnelles lorsque vous utilisez notre site internet. En visitant notre site, vous acceptez les pratiques décrites dans cette politique.</p>

        <h2>1. Responsable du traitement</h2>
        <p>L'entreprise PrèsShop (ci-après « nous », « notre » ou « PrèsShop »), enregistrée au Registre du Commerce et des Sociétés de Lille sous le numéro …… et située à Tourcoing, est responsable du traitement des données personnelles collectées sur notre site internet.</p>

        <h2>2. Respect du RGPD</h2>
        <p>PrèsShop s'engage à collecter et traiter vos données personnelles de manière transparente conformément au Règlement Général sur la Protection des Données (« RGPD ») et à la loi « Informatique et Libertés ».</p>

        <h2>3. Informations personnelles collectées</h2>
        <p>Les types d'informations personnelles que nous collectons dépendent de votre utilisation du site :</p>
        <ul>
            <li><strong>Coordonnées</strong> : nom, numéro de téléphone, adresse e-mail.</li>
            <li><strong>Informations de commande</strong> : nom, adresse de facturation, confirmation de paiement, email, numéro de téléphone.</li>
            <li><strong>Données de transaction</strong> : coordonnées bancaires, informations de paiement.</li>
            <li><strong>Service client</strong> : contenu de vos messages via notre formulaire de contact.</li>
        </ul>
        <p>Le non-fournissement de certaines données peut limiter votre accès à certaines fonctionnalités.</p>

        <h2>4. Utilisation des données personnelles</h2>
        <ul>
            <li>Gérer les commandes et les paiements.</li>
            <li>Améliorer notre site et nos services (analyse des données de navigation).</li>
            <li>Assurer la sécurité (prévention des fraudes et violations).</li>
        </ul>

        <h2>5. Sécurité des données</h2>
        <p>Nous mettons en œuvre des mesures techniques et organisationnelles appropriées pour protéger vos données. Cependant, aucune méthode n’est infaillible et nous ne pouvons garantir une sécurité absolue, notamment durant la transmission de données.</p>

        <h2>6. Durée de conservation</h2>
        <p>La durée de conservation dépend de nos obligations légales, contractuelles ou opérationnelles (fourniture des services, litiges, etc.).</p>

        <h2>7. Vos droits</h2>
        <p>Selon votre lieu de résidence, vous pouvez bénéficier des droits suivants :</p>
        <ul>
            <li><strong>Droit d’accès</strong> : consulter les données que nous détenons sur vous.</li>
            <li><strong>Droit de suppression</strong> : demander la suppression de vos données.</li>
            <li><strong>Droit de correction</strong> : demander la rectification de vos données.</li>
            <li><strong>Droit à la portabilité</strong> : recevoir une copie de vos données.</li>
            <li><strong>Droit d’opposition</strong> : refuser la vente, le partage ou l'utilisation à des fins de publicité ciblée.</li>
            <li><strong>Restriction du traitement</strong> : demander la limitation du traitement de vos données.</li>
            <li><strong>Retrait du consentement</strong> : retirer votre consentement à tout moment.</li>
        </ul>
        <p>Nous pourrons vous demander des informations supplémentaires pour vérifier votre identité avant de répondre à votre demande. Vous pouvez aussi désigner un mandataire autorisé.</p>

        <h2>8. Exercer vos droits</h2>
        <p>Pour exercer vos droits, contactez-nous à l’adresse suivante : <strong>[email protected]</strong>.</p>

        <h2>9. Contact</h2>
        <p>Pour toute question sur cette politique ou l’exercice de vos droits, contactez-nous par email à <strong>[email protected]</strong> ou via le formulaire de contact.</p>

        <p><strong>Dernière mise à jour :</strong> 18/05/2025</p>

        <p>En utilisant notre site, vous acceptez les termes de cette politique de confidentialité.</p>
    </div>
{% endblock %}
", "index/privacy_policy.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\index\\privacy_policy.html.twig");
    }
}
