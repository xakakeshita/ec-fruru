<?php

/* __string_template__1bd142511cdb2e139b808a7b5c27043e2c1a08138a1a3ca3dcc5872d272b7135 */
class __TwigTemplate_c9f28780503b79227ae2822255f9a19b1dc79240856094765abeeb44a71a52b8 extends Twig_Template
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
<div class=\"ec-role\">
    <div class=\"ec-newItemRole\">
        <div class=\"ec-newItemRole__list\">
            <div class=\"ec-newItemRole__listItem\">
                <div class=\"ec-newItemRole__listItemHeading ec-secHeading--tandem\">
                    <span class=\"ec-secHeading__en\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("NEW ITEM"), "html", null, true);
        echo "</span>
                    <span class=\"ec-secHeading__line\"></span>
                    <span class=\"ec-secHeading__ja\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新着商品"), "html", null, true);
        echo "</span>
                    <a class=\"ec-inlineBtn--top\" href=\"";
        // line 20
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"";
        // line 24
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "1"]);
        echo "\">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cube-1.png", "save_image"), "html", null, true);
        echo "\">
                    <p class=\"ec-newItemRole__listItemTitle\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("彩のジェラート\"CUBE\""), "html", null, true);
        echo "</p>
                    <p class=\"ec-newItemRole__listItemPrice\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥1,200(税込)"), "html", null, true);
        echo "</p>
                </a>
            </div>
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"";
        // line 31
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "2"]);
        echo "\">
                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sand-1.png", "save_image"), "html", null, true);
        echo "\">
                    <p class=\"ec-newItemRole__listItemTitle\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("チェリーアイスサンド"), "html", null, true);
        echo "</p>
                    <p class=\"ec-newItemRole__listItemPrice\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                </a>
            </div>
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"";
        // line 38
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "1"]);
        echo "\">
                    <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
        echo "\">
                    <p class=\"ec-newItemRole__listItemTitle\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("彩のジェラート\"CUBE\" NEO"), "html", null, true);
        echo "</p>
                    <p class=\"ec-newItemRole__listItemPrice\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥600(税込)"), "html", null, true);
        echo "</p>
                </a>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__1bd142511cdb2e139b808a7b5c27043e2c1a08138a1a3ca3dcc5872d272b7135";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 41,  95 => 40,  91 => 39,  87 => 38,  80 => 34,  76 => 33,  72 => 32,  68 => 31,  61 => 27,  57 => 26,  53 => 25,  49 => 24,  40 => 20,  36 => 19,  31 => 17,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__1bd142511cdb2e139b808a7b5c27043e2c1a08138a1a3ca3dcc5872d272b7135", "");
    }
}
