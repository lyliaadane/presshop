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

/* commandes/index.html.twig */
class __TwigTemplate_7b8a60401826fc74dde08e45655f2fa6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commandes/index.html.twig", 2);
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

        yield "Commandes";
        
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
        yield "<style>
</style>

<body>
    <!-- Cart Page Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">Nom Client</th>
                            <th scope=\"col\">Date Récupération</th>
                            <th scope=\"col\">Statut</th>
                            <th scope=\"col\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 27
            yield "                            ";
            $context["rowClass"] = "";
            // line 28
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 28) == 0)) {
                // line 29
                yield "                                ";
                $context["rowClass"] = "table-danger";
                // line 30
                yield "                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 30) == 1)) {
                // line 31
                yield "                                ";
                $context["rowClass"] = "table-warning";
                // line 32
                yield "                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 32) == 2)) {
                // line 33
                yield "                                ";
                $context["rowClass"] = "table-success";
                // line 34
                yield "                            ";
            }
            // line 35
            yield "                            <tr class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 35, $this->source); })()), "html", null, true);
            yield "\">
                                ";
            // line 36
            $context["nomStatut"] = "";
            // line 37
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 37) == 0)) {
                // line 38
                yield "                                    ";
                $context["nomStatut"] = "En attente";
                // line 39
                yield "                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 39) == 1)) {
                // line 40
                yield "                                    ";
                $context["nomStatut"] = "Prête";
                // line 41
                yield "                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 41) == 2)) {
                // line 42
                yield "                                    ";
                $context["nomStatut"] = "Récupérée";
                // line 43
                yield "                                ";
            }
            // line 44
            yield "                                <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                                <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "nomClient", [], "any", false, false, false, 45), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prenomClient", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                                <td>";
            // line 46
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "dateRecuperation", [], "any", false, false, false, 46)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "dateRecuperation", [], "any", false, false, false, 46), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                                <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nomStatut"]) || array_key_exists("nomStatut", $context) ? $context["nomStatut"] : (function () { throw new RuntimeError('Variable "nomStatut" does not exist.', 47, $this->source); })()), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 49
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 49) == 1)) {
                // line 50
                yield "                                        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_recupere", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                yield "\" method=\"post\" style=\"display: inline;\">
                                            <button type=\"submit\" class=\"btn btn-success btn-sm\">
                                                <i class=\"fas fa-check\"></i>
                                            </button>
                                        </form>

                                    ";
            }
            // line 57
            yield "                                    <button type=\"button\" class=\"btn btn-info btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#modalCommande";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye\"></i>
                                    </button>
                                     <form action=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_annule", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\" method=\"post\" style=\"display: inline;  onclick=\"return confirm('Voulez-vous vraiment supprimer cette commande ?');\"\">
                                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                   
                            
                                </td>
                            </tr>

                            <!-- Modal Commande -->
                            <div class=\"modal fade\" id=\"modalCommande";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 71), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"modalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 71), "html", null, true);
            yield "\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-lg\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"modalLabel";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 75), "html", null, true);
            yield "\">Détails de la Commande ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 75), "html", null, true);
            yield "</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <!-- Informations client -->
                                            <h5 class=\"mb-3\">Informations Client</h5>
                                            <p><strong>Nom :</strong> ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "nomClient", [], "any", false, false, false, 81), "html", null, true);
            yield "</p>
                                            <p><strong>Prénom :</strong> ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prenomClient", [], "any", false, false, false, 82), "html", null, true);
            yield "</p>
                                            <p><strong>Email :</strong> ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "mailClient", [], "any", false, false, false, 83), "html", null, true);
            yield "</p>
                                            <p><strong>Téléphone :</strong> ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "telephoneClient", [], "any", false, false, false, 84), "html", null, true);
            yield "</p>
                                            <p><strong>Date/Heure de récupération :</strong> ";
            // line 85
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "dateRecuperation", [], "any", false, false, false, 85)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "dateRecuperation", [], "any", false, false, false, 85), "d/m/Y H:i"), "html", null, true)) : ("Non définie"));
            yield "</p>
                                            <p><strong>Commentaires :</strong> ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "commentaires", [], "any", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "commentaires", [], "any", false, false, false, 86), "Aucun")) : ("Aucun")), "html", null, true);
            yield "</p>

