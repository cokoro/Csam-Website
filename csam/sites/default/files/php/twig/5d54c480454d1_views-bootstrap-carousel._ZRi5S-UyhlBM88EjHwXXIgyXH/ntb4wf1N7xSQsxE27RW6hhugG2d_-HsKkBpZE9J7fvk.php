<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/views_bootstrap/templates/views-bootstrap-carousel.html.twig */
class __TwigTemplate_a490155b91a54a0fb9bff7f5c88cbfb8b846bb25f5c70a6b4591bdb24050d882 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 25, "for" => 31, "set" => 32];
        $filters = ["escape" => 23, "join" => 33, "t" => 65];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'join', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 22
        echo "
<div id=\"";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
        echo "\" class=\"carousel ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["effect"] ?? null)), "html", null, true);
        echo "\"
    data-interval=\"";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["interval"] ?? null)), "html", null, true);
        echo "\"
    ";
        // line 25
        if (($context["ride"] ?? null)) {
            echo " data-ride=\"carousel\" ";
        }
        // line 26
        echo "    data-pause=\"";
        if (($context["pause"] ?? null)) {
            echo "hover";
        } else {
            echo "false";
        }
        echo "\"
>
  ";
        // line 29
        echo "  ";
        if (($context["indicators"] ?? null)) {
            // line 30
            echo "  <ol class=\"carousel-indicators\">
      ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                // line 32
                echo "          ";
                $context["indicator_classes"] = [0 => (($this->getAttribute($context["loop"], "first", [])) ? ("active") : (""))];
                // line 33
                echo "          <li class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["indicator_classes"] ?? null)), " "), "html", null, true);
                echo "\" data-target=\"#";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
                echo "\" data-slide-to=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                echo "\"></li>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  </ol>
  ";
        }
        // line 37
        echo "
  ";
        // line 39
        echo "  <div class=\"carousel-inner\">
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 41
            echo "        ";
            $context["row_classes"] = [0 => "carousel-item", 1 => (($this->getAttribute($context["loop"], "first", [])) ? ("active") : (""))];
            // line 42
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["row_classes"] ?? null)), " "), "html", null, true);
            echo "\">
        ";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "image", [])), "html", null, true);
            echo "
        ";
            // line 44
            if (($this->getAttribute($context["row"], "title", []) || $this->getAttribute($context["row"], "description", []))) {
                // line 45
                echo "            ";
                if (($context["use_caption"] ?? null)) {
                    // line 46
                    echo "            <div class=\"carousel-caption d-none d-md-block\">
            ";
                }
                // line 48
                echo "            ";
                if ($this->getAttribute($context["row"], "title", [])) {
                    // line 49
                    echo "                <h3>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "title", [])), "html", null, true);
                    echo "</h3>
            ";
                }
                // line 51
                echo "            ";
                if ($this->getAttribute($context["row"], "description", [])) {
                    // line 52
                    echo "                <p>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "description", [])), "html", null, true);
                    echo "</p>
            ";
                }
                // line 54
                echo "            ";
                if (($context["use_caption"] ?? null)) {
                    // line 55
                    echo "            </div>
            ";
                }
                // line 57
                echo "        ";
            }
            // line 58
            echo "        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "  </div>
  ";
        // line 62
        echo "  ";
        if (($context["navigation"] ?? null)) {
            // line 63
            echo "    <a class=\"carousel-control-prev\" href=\"#";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
            echo "\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">";
            // line 65
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous"));
            echo "</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
            echo "\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next"));
            echo "</span>
    </a>
  ";
        }
        // line 72
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/views_bootstrap/templates/views-bootstrap-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 72,  242 => 69,  237 => 67,  232 => 65,  226 => 63,  223 => 62,  220 => 60,  205 => 58,  202 => 57,  198 => 55,  195 => 54,  189 => 52,  186 => 51,  180 => 49,  177 => 48,  173 => 46,  170 => 45,  168 => 44,  164 => 43,  159 => 42,  156 => 41,  139 => 40,  136 => 39,  133 => 37,  129 => 35,  108 => 33,  105 => 32,  88 => 31,  85 => 30,  82 => 29,  72 => 26,  68 => 25,  64 => 24,  58 => 23,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/views_bootstrap/templates/views-bootstrap-carousel.html.twig", "D:\\env-website\\csam\\modules\\views_bootstrap\\templates\\views-bootstrap-carousel.html.twig");
    }
}
