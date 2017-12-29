# CardWidget
- Add the popular UI pattern of a Card to your Magento frontend with a CMS widget.
- Uses a graphical image upload representation on the Magento Admin panel with the [Staempfli_WidgetExtraFields](https://github.com/staempfli/magento2-module-widget-extra-fields) Magento2 community extension. Alternativly, you could create your own method of uploading images as described in the [Atwix post](https://www.atwix.com/magento-2/add-image-chooser-to-widget/).

## Installation
- This module requires [Staempfli_WidgetExtraFields](https://github.com/staempfli/magento2-module-widget-extra-fields), it must be installed first.
- Clone or download this repository into your magento instance's app/code directory.
- Run `php bin/magento module:enable Rossmc/CardWidget`
- Run `php bin/magento cache:flush`
- Run `php bin/magento setup:upgrade`

## Usage
- Follow the normal processes for adding widgets as described in the [Magento User Guide](http://docs.magento.com/m2/ce/user_guide/cms/content-elements.html)
- Select *UI Card Widget* as the widget type.
- Once added it will appear on the frontend of your store.

[![ui-card-widget-demo.png](https://s14.postimg.org/z78hk20xd/ui-card-widget-demo.png)](https://postimg.org/image/fcmfxxlpp/)