<!-- Produits commandés -->
<h5 class=\"mt-4\">Produits Commandés</h5>
";
            // line 90
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "commandeProduits", [], "any", false, false, false, 90))) {
                // line 91
                yield "    <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_quantite", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 91)]), "html", null, true);
                yield "\" method=\"post\">
        <input type=\"hidden\" name=\"commande_id\" value=\"";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 92), "html", null, true);
                yield "\">
       <!-- <input type=\"hidden\" id=\"total-commande-input-";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 93), "html", null, true);
                yield "\" name=\"total_commande\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "commandeProduits", [], "any", false, false, false, 93), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 93, $this->source); })()), "produit", [], "any", false, false, false, 93), "prix", [], "any", false, false, false, 93) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 93, $this->source); })()), "quantite", [], "any", false, false, false, 93)); }), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return ((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 93, $this->source); })()) + (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 93, $this->source); })())); }), "html", null, true);
                yield "\"> -->
        ";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "commandeProduits", [], "any", false, false, false, 94));
                foreach ($context['_seq'] as $context["_key"] => $context["produitCommande"]) {
                    // line 95
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 95) == 0)) {
                        // line 96
                        yield "                <li class=\"list-group-item d-flex align-items-center gap-3\">
                    <input type=\"text\" class=\"form-control flex-grow-1\" value=\"";
                        // line 97
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "produit", [], "any", false, false, false, 97), "nom", [], "any", false, false, false, 97), "html", null, true);
                        yield "\" disabled>
                    <input type=\"number\" 
                           class=\"form-control flex-grow-1 produit-quantite\" 
                           name=\"quantite[";
                        // line 100
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "produit", [], "any", false, false, false, 100), "id", [], "any", false, false, false, 100), "html", null, true);
                        yield "]\" 
                           value=\"";
                        // line 101
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "quantite", [], "any", false, false, false, 101), "html", null, true);
                        yield "\"  
                           min=\"1\" 
                           required
                           data-prix=\"";
                        // line 104
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "produit", [], "any", false, false, false, 104), "prix", [], "any", false, false, false, 104), "html", null, true);
                        yield "\">
                </li>
            ";
                    } else {
                        // line 107
                        yield "                <li class=\"list-group-item d-flex align-items-center gap-3\">
                    <input type=\"text\" class=\"form-control flex-grow-1\" value=\"";
                        // line 108
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "produit", [], "any", false, false, false, 108), "nom", [], "any", false, false, false, 108), "html", null, true);
                        yield "\" disabled>
                    <input type=\"number\" class=\"form-control flex-grow-1\" value=\"";
                        // line 109
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produitCommande"], "quantite", [], "any", false, false, false, 109), "html", null, true);
                        yield "\" disabled>
                </li>
            ";
                    }
                    // line 112
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['produitCommande'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                yield "        
        <h4 class=\"text-primary text-end\">Total :  
            <span id=\"total-commande-";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 115), "html", null, true);
                yield "\">
                ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "commandeProduits", [], "any", false, false, false, 116), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 116, $this->source); })()), "produit", [], "any", false, false, false, 116), "prix", [], "any", false, false, false, 116) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 116, $this->source); })()), "quantite", [], "any", false, false, false, 116)); }), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return ((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 116, $this->source); })()) + (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 116, $this->source); })())); }), 2, ".", ","), "html", null, true);
                yield " €
            </span>
        </h4>

       
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
             ";
                // line 123
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 123) == 0)) {
                    // line 124
                    yield "
            <button type=\"submit\" class=\"btn btn-success\">Commande Prête</button>
            ";
                }
                // line 127
                yield "        </div>

