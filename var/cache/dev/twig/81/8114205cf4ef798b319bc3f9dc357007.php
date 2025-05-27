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

/* produit/gestionProduits.html.twig */
class __TwigTemplate_235015117f50bf1ff1eadb9e13fa1687 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/gestionProduits.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/gestionProduits.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/gestionProduits.html.twig", 1);
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

        yield "Produits index";
        
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
        yield "
    <br/>
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
           <button type=\"button\" class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#modal\">
                <i class=\"fas fa-plus\"></i>
            </button>

            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th scope=\"col\">Produit</th>
                            <th scope=\"col\">Nom</th>
                            <th scope=\"col\">Prix</th>
                            <th scope=\"col\">Unité de vente</th>
                            <th scope=\"col\">Quantité</th>
                            <th scope=\"col\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 28
            yield "                            <tr>
                               <td>
                                    <img src=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 30))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 30), "html", null, true);
            yield "\" style=\"width: 60px; height: 60px; object-fit: cover; border-radius: 50%;\">
                                </td>
                                <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 32), "html", null, true);
            yield " </td>
                                <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                                <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "uniteVente", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                                <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                                <td>
                                    <button type=\"button\" class=\"btn btn-info btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#modalProduit";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 37), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye\"></i>
                                    </button>

                                    <button type=\"button\" class=\"btn btn-warning btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#modalEditProduit";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit\"></i>
                                    </button>

                                    <button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"confirmDelete('";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 45), "html", null, true);
            yield "')\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>

                                    <form id=\"delete-form-";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 49), "html", null, true);
            yield "\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\" method=\"post\" style=\"display: none;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 50))), "html", null, true);
            yield "\">
                                    </form>

                                </td>
                            </tr>
                            <!-- Modal Détail Produit -->
                            <div class=\"modal fade\" id=\"modalProduit";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 56), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\">Détails du Produit</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"text-center mb-3\">
                                                <img src=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 65))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 65), "html", null, true);
            yield "\" class=\"img-thumbnail\" style=\"width: 150px; height: 150px; object-fit: cover;\">
                                            </div>
                                            <p><strong>Nom :</strong> ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 67), "html", null, true);
            yield "</p>
                                            <p><strong>Prix :</strong> ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 68), "html", null, true);
            yield " €</p>
                                            <p><strong>Unité de vente :</strong> ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "uniteVente", [], "any", false, false, false, 69), "html", null, true);
            yield "</p>
                                            <p><strong>Quantité :</strong> ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 70), "html", null, true);
            yield "</p>
                                            <p><strong>Seuil :</strong> ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "seuil", [], "any", false, false, false, 71), "html", null, true);
            yield "</p>
                                            <p><strong>Catégorie :</strong> ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idCategorie", [], "any", false, false, false, 72), "nom", [], "any", false, false, false, 72), "html", null, true);
            yield "</p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Modal Modifier Produit -->
                            <div class=\"modal fade\" id=\"modalEditProduit";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 83), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <form action=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\" method=\"POST\" enctype=\"multipart/form-data\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\">Modifier le Produit</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <div class=\"mb-3 text-center\">
                                                    <img src=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 93))), "html", null, true);
            yield "\" class=\"img-thumbnail\" style=\"width: 100px; height: 100px; object-fit: cover;\">
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"image\" class=\"form-label\">Changer l’image</label>
                                                    <input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\" accept=\"image/*\">
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"nom\" class=\"form-label\">Nom</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"nom\" value=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 101), "html", null, true);
            yield "\" required>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-md-6 mb-3\">
                                                        <label for=\"prix\" class=\"form-label\">Prix</label>
                                                        <input type=\"number\" step=\"0.01\" class=\"form-control\" name=\"prix\" value=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 106), "html", null, true);
            yield "\" required>
                                                    </div>
                                                    <div class=\"col-md-6 mb-3\">
                                                        <label for=\"unite_vente\" class=\"form-label\">Unité de vente</label>
                                                        <input type=\"text\" class=\"form-control\" name=\"unite_vente\" value=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "uniteVente", [], "any", false, false, false, 110), "html", null, true);
            yield "\" required>
                                                    </div>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"categorie\" class=\"form-label\">Catégorie</label>
                                                    <select class=\"form-select\" name=\"categorie_id\" required>
                                                        ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 116, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 117
                yield "                                                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 117), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 117) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idCategorie", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117))) {
                    yield "selected";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 117), "html", null, true);
                yield "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "                                                    </select>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"quantite\" class=\"form-label\">Quantité</label>
                                                    <input type=\"number\" class=\"form-control\" name=\"quantite\" value=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 123), "html", null, true);
            yield "\" required>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"seuil\" class=\"form-label\">Seuil</label>
                                                    <input type=\"number\" class=\"form-control\" name=\"seuil\" value=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "seuil", [], "any", false, false, false, 127), "html", null, true);
            yield "\">
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "                    </tbody>
                </table>
            </div>


            <!-- Modal ajout -->
            <div class=\"modal fade\" id=\"modal\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Ajouter un Produit</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>

                        <form action=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
        yield "\" method=\"POST\" enctype=\"multipart/form-data\">
                            <div class=\"modal-body\">
                                <div class=\"mb-3\">
                                    <label for=\"image\" class=\"form-label\">Image</label>
                                    <input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\" accept=\"image/*\">
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"nom\" class=\"form-label\">Nom</label>
                                    <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" required>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"prix\" class=\"form-label\">Prix</label>
                                        <input type=\"number\" step=\"0.01\" class=\"form-control\" id=\"prix\" name=\"prix\" required>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"unite_vente\" class=\"form-label\">Unité de vente</label>
                                        <input type=\"text\" class=\"form-control\" id=\"unite_vente\" name=\"unite_vente\" required>
                                    </div>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"categorie\" class=\"form-label\">Catégorie</label>
                                    <select class=\"form-select\" id=\"categorie\" name=\"categorie_id\" required>
                                        ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 177
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 177), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 177), "html", null, true);
            yield "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "                                    </select>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"quantite\" class=\"form-label\">Quantité</label>
                                    <input type=\"number\" class=\"form-control\" id=\"quantite\" name=\"quantite\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"seuil\" class=\"form-label\">Seuil</label>
                                    <input type=\"number\" class=\"form-control\" id=\"seuil\" name=\"seuil\">
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            

        </div>
    </div>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Êtes-vous sûr ?',
                text: \"Cette action est irréversible !\",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Oui, supprimer !',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }

    </script>
    
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const produitsEnSeuil = [
            ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 225, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 226
            yield "                ";
            if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 226)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "seuil", [], "any", false, false, false, 226))) && (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 226) <= CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "seuil", [], "any", false, false, false, 226)))) {
                // line 227
                yield "                    { nom: \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 227), "js"), "html", null, true);
                yield "\" },
                ";
            }
            // line 229
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        yield "        ];

        function showToast(index = 0) {
            if (index >= produitsEnSeuil.length) return;

            Swal.fire({
                toast: true,
                position: 'bottom-end',
                icon: 'warning',
                title: 'Limite de stock atteinte pour le produit : ' + produitsEnSeuil[index].nom,
                showConfirmButton: true,
                timer: null,
                timerProgressBar: false,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            }).then(() => {
                // Affiche la suivante quand on ferme celle-ci
                showToast(index + 1);
            });
        }

        if (produitsEnSeuil.length > 0) {
            showToast();
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
        return "produit/gestionProduits.html.twig";
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
        return array (  469 => 230,  463 => 229,  457 => 227,  454 => 226,  450 => 225,  402 => 179,  391 => 177,  387 => 176,  361 => 153,  345 => 139,  327 => 127,  320 => 123,  314 => 119,  299 => 117,  295 => 116,  286 => 110,  279 => 106,  271 => 101,  260 => 93,  250 => 86,  244 => 83,  230 => 72,  226 => 71,  222 => 70,  218 => 69,  214 => 68,  210 => 67,  203 => 65,  191 => 56,  182 => 50,  176 => 49,  169 => 45,  162 => 41,  155 => 37,  150 => 35,  146 => 34,  142 => 33,  138 => 32,  131 => 30,  127 => 28,  123 => 27,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produits index{% endblock %}

{% block body %}

    <br/>
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
           <button type=\"button\" class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#modal\">
                <i class=\"fas fa-plus\"></i>
            </button>

            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th scope=\"col\">Produit</th>
                            <th scope=\"col\">Nom</th>
                            <th scope=\"col\">Prix</th>
                            <th scope=\"col\">Unité de vente</th>
                            <th scope=\"col\">Quantité</th>
                            <th scope=\"col\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for produit in produits %}
                            <tr>
                               <td>
                                    <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" alt=\"{{ produit.nom }}\" style=\"width: 60px; height: 60px; object-fit: cover; border-radius: 50%;\">
                                </td>
                                <td>{{ produit.nom }} </td>
                                <td>{{ produit.prix }}</td>
                                <td>{{ produit.uniteVente }}</td>
                                <td>{{ produit.quantite }}</td>
                                <td>
                                    <button type=\"button\" class=\"btn btn-info btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#modalProduit{{ produit.id }}\">
                                        <i class=\"fas fa-eye\"></i>
                                    </button>

                                    <button type=\"button\" class=\"btn btn-warning btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#modalEditProduit{{ produit.id }}\">
                                        <i class=\"fas fa-edit\"></i>
                                    </button>

                                    <button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"confirmDelete('{{ produit.id }}')\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>

                                    <form id=\"delete-form-{{ produit.id }}\" action=\"{{ path('app_produit_delete', {'id': produit.id}) }}\" method=\"post\" style=\"display: none;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ produit.id) }}\">
                                    </form>

                                </td>
                            </tr>
                            <!-- Modal Détail Produit -->
                            <div class=\"modal fade\" id=\"modalProduit{{ produit.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\">Détails du Produit</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"text-center mb-3\">
                                                <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" alt=\"{{ produit.nom }}\" class=\"img-thumbnail\" style=\"width: 150px; height: 150px; object-fit: cover;\">
                                            </div>
                                            <p><strong>Nom :</strong> {{ produit.nom }}</p>
                                            <p><strong>Prix :</strong> {{ produit.prix }} €</p>
                                            <p><strong>Unité de vente :</strong> {{ produit.uniteVente }}</p>
                                            <p><strong>Quantité :</strong> {{ produit.quantite }}</p>
                                            <p><strong>Seuil :</strong> {{ produit.seuil }}</p>
                                            <p><strong>Catégorie :</strong> {{ produit.idCategorie.nom }}</p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Modal Modifier Produit -->
                            <div class=\"modal fade\" id=\"modalEditProduit{{ produit.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <form action=\"{{ path('app_produit_edit', {'id': produit.id}) }}\" method=\"POST\" enctype=\"multipart/form-data\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\">Modifier le Produit</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <div class=\"mb-3 text-center\">
                                                    <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" class=\"img-thumbnail\" style=\"width: 100px; height: 100px; object-fit: cover;\">
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"image\" class=\"form-label\">Changer l’image</label>
                                                    <input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\" accept=\"image/*\">
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"nom\" class=\"form-label\">Nom</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"nom\" value=\"{{ produit.nom }}\" required>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-md-6 mb-3\">
                                                        <label for=\"prix\" class=\"form-label\">Prix</label>
                                                        <input type=\"number\" step=\"0.01\" class=\"form-control\" name=\"prix\" value=\"{{ produit.prix }}\" required>
                                                    </div>
                                                    <div class=\"col-md-6 mb-3\">
                                                        <label for=\"unite_vente\" class=\"form-label\">Unité de vente</label>
                                                        <input type=\"text\" class=\"form-control\" name=\"unite_vente\" value=\"{{ produit.uniteVente }}\" required>
                                                    </div>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"categorie\" class=\"form-label\">Catégorie</label>
                                                    <select class=\"form-select\" name=\"categorie_id\" required>
                                                        {% for categorie in categories %}
                                                            <option value=\"{{ categorie.id }}\" {% if categorie.id == produit.idCategorie.id %}selected{% endif %}>{{ categorie.nom }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"quantite\" class=\"form-label\">Quantité</label>
                                                    <input type=\"number\" class=\"form-control\" name=\"quantite\" value=\"{{ produit.quantite }}\" required>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"seuil\" class=\"form-label\">Seuil</label>
                                                    <input type=\"number\" class=\"form-control\" name=\"seuil\" value=\"{{ produit.seuil }}\">
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        {% endfor %}
                    </tbody>
                </table>
            </div>


            <!-- Modal ajout -->
            <div class=\"modal fade\" id=\"modal\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Ajouter un Produit</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>

                        <form action=\"{{ path('app_produit_new') }}\" method=\"POST\" enctype=\"multipart/form-data\">
                            <div class=\"modal-body\">
                                <div class=\"mb-3\">
                                    <label for=\"image\" class=\"form-label\">Image</label>
                                    <input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\" accept=\"image/*\">
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"nom\" class=\"form-label\">Nom</label>
                                    <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" required>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"prix\" class=\"form-label\">Prix</label>
                                        <input type=\"number\" step=\"0.01\" class=\"form-control\" id=\"prix\" name=\"prix\" required>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"unite_vente\" class=\"form-label\">Unité de vente</label>
                                        <input type=\"text\" class=\"form-control\" id=\"unite_vente\" name=\"unite_vente\" required>
                                    </div>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"categorie\" class=\"form-label\">Catégorie</label>
                                    <select class=\"form-select\" id=\"categorie\" name=\"categorie_id\" required>
                                        {% for categorie in categories %}
                                        <option value=\"{{ categorie.id }}\">{{ categorie.nom }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"quantite\" class=\"form-label\">Quantité</label>
                                    <input type=\"number\" class=\"form-control\" id=\"quantite\" name=\"quantite\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"seuil\" class=\"form-label\">Seuil</label>
                                    <input type=\"number\" class=\"form-control\" id=\"seuil\" name=\"seuil\">
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            

        </div>
    </div>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Êtes-vous sûr ?',
                text: \"Cette action est irréversible !\",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Oui, supprimer !',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }

    </script>
    
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const produitsEnSeuil = [
            {% for produit in produits %}
                {% if produit.quantite is not null and produit.seuil is not null and produit.quantite <= produit.seuil %}
                    { nom: \"{{ produit.nom|e('js') }}\" },
                {% endif %}
            {% endfor %}
        ];

        function showToast(index = 0) {
            if (index >= produitsEnSeuil.length) return;

            Swal.fire({
                toast: true,
                position: 'bottom-end',
                icon: 'warning',
                title: 'Limite de stock atteinte pour le produit : ' + produitsEnSeuil[index].nom,
                showConfirmButton: true,
                timer: null,
                timerProgressBar: false,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            }).then(() => {
                // Affiche la suivante quand on ferme celle-ci
                showToast(index + 1);
            });
        }

        if (produitsEnSeuil.length > 0) {
            showToast();
        }
    });
</script>
{% endblock %}
", "produit/gestionProduits.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\produit\\gestionProduits.html.twig");
    }
}
