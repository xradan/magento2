<?php
namespace Magento\Catalog\Helper\Product\View;

/**
 * Interceptor class for @see \Magento\Catalog\Helper\Product\View
 */
class Interceptor extends \Magento\Catalog\Helper\Product\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Catalog\Model\Session $catalogSession, \Magento\Catalog\Model\Design $catalogDesign, \Magento\Catalog\Helper\Product $catalogProduct, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\CatalogUrlRewrite\Model\CategoryUrlPathGenerator $categoryUrlPathGenerator, array $messageGroups = [], ?\Magento\Framework\Stdlib\StringUtils $string = null)
    {
        $this->___init();
        parent::__construct($context, $catalogSession, $catalogDesign, $catalogProduct, $coreRegistry, $messageManager, $categoryUrlPathGenerator, $messageGroups, $string);
    }

    /**
     * {@inheritdoc}
     */
    public function initProductLayout(\Magento\Framework\View\Result\Page $resultPage, $product, $params = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initProductLayout');
        if (!$pluginInfo) {
            return parent::initProductLayout($resultPage, $product, $params);
        } else {
            return $this->___callPlugins('initProductLayout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareAndRender(\Magento\Framework\View\Result\Page $resultPage, $productId, $controller, $params = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareAndRender');
        if (!$pluginInfo) {
            return parent::prepareAndRender($resultPage, $productId, $controller, $params);
        } else {
            return $this->___callPlugins('prepareAndRender', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isModuleOutputEnabled($moduleName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isModuleOutputEnabled');
        if (!$pluginInfo) {
            return parent::isModuleOutputEnabled($moduleName);
        } else {
            return $this->___callPlugins('isModuleOutputEnabled', func_get_args(), $pluginInfo);
        }
    }
}
