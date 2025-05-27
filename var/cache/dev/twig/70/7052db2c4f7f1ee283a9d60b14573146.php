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

/* categorie/index.html.twig */
class __TwigTemplate_ae30d4614eb70ea9dbbe64bee145c7c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/index.html.twig", 1);
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

        yield "Liste des catégories";
        
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
        yield "  <br/>
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">

    <button type=\"button\" class=\"btn btn-primary mb-3\" data-bs-toggle=\"modal\" data-bs-target=\"#modalAddCategorie\">
        Ajouter une catégorie
    </button>

 <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            yield "            <tr>
                <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "nom", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                <td>
                    <button class=\"btn btn-info btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#modalCategorieShow";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 31), "html", null, true);
            yield "\">
                        <i class=\"fas fa-eye\"></i>
                    </button>

                    <button class=\"btn btn-warning btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#modalCategorieEdit";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "\">
                        <i class=\"fas fa-edit\"></i>
                    </button>
                    <form method=\"post\" action=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" style=\"display:inline-block\" onsubmit=\"return confirm('Êtes-vous sûr ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 39))), "html", null, true);
            yield "\">
                        <button class=\"btn btn-danger btn-sm\">  <i class=\"fas fa-trash\"></i></button>
                    </form>
                </td>
            </tr>
              <div class=\"modal fade\" id=\"modalCategorieShow";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Détails de la catégorie</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p><strong>ID :</strong> ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 52), "html", null, true);
            yield "</p>
                <p><strong>Nom :</strong> ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "nom", [], "any", false, false, false, 53), "html", null, true);
            yield "</p>
                <p><strong>Description :</strong> ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 54), "html", null, true);
            yield "</p>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"modalCategorieEdit";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <form action=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" method=\"POST\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Modifier la catégorie</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"mb-3\">
                        <label for=\"nom\" class=\"form-label\">Nom</label>
                        <input type=\"text\" class=\"form-control\" name=\"nom\" value=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "nom", [], "any", false, false, false, 73), "html", null, true);
            yield "\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"description\" class=\"form-label\">Description</label>
                        <textarea class=\"form-control\" name=\"description\" rows=\"3\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 77), "html", null, true);
            yield "</textarea>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            yield "            <tr><td colspan=\"4\">Aucune catégorie trouvée.</td></tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "        </tbody>
    </table>
    </div>
    </div>

    <div class=\"modal fade\" id=\"modalCategorie\" tabindex=\"-1\" aria-labelledby=\"modalCategorieLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\" id=\"modalCategorieContent\">
      <!-- Contenu du formulaire chargé en AJAX -->
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"modalAddCategorie\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Ajouter une catégorie</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>

            <form action=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_new");
        yield "\" method=\"POST\">
                <div class=\"modal-body\">
                    <div class=\"mb-3\">
                        <label for=\"nom\" class=\"form-label\">Nom</label>
                        <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"description\" class=\"form-label\">Description</label>
                        <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"3\"></textarea>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                </div>
            </form>

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
        return "categorie/index.html.twig";
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
        return array (  268 => 112,  245 => 91,  237 => 88,  221 => 77,  214 => 73,  203 => 65,  197 => 62,  186 => 54,  182 => 53,  178 => 52,  167 => 44,  159 => 39,  155 => 38,  149 => 35,  142 => 31,  137 => 29,  133 => 28,  129 => 27,  126 => 26,  121 => 25,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des catégories{% endblock %}

{% block body %}
  <br/>
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">

    <button type=\"button\" class=\"btn btn-primary mb-3\" data-bs-toggle=\"modal\" data-bs-target=\"#modalAddCategorie\">
        Ajouter une catégorie
    </button>

 <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td>{{ category.id }}</td>
                <td>{{ category.nom }}</td>
                <td>{{ category.description }}</td>
                <td>
                    <button class=\"btn btn-info btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#modalCategorieShow{{ category.id }}\">
                        <i class=\"fas fa-eye\"></i>
                    </button>

                    <button class=\"btn btn-warning btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#modalCategorieEdit{{ category.id }}\">
                        <i class=\"fas fa-edit\"></i>
                    </button>
                    <form method=\"post\" action=\"{{ path('categorie_delete', {'id': category.id}) }}\" style=\"display:inline-block\" onsubmit=\"return confirm('Êtes-vous sûr ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ category.id) }}\">
                        <button class=\"btn btn-danger btn-sm\">  <i class=\"fas fa-trash\"></i></button>
                    </form>
                </td>
            </tr>
              <div class=\"modal fade\" id=\"modalCategorieShow{{ category.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Détails de la catégorie</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p><strong>ID :</strong> {{ category.id }}</p>
                <p><strong>Nom :</strong> {{ category.nom }}</p>
                <p><strong>Description :</strong> {{ category.description }}</p>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"modalCategorieEdit{{ category.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <form action=\"{{ path('categorie_edit', {'id': category.id}) }}\" method=\"POST\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Modifier la catégorie</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"mb-3\">
                        <label for=\"nom\" class=\"form-label\">Nom</label>
                        <input type=\"text\" class=\"form-control\" name=\"nom\" value=\"{{ category.nom }}\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"description\" class=\"form-label\">Description</label>
                        <textarea class=\"form-control\" name=\"description\" rows=\"3\">{{ category.description }}</textarea>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
        {% else %}
            <tr><td colspan=\"4\">Aucune catégorie trouvée.</td></tr>

        {% endfor %}
        </tbody>
    </table>
    </div>
    </div>

    <div class=\"modal fade\" id=\"modalCategorie\" tabindex=\"-1\" aria-labelledby=\"modalCategorieLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\" id=\"modalCategorieContent\">
      <!-- Contenu du formulaire chargé en AJAX -->
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"modalAddCategorie\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Ajouter une catégorie</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>

            <form action=\"{{ path('categorie_new') }}\" method=\"POST\">
                <div class=\"modal-body\">
                    <div class=\"mb-3\">
                        <label for=\"nom\" class=\"form-label\">Nom</label>
                        <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"description\" class=\"form-label\">Description</label>
                        <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"3\"></textarea>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                </div>
            </form>

        </div>
    </div>
</div>
{% endblock %}
", "categorie/index.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\categorie\\index.html.twig");
    }
}
