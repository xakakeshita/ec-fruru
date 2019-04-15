<?php

/* __string_template__99bbbf0586699a2073dd995d7bf3821170d95f5cb93add4e501f64c0716394a7 */
class __TwigTemplate_9eba5248c6cc6f7398c303118093b55ca195807ee2b24694bf603ce5455ec43d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        echo "
<div class=\"ec-topicRole\">
    <div class=\"ec-role\">
        <div class=\"ec-secHeading\">
            <span class=\"ec-secHeading__en\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TOPICS"), "html", null, true);
        echo "</span>
            <span class=\"ec-secHeading__line\"></span>
            <span class=\"ec-secHeading__ja\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("特集"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"ec-topicRole__list\">
            <div class=\"ec-topicRole__listItem\">
                <a href=\"";
        // line 21
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=1\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_bnr01.jpg"), "html", null, true);
        echo "\">
                </a>
                <p class=\"ec-topicRole__listItemTitle\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("濃厚なのにアイスよりヘルシー!! ジェラート特集"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"ec-topicRole__listItem\">
                <a href=\"";
        // line 27
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=5\">
                    <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_bnr02.jpg"), "html", null, true);
        echo "\">
                </a>
                <p class=\"ec-topicRole__listItemTitle\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("サクサク食感が魅力!! コーンアイス特集"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__99bbbf0586699a2073dd995d7bf3821170d95f5cb93add4e501f64c0716394a7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 30,  60 => 28,  56 => 27,  50 => 24,  45 => 22,  41 => 21,  34 => 17,  29 => 15,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__99bbbf0586699a2073dd995d7bf3821170d95f5cb93add4e501f64c0716394a7", "");
    }
}
