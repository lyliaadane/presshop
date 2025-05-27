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

/* base.html.twig */
class __TwigTemplate_84918c9e6a40489085d5768dbac140d4 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
      
        ";
        // line 9
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 31
        yield "
        ";
        // line 32
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 87
        yield "
    </head>
    <body>
        ";
        // line 90
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 197
        yield "
        ";
        // line 198
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 201
        yield "
        ";
        // line 202
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 233
        yield "
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        yield "            ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
                <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap\" rel=\"stylesheet\"> 

        <!-- Icon Font Stylesheet -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\"/>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

        <!-- Libraries Stylesheet -->
        <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/css/lightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- Template Stylesheet -->
       <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        yield "            ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
           
           <!-- JavaScript Libraries -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/js/lightbox.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>

            <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
            <script src=\"https://js.stripe.com/v3/\"></script>
           


            <!-- Template Javascript -->
            <script>
            ";
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "session", [], "any", false, false, false, 51), "flashbag", [], "any", false, false, false, 51), "has", ["success"], "method", false, false, false, 51)) {
            // line 52
            yield "                setTimeout(function() {
                    // Afficher un pop-up personnalisé avec SweetAlert2
                    Swal.fire({
                        title: 'Succès!',
                        text: \"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "session", [], "any", false, false, false, 56), "flashbag", [], "any", false, false, false, 56), "get", ["success"], "method", false, false, false, 56), 0, [], "array", false, false, false, 56), "html", null, true);
            yield "\",  // Message de succès
                        icon: 'success',  // Icône de succès
                        confirmButtonText: 'Ok',  // Texte du bouton
                        timer: 2000,  // Délai avant que le pop-up disparaisse (en ms)
                        showConfirmButton: true,  // Affiche le bouton de confirmation
                        customClass: {
                            popup: 'my-popup'  // Classe CSS personnalisée pour personnaliser le style
                        }
                    });
                }, 500);
            ";
        }
        // line 67
        yield "            </script>
            <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>

            <script>
                \$(document).ready(function () {
                    \$('.testimonial-carousel').owlCarousel({
                        items: 2,
                        loop: true,
                        margin: 30,
                        nav: true,
                        dots: false,
                        autoplay: true,
                        autoplayTimeout: 5000,
                        autoplayHoverPause: true
                    });
                });
            </script>
  
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 91
        yield "       
        <!-- Navbar start -->
        <div class=\"container-fluid fixed-top\">
            <div class=\"container topbar bg-primary d-none d-lg-block\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"top-info ps-2\">
                        <small class=\"me-3\"><i class=\"fas fa-map-marker-alt me-2 text-secondary\"></i> <a href=\"#\" class=\"text-white\">186 Boulevard Gambetta, 59200 Tourcoing</a></small>
                        <small class=\"me-3\"><i class=\"fas fa-phone me-2 text-secondary\"></i><a href=\"#\" class=\"text-white\">09 54 80 42 35</a></small>
                    </div>
                </div>
            </div>
            ";
        // line 102
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102)) {
            // line 103
            yield "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 104
                yield "                    <div class=\"container px-0\">
                        <nav class=\"navbar navbar-light bg-white navbar-expand-xl\">
                            <a href=\"";
                // line 106
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
                yield "\" class=\"navbar-brand d-flex align-items-center\">
                            <img src=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-bg.png"), "html", null, true);
                yield "\" class=\"img-fluid\" style=\"max-width: 150px; height: auto;\" alt=\"Logo\">
                            </a>

                            <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                                <span class=\"fa fa-bars text-primary\"></span>
                            </button>
                            <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                                <div class=\"navbar-nav mx-auto\">
                                    <a href=\"\" class=\"nav-item nav-link \">Catégories</a>
                                    <a href=\"";
                // line 116
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits");
                yield "\" class=\"nav-item nav-link\">Produits</a>
                                    <a href=\"\" class=\"nav-item nav-link\">Promos</a>
                                    <a href=\"";
                // line 118
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes_index");
                yield "\" class=\"nav-item nav-link\">Commandes</a>
                                    <a href=\"\" class=\"nav-item nav-link\">Comptes</a>
                                </div>
                                <div class=\"d-flex m-3 me-5\">
                                    <div class=\"dropdown my-auto\">
                                        <a href=\"#\" id=\"userDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"fas fa-user fa-2x\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu w-auto\" aria-labelledby=\"userDropdown\" >
                                            <li><a class=\"dropdown-item\" href=\"#\">Informations</a></li>
                                            <li><hr class=\"dropdown-divider\"></li>
                                            <li><a class=\"dropdown-item text-danger\" href=\"#\">Se déconnecter</a></li>
                                        </ul>
                                    </div>
                                </div>   
                            </div>
                        </nav>
                    </div>
                ";
            }
            // line 137
            yield "                 ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYE")) {
                // line 138
                yield "                    <div class=\"container px-0\">
                        <nav class=\"navbar navbar-light bg-white navbar-expand-xl\">
                            <a href=\"";
                // line 140
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
                yield "\" class=\"navbar-brand d-flex align-items-center\">
                            <img src=\"";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-bg.png"), "html", null, true);
                yield "\" class=\"img-fluid\" style=\"max-width: 150px; height: auto;\" alt=\"Logo\">
                            </a>

                            <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                                <span class=\"fa fa-bars text-primary\"></span>
                            </button>
                            <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                                <div class=\"navbar-nav mx-auto\">
                                    <a href=\"";
                // line 149
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes_index");
                yield "\" class=\"nav-item nav-link\">Commandes</a>
                                </div>
                                 <div class=\"d-flex m-3 me-5\">
                                    <div class=\"dropdown my-auto\">
                                        <a href=\"#\" id=\"userDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"fas fa-user fa-2x\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu w-auto\" aria-labelledby=\"userDropdown\" >
                                            <li><a class=\"dropdown-item\" href=\"#\">Informations</a></li>
                                            <li><hr class=\"dropdown-divider\"></li>
                                            <li><a class=\"dropdown-item text-danger\" href=\"#\">Se déconnecter</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                ";
            }
            // line 167
            yield "            ";
        } else {
            yield "   
                <div class=\"container px-0\">
                    <nav class=\"navbar navbar-light bg-white navbar-expand-xl\">
                        <a href=\"";
            // line 170
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
            yield "\" class=\"navbar-brand d-flex align-items-center\">
                        <img src=\"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-bg.png"), "html", null, true);
            yield "\" class=\"img-fluid\" style=\"max-width: 150px; height: auto;\" alt=\"Logo\">
                        </a>

                        <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                            <span class=\"fa fa-bars text-primary\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                            <div class=\"navbar-nav mx-auto\">
                                <a href=\"";
            // line 179
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
            yield "\" class=\"nav-item nav-link active\">Accueil</a>
                                <a href=\"";
            // line 180
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
            yield "\" class=\"nav-item nav-link\">Produits</a>
                                <a href=\"\" class=\"nav-item nav-link\">Promos</a>
                                <a href=\"";
            // line 182
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
            yield "\" class=\"nav-item nav-link\">Contact</a>
                            </div>
                            <div class=\"d-flex m-3 me-0\">
                                <button class=\"btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search text-primary\"></i></button>
                                <a href=\"";
            // line 186
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
            yield "\" class=\"position-relative me-4 my-auto\">
                                    <i class=\"fa fa-shopping-bag fa-2x\"></i>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        ";
        }
        // line 195
        yield "        <div class=\"container-fluid py-5 mb-4 \">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 198
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

        // line 199
        yield "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 202
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 203
        yield "        </div>
        <div class=\"container-fluid bg-light py-3\">
            <div class=\"container-fluid bg-light py-3\">
            <div class=\"container d-flex flex-column align-items-start\">
                <!-- Section Langue -->
                <div class=\"d-flex align-items-center mb-2\">
                    <img src=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/france.png"), "html", null, true);
        yield "\" alt=\"FR\" style=\"width: 20px; height: 15px;\" class=\"me-2\">
                    <span class=\"text-black\">FR/fr</span>
                </div>

                <!-- Liens -->
                <div class=\"d-flex mb-2\">
                    <a href=\"#\" class=\"text-black me-3 text-decoration-none\">PrèsShop</a>
                    ";
        // line 216
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 217
            yield "                        <a href=\"#\" class=\"text-black me-3 text-decoration-none\">Politique de confidentialité</a>
                        <a href=\"#\" class=\"text-black text-decoration-none\">CGV</a>
                    ";
        } else {
            // line 219
            yield " 
                        <a href=\"";
            // line 220
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy_policy");
            yield "\" class=\"text-black me-3 text-decoration-none\">Politique de confidentialité</a>
                        <a href=\"";
            // line 221
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgv");
            yield "\" class=\"text-black text-decoration-none\">CGV</a>
                    ";
        }
        // line 223
        yield "                </div>

                <!-- Copyright -->
                <div class=\"text-dark small\">
                    Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a> 
                    Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
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
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  546 => 223,  541 => 221,  537 => 220,  534 => 219,  529 => 217,  527 => 216,  517 => 209,  509 => 203,  496 => 202,  484 => 199,  471 => 198,  459 => 195,  447 => 186,  440 => 182,  435 => 180,  431 => 179,  420 => 171,  416 => 170,  409 => 167,  388 => 149,  377 => 141,  373 => 140,  369 => 138,  366 => 137,  344 => 118,  339 => 116,  327 => 107,  323 => 106,  319 => 104,  316 => 103,  314 => 102,  301 => 91,  288 => 90,  258 => 67,  244 => 56,  238 => 52,  236 => 51,  224 => 42,  220 => 41,  216 => 40,  212 => 39,  208 => 38,  199 => 33,  186 => 32,  172 => 28,  166 => 25,  160 => 22,  156 => 21,  141 => 10,  128 => 9,  105 => 5,  91 => 233,  89 => 202,  86 => 201,  84 => 198,  81 => 197,  79 => 90,  74 => 87,  72 => 32,  69 => 31,  67 => 9,  60 => 5,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
      
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
                <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap\" rel=\"stylesheet\"> 

        <!-- Icon Font Stylesheet -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\"/>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

        <!-- Libraries Stylesheet -->
        <link href=\"{{ asset('lib/lightbox/css/lightbox.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">

        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

        <!-- Template Stylesheet -->
       <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
           
           <!-- JavaScript Libraries -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
            <script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
            <script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
            <script src=\"{{ asset('lib/lightbox/js/lightbox.min.js') }}\"></script>
            <script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>

            <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
            <script src=\"https://js.stripe.com/v3/\"></script>
           


            <!-- Template Javascript -->
            <script>
            {% if app.session.flashbag.has('success') %}
                setTimeout(function() {
                    // Afficher un pop-up personnalisé avec SweetAlert2
                    Swal.fire({
                        title: 'Succès!',
                        text: \"{{ app.session.flashbag.get('success')[0] }}\",  // Message de succès
                        icon: 'success',  // Icône de succès
                        confirmButtonText: 'Ok',  // Texte du bouton
                        timer: 2000,  // Délai avant que le pop-up disparaisse (en ms)
                        showConfirmButton: true,  // Affiche le bouton de confirmation
                        customClass: {
                            popup: 'my-popup'  // Classe CSS personnalisée pour personnaliser le style
                        }
                    });
                }, 500);
            {% endif %}
            </script>
            <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>

            <script>
                \$(document).ready(function () {
                    \$('.testimonial-carousel').owlCarousel({
                        items: 2,
                        loop: true,
                        margin: 30,
                        nav: true,
                        dots: false,
                        autoplay: true,
                        autoplayTimeout: 5000,
                        autoplayHoverPause: true
                    });
                });
            </script>
  
        {% endblock %}

    </head>
    <body>
        {% block header %}
       
        <!-- Navbar start -->
        <div class=\"container-fluid fixed-top\">
            <div class=\"container topbar bg-primary d-none d-lg-block\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"top-info ps-2\">
                        <small class=\"me-3\"><i class=\"fas fa-map-marker-alt me-2 text-secondary\"></i> <a href=\"#\" class=\"text-white\">186 Boulevard Gambetta, 59200 Tourcoing</a></small>
                        <small class=\"me-3\"><i class=\"fas fa-phone me-2 text-secondary\"></i><a href=\"#\" class=\"text-white\">09 54 80 42 35</a></small>
                    </div>
                </div>
            </div>
            {% if app.user %}
                {% if is_granted('ROLE_ADMIN') %}
                    <div class=\"container px-0\">
                        <nav class=\"navbar navbar-light bg-white navbar-expand-xl\">
                            <a href=\"{{ path('app_index') }}\" class=\"navbar-brand d-flex align-items-center\">
                            <img src=\"{{ asset('img/logo-bg.png') }}\" class=\"img-fluid\" style=\"max-width: 150px; height: auto;\" alt=\"Logo\">
                            </a>

                            <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                                <span class=\"fa fa-bars text-primary\"></span>
                            </button>
                            <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                                <div class=\"navbar-nav mx-auto\">
                                    <a href=\"\" class=\"nav-item nav-link \">Catégories</a>
                                    <a href=\"{{ path('app_produits') }}\" class=\"nav-item nav-link\">Produits</a>
                                    <a href=\"\" class=\"nav-item nav-link\">Promos</a>
                                    <a href=\"{{ path('app_commandes_index') }}\" class=\"nav-item nav-link\">Commandes</a>
                                    <a href=\"\" class=\"nav-item nav-link\">Comptes</a>
                                </div>
                                <div class=\"d-flex m-3 me-5\">
                                    <div class=\"dropdown my-auto\">
                                        <a href=\"#\" id=\"userDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"fas fa-user fa-2x\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu w-auto\" aria-labelledby=\"userDropdown\" >
                                            <li><a class=\"dropdown-item\" href=\"#\">Informations</a></li>
                                            <li><hr class=\"dropdown-divider\"></li>
                                            <li><a class=\"dropdown-item text-danger\" href=\"#\">Se déconnecter</a></li>
                                        </ul>
                                    </div>
                                </div>   
                            </div>
                        </nav>
                    </div>
                {% endif %}
                 {% if is_granted('ROLE_EMPLOYE') %}
                    <div class=\"container px-0\">
                        <nav class=\"navbar navbar-light bg-white navbar-expand-xl\">
                            <a href=\"{{ path('app_index') }}\" class=\"navbar-brand d-flex align-items-center\">
                            <img src=\"{{ asset('img/logo-bg.png') }}\" class=\"img-fluid\" style=\"max-width: 150px; height: auto;\" alt=\"Logo\">
                            </a>

                            <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                                <span class=\"fa fa-bars text-primary\"></span>
                            </button>
                            <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                                <div class=\"navbar-nav mx-auto\">
                                    <a href=\"{{ path('app_commandes_index') }}\" class=\"nav-item nav-link\">Commandes</a>
                                </div>
                                 <div class=\"d-flex m-3 me-5\">
                                    <div class=\"dropdown my-auto\">
                                        <a href=\"#\" id=\"userDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"fas fa-user fa-2x\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu w-auto\" aria-labelledby=\"userDropdown\" >
                                            <li><a class=\"dropdown-item\" href=\"#\">Informations</a></li>
                                            <li><hr class=\"dropdown-divider\"></li>
                                            <li><a class=\"dropdown-item text-danger\" href=\"#\">Se déconnecter</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                {% endif %}
            {% else %}   
                <div class=\"container px-0\">
                    <nav class=\"navbar navbar-light bg-white navbar-expand-xl\">
                        <a href=\"{{ path('app_index') }}\" class=\"navbar-brand d-flex align-items-center\">
                        <img src=\"{{ asset('img/logo-bg.png') }}\" class=\"img-fluid\" style=\"max-width: 150px; height: auto;\" alt=\"Logo\">
                        </a>

                        <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                            <span class=\"fa fa-bars text-primary\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                            <div class=\"navbar-nav mx-auto\">
                                <a href=\"{{ path('app_index') }}\" class=\"nav-item nav-link active\">Accueil</a>
                                <a href=\"{{ path('app_produit_index') }}\" class=\"nav-item nav-link\">Produits</a>
                                <a href=\"\" class=\"nav-item nav-link\">Promos</a>
                                <a href=\"{{ path('app_contact') }}\" class=\"nav-item nav-link\">Contact</a>
                            </div>
                            <div class=\"d-flex m-3 me-0\">
                                <button class=\"btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search text-primary\"></i></button>
                                <a href=\"{{ path('app_panier') }}\" class=\"position-relative me-4 my-auto\">
                                    <i class=\"fa fa-shopping-bag fa-2x\"></i>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        {% endif %}
        <div class=\"container-fluid py-5 mb-4 \">
        {% endblock %}

        {% block body %}
        
        {% endblock %}

        {% block footer %}
        </div>
        <div class=\"container-fluid bg-light py-3\">
            <div class=\"container-fluid bg-light py-3\">
            <div class=\"container d-flex flex-column align-items-start\">
                <!-- Section Langue -->
                <div class=\"d-flex align-items-center mb-2\">
                    <img src=\"{{ asset('img/france.png') }}\" alt=\"FR\" style=\"width: 20px; height: 15px;\" class=\"me-2\">
                    <span class=\"text-black\">FR/fr</span>
                </div>

                <!-- Liens -->
                <div class=\"d-flex mb-2\">
                    <a href=\"#\" class=\"text-black me-3 text-decoration-none\">PrèsShop</a>
                    {% if is_granted('ROLE_ADMIN') %}
                        <a href=\"#\" class=\"text-black me-3 text-decoration-none\">Politique de confidentialité</a>
                        <a href=\"#\" class=\"text-black text-decoration-none\">CGV</a>
                    {% else %} 
                        <a href=\"{{ path('privacy_policy') }}\" class=\"text-black me-3 text-decoration-none\">Politique de confidentialité</a>
                        <a href=\"{{ path('cgv') }}\" class=\"text-black text-decoration-none\">CGV</a>
                    {% endif %}
                </div>

                <!-- Copyright -->
                <div class=\"text-dark small\">
                    Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a> 
                    Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                </div>
            </div>
        </div>
        {% endblock %}

    </body>
</html>
", "base.html.twig", "C:\\Users\\Utilisateur\\Documents\\GitHub\\2024_M2_PRO-03_GR12\\templates\\base.html.twig");
    }
}
