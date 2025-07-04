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

/* index/cgv.html.twig */
class __TwigTemplate_d592ae6ede1b640317bd152620e66472 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/cgv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/cgv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/cgv.html.twig", 1);
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

        yield "Conditions Générales de Vente";
        
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
        <h1 class=\"mb-4\">Conditions Générales de Vente (CGV)</h1>

        <p>
            Les présentes Conditions Générales de Vente (CGV) régissent l’ensemble des ventes réalisées via le site internet de PresShop (ci-après « le Site »), exploité par l'entreprise PresShop, domiciliée à Tourcoing. En utilisant le Site et en passant commande, vous acceptez sans réserve les présentes conditions. Veuillez les lire attentivement avant toute commande.
        </p>

        <h2>1. Objet</h2>
        <p>
            Les présentes CGV ont pour objet de définir les droits et obligations des parties dans le cadre de la vente de produits proposés sur le Site. Elles s’appliquent à toutes les commandes passées via le Site, et prévalent sur tout autre document.
        </p>

        <h2>2. Produits</h2>
        <p>
            Les produits proposés à la vente sont décrits avec la plus grande exactitude possible. Toutefois, les photographies et descriptions des produits ne sont pas contractuelles. Nous nous réservons le droit de modifier ou de retirer des produits à tout moment, sans préavis.
        </p>

        <h2>3. Prix</h2>
        <p>
            Les prix des produits sont indiqués en euros (€) toutes taxes comprises (TTC), hors frais de livraison. Nous nous réservons le droit de modifier nos prix à tout moment, mais le prix facturé au client sera celui affiché au moment de la validation de la commande. Les frais de livraison sont calculés lors de la validation de la commande et sont ajoutés au montant total de celle-ci.
        </p>

        <h2>4. Commande</h2>
        <p>
            Le processus de commande est le suivant :
        </p>
        <ul>
            <li>Le client sélectionne les produits qu’il souhaite acheter et les ajoute à son panier.</li>
            <li>Le client valide son panier, entre les informations de livraison et procède au paiement.</li>
            <li>Le client reçoit un email de confirmation de commande.</li>
        </ul>
        <p>
            PresShop se réserve le droit d’annuler ou de refuser toute commande pour des motifs légitimes, notamment en cas de litige avec le client, d’incapacité de paiement, ou d'indisponibilité des produits.
        </p>

        <h2>5. Paiement</h2>
        <p>
            Le paiement des commandes s’effectue en ligne via les moyens de paiement proposés sur le Site (carte bancaire, virement, etc.). Le paiement est sécurisé grâce aux systèmes de cryptage en vigueur. La commande ne sera validée qu’après confirmation du paiement. En cas de refus de la transaction par l’organisme bancaire, la commande sera automatiquement annulée.
        </p>

        <h2>6. Livraison</h2>
        <p>
            Les livraisons sont effectuées à l’adresse indiquée par le client lors de la commande. Les délais de livraison sont estimés et varient en fonction du mode de livraison choisi et de la destination. En cas de retard de livraison, PresShop ne saurait être tenu responsable en cas de force majeure ou de faute imputable au transporteur.
        </p>

        <h2>7. Droit de rétractation</h2>
        <p>
            Conformément aux dispositions légales en vigueur, le client dispose d'un délai de 14 jours à compter de la réception des produits pour exercer son droit de rétractation sans avoir à justifier de motifs ni à payer de pénalités. Pour exercer ce droit, le client doit notifier son intention de se rétracter par email à [email protected].
        </p>
        <p>
            Les produits doivent être retournés dans leur état d'origine et complets, accompagnés de la facture, à l’adresse suivante : [Adresse de retour]. Les frais de retour sont à la charge du client, sauf si le produit reçu est défectueux ou ne correspond pas à la commande.
        </p>
        <p>
            Le remboursement sera effectué dans un délai de 14 jours à compter de la réception des produits retournés.
        </p>

        <h2>8. Garantie et service après-vente</h2>
        <p>
            Les produits vendus sur le Site bénéficient de la garantie légale de conformité et de la garantie contre les vices cachés, conformément aux dispositions légales. En cas de non-conformité ou de vice caché, le client peut retourner le produit et demander soit le remboursement, soit l’échange.
        </p>
        <p>
            Pour toute réclamation concernant un produit défectueux ou non conforme, le client est invité à contacter le service client à l’adresse [email protected].
        </p>

        <h2>9. Responsabilité</h2>
        <p>
            PresShop ne saurait être tenu responsable de l'inexécution ou de la mauvaise exécution du contrat en cas de force majeure, de faute du client ou de tout événement imprévisible et insurmontable rendant impossible l’exécution du contrat.
        </p>
        <p>
            PresShop décline toute responsabilité quant aux éventuels dommages indirects liés à l'utilisation du Site ou à l’achat de produits.
        </p>

        <h2>10. Propriété intellectuelle</h2>
        <p>
            Tous les éléments présents sur le Site (textes, images, graphismes, logos, vidéos, etc.) sont protégés par des droits d'auteur et sont la propriété exclusive de PresShop. Toute reproduction, exploitation, diffusion ou utilisation des éléments du Site, sans l'autorisation écrite préalable de PresShop, est strictement interdite.
        </p>

        <h2>11. Données personnelles</h2>
        <p>
            Les informations personnelles collectées dans le cadre des commandes sont traitées conformément à notre <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy_policy");
        yield "\">Politique de Confidentialité</a>. En utilisant le Site, vous acceptez la collecte et l’utilisation de vos données conformément à cette politique.
        </p>

        <h2>12. Modification des CGV</h2>
        <p>
            PresShop se réserve le droit de modifier les présentes CGV à tout moment. Les CGV applicables sont celles en vigueur au moment de la validation de la commande par le client.
        </p>

        <h2>13. Loi applicable et règlement des litiges</h2>
        <p>
            Les présentes CGV sont soumises à la loi française. En cas de litige, les parties s’efforceront de trouver une solution amiable. À défaut d’accord, le litige sera porté devant les tribunaux compétents du ressort du siège social de PresShop.
        </p>

        <h2>14. Contact</h2>
        <p>
            Pour toute question ou réclamation, le service client de PresShop est disponible par email à l’adresse suivante : [email protected] ou par téléphone au [numéro de téléphone].
        </p>

        <p class=\"mt-4\"><strong>Dernière mise à jour :</strong> 18/05/2025. En passant commande sur notre site, vous acceptez les présentes Conditions Générales de Vente.</p>
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
        return "index/cgv.html.twig";
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
        return array (  181 => 85,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Conditions Générales de Vente{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <h1 class=\"mb-4\">Conditions Générales de Vente (CGV)</h1>

        <p>
            Les présentes Conditions Générales de Vente (CGV) régissent l’ensemble des ventes réalisées via le site internet de PresShop (ci-après « le Site »), exploité par l'entreprise PresShop, domiciliée à Tourcoing. En utilisant le Site et en passant commande, vous acceptez sans réserve les présentes conditions. Veuillez les lire attentivement avant toute commande.
        </p>

        <h2>1. Objet</h2>
        <p>
            Les présentes CGV ont pour objet de définir les droits et obligations des parties dans le cadre de la vente de produits proposés sur le Site. Elles s’appliquent à toutes les commandes passées via le Site, et prévalent sur tout autre document.
        </p>

        <h2>2. Produits</h2>
        <p>
            Les produits proposés à la vente sont décrits avec la plus grande exactitude possible. Toutefois, les photographies et descriptions des produits ne sont pas contractuelles. Nous nous réservons le droit de modifier ou de retirer des produits à tout moment, sans préavis.
        </p>

        <h2>3. Prix</h2>
        <p>
            Les prix des produits sont indiqués en euros (€) toutes taxes comprises (TTC), hors frais de livraison. Nous nous réservons le droit de modifier nos prix à tout moment, mais le prix facturé au client sera celui affiché au moment de la validation de la commande. Les frais de livraison sont calculés lors de la validation de la commande et sont ajoutés au montant total de celle-ci.
        </p>

        <h2>4. Commande</h2>
        <p>
            Le processus de commande est le suivant :
        </p>
        <ul>
            <li>Le client sélectionne les produits qu’il souhaite acheter et les ajoute à son panier.</li>
            <li>Le client valide son panier, entre les informations de livraison et procède au paiement.</li>
            <li>Le client reçoit un email de confirmation de commande.</li>
        </ul>
        <p>
            PresShop se réserve le droit d’annuler ou de refuser toute commande pour des motifs légitimes, notamment en cas de litige avec le client, d’incapacité de paiement, ou d'indisponibilité des produits.
        </p>

        <h2>5. Paiement</h2>
        <p>
            Le paiement des commandes s’effectue en ligne via les moyens de paiement proposés sur le Site (carte bancaire, virement, etc.). Le paiement est sécurisé grâce aux systèmes de cryptage en vigueur. La commande ne sera validée qu’après confirmation du paiement. En cas de refus de la transaction par l’organisme bancaire, la commande sera automatiquement annulée.
        </p>

        <h2>6. Livraison</h2>
        <p>
            Les livraisons sont effectuées à l’adresse indiquée par le client lors de la commande. Les délais de livraison sont estimés et varient en fonction du mode de livraison choisi et de la destination. En cas de retard de livraison, PresShop ne saurait être tenu responsable en cas de force majeure ou de faute imputable au transporteur.
        </p>

        <h2>7. Droit de rétractation</h2>
        <p>
            Conformément aux dispositions légales en vigueur, le client dispose d'un délai de 14 jours à compter de la réception des produits pour exercer son droit de rétractation sans avoir à justifier de motifs ni à payer de pénalités. Pour exercer ce droit, le client doit notifier son intention de se rétracter par email à [email protected].
        </p>
        <p>
            Les produits doivent être retournés dans leur état d'origine et complets, accompagnés de la facture, à l’adresse suivante : [Adresse de retour]. Les frais de retour sont à la charge du client, sauf si le produit reçu est défectueux ou ne correspond pas à la commande.
        </p>
        <p>
            Le remboursement sera effectué dans un délai de 14 jours à compter de la réception des produits retournés.
        </p>

        <h2>8. Garantie et service après-vente</h2>
        <p>
            Les produits vendus sur le Site bénéficient de la garantie légale de conformité et de la garantie contre les vices cachés, conformément aux dispositions légales. En cas de non-conformité ou de vice caché, le client peut retourner le produit et demander soit le remboursement, soit l’échange.
        </p>
        <p>
            Pour toute réclamation concernant un produit défectueux ou non conforme, le client est invité à contacter le service client à l’adresse [email protected].
        </p>

        <h2>9. Responsabilité</h2>
        <p>
            PresShop ne saurait être tenu responsable de l'inexécution ou de la mauvaise exécution du contrat en cas de force majeure, de faute du client ou de tout événement imprévisible et insurmontable rendant impossible l’exécution du contrat.
        </p>
        <p>
            PresShop décline toute responsabilité quant aux éventuels dommages indirects liés à l'utilisation du Site ou à l’achat de produits.
        </p>

        <h2>10. Propriété intellectuelle</h2>
        <p>
            Tous les éléments présents sur le Site (textes, images, graphismes, logos, vidéos, etc.) sont protégés par des droits d'auteur et sont la propriété exclusive de PresShop. Toute reproduction, exploitation, diffusion ou utilisation des éléments du Site, sans l'autorisation écrite préalable de PresShop, est strictement interdite.
        </p>

        <h2>11. Données personnelles</h2>
        <p>
            Les informations personnelles collectées dans le cadre des commandes sont traitées conformément à notre <a href=\"{{ path('privacy_policy') }}\">Politique de Confidentialité</a>. En utilisant le Site, vous acceptez la collecte et l’utilisation de vos données conformément à cette politique.
        </p>

        <h2>12. Modification des CGV</h2>
        <p>
            PresShop se réserve le droit de modifier les présentes CGV à tout moment. Les CGV applicables sont celles en vigueur au moment de la validation de la commande par le client.
        </p>

        <h2>13. Loi applicable et règlement des litiges</h2>
        <p>
            Les présentes CGV sont soumises à la loi française. En cas de litige, les parties s’efforceront de trouver une solution amiable. À défaut d’accord, le litige sera porté devant les tribunaux compétents du ressort du siège social de PresShop.
        </p>

        <h2>14. Contact</h2>
        <p>
            Pour toute question ou réclamation, le service client de PresShop est disponible par email à l’adresse suivante : [email protected] ou par téléphone au [numéro de téléphone].
        </p>

        <p class=\"mt-4\"><strong>Dernière mise à jour :</strong> 18/05/2025. En passant commande sur notre site, vous acceptez les présentes Conditions Générales de Vente.</p>
    </div>
{% endblock %}
", "index/cgv.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\index\\cgv.html.twig");
    }
}
