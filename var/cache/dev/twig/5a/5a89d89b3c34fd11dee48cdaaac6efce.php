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

/* index/index.html.twig */
class __TwigTemplate_804a0e9e9d61b75a954f5c32ef1eb173 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
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

        yield "Accueil";
        
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
    <div class=\"container-fluid py-3 mb-4 hero-header\" style=\" background: linear-gradient(rgba(248, 223, 173, 0.1), rgba(248, 223, 173, 0.1)), url(img/hero-img.jpg);\">
        <div class=\"container py-5\">
            <div class=\"row g-5 align-items-center\">
                <div class=\"col-md-12 col-lg-7\">
                    <h4 class=\"mb-3 text-secondary\"></h4>
                    <img src=\"img/logo-bg.png\" class=\"img-fluid w-50 h-50 \">
                </div>
                <div class=\"col-md-12 col-lg-5\">
                    <div id=\"carouselId\" class=\"carousel slide position-relative\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-inner\" role=\"listbox\">
                            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 17, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 18
            yield "                                <div class=\"carousel-item ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 18)) {
                yield "active";
            }
            yield " rounded\">
                                    <img src=\"img/hero-img-";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19) % 2) + 1), "html", null, true);
            yield ".jpg\" class=\"img-fluid w-100 h-100 rounded\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 19), "html", null, true);
            yield "\">
                                    <a href=\"\" class=\"btn px-4 py-2 text-white rounded\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 20), "html", null, true);
            yield "</a>
                                </div>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "                        </div>
                        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Previous</span>
                        </button>
                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container-fluid featurs py-5\">
        <div class=\"container py-5\">
            <div class=\"row g-4\">
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"featurs-item text-center rounded bg-light p-4\">
                        <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                            <i class=\"fas fa-box fa-3x text-white\"></i>
                        </div>
                        <div class=\"featurs-content text-center\">
                            <h5>Point relais</h5>
                          
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"featurs-item text-center rounded bg-light p-4\">
                        <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                            <i class=\"fas fa-user-shield fa-3x text-white\"></i>
                        </div>
                        <div class=\"featurs-content text-center\">
                            <h5>Paiement Sécurisé</h5>
                            
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"featurs-item text-center rounded bg-light p-4\">
                        <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                            <i class=\"fas fa-exchange-alt fa-3x text-white\"></i>
                        </div>
                        <div class=\"featurs-content text-center\">
                            <h5>Transferts d'argent</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"featurs-item text-center rounded bg-light p-4\">
                        <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                            <i class=\"fa fa-phone-alt fa-3x text-white\"></i>
                        </div>
                        <div class=\"featurs-content text-center\">
                            <h5>Support 24/7</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Fruits Shop Start-->
        <div class=\"container-fluid fruite py-5\">
        <div class=\"container py-5\">
            <div class=\"tab-class text-center\">
                <div class=\"row g-4\">
                    <div class=\"col-lg-4 text-start\">
                        <h1>Nos Produits</h1>
                    </div>
                    <div class=\"col-lg-8 text-end\">
                        <ul class=\"nav nav-pills d-inline-flex text-center mb-5\">
                            <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill active\" data-bs-toggle=\"pill\" href=\"#tab-all\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">All Products</span>
                                </a>
                            </li>
                            ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 102
            yield "                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 103), "html", null, true);
            yield "\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 104), "html", null, true);
            yield "</span>
                                    </a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "                        </ul>
                    </div>
                </div>
                <div class=\"tab-content\">
                    <div id=\"tab-all\" class=\"tab-pane fade show p-0 active\">
                        <div class=\"row g-4\">
                            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 115
            yield "                                <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                    <div class=\"rounded position-relative fruite-item\">
                                        <div class=\"fruite-img\">
                                            <img src=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 118))), "html", null, true);
            yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 118), "html", null, true);
            yield "\">
                                        </div>
                                        <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idCategorie", [], "any", false, false, false, 120), "nom", [], "any", false, false, false, 120), "html", null, true);
            yield "</div>
                                        <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                            <h4>";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 122), "html", null, true);
            yield "</h4>
                                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                <p class=\"text-dark fs-5 fw-bold mb-0\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 124), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "uniteVente", [], "any", false, false, false, 124), "html", null, true);
            yield " €</p>
                                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                    <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Ajouter au panier
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "                        </div>
                        <div class=\"pagination justify-content-center mt-4\">
                            ";
        // line 135
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 135, $this->source); })()));
        yield "
                        </div>
                    </div>
                    ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 138, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 139
            yield "                        <div id=\"tab-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 139), "html", null, true);
            yield "\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produitsParCategorie"]) || array_key_exists("produitsParCategorie", $context) ? $context["produitsParCategorie"] : (function () { throw new RuntimeError('Variable "produitsParCategorie" does not exist.', 141, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 141), [], "array", false, false, false, 141));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 142
                yield "                                    <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                        <div class=\"rounded position-relative fruite-item\">
                                            <div class=\"fruite-img\">
                                                <img src=\"";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 145))), "html", null, true);
                yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 145), "html", null, true);
                yield "\">
                                            </div>
                                            <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 147), "html", null, true);
                yield "</div>
                                            <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                <h4>";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 149), "html", null, true);
                yield "</h4>
                                                <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                    <p class=\"text-dark fs-5 fw-bold mb-0\">";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 151), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "uniteVente", [], "any", false, false, false, 151), "html", null, true);
                yield " €</p>
                                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                        <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            yield "                            </div>
                            <div class=\"pagination justify-content-center mt-4\">
                                ";
            // line 162
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["produitsParCategorie"]) || array_key_exists("produitsParCategorie", $context) ? $context["produitsParCategorie"] : (function () { throw new RuntimeError('Variable "produitsParCategorie" does not exist.', 162, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 162), [], "array", false, false, false, 162));
            yield "
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "                </div>
            </div>
        </div>
    </div>

    <div class=\"container-fluid testimonial py-5\">
        <div class=\"container py-5\">
            <div class=\"testimonial-header text-center\">
                <h4 class=\"text-primary\"></h4>
                <h1 class=\"display-5 mb-5 text-dark\">Ce qu'ils disent de nous !</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel\">

             ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 179, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 180
            yield "                <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                    <div class=\"position-relative\">
                        <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                        <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                            <p class=\"mb-0\">";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 184), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"d-flex align-items-center flex-nowrap\">
                            <div class=\"ms-1 d-block\">
                                <h5 class=\"text-dark\">";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 188), "html", null, true);
            yield "</h5>
                                <div class=\"d-flex pe-5\">
                                    ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 191
                yield "                                        <i class=\"fas fa-star";
                if (($context["i"] > CoreExtension::getAttribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 191))) {
                    yield " text-secondary";
                } else {
                    yield " text-primary";
                }
                yield "\"></i>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        yield "            </div>
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
        return "index/index.html.twig";
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
        return array (  454 => 199,  443 => 193,  430 => 191,  426 => 190,  421 => 188,  414 => 184,  408 => 180,  404 => 179,  389 => 166,  379 => 162,  375 => 160,  358 => 151,  353 => 149,  348 => 147,  341 => 145,  336 => 142,  332 => 141,  326 => 139,  322 => 138,  316 => 135,  312 => 133,  295 => 124,  290 => 122,  285 => 120,  278 => 118,  273 => 115,  269 => 114,  261 => 108,  251 => 104,  247 => 103,  244 => 102,  240 => 101,  160 => 23,  143 => 20,  137 => 19,  130 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

    <div class=\"container-fluid py-3 mb-4 hero-header\" style=\" background: linear-gradient(rgba(248, 223, 173, 0.1), rgba(248, 223, 173, 0.1)), url(img/hero-img.jpg);\">
        <div class=\"container py-5\">
            <div class=\"row g-5 align-items-center\">
                <div class=\"col-md-12 col-lg-7\">
                    <h4 class=\"mb-3 text-secondary\"></h4>
                    <img src=\"img/logo-bg.png\" class=\"img-fluid w-50 h-50 \">
                </div>
                <div class=\"col-md-12 col-lg-5\">
                    <div id=\"carouselId\" class=\"carousel slide position-relative\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-inner\" role=\"listbox\">
                            {% for categorie in categories %}
                                <div class=\"carousel-item {% if loop.first %}active{% endif %} rounded\">
                                    <img src=\"img/hero-img-{{ loop.index % 2 + 1 }}.jpg\" class=\"img-fluid w-100 h-100 rounded\" alt=\"{{ categorie.nom }}\">
                                    <a href=\"\" class=\"btn px-4 py-2 text-white rounded\">{{ categorie.nom }}</a>
                                </div>
                            {% endfor %}
                        </div>
                        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Previous</span>
                        </button>
                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container-fluid featurs py-5\">
        <div class=\"container py-5\">
            <div class=\"row g-4\">
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"featurs-item text-center rounded bg-light p-4\">
                        <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                            <i class=\"fas fa-box fa-3x text-white\"></i>
                        </div>
                        <div class=\"featurs-content text-center\">
                            <h5>Point relais</h5>
                          
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"featurs-item text-center rounded bg-light p-4\">
                        <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                            <i class=\"fas fa-user-shield fa-3x text-white\"></i>
                        </div>
                        <div class=\"featurs-content text-center\">
                            <h5>Paiement Sécurisé</h5>
                            
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"featurs-item text-center rounded bg-light p-4\">
                        <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                            <i class=\"fas fa-exchange-alt fa-3x text-white\"></i>
                        </div>
                        <div class=\"featurs-content text-center\">
                            <h5>Transferts d'argent</h5>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"featurs-item text-center rounded bg-light p-4\">
                        <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                            <i class=\"fa fa-phone-alt fa-3x text-white\"></i>
                        </div>
                        <div class=\"featurs-content text-center\">
                            <h5>Support 24/7</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Fruits Shop Start-->
        <div class=\"container-fluid fruite py-5\">
        <div class=\"container py-5\">
            <div class=\"tab-class text-center\">
                <div class=\"row g-4\">
                    <div class=\"col-lg-4 text-start\">
                        <h1>Nos Produits</h1>
                    </div>
                    <div class=\"col-lg-8 text-end\">
                        <ul class=\"nav nav-pills d-inline-flex text-center mb-5\">
                            <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill active\" data-bs-toggle=\"pill\" href=\"#tab-all\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">All Products</span>
                                </a>
                            </li>
                            {% for categorie in categories %}
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-{{ categorie.id }}\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">{{ categorie.nom }}</span>
                                    </a>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
                <div class=\"tab-content\">
                    <div id=\"tab-all\" class=\"tab-pane fade show p-0 active\">
                        <div class=\"row g-4\">
                            {% for produit in produits %}
                                <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                    <div class=\"rounded position-relative fruite-item\">
                                        <div class=\"fruite-img\">
                                            <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" class=\"img-fluid w-100 rounded-top\" alt=\"{{ produit.nom }}\">
                                        </div>
                                        <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">{{ produit.idCategorie.nom }}</div>
                                        <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                            <h4>{{ produit.nom }}</h4>
                                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                <p class=\"text-dark fs-5 fw-bold mb-0\">{{ produit.prix }} / {{ produit.uniteVente }} €</p>
                                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                    <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Ajouter au panier
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                        <div class=\"pagination justify-content-center mt-4\">
                            {{ knp_pagination_render(produits) }}
                        </div>
                    </div>
                    {% for categorie in categories %}
                        <div id=\"tab-{{ categorie.id }}\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                {% for produit in produitsParCategorie[categorie.id] %}
                                    <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                        <div class=\"rounded position-relative fruite-item\">
                                            <div class=\"fruite-img\">
                                                <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" class=\"img-fluid w-100 rounded-top\" alt=\"{{ produit.nom }}\">
                                            </div>
                                            <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">{{ categorie.nom }}</div>
                                            <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                <h4>{{ produit.nom }}</h4>
                                                <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                    <p class=\"text-dark fs-5 fw-bold mb-0\">{{ produit.prix }} / {{ produit.uniteVente }} €</p>
                                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                        <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                            <div class=\"pagination justify-content-center mt-4\">
                                {{ knp_pagination_render(produitsParCategorie[categorie.id]) }}
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>

    <div class=\"container-fluid testimonial py-5\">
        <div class=\"container py-5\">
            <div class=\"testimonial-header text-center\">
                <h4 class=\"text-primary\"></h4>
                <h1 class=\"display-5 mb-5 text-dark\">Ce qu'ils disent de nous !</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel\">

             {% for review in reviews %}
                <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                    <div class=\"position-relative\">
                        <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                        <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                            <p class=\"mb-0\">{{ review.comment }}</p>
                        </div>
                        <div class=\"d-flex align-items-center flex-nowrap\">
                            <div class=\"ms-1 d-block\">
                                <h5 class=\"text-dark\">{{ review.author }}</h5>
                                <div class=\"d-flex pe-5\">
                                    {% for i in 1..5 %}
                                        <i class=\"fas fa-star{% if i > review.rating %} text-secondary{% else %} text-primary{% endif %}\"></i>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
", "index/index.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\index\\index.html.twig");
    }
}