";
            } else {
                // line 130
                yield "    <p class=\"text-muted\">Aucun produit commandé.</p>
";
            }
            // line 132
            yield "



                                    </div>
                                </div>
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        document.querySelectorAll('.produit-quantite').forEach(function(input) {
            input.addEventListener('input', function() {
                const modalBody = this.closest('.modal-body');
                const commandeId = modalBody.querySelector('[id^=\"total-commande\"]').id;
                recalculerTotal(modalBody, commandeId);
            });
        });

        function recalculerTotal(modalBody, totalElementId) {
            let total = 0;
            const quantites = modalBody.querySelectorAll('.produit-quantite');
            quantites.forEach(function(input) {
                const prix = parseFloat(input.getAttribute('data-prix')); 
                const quantite = parseInt(input.value);
                if (!isNaN(prix) && !isNaN(quantite)) {
                    total += prix * quantite;
                }
            });
            document.getElementById(totalElementId).textContent = total.toFixed(2) + \" €\";
           /*  const totalInput = modalBody.querySelector('[id^=\"total-commande-input\"]');
            if (totalInput) {
                totalInput.value = total.toFixed(2);
            }*/
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
        return "commandes/index.html.twig";
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
        return array (  394 => 141,  380 => 132,  376 => 130,  371 => 127,  366 => 124,  364 => 123,  354 => 116,  350 => 115,  346 => 113,  340 => 112,  334 => 109,  330 => 108,  327 => 107,  321 => 104,  315 => 101,  311 => 100,  305 => 97,  302 => 96,  299 => 95,  295 => 94,  289 => 93,  285 => 92,  280 => 91,  278 => 90,  271 => 86,  267 => 85,  263 => 84,  259 => 83,  255 => 82,  251 => 81,  240 => 75,  231 => 71,  217 => 60,  210 => 57,  199 => 50,  197 => 49,  192 => 47,  188 => 46,  182 => 45,  177 => 44,  174 => 43,  171 => 42,  168 => 41,  165 => 40,  162 => 39,  159 => 38,  156 => 37,  154 => 36,  149 => 35,  146 => 34,  143 => 33,  140 => 32,  137 => 31,  134 => 30,  131 => 29,  128 => 28,  125 => 27,  121 => 26,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Commandes{% endblock %}

{% block body %}
<style>
</style>

<body>
    <!-- Cart Page Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th scope=\"col\">ID</th>
                            <th scope=\"col\">Nom Client</th>
                            <th scope=\"col\">Date Récupération</th>
                            <th scope=\"col\">Statut</th>
                            <th scope=\"col\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for commande in commandes %}
                            {% set rowClass = '' %}
                            {% if commande.statut == 0 %}
                                {% set rowClass = 'table-danger' %}
                            {% elseif commande.statut == 1 %}
                                {% set rowClass = 'table-warning' %}
                            {% elseif commande.statut == 2 %}
                                {% set rowClass = 'table-success' %}
                            {% endif %}
                            <tr class=\"{{ rowClass }}\">
                                {% set nomStatut = '' %}
                                {% if commande.statut == 0 %}
                                    {% set nomStatut = 'En attente' %}
                                {% elseif commande.statut == 1 %}
                                    {% set nomStatut = 'Prête' %}
                                {% elseif commande.statut == 2 %}
                                    {% set nomStatut = 'Récupérée' %}
                                {% endif %}
                                <td>{{ commande.id }}</td>
                                <td>{{ commande.nomClient }} {{ commande.prenomClient }}</td>
                                <td>{{ commande.dateRecuperation ? commande.dateRecuperation|date('Y-m-d H:i:s') : '' }}</td>
                                <td>{{ nomStatut }}</td>
                                <td>
                                    {% if commande.statut == 1 %}
                                        <form action=\"{{ path('commande_recupere', {'id': commande.id}) }}\" method=\"post\" style=\"display: inline;\">
                                            <button type=\"submit\" class=\"btn btn-success btn-sm\">
                                                <i class=\"fas fa-check\"></i>
                                            </button>
                                        </form>

                                    {% endif %}
                                    <button type=\"button\" class=\"btn btn-info btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#modalCommande{{ commande.id }}\">
                                        <i class=\"fas fa-eye\"></i>
                                    </button>
                                     <form action=\"{{ path('commande_annule', {'id': commande.id}) }}\" method=\"post\" style=\"display: inline;  onclick=\"return confirm('Voulez-vous vraiment supprimer cette commande ?');\"\">
                                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                   
                            
                                </td>
                            </tr>

                            <!-- Modal Commande -->
                            <div class=\"modal fade\" id=\"modalCommande{{ commande.id }}\" tabindex=\"-1\" aria-labelledby=\"modalLabel{{ commande.id }}\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-lg\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"modalLabel{{ commande.id }}\">Détails de la Commande {{ commande.id }}</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <!-- Informations client -->
                                            <h5 class=\"mb-3\">Informations Client</h5>
                                            <p><strong>Nom :</strong> {{ commande.nomClient }}</p>
                                            <p><strong>Prénom :</strong> {{ commande.prenomClient }}</p>
                                            <p><strong>Email :</strong> {{ commande.mailClient }}</p>
                                            <p><strong>Téléphone :</strong> {{ commande.telephoneClient }}</p>
                                            <p><strong>Date/Heure de récupération :</strong> {{ commande.dateRecuperation ? commande.dateRecuperation|date('d/m/Y H:i') : 'Non définie' }}</p>
                                            <p><strong>Commentaires :</strong> {{ commande.commentaires|default('Aucun') }}</p>

<!-- Produits commandés -->
<h5 class=\"mt-4\">Produits Commandés</h5>
{% if commande.commandeProduits is not empty %}
    <form action=\"{{ path('update_quantite', {'id': commande.id}) }}\" method=\"post\">
        <input type=\"hidden\" name=\"commande_id\" value=\"{{ commande.id }}\">
       <!-- <input type=\"hidden\" id=\"total-commande-input-{{ commande.id }}\" name=\"total_commande\" value=\"{{ commande.commandeProduits | map(p => p.produit.prix * p.quantite) | reduce((a, b) => a + b) }}\"> -->
        {% for produitCommande in commande.commandeProduits %}
            {% if commande.statut == 0 %}
                <li class=\"list-group-item d-flex align-items-center gap-3\">
                    <input type=\"text\" class=\"form-control flex-grow-1\" value=\"{{ produitCommande.produit.nom }}\" disabled>
                    <input type=\"number\" 
                           class=\"form-control flex-grow-1 produit-quantite\" 
                           name=\"quantite[{{ produitCommande.produit.id }}]\" 
                           value=\"{{ produitCommande.quantite }}\"  
                           min=\"1\" 
                           required
                           data-prix=\"{{ produitCommande.produit.prix }}\">
                </li>
            {% else %}
                <li class=\"list-group-item d-flex align-items-center gap-3\">
                    <input type=\"text\" class=\"form-control flex-grow-1\" value=\"{{ produitCommande.produit.nom }}\" disabled>
                    <input type=\"number\" class=\"form-control flex-grow-1\" value=\"{{ produitCommande.quantite }}\" disabled>
                </li>
            {% endif %}
        {% endfor %}
        
        <h4 class=\"text-primary text-end\">Total :  
            <span id=\"total-commande-{{ commande.id }}\">
                {{ commande.commandeProduits | map(p => p.produit.prix * p.quantite) | reduce((a, b) => a + b) | number_format(2, '.', ',') }} €
            </span>
        </h4>

       
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
             {% if commande.statut == 0 %}

            <button type=\"submit\" class=\"btn btn-success\">Commande Prête</button>
            {% endif %}
        </div>

{% else %}
    <p class=\"text-muted\">Aucun produit commandé.</p>
{% endif %}




                                    </div>
                                </div>
                            </div>

                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        document.querySelectorAll('.produit-quantite').forEach(function(input) {
            input.addEventListener('input', function() {
                const modalBody = this.closest('.modal-body');
                const commandeId = modalBody.querySelector('[id^=\"total-commande\"]').id;
                recalculerTotal(modalBody, commandeId);
            });
        });

        function recalculerTotal(modalBody, totalElementId) {
            let total = 0;
            const quantites = modalBody.querySelectorAll('.produit-quantite');
            quantites.forEach(function(input) {
                const prix = parseFloat(input.getAttribute('data-prix')); 
                const quantite = parseInt(input.value);
                if (!isNaN(prix) && !isNaN(quantite)) {
                    total += prix * quantite;
                }
            });
            document.getElementById(totalElementId).textContent = total.toFixed(2) + \" €\";
           /*  const totalInput = modalBody.querySelector('[id^=\"total-commande-input\"]');
            if (totalInput) {
                totalInput.value = total.toFixed(2);
            }*/
        }
    });
</script>

{% endblock %}
", "commandes/index.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\commandes\\index.html.twig");
    }
}
